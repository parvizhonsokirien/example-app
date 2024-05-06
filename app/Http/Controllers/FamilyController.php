<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FamilyController extends Controller
{
    public function inde()
    {
        $familys = Family::all();
        dd ($familys);
    }
}
