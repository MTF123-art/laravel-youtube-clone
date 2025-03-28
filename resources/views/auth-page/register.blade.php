<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Register</title>
</head>
<body>
   <h1>Register</h1>

   <form action="{{ route('register') }}" method="POST">
      @csrf
      <ul>
         <li>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required value="{{ old('name') }}">
            @error('name')
               <p>{{ $message }}</p>
            @enderror
         </li>
         <li>
            <label for="email">email</label>
            <input type="email" name="email" id="email" required value="{{ old('email') }}">
            @error('email')
               <p>{{ $message }}</p>
            @enderror
         </li>
         <li>
            <label for="password">password</label>
            <input type="password" name="password" id="password" required>
            @error('password')
               <p>{{ $message }}</p>
            @enderror
         </li>
         <li>
            <label for="password_confirmation">Konfirmasi Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required>
         </li>
         <li>
            <button type="submit">Daftar</button>
         </li>
      </ul>
   </form>
</body>
</html>