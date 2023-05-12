
 @extends('Layout.master')

 @section('content')

 <div class="container mt-5">
        @if (isset($error))
            <div class="rounded shadow-lg text-center alert alert-danger w-100 h-100">
                <p>{{ $error }}</p>
                <a href="/air" class="btn btn-outline-info w-50 ">Try Again</a>
            </div>
        @else

        <h5 class="">Your Flight Results</h5>
        @foreach ($flights as $info)
        <div class="row justify-content-center mt-4 shadow-lg rounded pt-4 pb-4">
            <div class="col-sm-4 col-md-4 col-lg-2">
                <h5>{{  date('h:i', strtotime($info->departTime)) }} {{ $info->origin }}</h5>
                <p class="">{{ $info->origin }} - {{$info->destination}}</p>
                <p> <span><img src="{{ asset('img/logo-2.png') }}" width="26px" alt=""></span> {{ $info->flightNo }}: {{ $info->aircraft }} </p>
                <p> Operated by: Ethiopian Airlines</p>
                <p>{{ date('D-d-M', strtotime($info->departDate)) }}</p>
                <span> <p>Available Seats: {{ $info->seats - $info->reserved }} </p> <p> Flight: {{ $info->flightType }}</p></span>
            </div>

            <div class="col-sm-12 col-md-4 col-lg-1 text-center">
                <h1>-</h1>
               <span class="far fa-clock"></span>
                <p class="">{{ $info->flightTime }}</p>
                <p class=" text-danger">{{ $info->flightStop }}</p>
            </div>

            <div class="col-sm-4 col-md-4 col-lg-2">
                <h5>{{date('h:i', strtotime($info->returnTime)) }} {{ $info->destination }}</h5>
                <p class="">{{ $info->origin }} - {{$info->destination}}</p>

            </div>

            <div class="col-sm-12 col-md-4 col-lg-2">
                <div class="flight-class text-center rounded w-100 h-75 on-hover h-100">
                    <p class="pt-2">Economy</p>
                    <p class="mt-2">{{ $info->economyPrice }} ETB</p>
                    <p class="small">Total Price for all Passengers</p>
                    <a href="/passenger/one-way" class="btn-link btn-links btn btn-outline-warning w-50">
                        <span
                            data-price="{{$info->economyPrice}}"
                            data-origin="{{ $info->origin }}"
                            data-destination="{{ $info->destination }}"
                            data-stops="{{ $info->flightStop }}"
                            data-number="{{ $info-> flightNo}}"
                            data-arrive="{{ date('h:i', strtotime($info->returnTime)) }}"
                            data-depart-date="{{ date('D-d-M', strtotime($info->departDate)) }}"
                            data-date = " {{ $info->departDate }} "
                            data-depart="{{ date('h:i', strtotime($info->departTime)) }}"
                            data-class="Economy"
                            data-seats="{{ $info->seats - $info->reserved }}"
                            data-terminal="{{ $info->terminal }}"
                            >Select
                        </span>
                    </a>
                </div>
             </div>
             <div class="col-sm-12 col-md-4 col-lg-2">
                <div class="flight-class text-center rounded w-100 h-75 on-hover h-100">
                    <p class="pt-2">First Class</p>
                    <p class="mt-2">{{ $info->firstPrice }} ETB</p>
                    <p class="small">Total Price for all Passengers</p>
                    <a href="/passenger/one-way" class="btn-link btn-links btn btn-outline-warning w-50">
                        <span
                            data-price="{{ $info->firstPrice }}"
                            data-origin="{{ $info->origin }}"
                            data-destination="{{ $info->destination }}"
                            data-stops="{{ $info->flightStop }}"
                            data-number="{{ $info-> flightNo}}"
                            data-arrive="{{ date('h:i', strtotime($info->returnTime)) }}"
                            data-depart-date="{{ date('D-d-M', strtotime($info->departDate)) }}"
                            data-date = " {{ $info->departDate }} "
                            data-depart="{{ date('h:i', strtotime($info->departTime)) }}"
                            data-class="First"
                            data-seats="{{ $info->seats - $info->reserved }}"
                            data-terminal="{{ $info->terminal }}"

                        >Select
                        </span>
                    </a>

                </div>
             </div>

             <div class="col-sm-12 col-md-4 col-lg-2">
                <div class="flight-class text-center rounded w-100 h-75 on-hover h-100">
                    <p class="pt-2">Business</p>
                    <p class="mt-2">{{ $info->businessPrice }} ETB</p>
                    <p class="small">Total Price for all Passengers</p>
                    <a href="/passenger/one-way" class="btn-link btn-links btn btn-outline-warning mb-2 w-50">
                        <span
                            data-price="{{$info->businessPrice}}"
                            data-origin="{{ $info->origin }}"
                            data-destination="{{ $info->destination }}"
                            data-stops="{{ $info->flightStop }}"
                            data-arrive="{{ date('h:i', strtotime($info->returnTime)) }}"
                            data-depart-date="{{ date('D-d-M', strtotime($info->departDate)) }}"
                            data-depart="{{ date('h:i', strtotime($info->departTime)) }}"
                            data-number="{{ $info-> flightNo}}"
                            data-date = " {{ $info->departDate }} "
                            data-class="Business"
                            data-seats="{{ $info->seats - $info->reserved }}"
                            data-terminal="{{ $info->terminal }}"

                            >Select
                        </span>
                    </a>
                </div>
             </div>
        </div>
        @endforeach
        @endif
    </div>

@endsection
