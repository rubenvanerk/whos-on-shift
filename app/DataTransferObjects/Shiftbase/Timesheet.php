<?php

namespace App\DataTransferObjects\Shiftbase;

use Carbon\Carbon;

readonly class Timesheet
{
    public function __construct(
        public string $userId,
        public string $shiftId,
        public ?Carbon $clockedIn,
        public ?Carbon $clockedOut
    )
    {}
}