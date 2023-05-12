@extends('Layout.master')
@section('content')


<div class="container mt-5">
       @if (isset($error))
           <div class="rounded shadow-lg text-center alert alert-danger w-100 h-100">
               <p>{{ $error }}</p>
               <a href="/air" class="btn btn-outline-info w-50 ">Try Again</a>
           </div>
       @else

       <h5 class="">Information About Your Searched Flight</h5>
       @foreach ($flights as $info)
       <div class="row justify-content-center mt-4 shadow-lg rounded p-5 w-75 ml-5 mb-5">

            <div class="col-sm-12 col-md-12 col-lg-5">
                <h5>Flight On: {{ date('D d M y', strtotime($info->departDate)) }}</h5>
                <h5>From</h5>
                <h5><span class="text-success"> {{ $info->origin }} </span> </h5>
                <h5>Departing Time: <span>{{ date('h:i', strtotime($info->departTime)) }}</span></h5>
                <h6>Terminal: <span>{{ $info->terminal }}</span></h6>
                <h6>Flight Number: <span>{{ $info->flightNo }}</span></h6>
                <h6>Aircraft: <span>{{ $info->aircraft }}</span></h6>
                <h6>Flight Stops: <span>{{ $info->flightStop }}</span></h6>
                <h6>Available Seats: <span>{{ $info->seats }}</span></h6>
                <h6>Operated by Ethiopians Airlines</h6>
            </div>

            <div class="col-sm-12 col-md-12 col-lg-5 mb-5">
                <h5>-</h5>
                <h5>To</h5>
                <h5> <span class="text-danger">{{ $info->destination }}</span></h5>
                <h5>Arriving Time: <span>{{ date('h:i', strtotime($info->returnTime)) }}</span></h5>
                <h6>Terminal: <span>{{ $info->terminal }}</span></h6>

                <a href="/air" class="mt-5 btn btn-success w-50">Book Now</a>
            </div>
       </div>
       @endforeach
       @endif
</div>


@endsection

