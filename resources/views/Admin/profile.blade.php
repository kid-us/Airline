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
    <title>Admin</title>
</head>
<body>
    <div class="container-fluid">
        <div class="left-panel float-left fixed-left mr-4 p-4">
            <a href="#" class="mt-2"><img src="{{ asset("img/main-logo.png") }}" alt="" width="100px"></a>
            <p class="text-light small mt-5 mb-3">Menu</p>
            <p class="text-light w-100 mt-5 mb-5 ml-2">
                <a href="#" id="dashboard" class="text-light">Dashboard <span class="right mr-2"> ⥱ </span>
                </a>
            </p>
            <p class="text-light w-100 mt-5 mb-5 ml-2">
                <a href="#" id="profile" class="text-light">Profile <span class="right mr-2"> ⥱ </span>
                </a>
            </p>
            <p class="text-light w-100 mb-3">Privilege</p>
            <p class="ml-2 w-100 mb-3">
                <a href="#" id="grant-btn" class="text-light"> Grant <span class="right mr-2"> ⥱ </span>
                </a>
            </p>
            {{-- <p class="ml-2 w-100 mb-5">
                <a href="#" id="revoke-btn" class="text-light"> Revoke<span class="right mr-2"> ⥱ </span>
                </a>
            </p> --}}
        </div>
        <div style="margin-left: 250px" class="fixed-top p-3 bg-light mb-5">
            <a href="/admin/logout" class="right margin-right"> <span class="fas fa-power-off "></span> Logout</a>
            <a href="#" class="right mr-4"> {{ session ('user') }} <span class="fas fa-user-circle"></span></a>
        </div>

        <div style="margin-left: 250px" class="mt-5 p-4">

            <div id="dashboard-page">
                <div class=" d-flex mt-5 justify-content-center">
                    <p class="w-50">Welcome back again <span class="font-weight-bold text-danger">{{ session ('user') }}</span> Lorem ipsum dolor sit, amet consectetur adipisicing elit. Earum, repellendus numquam rem impedit temporibus aspernatur, aut error alias amet officia, corrupti tempore repellat. Quo ipsam aperiam aliquam vitae mollitia eaque.</p>
                </div>

                <div class="row justify-content-center mt-4">
                    <form action="{{ route('update') }}" method="POST">
                        @method("PATCH")
                        @csrf
                        <p>Change website Slogan here</p>

                        @if ('slogan-status')
                            <p id="slogan-status" class="text-success small">{{ session('slogan-status') }}</p>
                        @endif

                        @if ('slogan-error')
                            <p id="slogan-status" class="text-danger mt-1">{{ session('slogan-error') }}</p>
                        @endif

                        <textarea name="slogan" id="slogan" cols="60" rows="4" class="form-control text-area @error('slogan') border-error-textarea @enderror"></textarea>

                        @error('slogan')
                        <p class="text-danger mt-1">{{ $message }}</p>
                        @enderror

                        <button type="submit" name="slogan-btn" class="btn btn-success p-2 mt-3 w-25">Change</button>
                        <a href="{{ route('air') }}" class="ml-5 hidden" id="checkout">Checkout</a>
                    </form>
                </div>
            </div>

            {{-- clerk-form --}}
            <div id="grant-page" class="row justify-content-center mt-4 mb-5 hidden">
                <form action="{{ route('register') }}" id="clerk-form" method="post" class="shadow-lg rounded p-5 mb-4 bg-light text-center mr-5 form">
                @csrf
                <p>Give Account for <span class="text-primary font-weight-bold">Clerk</span></p>
                <img src="{{ asset('img/clerk.png') }}" alt="" width="40px">

                @if (session('status'))
                    <p class="small text-success mt-1 mb-3">{{ session ('status') }}</p>
                @endif

                @if (session('error'))
                    <p class="small text-danger mt-1 mb-2">{{ session ('error') }}</p>
                @endif

                <input type="text" name="clerk-username" class="form-control-plaintext mb-2 @error('clerk-username') border-error @enderror" placeholder="Clerk Username">

                @error('clerk-username')
                    <p class="small text-danger mt-1 mb-1">{{ $message }}</p>
                @enderror

                <input type="email" name="clerk-email" class="form-control-plaintext mb-3 @error('clerk-email') border-error @enderror" placeholder="Clerk Email">

                @error('clerk-email')
                    <p class="small text-danger mt-1 mb-1">{{ $message }}</p>
                @enderror

                <input type="password" name="clerk-password" id="clerk-password" class="form-control-plaintext mb-3 @error('clerk-password') border-error @enderror" placeholder="Password">

                @error('clerk-password')
                    <p class="small text-danger mt-1 mb-1">{{ $message }}</p>
                @enderror

                <input type="password" name="clerk-confirm-password" id="clerk-confirm-password" class="form-control-plaintext @error('clerk-confirm-password') border-error @enderror" placeholder="Confirm Password">

                @error('clerk-confirm-password')
                <p class="small text-danger mt-1 mb-1">{{ $message }}</p>
                @enderror

                <span class="float-left mt-3 mb-1"><input type="checkbox" name="check" id="show-clerk-password"> Show Password</span> <br> <br>

                <input type="text" name="account-owner" value="clerk" hidden>

                <button type="submit" class="btn btn-success p-2 mt-4 w-50">Create</button>
            </form>

            {{-- Manager Form --}}
            <form action="{{ route('register') }}" method="post" id="manager-form" class="shadow-lg rounded p-5 mb-4 text-center form form-bg mt-4">
                @csrf
                <p>Give Account for <span class="text-primary font-weight-bold">Manager</span></p>
                <img src="{{ asset('img/manager.png') }}" alt="" width="40px">

                @if (session('status'))
                    <p class="text-success small mt-1 mb-2"> {{ session ('status') }} </p>
                @endif
                @if (session('error'))
                    <p class="text-danger small mt-1 mb-2"> {{ session ('error') }} </p>
                @endif

                <input type="text" name="manager-username" class="form-control-plaintext mb-3 @error('manager-username') border-error @enderror" placeholder="Manager Username">

                @error('manager-username')
                    <p class="small text-danger"> {{ $message }} </p>
                @enderror

                <input type="email" name="manager-email" class="form-control-plaintext mb-3 @error('manager-email') border-error @enderror" placeholder="Manager Email">

                @error('manager-email')
                    <p class="small text-danger"> {{ $message }} </p>
                @enderror

                <input type="password" name="manager-password" id="manager-password" class="form-control-plaintext mb-3 @error('manager-password') border-error @enderror" placeholder="Password">

                @error('manager-password')
                    <p class="small text-danger"> {{ $message }} </p>
                @enderror

                <input type="password" name="manager-confirm-password" id="manager-confirm-password" class="form-control-plaintext @error('manager-confirm-password') border-error @enderror" placeholder="Confirm Password">

                @error('manager-confirm-password')
                    <p class="small text-danger"> {{ $message }} </p>
                @enderror

                <span class="float-left mt-3 mb-1"><input type="checkbox" name="check" id="show-manager-password"> Show Password</span> <br> <br>

                <input type="text" name="account-owner" value="manager" hidden>

                <button type="submit" name="create" class="btn btn-success p-2 mt-4 w-50">Create</button>
            </form>
        </div>

        <div id="profile-page" class="shadow-lg rounded mt-5 bg-light hidden">
            <form action="{{route('update')}}}" method="POST" class="pt-5">
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

        </div>
    </div>
    <script src="{{ asset('Js/admin.js') }}"></script>
    <script src="{{ asset("Js/sweetalert2.all.min.js") }}"></script>
</body>
</html>
