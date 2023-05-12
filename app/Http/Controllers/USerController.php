<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class USerController extends Controller
{
    //
    public function login(Request $request){
        $this->validate($request, [
            'email' => 'required|min:10',
            'password' => 'required|min:6'
        ]);

        

    }
}
