<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ethiopians Airline</title>
    <link rel="stylesheet" href=" {{ asset('bootstrap/css/bootstrap.css') }} ">
    <link rel="stylesheet" href=" {{ asset('Css/style.css')}}">
    <link rel="stylesheet" href=" {{ asset('Css/modals.css')}}">
    {{-- animated scroll link --}}
    <link rel="stylesheet" href="{{ asset('Css/aos.css') }}">
    {{-- Iconn Link --}}
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
      integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
      crossorigin="anonymous"
    />
</head>
<body>

    @if( session('flash-message'))
        <script src="JS/sweetalert2.all.min.js"></script>
        <script>document.addEventListener('DOMContentLoaded', function(e) {Swal.fire({
        position: 'center',
        icon: 'success',
        title: 'Flight Reserved Successfully Ticket Number Will Sms for You',
        text: 'We thank you for choosing us',
        color: 'green',
        background: '#FCE4EC',
        showConfirmButton: false,
        timer: 5500,
        })
        })</script>
    @endif

    @if (session('check-in'))
    <script src="JS/sweetalert2.all.min.js"></script>
    <script>document.addEventListener('DOMContentLoaded', function(e) {Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Invalid Ticket Number and Last Name',
        })
        // footer: '<a href="">Why do I have this issue?</a>'
      })</script>
    @endif

    @if (session('find-flights'))
    <script src="JS/sweetalert2.all.min.js"></script>
    <script>document.addEventListener('DOMContentLoaded', function(e) {Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Sorry Flight not Scheduled! Please try another Flights',
        })
        // footer: '<a href="">Why do I have this issue?</a>'
      })</script>
    @endif

    @if (session('flight-status'))
    <script src="JS/sweetalert2.all.min.js"></script>
    <script>document.addEventListener('DOMContentLoaded', function(e) {Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Sorry No Flights are there',
        })
        // footer: '<a href="">Why do I have this issue?</a>'
      })</script>
    @endif

    @if (session('cancled'))
    <script src="JS/sweetalert2.all.min.js"></script>
    <script>const Toast = Swal.mixin({
        toast: true,
        position: 'top-end',
        showConfirmButton: false,
        timer: 3000,
        timerProgressBar: true,
        didOpen: (toast) => {
          toast.addEventListener('mouseenter', Swal.stopTimer)
          toast.addEventListener('mouseleave', Swal.resumeTimer)
        }
      })

      Toast.fire({
        icon: 'success',
        title: 'Reservation Cancled'
      })
    </script>
    @endif


    <div id="back-picture">
    <ul class="container mb-5">
        <li class="na left pt-3">
            <a href="{{'/air'}}" class="nav-link">
                <img src="{{ asset("img/main-logo.png") }}" alt="" width="180px">
            </a>
        </li>
        <li class="na right pt-4 pr-5"> <a href="{{'/account'}}" class="nav-link">Register | Login</a></li>
        {{-- <li class="na rights pt-4 pr-3 translate"> <a href="#" class="nav-link"><img src="{{ asset("img/translate.png") }}" width="18px"></a></li> --}}

        {{-- <li class="na right"> <a href="#" class="nav-link">About Us</a> </li>

        <li class="na right"> <a href="#" class="nav-link">Contact Us</a></li>
        <li class="na right"> <a href="#" class="nav-link">Service</a></li> --}}
    </ul>
        @yield('contetnt')

        {{-- </div> --}}
    {{-- </div> --}}

    <footer class="footer mt-5">
        <div class="container">
            <div class="row justify-content-center text-light">
                <div class="col-sm-4 col-md-6 col-lg-3 col-xl-3 mt-5">
                    <h5 class="mb-4 mt-5">Ethiopian Airlines</h5>
                    {{-- <ul> --}}
                        <li class="footer-list"><a href="#" class="footer-link">About Us</a></li>
                        <li class="footer-list"><a href="#" class="footer-link">Careers</a></li>
                        <li class="footer-list"><a href="#" class="footer-link">Our History</a></li>
                        <li class="footer-list"><a href="#" class="footer-link">Travel Alert</a></li>
                        <li class="footer-list"><a href="#" class="footer-link">Tender Documents</a></li>
                        <li class="footer-list"><a href="#" class="footer-link">Substainability</a></li>
                        <li class="footer-list"><a href="#" class="footer-link">Environmental</a></li>

                    {{-- </ul> --}}
                </div>
                <div class="col-sm-4 col-md-6 col-lg-3 col-xl-3 mt-5">
                    <h5 class="mb-4 mt-5">Group Campanies</h5>
                    {{-- <ul> --}}
                        <li class="footer-list"><a href="#" class="footer-link">Ethiopian Airports</a></li>
                        <li class="footer-list"><a href="#" class="footer-link">Ethiopian Skylight Hotel</a></li>
                        <li class="footer-list"><a href="#" class="footer-link">In-flight Catering</a></li>
                        <li class="footer-list"><a href="#" class="footer-link">Ground Services</a></li>
                        <li class="footer-list"><a href="#" class="footer-link">Aviation Academy</a></li>
                        <li class="footer-list"><a href="#" class="footer-link">In-flight Catering</a></li>
                        <li class="footer-list"><a href="#" class="footer-link">Ground Services</a></li>
                        <li class="footer-list"><a href="#" class="footer-link">Cargo</a></li>
                    {{-- </ul> --}}
                </div>
                <div class="col-sm-4 col-md-6 col-lg-3 col-xl-3 mt-5">
                    <h5 class="mb-4 mt-5">Customer Support</h5>
                    {{-- <ul> --}}
                        <li class="footer-list"><a href="#" class="footer-link">Privacy Policy</a></li>
                        <li class="footer-list"><a href="#" class="footer-link">Website Accessibility</a></li>
                        <li class="footer-list"><a href="#" class="footer-link">Customer Feedback</a></li>
                        <li class="footer-list"><a href="#" class="footer-link">Call Center Number</a></li>
                        <li class="footer-list"><a href="#" class="footer-link">Help and Contacts</a></li>
                        <li class="footer-list"><a href="#" class="footer-link">Frequently Asked Questions</a></li>
                    {{-- </ul> --}}
                </div>
                <div class="col-sm-4 col-md-6 col-lg-3 col-xl-3 mt-5">
                    <h5 class="mb-4 mt-5">Information</h5>
                    {{-- <ul> --}}
                        <li class="footer-list"><a href="#" class="footer-link">Terms and conditions of carriage</a></li>
                        <li class="footer-list"><a href="#" class="footer-link">Baggage Information</a></li>
                        <li class="footer-list"><a href="#" class="footer-link">Excess and Special Baggage</a></li>
                        <li class="footer-list"><a href="#" class="footer-link">Optional Service Charges</a></li>
                        <li class="footer-list"><a href="#" class="footer-link">Services at the airport</a></li>
                    {{-- </ul> --}}
                </div>

                <hr style="background-color: rgb(211, 205, 205)" class="container-fluid m-4">

                <div class="col-sm-12 col-lg-4 col-xl-4 mt-5 text-center">
                    <img src="{{ asset("img/award1.png") }}" alt="" class="img" width="270px">
                    <p class="mt-3">Best Airline in Africa for 4 years in a row</p>
                </div>
                <div class="col-sm-12 col-lg-4 col-xl-4 mt-5 text-center">
                    <img src="{{ asset("img/award2.png") }}" alt="" width="190px">
                    <p class="mt-1">Best Business and Economy Classes in Africa for 3 years in a row</p>
                </div>
                <div class="col-sm-12 col-lg-4 col-xl-4 mt-5 text-center">
                    <img src="{{ asset("img/award3.png") }}" alt="" class="img" width="90px">
                    <p class="mt-3">Best Cabin Crew in Africa</p>
                </div>
                <hr style="background-color: rgb(211, 205, 205)" class="container-fluid m-4">

                <div class="col-sm-12 col-md-5 col-lg-5 col-xg-5 col-xg-5 ml-5">
                    <form action="#">
                        <p class="font-weight-bold">Subscribe</p>
                        <input type="text" name="email" id="email-address" class="form-control" placeholder="Email">
                        <button type="submit" name="submit" class="btn btn-outline-info mt-4 w-50">Submit</button>
                    </form>
                </div>
                <div class="col-sm-12 col-md-5 col-lg-5 col-xg-5 mt-5 ml-5">
                    <p class="font-weight-bold">Social Media</p>
                    <span> <a href="#" class="fab fa-facebook-f mr-3" style="font-size: 20px; text-decoration: none"></a></span>
                    <span> <a href="#" class="fab fa-instagram text-danger mr-3" style="font-size: 20px; text-decoration: none"></a></span>
                    <span> <a href="#" class="fab fa-twitter text-info mr-3" style="font-size: 20px; text-decoration: none"></a></span>
                    <span> <a href="#" class="fab fa-linkedin-in mr-3" style="font-size: 20px; text-decoration: none"></a></span>
                    <span> <a href="#" class="fab fa-youtube text-danger" style="font-size: 20px; text-decoration: none"></a></span>
                </div>

                <hr style="background-color: rgb(211, 205, 205)" class="container-fluid m-4">
                    <img src="{{ asset('img/staralliance-logo.png') }}" alt="" class="bg-light rounded mb-2" width="190px">
            </div>
        </div>
    </footer>
</div> {{--end of back-cover--}}
    <script src="{{ asset("Js/jar.amd.min.js") }}"></script>
    <script src="{{ asset("Js/cookies/passengerCookie.js") }}"></script>
    <script src="{{ asset('Js/script.js') }}"></script>
    <script src="{{ asset('Js/hover.js') }}"></script>
    <script src="{{ asset('Js/smdevice.js') }}"></script>
    <script src="{{ asset('Js/aos.js') }}"></script>
    <script src="{{ asset('Js/reload.js') }}"></script>
    <script src="JS/sweetalert2.all.min.js"></script>
</body>
</html>
