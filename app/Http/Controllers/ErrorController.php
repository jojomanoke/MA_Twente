<?php

namespace App\Http\Controllers;
use App\Error;
use Auth;
use Illuminate\Http\Request;

class ErrorController extends Controller
{
    Public function overview(){

        $errors = Error::all();

        return View('errorOverview', ['errors' => $errors]);
    }

    public function create(){

        $user = Auth::user();

        return View('errorCreate' , [ 'user' => $user]);
    }
    public function saveError(Request $request){

        $error = New Error();

        $error->user_id = Auth::user()->id;
        $error->priority_id = $request->input("inputPrioriteit");
        $error->result = $request->input("inputError");
        $error->type = $request->input("inputType");
        $error->solution = "Nog niet";
        $error->status_id = 1;

        $error->save();

        return redirect("/overview");
    }


    public function edit(){

        return View('errorEdit');
    }
}
