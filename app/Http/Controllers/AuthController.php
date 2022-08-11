<?php

namespace App\Http\Controllers;

use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session as FacadesSession;

class AuthController extends Controller
{
    public function login()
    {
        return view('auth.login');
    }

    public function loginUser(LoginRequest $request)
    {
        $validatedData = $request->validated();
        $user = User::where('email', $validatedData['email'])->first();
        if (!Hash::check($validatedData['password'], $user->password)) {
            return back()->with('failed', 'The password is incorrect.');
        }
        $request->session()->put('loginId', $user->id);
        return redirect('home');
    }

    public function home()
    {
        if (FacadesSession::has('loginId')) {
            $data = User::find(session('loginId'));
            return view('home', compact('data'));
        }
        return redirect('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function storeUser(RegisterRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['password'] = Hash::make($validatedData['password']);
        $result =  User::create($validatedData);
        if ($result) {
            return back()->with('success', 'You have registerd!');
        }
        return back()->with('failed', 'Something is wrong, try again!');
    }
}
