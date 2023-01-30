<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Admin;
use Auth;
use Session;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }
}
