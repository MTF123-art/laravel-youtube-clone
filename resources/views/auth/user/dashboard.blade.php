@extends('layout.page')

@section('title', 'Dashboard')

@section('content')
    <h1>Dashboard</h1>
    <b>{{ Auth::user()->name }}</b>
    <ul>
        <li><a href="{{ route('home') }}">home</a></li>
        <li><a href="{{ route(Auth::user()->role.'.dashboard.my-video') }}">my video</a></li>
        <li><a href="">profile</a></li>
        <li><a href="">subscription</a></li>
    </ul>
    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif
    @if (Auth::check())
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    @endif
@endsection
