<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeGNRController extends Controller
{
    public function welcome()
    {
        return view("welcome");
    }
}