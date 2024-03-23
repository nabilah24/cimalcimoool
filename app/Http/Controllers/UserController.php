<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class UserController extends Controller
{

    public function register()
    {
        return view('register');
    }

    public function register_action(Request $request)
    {
        $request->validate([
            'name' => 'required|max:20',
            'username' => 'required|min:6|max:20|unique:users',
            'email' => 'required|email|unique:users',
            'phone' => 'required|string|min:12|max:13',
            'password' => 'required|min:6|max:8'
        ]);

        $user = new User([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'is_admin' => $request->is_admin ?? 0,
        ]);

        $user->save();

        return redirect('/login')->with('success', 'Daftar Akun Berhasil!! Selanjutnya Login');
    }

    public function login()
    {
        return view('login');
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ],
            [
                'email.required' => 'Email Wajib Diisi',
                'password.required' => 'Password Wajib Diisi',
            ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            return match (Auth::user()->role) {
                'admin' => redirect('dashboard'),
                'user' => redirect('home'),
            };
        }

        return redirect('login')->with('failed', 'Username Atau Password Yang Dimasukkan Tidak Sesuai');
    }

    //logout
    public function logout(){
        Auth::logout();
        return redirect('/')->with('success', 'Anda berhasil logout!!');
    }

    //FUNGSI LUPA PASSWORD
    public function showLinkRequestForm()
    {
         return view('forgot-password');
    }

    public function sendResetLinkEmail(Request $request)
    {
        set_time_limit(1000);
        $customeMessage = [
            'email.required'  => 'Email tidak boleh kosong',
            'email.email'       => 'Email tidak valid',
            'email.exists'      => 'Email tidak terdaftar di database',
        ];

        $request->validate(['email' => 'required|email|exists:users,email']);

        $data = [
            'email' => $request->email
        ];

        // $user = User::where('email', $request->email)->first();

        // $status = Password::sendResetLink(
        //     $request->only('email')
        //  );

        // return $status === Password::RESET_LINK_SENT
        //     ? back()->with('status', __($status))
        //     : back()->withErrors(['email' => __($status)]);
    }


        // if (Auth::attempt(['email' => $request->username, 'password' => $request->password])) {
        //     if (auth()->user()->is_admin == 1) {
        //         return redirect()->intended('/musik');
        //     } else {
        //         return redirect()->intended('/home');
        //     }
        // }

        // return back()->withErrors('Invalid username or password.');


}
