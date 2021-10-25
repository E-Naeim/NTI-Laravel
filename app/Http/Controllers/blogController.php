<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogController extends Controller
{
    //
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
           
            "name"     => "required|regex:/^[a-zA-Z\s]*$/",
            "email"    => "required|email",
            "password" => "required|min:6",
            "address"  => "required|regex:/(^[A-Za-z0-9 ]+$)+/|min:10",
            "gender"   => "required",
            "link"     => "required|url",

         ]);


        dd('valid Data');
    }
}
