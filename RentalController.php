<?php

namespace App\Http\Controllers;

use App\Models\Cat;

class RentCon extends Controller
{
    public function getData()
    {
        $rent = Rental::all();
    }
}
