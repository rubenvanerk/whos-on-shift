<?php

namespace App\Services;

use App\DataTransferObjects\Shiftbase\User;
use App\Http\Integrations\Shiftbase\Requests\GetTimesheetRequest;
use App\Http\Integrations\Shiftbase\Requests\GetUserRequest;
use App\Http\Integrations\Shiftbase\ShiftbaseConnector;

class Shiftbase implements \App\Interfaces\Shiftbase
{
    public function __construct(
        private readonly string $token,
        private readonly ?string $baseUrl
    )
    {
    }

    private function connector(): ShiftbaseConnector
    {
        return new ShiftbaseConnector($this->token, $this->baseUrl);
    }

    public function getTimeSheet(string $id): \App\DataTransferObjects\Shiftbase\Timesheet
    {
        return $this->connector()->send(new GetTimesheetRequest($id))->dto();
    }

    public function getUser(string $id): User
    {
        return $this->connector()->send(new GetUserRequest($id))->dto();
    }
}