<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Stripe;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Stripe\Stripe as StripeStripe;
use Twilio\Rest\Client;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $token = Session::get('token');
        $payment = DB::table('passengers')
                        ->where('tokenID', '=', $token)
                        ->get();
        if(count($payment) <= 0 ){
            return "404";
        }else{
            return view('Layout.payPal',['passenger' => $payment] );
        }
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
        $fname = $request['fname'];
        $mname = $request['mname'];
        $lname = $request['lname'];
        $from = $request['from'];
        $to = $request['to'];
        // $date = date('Y-M-d', strtotime($request['depart-date']));
        $class = $request['class'];
        $flightNo = $request['flightNo'];
        $token =  $request['token'];
        $phone = $request['phone'];
        $calendarDate = $request['date'];
        $terminal = $request['terminal'];
        $departAt = $request['departAt'];
        $arriveAt = $request['arriveAt'];

        $price = $request['cost'];

        Stripe\Stripe::setApiKey("sk_test_51KmARWC1vnRWUUD4a2BAo6BosfnhTGsWUv75lJ9K0sjQamVwUkNNWbpXB7I08nsL7fePfpM2BhKD2LgxcVejKG9p008DeD4eza");
        $result = Stripe\Charge::create([
        'amount' => $price,
        'currency' => 'usd',
        'source' => $request['token'],
        'description' => "flights"
        ]);

        $stripe = new \Stripe\StripeClient("sk_test_51KmARWC1vnRWUUD4a2BAo6BosfnhTGsWUv75lJ9K0sjQamVwUkNNWbpXB7I08nsL7fePfpM2BhKD2LgxcVejKG9p008DeD4eza");
$charge = $stripe->charges->create([
  'amount' => 2000,
  'currency' => 'usd',
  'source' => 'tok_mastercard', // obtained with Stripe.js
  'description' => 'My First Test Charge (created for API docs at https://www.stripe.com/docs/api)'
], [
  'idempotency_key' => 'N3GxPlBSG4i5Wf0e'
]);
        // if($result){
            $row = count($fname);

            $passengerCode = strtoupper(Str::random(4));
            for($i = 0; $i < $row; $i++){
                $ticket =strtoupper( "ET-". Str::random(6));

                $flights = DB::table('flights')
                        ->where('origin', '=', $request['from'])
                        ->where('destination', '=', $request['to'])
                        ->where('departDate', '=', $request['date'])
                        ->where('flightNo', '=', $request['flightNo'])
                        ->first();

                    if($flights){
                        $flightUpdate = DB::table('flights')
                            ->where('origin', '=', $from)
                            ->where('destination', '=', $to)
                            ->where('flightNo', '=', $flightNo)
                            ->update( ['reserved' => $flights->reserved  + 1]);

                            // if($flightUpdate){
                            //     $passengerUpdate = DB::table('passengers')
                            //         ->where('tokenID', '=', $token[$i])
                            //         ->where('firstName', '=', $fname[$i])
                            //         ->update([
                            //                 'pay' => 1,
                            //                 'phone' => $phone,
                            //                 'ticket' =>  $ticket
                            //         ]);

                                    if($flightUpdate){
                                        $dataSave =[
                                            'passengerCode' => $passengerCode,
                                            'firstName' => $fname[$i],
                                            'middleName' => $mname[$i],
                                            'lastName' => $lname[$i],
                                            'ticket' => $ticket,
                                            'origin' => $from[$i],
                                            'destination' => $to[$i],
                                            'class' => $class[$i],
                                            'flightNo' => $flightNo[$i],
                                            'terminal' => $terminal[$i],
                                            'departAt' => $departAt[$i],
                                            'arriveAt' => $arriveAt[$i],
                                            'date' => $calendarDate[$i]
                                        ];
                                        DB::table('reserves')->insert($dataSave);
                                    }else{
                                        return "Flight not reserved";
                                    }
                                // }else{
                                //     return "Reserved not Updated";
                                // }
                        }else{
                            return "Sorry-Flight not matched";
                        }

                        // Your Account SID and Auth Token from twilio.com/console
                        $account_sid = 'ACdcb932af836dfe5a082947639cf250be';
                        $auth_token = 'f9ec67437412e54a0bc8f394fe688266';
                        // In production, these should be environment variables. E.g.:
                        // $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]

                        // A Twilio number you own with SMS capabilities
                        $twilio_number = "+16063667469";

                        // $client = new Client()
                        $client = new Client($account_sid, $auth_token);
                        $client->messages->create(
                            // Where to send a text message (your cell phone?)
                            '+251936231225',
                            array(
                                'from' => $twilio_number,
                                'body' => 'Your Flight Ticket is '.$ticket
                            )
                        );
                }
                Session::flash("flash-message", "Flight Reserved Successfully Ticket No Will Sms for You");
                return redirect('air');
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
