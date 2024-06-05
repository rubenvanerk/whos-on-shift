<?php

namespace App\Http\Integrations\Shiftbase\Requests;

use App\DataTransferObjects\Shiftbase\User;
use Illuminate\Support\Facades\Cache;
use Saloon\CachePlugin\Contracts\Cacheable;
use Saloon\CachePlugin\Contracts\Driver;
use Saloon\CachePlugin\Drivers\LaravelCacheDriver;
use Saloon\CachePlugin\Traits\HasCaching;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

class GetUserRequest extends Request implements Cacheable
{
    use HasCaching;

    protected Method $method = Method::GET;

    public function __construct(protected readonly string $id)
    {}

    public function resolveEndpoint(): string
    {
        return '/users/'.$this->id;
    }

    public function createDtoFromResponse(Response $response): User
    {
        $data = $response->json('data.User');

        return new User(
            $data['first_name'],
            $data['last_name'],
            $data['avatar_150x200'],
            $data['email'],
            $data['phone_nr']
        );
    }

    public function resolveCacheDriver(): Driver
    {
        return new LaravelCacheDriver(Cache::store('file'));
    }

    public function cacheExpiryInSeconds(): int
    {
        return 3600; // one hour
    }
}
