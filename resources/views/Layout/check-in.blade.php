@extends('Layout.master')

@section('content')
<div class="container">
    <div class="row justify-content-center mt-1">
        @if ('success')
            <p>{{ session('success') }}</p>
        @endif
        @foreach ($reserve as $passenger)
            <div class="mt-5 mb-5 shadow-lg rounded p-3 w-75">
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


                <form action="/ticket" method="post">
                    @csrf
                    {{-- @method("delete") --}}
                    <p><a href="#" id="cancel-link" class="bg-info text-dark p-1 rounded" style="text-decoration: none">Do you want to cancel this flight?</a></p>
                    <div id="cancel-form" class="w-25 hidden">
                        <label for="ticket">Ticket-No</label>
                        <input type="text" autocomplete="off" class="form-control" name="ticket-no" placeholder="ET-">
                        <button type="submit" class="btn btn-danger mt-3 w-50">Cancel</button>
                    </div>
                </form>


            </div>

        @endforeach
    </div>
</div>

    <script>
        const cancelLink = document.getElementById("cancel-link");
        const cancelForm = document.getElementById("cancel-form");

        cancelLink.addEventListener("click", function () {
            if (cancelForm.classList.contains("hidden")) {
                cancelForm.classList.remove("hidden");
            } else {
                cancelForm.classList.add("hidden");
            }
        });

    </script>
@endsection

    {{-- <script src="{{ asset('Js/checkIn.js') }}"></script> --}}

