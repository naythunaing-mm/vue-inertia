<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;

class authController extends Controller
{
    public function login()
    {
        return Inertia::render('login');
    }
}
