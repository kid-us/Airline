<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('Css/login.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous" />
    {{-- Iconn Link --}}
    <title id="browser-title">Login</title>
</head>

<body>
    <div class="container">
        {{-- manager-login --}}
        <div class="row justify-content-center mt-5" id="manager-login">
            <div class="col-sm-12 col-md-12 colxl-6 col-lg-6 rounded shadow-lg mt-5 p-5 bg-light">
                <form action="/manager/login/done" method="POST" class="text-center">
                    @csrf
                    <img src="{{ asset('img/manager.png') }}" alt="" width="50px" class="rounded mb-3">
                    @if (session('status'))
                        <p class="small text-danger text-center mb-2">{{ session('status') }}</p>
                    @endif

                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text fas fa-mail-bulk"></span>
                        </div>
                        <input type="email" name="email"
                            class="form-control-plaintext @error('email') border-error @enderror" placeholder="Email">
                    </div>
                    @error('email')
                        <p class="small text-danger float-left ml-5 mt-2">{{ $message }}</p>
                    @enderror

                    <div class="input-group mt-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text fas fa-key"></span>
                        </div>
                        <input type="password" name="password"
                            class="form-control-plaintext @error('password') border-error @enderror"
                            placeholder="Password">
                        <input type="text" name="user-type" value="manager" hidden>
                    </div>
                    @error('password')
                        <p class="small text-danger float-left ml-5 mt-2">{{ $message }}</p>
                    @enderror
                    <button class="mt-5 btn w-50 btn-success text-center p-2">Login</button>
                </form>
            </div>
        </div>

        <footer class="text-center mt-5">
            <a href="{{ '/air' }}"><img src="{{ asset('img/logo-2.png') }}" width="100px""></a>
        </footer>
    </div>
    <script src="{{ asset('Js/login.js') }}"></script>
</body>

</html>
