<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class ErrorController extends Controller
{
    Public function overview(){

        return View('errorOverview');
    }

    public function create(){

        $user = Auth::user();

        return View('errorCreate' , [ 'user' => $user]);
    }

    public function edit(){

        return View('errorEdit');
    }
}
