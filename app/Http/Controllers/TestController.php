<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index()
    {
        dd('Auth -> OK');
    }

    public function adm()
    {
        dd('Admin -> OK');
    }
}
