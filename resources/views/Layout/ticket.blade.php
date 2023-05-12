<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset("bootstrap/css/bootstrap.css") }}">
    <link rel="stylesheet" href="{{ asset("Css/style.css") }}">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            @foreach ($reserve as $passenger)
                <div class="mt-5 shadow-lg rounded p-3 w-75">
                    <h5> {{ date('d M y', strtotime($passenger->date)) }} - Trip To <span class="text-success"> {{ $passenger->destination }} </span> From <span class="text-danger"> {{ $passenger->origin}} </span>  <img class="float-right" src="{{ asset('img/logo-2.png') }}" width="60x">
                    </h5>
                    <hr>
                     <h5> <span class="small">Prepared for: </span>{{ $passenger->firstName }}  {{ $passenger->middleName }} {{ $passenger->lastName }}</h5>
                    <div class="row p-2">
                        <div class="col-4 border p-2 rounded">
                            <h5>ETHIOPIAN AIRLINES</h5>
                            <h6> Reservation Code <span class="small font-weight-bold"> {{ $passenger->ticket }} </span> </h6>
                            <h6>Departure: {{ date('D d M', strtotime($passenger->date)) }} </h6>
                            <h5>{{$passenger->flightNo}}</h5>
                            <h6>{{$passenger->class}}</h6>
                            <p class="small">Please verify flight times prior to departure</p>
                        </div>
                        <div class="col-4 border p-2 rounded">
                            <h6>{{ $passenger->origin }}</h6>
                            <hr>
                            <span>Departing At: </span>
                            <h6>{{ $passenger->departAt }}</h6>
                            <span>Terminal:</span>
                            <h6>Terminal: {{$passenger->terminal}}</h6>
                        </div>
                        <div class="col-4 border p-2 rounded">
                            <h6>{{ $passenger->destination }}</h6>
                            <hr>
                            <span>Arrive At: </span>
                            <h6>{{ $passenger->arriveAt }}</h6>
                            <span>Terminal:</span>
                            <h6>Terminal: {{$passenger->terminal}}</h6>
                        </div>
                    </div>

                </div>

            @endforeach
        </div>
    </div>
</body>
</html>
