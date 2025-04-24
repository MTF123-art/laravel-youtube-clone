@extends('layout.page')

@section('title', 'My Video')

@section('content')
   <h1>My Video</h1>
   <ul>
      <li><a href="{{ route("user.dashboard.add-video") }}">Tambah video</a></li>
      <br><br><br>
      <li>
         <h3>Video 1</h3><br>
         <video src="" width="640" height="360" controls></video>
         <p>Deskripsi video 1</p>
         <a href="">Edit</a>
      </li>
   </ul>
@endsection