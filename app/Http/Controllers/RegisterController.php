<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
class RegisterController extends Controller
{
    public function index()
    {
        return view("register/index" ,[
            "title" => "Register",
            "activate" => "register"
        ]);
    }

    public function store(Request $request)
    {
       $validateData = $request->validate([
            "username" => ["required", 'min:3', "max:30", "unique:users"],
            "password" => "required|min:6|max:30"
        ]);
        $validateData['password'] = Hash::make($validateData["password"]);

        Users::create($validateData);

        return redirect("/login")->with("succes", "Registration success");
    }
}