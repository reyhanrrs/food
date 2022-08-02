<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {

        $data = User::where('username', '=', $request->username)->first();

        if ($data->password === $request->password) {
            return redirect('');
        } else {
            return redirect('login');
        }
    }
}
