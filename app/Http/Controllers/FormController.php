<?php

namespace App\Http\Controllers;

use App\Http\Requests\Form3Request;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function form1()
    {
        return view('forms.form1');
    }

    public function form1_data(Request $request)
    {
        $name = $request->input('name');
        return "Welcome $name";
    }

    public function form2()
    {
        return view('forms.form2');
    }

    public function form2_data(Request $request)
    {
        $name = $request->input('name');
        return "Welcome $name";
    }

    public function form3()
    {
        return view('forms.form3');
    }

    public function form3_data(Form3Request $request)
    {
        dd($request->validated());
        return "Welcome $request->name";
    }

    public function form4()
    {
        return view('forms.form4');
    }

    public function form4_data(Request $request)
    {
        if ($request->hasFile('image')) {
            $path =    $request->file('image')->store('uploads', 'custom');
        }

        return view('forms.form4_show', compact('path'));
    }
}
