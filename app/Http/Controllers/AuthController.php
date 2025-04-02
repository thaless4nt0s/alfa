<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    protected $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/app/dashboard');
        }

        return back()->withErrors([
            'email' => 'wrong user or password',
        ])->withInput();
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login')->with('success', 'Logged out successfully!');
    }

    // Registro
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        try {
            $data = $request->validate($this->user->rules());

            $data['password'] = bcrypt($data['password']);
            $user = $this->user->create($data);

            Auth::login($user);
            return redirect('/app/dashboard')->with('success', 'Usar has been saved successfully!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'An error has ocurred: ' . $e->getMessage());
        }
    }

}
