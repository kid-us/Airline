<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Clerk;
use App\Models\Manager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Auth.adminLogin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'email'=>'required|email',
            'password'=>'required',
        ]);

        $credentials = $request->only('email', 'password');
        if(!Auth::guard('admin')->attempt($credentials)){
            return back()->with('status', 'Email or Password is invalid');
        }

        return redirect()->route('admin')->with(session('admin'));




        // if($request['user-type'] == "admin"){
        //     $isUser = Admin::all();
        //         foreach ($isUser as $admin) {
        //             if($admin->password == $request['password']){
        //                 return view('Admin.admin', ['admin'=>$admin->username]);
        //             }else{
        //                 return back()->with('status', 'Email or Password is invalid');
        //             }
        //         }
        // }else if($request['user-type'] == "manager"){
        //     $isUser = Manager::all();
        //         foreach ($isUser as $manager) {
        //             if($manager->password == $request['password']){
        //                 // return view('Manager.manager', ['manager'=>$manager->username]);
        //                 return redirect()->route('manager')->with('user', $manager->username);
        //             }else{
        //                 return back()->with('status', 'Email or Password is invalid');
        //             }
        //         }
        // }else{
        //     $isUser = Clerk::all();
        //     foreach($isUser as $clerk) {
        //         if($clerk->password == $request['password']){
        //             return view('Clerk.clerk', ['clerk' => $clerk->username]);
        //         }
        //     }
        // }
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
