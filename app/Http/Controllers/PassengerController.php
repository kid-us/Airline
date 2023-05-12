<?php

namespace App\Http\Controllers;

use App\Models\Passenger;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class PassengerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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

        $token = $request['token-val'];
        $title = $request['title'];
        $fname = $request['fname'];
        $mname = $request['mname'];
        $lname = $request['lname'];
        $email = $request['email'];
        $phone = $request['phone'];
        $gender = $request['gender'];
        $dob = $request['dob'];
        $travel = $request['travel'];
        $passengerType = $request['passenger-type'];

        $row = count($fname);
        for($i = 0; $i < $row; $i++){
            $dataSave =[
                'tokenID' => $token[$i],
                'title' => $title[$i],
                'firstName' => $fname[$i],
                'middleName' => $mname[$i],
                'lastName' => $lname[$i],
                'gender' => $gender[$i],
                'dob' => $dob[$i],
                'email' => $email[$i],
                'phone' => $phone[$i],
                'passenger' => $passengerType[$i],
                'travel' => $travel,
                'pay' => 0,
                'ticket' => 0
            ];
            DB::table('passengers')->insert($dataSave);
        }
        Session::put("token", $token);
        return redirect('/payment');
        // return "success";
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
