<?php

namespace App\Http\Controllers;

use App\Models\Users;
use App\Models\Articles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class UsersController extends Controller
{
    public function login_form()
    {
        return view('login');
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            "username"=> "required|username",
            "password"=> "required"
        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('Dashboard/index');
        }
        return back()->with("loginError", "login failed!");
    }

    public function login_action(Request $request)
    {
        $users = Users::where('username', $request->username)->first();

        if ($users == null) {
            return redirect()->back()->with('error', 'username tidak ditemukan');
        }

        $db_password = $users->password;
        $hashed_password = Hash::check($request->password, $db_password);

        if ($hashed_password) {
            $users->token = Str::random(20);
            $users->save();
            $request->session()->put('token', $users->token);
            return to_route('dashboard_index');
        } else {
            return redirect()->back()->with('error', 'maaf data anda tidak sesuai');
        }
    }

    public function dashboard_index()
    {
        if (Session::has('token')) {
            $users = Users::where('token', Session::get('token'))->first();
            $articles = Articles::get();

            return view('Dashboard/index', [
                "title" => "DASHBOARD ADMIN",
                "users" => $users,
                "articles" => $articles
            ]);
        } else {
            return redirect()->back();
        }
    }

    public function dashboard_logout(Request $request)
    {
        Users::where('token', $request->token)->update([
            'token' => NULL
        ]);

        Session::pull('token');
        return to_route('home');
    }

    public function article_delete_action(Request $request)
    {
        Articles::find($request->id)->delete();
        return redirect()->back()->with('message', 'artikel berhasil dihapus');
    }

    public function article_add_action(Request $request)
    {

        $request->validate([
            'title' => ['required', 'max:255', 'min:10'],
            'description' => ['required', 'max:255', 'min:10'],
            'tag' => ['required','max:255', 'min:5'],
        ]);

        $created = Articles::create([
            "title" => $request->title,
            "description" => $request->description,
            "tag" => $request->tag,
        ]);

        if ($created) {
            return redirect()->back()->with('message', 'artikel berhasil dibuat');
        } else {
            return redirect()->back()->with('message', 'artikel gagal dibuat');
        }
    }
    public function register_form()
    {
        return view('login');
    }

    public function article_edit_action(Request $request)

        {
            return view('articles.edit', compact('article'));
        }

}