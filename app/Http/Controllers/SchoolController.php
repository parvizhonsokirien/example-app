<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SchoolController extends Controller
{
    public function inschool()
    {
        $schools = School::all();
        dd ($schools);
    }
}
