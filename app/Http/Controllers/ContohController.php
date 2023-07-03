<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContohController extends Controller
{
    public function index()
    {
        return view('index');
    }
    public function anggota()
    {
        return view('page.anggota');
    }
}
