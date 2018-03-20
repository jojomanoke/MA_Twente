<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    Public function overview(){

    return view('overview');
    }

    public function create(){

    return view('create');
    }

    public function edit(){

    return view('edit');
    }
}
