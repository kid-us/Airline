<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/style.css') }}">
    {{-- Iconn Link --}}
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
      integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
      crossorigin="anonymous"
      />
      <title>Results</title>
</head>
<body>
    <ul class="container">
        <li class="na left"> <a href="{{'/air'}}" class="nav-link"> <img src="" alt=""> <img src="{{ asset("img/main-logo.png") }}" alt="" width="220px"></a> </li>
        {{-- <li class="na right"> <a href="#" class="nav-link">Register | Login</a></li> --}}
        {{-- <li class="na right"> <a href="#" class="nav-link">About Us</a> </li>
        <li class="na right"> <a href="#" class="nav-link">Contact Us</a></li>
        <li class="na right"> <a href="#" class="nav-link">Service</a></li> --}}
    </ul>
    @yield('content')


    <footer class="container-fluid mt-5 footer">
        <div class="row justify-content-cente p-3 mt-2">
            <div class="col-3">
                <p> <a href="#" class="fab fa-facebook-f mr-3" style="font-size: 20px; text-decoration: none"></a></p>
            </div>
            <div class="col-3">
                <p> <a href="#" class="fab fa-instagram text-danger mr-3" style="font-size: 20px; text-decoration: none"></a></p>

            </div>
            <div class="col-3">
                <p> <a href="#" class="fab fa-youtube text-danger" style="font-size: 20px; text-decoration: none"></a></p>

            </div>
            <div class="col-3">
                <p> <a href="#" class="fab fa-linkedin-in mr-3" style="font-size: 20px; text-decoration: none"></a></p>

            </div>
        </div>
    </footer>

    <script src="{{ asset("Js/jar.amd.min.js") }}"></script>
    <script src="{{ asset('Js/cookies/cookie.js') }}"></script>
    <script src="{{ asset("Js/cookies/roundTrip.js") }}"></script>
    <script src="{{ asset("Js/cookies/round-trip-return.js") }}"></script>
</body>
</html>
