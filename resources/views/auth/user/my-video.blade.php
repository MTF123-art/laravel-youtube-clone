@extends('layout.page')

@section('title', 'My Video')

@section('content')
    <h1>My Video</h1>
    <ul>
        <li><a href="{{ route('user.dashboard.add-video') }}">Tambah video</a></li>
        <br><br><br>
        </li>
        @forelse ($videos as $video)
            <li>
                <h3>title : {{ $video->title }}</h3>
                <p>thummbnail path : {{ $video->thumbnail_path }}</p>
                <p>video path : {{ $video->video_path }}</p>
                <p>description : {{ $video->description }}</p>
                <p>views : {{ count($video->views) }}</p>
                <a href="">Edit</a>
            </li>

        @empty
        @endforelse
    </ul>
@endsection
