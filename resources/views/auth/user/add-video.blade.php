@extends('layout.page')

@section('title', 'Tambah Video')

@section('content')
   <h1>Tambah Video</h1>
   <form action="{{ route('user.dashboard.store-video') }}" method="POST" enctype="multipart/form-data">
      @csrf
      <label for="title">Judul:</label><br>
      <input type="text" id="title" name="title"><br><br>
      <label for="video">Video:</label><br>
      <input type="file" id="video" name="video"><br><br>
      <label for="thumbnail">Thumbnail:</label><br>
      <input type="file" id="thumbnail" name="thumbnail"><br><br>
      <label for="description">Deskripsi:</label><br>
      <textarea id="description" name="description"></textarea><br><br>
      <button type="submit">Simpan</button>
   </form>
   
@endsection
