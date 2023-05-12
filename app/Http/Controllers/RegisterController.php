<?php

namespace App\Http\Controllers;

use App\Models\Clerk;
use App\Models\Manager;
use App\Models\Site;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
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

        if((request('account-owner') == "clerk")){
            $this->validate($request, [
                'clerk-username'=>'required|min:4',
                'clerk-email'=>'required|email',
                'clerk-password'=>'required|min:6',
                'clerk-confirm-password'=>'required'
            ]);

            $clerk = new Clerk();
                if(request('clerk-password') === request('clerk-confirm-password')){
                    $clerk->username = request('clerk-username');
                    $clerk->email = request('clerk-email');
                    $clerk->password = request('clerk-password');
                    $clerk->save();
                    return back()->with('status', 'Clerk account created created successfully');
                }else{
                }
                return back()->with('error', 'Password not Match');
        }else{
            $this->validate($request, [
                'manager-username'=>'required|min:4',
                'manager-email'=>'required|email',
                'manager-password'=>'required|min:6',
                'manager-confirm-password'=>'required'
            ]);
            $manager = new Manager();
            if(request('manager-password') === request('manager-confirm-password')){
                $manager->username = request('manager-username');
                $manager->email = request('manager-email');
                $manager->password = request('manager-password');
                $manager->save();
                return back()->with('status', 'Manager account created created successfully');
            }else{
                return back()->with('error', 'Password not Match');
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $slogan = request('slogan');
        if( isset($slogan)){
            $this->validate($request, [
                'slogan' => 'required|min:10|max:50'
            ]);

            try {
                Site::where('id', 1)->update(array('slogan' => $slogan));
                return back()->with('slogan-status', 'Slogan Updated');

            } catch (\Throwable $th) {
                return back()->with('slogan-error', 'Slogan not Updated');
            }
        }
        // else if(isset(request()))
    }

    /**
     * Update the specified resource in storage.`
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
    public function destroy(Request $request)
    {
        // $this->validate($request, [
        //     'origin' => 'required',
        //     'destination' => 'require',
        //     'depart-date' => 'required',
        //     'flight-type' => 'required'
        // ]);

        $from = $request['origin'];
        $to = $request['destination'];
        $flightNo = $request['flight-no'];
        $date = $request['depart-date'];
        $flightType = $request['flight-type'];


        // $delete = DB::

        $delete = DB::table('flights')
                    ->where('origin', '=', $from)
                    ->where('destination', '=', $to)
                    ->where('flightNo', '=', $flightNo)
                    ->where('departDate', '=', $date)
                    ->where('flightType', '=', $flightType)
                    ->delete();
        if ($delete){

            return back()->with('delete', 'Flight Deleted');
            // Session::flash('cancled');
            // return redirect('/air');
        }
    }
}
