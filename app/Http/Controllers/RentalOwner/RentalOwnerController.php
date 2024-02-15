<?php

namespace App\Http\Controllers\RentalOwner;

use App\Http\Controllers\Controller;

class RentalOwnerController extends Controller
{

    public function index()
    {
        return view('rental-owner.dashboard');
    }
}
