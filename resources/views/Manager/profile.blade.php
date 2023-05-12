<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/admin.css') }}">
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
      integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
      crossorigin="anonymous"
    />{{-- Iconn Link --}}
    <title>Manager</title>
</head>
<body>
    <div class="container-fluid">
        <div class="left-panel float-left fixed-left mr-4 p-4">
            <a href="#" class="mt-2"><img src="{{ asset("img/main-logo.png") }}" alt="" width="100px"></a>
            <p class="text-light small mt-5 mb-3">Menu</p>
            {{-- <p class="text-light w-100 mt-5 mb-5 ml-2">
                <a href="#" id="dashboard" class="text-light">Dashboard <span class="right mr-2"> ⥱ </span>
                </a>
            </p> --}}
            <p class="ml-2 w-100 mb-5">
                <a href="#" id="schedule" class="text-light"> Schedule Flight<span class="right mr-2"> ⥱ </span>
                </a>
            </p>
            {{-- <p class="ml-2 w-100 mb-5">
                <a href="#" id="edit" class="text-light"> Edit Flight<span class="right mr-2"> ⥱ </span>
                </a>
            </p> --}}
            <p class="ml-2 w-100 mb-5">
                <a href="#" id="postpone" class="text-light"> Postpone Flight <span class="right mr-2"> ⥱ </span>
                </a>
            </p>
            <p class="ml-2 w-100 mb-5">
                <a href="#" id="news" class="text-light">
                    <span class="fas fa-newspaper mr-3 text-light"></span> News <span class="right mr-2"> ⥱ </span>
                </a>
            </p>
        </div>
        <div style="margin-left: 250px" class="fixed-top p-3 bg-light mb-5">
            <a href="/manager/logout" class="right margin-right">Logout</a>
            <a href="#" class="right mr-4">{{ session('user') }} <span class="fas fa user"></span></a>
        </div>

        <div style="margin-left: 250px" class="mt-5 p-4">
            <div id="schedule-page" class="pr-4 pl-4">
                <p class="p-size">Schedule flight</p>
                <form action="/create" method="post">
                    @csrf
                    @if ('schedule-status')
                        <p class="text-center text-success">{{ session('schedule-status') }}</p>
                    @endif
                    <div id="manage flights" class="row justify-content-center shadow-lg rounded bg-light p-2">
                        <div class="col-sm-12 col-lg-6 col-xl-6 mt-4">
                            <p class="ml-2">Depart From</p>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text fas fa-plane-departure"></span>
                                </div>
                                <input type="text" name="origin" class="form-control rounded @error('origin') border-error-textarea @enderror" value="{{ old('origin') }}">
                            </div>
                        </div>

                        <div class="col-sm-12 col-lg-6 col-xl-6 mt-4">
                            <p class="ml-2">Arrive To</p>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text fas fa-plane-arrival"></span>
                                </div>
                                <input type="text" name="destination" class="form-control rounded @error('destination') border-error-textarea @enderror" value="{{ old('destination') }}" >
                            </div>
                        </div>

                        <div class="col-sm-12 col-lg-3 mt-4">
                            <p class="ml-2">Depart Date</p>
                            <input type="date" name="depart-date" class="form-control rounded @error('depart-date') border-error-textarea
                            @enderror" value="{{ old('depart-date') }}">
                        </div>

                        {{-- <div class="col-sm-12 col-lg-3 mt-4">
                            <p class="ml-2">Return Date</p>
                            <input type="date"  name="return-date" class="form-control rounded @error('return-date') border-error-textarea @enderror" value="{{ old('return-date') }}">
                        </div> --}}

                        <div class="col-sm-12 col-lg-3 mt-4">
                            <p class="ml-2">Depart Time</p>
                            <input type="time" name="depart-time" class="form-control rounded @error('depart-time') border-error-textarea @enderror" value="{{ old('depart-time') }}">
                        </div>

                        <div class="col-sm-12 col-lg-3 mt-4">
                            <p class="ml-2">Arrive Time</p>
                            <input type="time" name="arrive-time" class="form-control rounded @error('arrive-time') border-error-textarea @enderror" value="{{ old('arrive-time') }}">
                        </div>

                        <div class="col-sm-12 col-lg-2 mt-4">
                            <p class="ml-2">Flight Duration</p>
                            <input type="text" name="duration" class="form-control rounded @error('duration') border-error-textarea @enderror" value="{{ old('duration') }}">
                        </div>

                        <div class="col-sm-12 col-lg-2 mt-4">
                            <p class="ml-2">Depart Terminal</p>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text fas fa-terminal"></span>
                                    <input type="number" name="terminal" class="form-control rounded @error('terminal') border-error-textarea @enderror" value="{{ old('terminal') }}">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-2 mt-4">
                            <p class="ml-2">Flight Number</p>
                            <input type="text" name="flight-no" class="form-control rounded @error('flight-no') border-error-textarea @enderror" value="{{ old('flight-no') }}">
                        </div>

                        <div class="col-sm-12 col-lg-2 mt-4">
                            <p class="ml-2">Flight Stop</p>
                            <select name="flight-stop" class="form-control rounded">
                                <option value="Non-stop">Non-Stop</option>
                                <option value="1-stop">1-Stop</option>
                                <option value="2-stop">2-Stop</option>
                            </select>

                        </div>


                        <div class="col-sm-12 col-lg-4 mt-4">
                            <p class="ml-2">Aircraft</p>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text fas fa-plane"></span>
                                </div>
                                <input type="text" name="aircraft" class="form-control rounded @error('aircraft') border-error-textarea @enderror" value="{{ old('aircraft') }}">
                            </div>
                        </div>

                        <div class="col-sm-12 col-lg-2 mt-4">
                            <p class="ml-2">Economy Price</p>
                                <input type="text" name="eco-price" class="form-control rounded @error('eco-price') border-error-textarea @enderror" value="{{ old('eco-price') }}">
                        </div>

                        <div class="col-sm-12 col-lg-2 mt-4">
                            <p class="ml-2">First Price</p>
                            <input type="text" name="first-price" class="form-control rounded @error('first-price') border-error-textarea @enderror" value="{{ old('first-price') }}">
                        </div>

                        <div class="col-sm-12 col-lg-2 mt-4">
                            <p class="ml-2">Business Price</p>
                            <input type="text" name="business-price" class="form-control rounded @error('business-price') border-error-textarea @enderror" value="{{ old('business-price') }}">
                        </div>

                        <div class="col-sm-12 col-lg-2 mt-4">
                            <p class="ml-2">Seats</p>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text fas fa-chair"></span>
                                </div>
                                <input type="number" name="seats" class="form-control rounded @error('seats') border-error-textarea @enderror" value="{{ old('seats') }}">
                            </div>
                        </div>

                        <div class="col-sm-12 col-lg-4 mt-4">
                            <p class="ml-2">Flight Type</p>
                            <select name="flight-type" id="flight-type" class="form-control rounded">
                                <option value="Domestic">Domestic</option>
                                <option value="Internationa">International</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-outline-success mt-5 mb-4 w-25">Schedule</button>
                    </div>
                </form>
            </div>


            <div id="postpone-page" class="pr-4 pl-4 hidden">
                <p class="p-size">Delete flight</p>
                <form action="/delete-flight" method="post">
                    @csrf
                    @if ( session('delete'))
                        <p class="text-center text-success">{{ session('schedule-status') }}</p>
                    @endif
                    <div id="delete-flights" class="row justify-content-center shadow-lg rounded bg-light p-2">
                        <div class="col-sm-12 col-lg-6 col-xl-6 mt-4">
                            <p class="ml-2">Depart From</p>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text fas fa-plane-departure"></span>
                                </div>
                                <input type="text" name="origin" class="form-control rounded @error('origin') border-error-textarea @enderror" value="{{ old('origin') }}">
                            </div>
                        </div>

                        <div class="col-sm-12 col-lg-6 col-xl-6 mt-4">
                            <p class="ml-2">Arrive To</p>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text fas fa-plane-arrival"></span>
                                </div>
                                <input type="text" name="destination" class="form-control rounded @error('destination') border-error-textarea @enderror" value="{{ old('destination') }}" >
                            </div>
                        </div>

                        <div class="col-sm-12 col-lg-3 mt-4">
                            <p class="ml-2">Depart Date</p>
                            <input type="date" name="depart-date" class="form-control rounded @error('depart-date') border-error-textarea
                            @enderror" value="{{ old('depart-date') }}">
                        </div>


                        <div class="col-sm-12 col-lg-2 mt-4">
                            <p class="ml-2">Flight Number</p>
                            <input type="text" name="flight-no" class="form-control rounded @error('flight-no') border-error-textarea @enderror" value="{{ old('flight-no') }}">
                        </div>


                        <div class="col-sm-12 col-lg-4 mt-4">
                            <p class="ml-2">Flight Type</p>
                            <select name="flight-type" id="flight-type" class="form-control rounded">
                                <option value="Domestic">Domestic</option>
                                <option value="Internationa">International</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-outline-danger mt-5 mb-4 w-25">Delete</button>
                    </div>
                </form>
            </div>


            <div id="profile-page" class="shadow-lg rounded mt-5 bg-light hidden">
                <form action="{{ route('update') }}" method="post" class="pt-5">
                    @if ('update-status')
                    <p class="text-center">{{ session('update-status') }}</p>
                    @endif

                 <div class="row justify-content-center ml-4 mb-4">
                   <div class="col-lg-3 col-sm-12">
                       <label for="email">Email</label>
                   </div>
                   <div class="col-lg-7 col-sm-12 mb-4">
                       <input type="email" id="email" name="email" class="form-control rounded @error('email') border-error-laintext @enderror">
                       @error('email')
                        <p class="text-danger">{{ $message }}</p>
                       @enderror
                   </div>

                   <div class="col-lg-3 col-sm-12">
                       <label for="username">Username</label>
                   </div>
                   <div class="col-lg-7 col-sm-12 mb-4">
                       <input id="username" type="text" name="username" class="form-control rounded @error('username') border-error-plaintext @enderror">
                       @error('username')
                           <p class="text-danger">{{ $message }}</p>
                       @enderror
                   </div>
                   <div class="col-lg-3 col-sm-4">
                       <label for="Password">Password</label>
                   </div>

                   <div class="col-lg-7 col-sm-8 mb-4">
                       <a id="change-text" class="small font-weight-bold" style="cursor: pointer;">Also Change Password?</a>

                       <input id="input-password" type="password" name="current-password" class="form-control rounded mb-3 @error('current-password') border-error-plaintext @enderror">
                       @error('current-password')
                           <p class="text-danger">{{ $message }}</p>
                       @enderror
                       <input id="new-password" type="password" name="new-password" class="form-control rounded @error('new-password') border-error-plaintext @enderror hidden" placeholder="New Password">
                       @error('new-password')
                           <p class="text-danger">{{ $message }}</p>
                       @enderror
                   </div>

                   <div class="offset-3 col-lg-7 col-sm-12 mb-4">
                       <button id="done" type="submit" name="done" class="btn btn-danger w-25">Update</button>
                   </div>
                </div>
               </form>
            </div>

            <div id="news-page" class="row justify-content-center mt-5 hidden">
                <form action="{{ route('insert') }}" method="post" class="mt-5">
                    @csrf
                    <p>Post News to the Website</p>
                    @if ('status')
                        <p id="slogan-status" class="text-success small">{{ session('status') }}</p>
                    @endif

                    <textarea name="news" id="news" cols="60" rows="4" class="form-control text-area @error('news') border-error-textarea @enderror" placeholder="Write News Here"></textarea>

                    @error('news')
                    <p class="text-danger mt-2">{{ $message }}</p>
                    @enderror

                    <button type="submit" name="slogan-btn" class="btn btn-success p-2 mt-3 w-25">Post</button>
                    <a href="{{ route('air') }}" class="ml-5 hidden" id="checkout">Checkout</a>
                </form>
            </div>


        </div>
    </div>
    <script src="{{ asset('Js/panel.js') }}"></script>
</body>
</html>
