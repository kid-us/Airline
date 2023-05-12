<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class TicketController extends Controller
{
    public function index(){
        $code = Session::get('code');
        $reserve = DB::table('reserves')
            ->where('passengerCode', '=', $code)
            ->get();

        return view("Layout.ticket", ['reserve' => $reserve]);
    }

    public function destroy(Request $request){
        $ticket = $request['ticket-no'];

        $delete = DB::table('reserves')
                    ->where('ticket', '=', $ticket)
                    ->delete();
        if ($delete){
            Session::flash('cancled');
            return redirect('/air');
        }
    }
}
