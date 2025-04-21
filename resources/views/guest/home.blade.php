@extends('layout.page')

@section('title', 'Home')

@section('content')
    <h1>Home</h1>
    <ul>
        @if (Auth::check())
            <li><a href="{{ route('dashboard') }}">dashboard</a></li>
        @else
            <li><a href="{{ route('login') }}">login</a></li>
            <li><a href="{{ route('register') }}">register</a></li>
        @endif
    </ul>
@endsection
