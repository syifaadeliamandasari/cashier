<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class usersController extends Controller
{
    public function users()
    {
    return view('navbaradmin.users');
    }
}
