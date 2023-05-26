<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        return view('skill');
    }

    public function skill(Request $request)
    {
        $data = [
            'nama' => $request->input('nama'),
            'email' => $request->input('email'),
            'lokasi' => $request->input('lokasi'),
            'jk' => $request->input('jk'),
            'skill' => $request->input('skill')
        ];
        return view('skill', compact('data'));
    }
}