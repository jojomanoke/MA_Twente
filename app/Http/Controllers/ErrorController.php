<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ErrorController extends Controller
{
    Public function overview(){

        return View('errorOverview');
    }

    public function create(){

        return View('errorCreate');
    }

    public function edit(){

        return View('errorEdit');
    }
}
