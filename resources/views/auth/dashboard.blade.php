@extends('layout.page')

@section('title', 'Dashboard')

@section('content')
    <h1>Dashboard</h1>

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
