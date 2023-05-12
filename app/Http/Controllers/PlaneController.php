<?php

namespace App\Http\Controllers;
use App\Models\Flight;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use PhpParser\Node\Stmt\Return_;

class PlaneController extends Controller
{
    public function findFlight(Request $request){
        if (request('trip-type') == 'One-way'){
            $this->validate($request, [
                'from' => 'required|min:5|max:255',
                'to' => 'required|min:6|max:255',
                'depart-date' => 'required',
            ]);

            $oneway = DB::table('flights')
                            ->where('origin', '=', $request['from'])
                            ->where('destination', '=', $request['to'])
                            ->where('departDate', '=', $request['depart-date'])
                            ->get();

            if( count($oneway) < 1 ){
                // return view('Layout.oneway', ['error' => 'There is no flight scheduled at this day Sorry!']) ;
                Session::flash('find-flights');
                return redirect('air');

            }else{
                // Session::flash("success","Payment successfully!");
                return view('Layout.oneway', ['flights' => $oneway]);
            }



        } elseif(request('trip-type') == 'Round-trip'){
            $this->validate($request, [
                'from' => 'required|min:5|max:255',
                'to' => 'required|min:6|max:255',
                'depart-date' => 'required',
                'return-date' => 'required'
            ]);

           $flights = DB::table('flights')
                            ->where('origin', '=', $request['from'])
                            ->where('destination', '=', $request['to'])
                            ->where('departDate', '=', $request['depart-date'])
                            ->get();

            $returns = DB::table('flights')
                            ->where('origin', '=', $request['to'])
                            ->where('destination', '=', $request['from'])
                            ->where('departDate', '=', $request['return-date'])
                            ->get();

            if(count($flights) <= 0 && (count($returns) <= 0)){
                return view('Layout.round-trip', ['error' => 'There is no flight scheduled at this day Sorry!']);
            }else if(count($flights) > 0 && (count($returns) <= 0)){
                return "There is  no return flight in given time";
            }else if (count($flights) <=0 && (count($returns) > 0 )){
                return "There is no flight in arrive schedule are there";
            }else{
                return view('Layout.round-trip', ['flights'=>$flights, 'returns'=>$returns]);
            }
        }

    }


    public function booking(Request $request){
        $this->validate($request, [
            'email' => 'required|min:15|string',
            'last-name' => 'required|min:5'
            ]);

    }
    public function status(Request $request){
        $this->validate($request, [
            'to' => 'required|min:4',
            'date' => 'required',
            'from' => 'required|min:4'
            ]);

            $select = DB::table('flights')
                            ->where('origin', '=', $request['from'])
                            ->where('destination', '=', $request['to'])
                            ->where('departDate', '=', $request['date'])
                            ->get();

                            if(count($select)>0){
                                return view('Layout.flight-info', ['flights'=>$select]);
                            }else{
                                Session::flash('flight-status');
                                return redirect('air');
                            }

        }

    public function checkIn(Request $request){
        $this->validate($request, [
            'ticket-no' => 'required|min:6',
            'last-name' => 'required|min:5'
            ]);

            $check = DB::table('reserves')
                    ->where('lastName', '=', $request['last-name'])
                    ->where('ticket', '=', $request['ticket-no'])
                    ->get();

                  if (count($check) == 1){
                    return view('Layout.check-in', ['reserve' => $check]);
                  }else{
                    Session::flash("check-in");
                    return redirect('air');
                  }
    }

    public function pick(Request $request){
        $this->validate($request, [
            'departure-airport' => 'required'
            ]);

            return $request['city-name'];
    }

    public function cancel(Request $request){
        $this->validate($request, [
            'ticket-no' => 'required|min:9',
        ]);

        DB::table('reserves')
            ->where('ticket-no', '=' , $request['ticket-no'])
            ->delete();
        return back()->with('success', 'Flight has been Canceled');
    }
}
