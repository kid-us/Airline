
 @extends('Layout.master')

 @section('content')

 <div class="container mt-5">
    {{-- <div class="rounded shadow-lg m-5"> --}}

        {{-- <p>{{$flights->origin}} - {{$flights-destination}}</p> --}}
    {{-- </div> --}}
        @if (isset($error))
            <div class="rounded shadow-lg text-center alert alert-danger w-100 h-100">
                <p>{{ $error }}</p>
                <a href="/air" class="btn btn-outline-info w-50 ">Try Again</a>
            </div>
        @else
            <h5 class="">Hi there this is Your Round-Trip Flight Results</h5>

            <div class="row justify-content-center mt-4 pb-4">
            {{-- flight --}}
            <div class="col-sm-12 colmd-6 col-lg-6 w-100 h-100 border-r">
                <fieldset  id="depart-container" class="rounded shadow-lg bg-dark text-light">
                    @if ( session()->has('flight-error'))
                        <p class="text-danger">{{ session('flight-error') }}</p>
                    @endif
                    @foreach ($flights as $info)
                    <div class="row rounded mb-5 p-4">
                        <div class="col-5">
                            <h4>Arrive On {{ date('D-d-M', strtotime($info->departDate)) }}</h4>
                            <h5>{{  date('h:i', strtotime($info->departTime)) }} {{ $info->origin }}</h5>
                            <p class="">{{ $info->origin }} Airport</p>
                            <p> <span><img src="{{ asset('img/logo-2.png') }}" width="26px" alt=""></span> {{ $info->flightNo }}: {{ $info->aircraft }} </p>
                            <p> Operated by: Ethiopian Airlines</p>

                        </div>

                        <div class="col-2">
                            <h1>-</h1>
                            <span class="far fa-clock"></span>
                            <p class="">{{ $info->flightTime }}</p>
                            <p class=" text-danger">{{ $info->flightStop }}</p>
                        </div>

                        <div class="col-4 mt-2">
                            <h5>{{date('h:i', strtotime($info->returnTime)) }} {{ $info->destination }}</h5>
                            <p class="">{{$info->destination}} Airport</p>
                        </div>

                        <div class="col-4 text-center">
                            <div class="flight-class rounded shadow-lg p-1">
                                <p> Economy </p>
                                <p class="mt-2">{{ $info->economyPrice }} ETB</p>
                                <p class="small">Total Price for all Passengers</p>
                                <a href="#" class="round-trip-btn btn btn-outline-warning w-75 mb-2">
                                    <span
                                        data-depart-price="{{ $info->economyPrice }}"
                                        data-depart-origin="{{ $info->origin }}"
                                        data-depart-destination="{{ $info->destination }}"
                                        data-depart-stops="{{ $info->flightStop }}"
                                        data-depart-number="{{ $info-> flightNo}}"
                                        data-depart-arrive="{{ date('h:i', strtotime($info->returnTime)) }}"
                                        data-depart-depart-date="{{ date('D-d-M', strtotime($info->departDate)) }}"
                                        data-depart-depart="{{ date('h:i', strtotime($info->departTime)) }}"
                                        data-depart-class="First"
                                        data-depart-date=" {{ $info->departDate }}"
                                        data-depart-seats="{{ $info->seats - $info->reserved }}"> Select
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-4 text-center">
                            <div class="flight-class rounded shadow-lg p-1">
                                <p> First </p>
                                <p class="mt-2">{{ $info->firstPrice }} ETB</p>
                                <p class="small">Total Price for all Passengers</p>
                                <a href="#" class="round-trip-btn btn btn-outline-warning w-75 mb-2">
                                    <span
                                        data-depart-price="{{ $info->firstPrice }}"
                                        data-depart-origin="{{ $info->origin }}"
                                        data-depart-destination="{{ $info->destination }}"
                                        data-depart-stops="{{ $info->flightStop }}"
                                        data-depart-number="{{ $info-> flightNo}}"
                                        data-depart-arrive="{{ date('h:i', strtotime($info->returnTime)) }}"
                                        data-depart-depart-date="{{ date('D-d-M', strtotime($info->departDate)) }}"
                                        data-depart-depart="{{ date('h:i', strtotime($info->departTime)) }}"
                                        data-depart-class="First"
                                        data-depart-date=" {{ $info->departDate }}"
                                        data-depart-seats="{{ $info->seats - $info->reserved }}"> Select
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-4 text-center">
                            <div class="flight-class rounded shadow-lg p-1">
                                <p> Business </p>
                                <p class="mt-2">{{ $info->businessPrice }} ETB</p>
                                <p class="small">Total Price for all Passengers</p>
                                <a href="#" class="round-trip-btn btn btn-outline-warning w-75 mb-2">
                                    <span
                                        data-depart-price="{{ $info->businessPrice }}"
                                        data-depart-origin="{{ $info->origin }}"
                                        data-depart-destination="{{ $info->destination }}"
                                        data-depart-stops="{{ $info->flightStop }}"
                                        data-depart-number="{{ $info-> flightNo}}"
                                        data-depart-arrive="{{ date('h:i', strtotime($info->returnTime)) }}"
                                        data-depart-depart-date="{{ date('D-d-M', strtotime($info->departDate)) }}"
                                        data-depart-depart="{{ date('h:i', strtotime($info->departTime)) }}"
                                        data-depart-class="First"
                                        data-depart-date=" {{ $info->departDate }}"
                                        data-depart-seats="{{ $info->seats - $info->reserved }}"> Select
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <hr style="background-color:  #fff">
                    @endforeach
                </fieldset>
            </div>

            <a href="/passenger/round-trip" id="next-btn" class="btn btn-primary next-btn hidden">Next</a>

            {{-- return --}}
            <div class="col-sm-12 colmd-6 col-lg-6 w-100 h-100">
                <fieldset id="return-container" class="shadow-lg rounded mt-5 fieldset-cursor" disabled>

                    @if (session()->has('return-error'))
                        <p class="text-danger">{{ session('return-error') }}</p>
                    @endif
                    @foreach ($returns as $return)
                    <div class="row  mb-5 p-4">
                            <div class="col-5">
                                <h4>Return On {{ date('D-d-M', strtotime($return->departDate)) }}</h4>
                                <h5>{{  date('h:i', strtotime($return->departTime)) }} {{ $return->origin }}</h5>
                            <p class="">{{ $return->origin }} Airport</p>
                            <p> <span><img src="{{ asset('img/logo-2.png') }}" width="26px" alt=""></span> {{ $return->flightNo }}: {{ $return->aircraft }} </p>
                            <p> Operated by: Ethiopian Airlines</p>

                        </div>

                        <div class="col-2">
                            <h1>-</h1>
                            <span class="far fa-clock"></span>
                            <p class="">{{ $return->flightTime }}</p>
                            <p class=" text-danger">{{ $return->flightStop }}</p>
                        </div>

                        <div class="col-4 mt-2">
                            <h5>{{date('h:i', strtotime($return->returnTime)) }} {{ $return->destination }}</h5>
                            <p class="">{{$return->destination}} Airport</p>
                        </div>

                        <div class="col-4 text-center">
                            <div class="flight-class p-1">
                                <p> Economy </p>
                                <p class="mt-2">{{ $return->economyPrice }} ETB</p>
                                <p class="small">Total Price for all Passengers</p>
                                <a href="#" class="return-round-btn btn btn-outline-warning w-75 mb-2">
                                    <span
                                        data-return-price="{{ $return->economyPrice }}"
                                        data-return-origin="{{ $return->origin }}"
                                        data-return-destination="{{ $return->destination }}"
                                        data-return-stops="{{ $return->flightStop }}"
                                        data-return-number="{{ $return-> flightNo}}"
                                        data-return-arrive="{{ date('h:i', strtotime($return->returnTime)) }}"
                                        data-return-depart-date="{{ date('D-d-M', strtotime($return->departDate)) }}"
                                        data-return-depart="{{ date('h:i', strtotime($return->departTime)) }}"
                                        data-return-class="First"
                                        data-return-date = "{{ $return->departDate }}"
                                        data-return-seats="{{ $return->seats - $return->reserved }}"> Select
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-4 text-center">
                            <div class="flight-class p-1">
                                <p> First </p>
                                <p> Economy </p>
                                <p class="mt-2">{{ $return->firstPrice }} ETB</p>
                                <a href="#" class="return-round-btn btn btn-outline-warning w-75 mb-2">
                                    <span
                                        data-return-price="{{ $return->firstPrice }}"
                                        data-return-origin="{{ $return->origin }}"
                                        data-return-destination="{{ $return->destination }}"
                                        data-return-stops="{{ $return->flightStop }}"
                                        data-return-number="{{ $return-> flightNo}}"
                                        data-return-arrive="{{ date('h:i', strtotime($return->returnTime)) }}"
                                        data-return-depart-date="{{ date('D-d-M', strtotime($return->departDate)) }}"
                                        data-return-depart="{{ date('h:i', strtotime($return->departTime)) }}"
                                        data-return-class="First"
                                        data-return-date = "{{ $return->departDate }}"
                                        data-return-seats="{{ $return->seats - $return->reserved }}"> Select
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="col-4 text-center">
                            <div class="flight-class p-1">
                                <p> Business </p>
                                <p> Economy </p>
                                <p class="mt-2">{{ $return->businessPrice }} ETB</p>
                                <a href="#" class="return-round-btn btn btn-outline-warning w-75 mb-2">
                                    <span
                                        data-return-price="{{ $return->businessPrice }}"
                                        data-return-origin="{{ $return->origin }}"
                                        data-return-destination="{{ $return->destination }}"
                                        data-return-stops="{{ $return->flightStop }}"
                                        data-return-number="{{ $return-> flightNo}}"
                                        data-return-arrive="{{ date('h:i', strtotime($return->returnTime)) }}"
                                        data-return-depart-date="{{ date('D-d-M', strtotime($return->departDate)) }}"
                                        data-return-depart="{{ date('h:i', strtotime($return->departTime)) }}"
                                        data-return-class="First"
                                        data-return-date = "{{ $return->departDate }}"
                                        data-return-seats="{{ $return->seats - $return->reserved }}"> Select
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <hr style="background-color: #fff">
                    @endforeach
                </fieldset>
            </div>
        </div>
        @endif
    </div>

@endsection
