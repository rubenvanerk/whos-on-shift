<?php

namespace App\Http\Controllers;

use App\Interfaces\Shiftbase;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke(Request $request, Shiftbase $shiftbase)
    {
        $timesheet = $shiftbase->getTimesheet('162713'); // here there should be created a way to get the 'current' timesheet
        $user = $shiftbase->getUser($timesheet->userId);

        return view('home', compact('user'));
    }
}
