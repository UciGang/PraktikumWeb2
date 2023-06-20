<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    // 1st property named index
    public function index()
    {
        return view('admin.dashboard');

    }
    public function logout()
    {
        return view('home');

    }
}