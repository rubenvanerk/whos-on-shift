<?php

namespace App\Interfaces;

use App\DataTransferObjects\Shiftbase\Timesheet;
use App\DataTransferObjects\Shiftbase\User;

interface Shiftbase
{
    public function getTimesheet(string $id): Timesheet;

    public function getUser(string $id): User;
}
