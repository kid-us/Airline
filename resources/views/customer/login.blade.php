@extends('layouts.master')

@section('title', 'Login')

@section('content')
<form action="/customer/login" method="POST">
    @csrf
    <div>
        <input type="email" name="email" placeholder="Email">
    </div>

    <div>
        <input type="password" name="password" placeholder="Password">
    </div>

    <button type="submit">Login</button>
</form>
@endsection
