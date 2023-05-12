<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Clerk;
use Illuminate\Http\Request;

class ClerkController extends Controller
{
    public function showLogin(){
        return view('Auth.clerkLogin');
    }

    public function login(Request $request){
        $this->validate($request, [
            'email' => 'required|min:14',
            'password' => 'required|min:6'
        ]);

        $clerk = Clerk::where('email', $request['email'])->first();
        if(!$clerk) return back()->with('error', "Invalid Email or Password");
        if ($clerk->password == $request['password']){
            session()->put('clerk_logged', true);
            session(['user' => $clerk->username]);
            return redirect('clerk/profile');
        }

    }

    public function profile(){
        return view('Clerk.profile');
    }

    public function logout() {
        session()->remove('user');
        session()->remove('clerk_logged');

        return redirect('clerk/login');
    }
}
