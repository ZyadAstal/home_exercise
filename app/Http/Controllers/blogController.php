<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogController extends Controller
{

    function index()
    {
        return view('blog.index');
    }

    function about()
    {
        return view('blog.about');
    }

    function post()
    {
        return view('blog.post');
    }

    function contact()
    {
        return view('blog.contact');
    }

    function contact_data(Request $request)
    {
        $request->validate([
            'name' => ['required', 'min:4', 'max:30'],
            'email' => 'required|email',
            'phone' => 'required',
            'cv' => 'required',
            'massage' => ['required'],
        ]);

        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $image = $request->cv;
        $massage = $request->massage;

        $cv_name = str_replace(' ', '-', strtolower($request->name));
        $ex = $request->file('cv')->getClientOriginalExtension();

        $cv_name = $cv_name . '-cv-' . date('d-m-Y') . '-' . time() . '.' . $ex;

        $request->file('cv')->move(public_path('uploaded_cv'), $cv_name);
        $info = $request->except('_token', 'cv');
        $info['cv'] = $cv_name;
        return view('blog.contact_data', compact('name', 'email', 'phone', 'massage'));
    }
}
