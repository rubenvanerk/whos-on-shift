<?php

namespace App\Http\Integrations\Shiftbase\Requests;

use App\DataTransferObjects\Shiftbase\Timesheet;
use Carbon\Carbon;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;

class GetTimesheetRequest extends Request
{
    protected Method $method = Method::GET;

    public function __construct(protected readonly string $id)
    {
    }

    public function resolveEndpoint(): string
    {
        return '/timesheets/'.$this->id;
    }

    public function createDtoFromResponse(Response $response): Timesheet
    {
        $data = $response->json('data.Timesheet');

        return new Timesheet(
            $data['user_id'],
            $data['shift_id'],
            $data['clocked_in'] ? new Carbon($data['clocked_in']) : null,
            $data['clocked_out'] ? new Carbon($data['clocked_out']) : null
        );
    }
}
