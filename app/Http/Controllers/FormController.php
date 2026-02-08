<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form1(){
        return view('forms.form1');
    }

    public function form1_data(Request $request){
        $name = $request->input('name');
        return "Welcome $name";
    }
}
