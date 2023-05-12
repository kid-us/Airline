<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;

class CreateController extends Controller
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
        $this->validate($request, [
            'origin' => 'required|min:5|max:255',
            'destination' => 'required|min:5|max:255',
            // 'return-date' => 'required',
            'depart-date' => 'required',
            'flight-no' => 'required|min:5',
            'terminal' => 'required|min:1',
            'aircraft' => 'required|min:7',
            'duration' => 'required|',
            'flight-type' => 'required|',
            'arrive-time' => 'required',
            'depart-time' => 'required',
            'seats' => 'required|min:2|max:3',
            'first-price' => 'required|min:3',
            'eco-price' => 'required|min:3',
            'business-price' => 'required|min:3'
        ]);

        $flight = new Flight();
        $flight->origin = request('origin');
        $flight->destination = request('destination');
        $flight->departDate = request('depart-date');
        // $flight->returnDate = request('return-date');
        $flight->terminal = request('terminal');
        $flight->flightNo = request('flight-no');
        $flight->flightTime = request('duration');
        $flight->aircraft = request('aircraft');
        $flight->flightStop = request('flight-stop');
        $flight->flightType = request('flight-type');
        $flight->departTime = request('depart-time');
        $flight->returnTime = request('arrive-time');
        $flight->economyPrice = request('eco-price');
        $flight->firstPrice = request('first-price');
        $flight->businessPrice = request('business-price');
        $flight->seats = request('seats');
        $flight->reserved = 0;
        $flight->save();

        return back()->with('schedule-status', 'Flight scheduled successfully');
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
