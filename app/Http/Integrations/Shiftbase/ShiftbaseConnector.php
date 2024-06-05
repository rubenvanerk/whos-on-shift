<?php

namespace App\Http\Integrations\Shiftbase;

use Saloon\Contracts\Authenticator;
use Saloon\Http\Auth\TokenAuthenticator;
use Saloon\Http\Connector;
use Saloon\Http\Response;
use Saloon\Traits\Plugins\AcceptsJson;
use Saloon\Traits\Plugins\AlwaysThrowOnErrors;

class ShiftbaseConnector extends Connector
{
    use AcceptsJson, AlwaysThrowOnErrors;

    public function __construct(
        protected readonly string $token,
        protected readonly ?string $baseUrl,
    )
    {
    }

    public function resolveBaseUrl(): string
    {
        return $this->baseUrl ?? 'https://api.shiftbase.com/api';
    }

    protected function defaultAuth(): ?Authenticator
    {
        return new TokenAuthenticator($this->token, 'USER');
    }
}
