<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    public function index()
    {
        return view('input');
    }

    public function output(Request $request)
    {
        $data = [
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'jenis_kelamin' => $request->input('jenis_kelamin')
        ];
        return view('output', compact('data'));
    }
}