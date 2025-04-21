<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <title>Login</title>
</head>
<body>
   <h1>Login</h1>
   @if (session('success'))
      <p>{{ session('success') }}</p>
   @elseif (session('error'))
      <p>{{ session('error') }}</p>
   @endif

   <form action="{{ route('login') }}" method="POST">
      @csrf
      <ul>
         <li>
            <label for="email">email</label>
            <input type="email" name="email" id="email" required value="{{ old('email') }}">
         </li>
         <li>
            <label for="password">password</label>
            <input type="password" name="password" id="password" required>
         </li>
         <li>
            <label for="remember">remember me</label>
            <input type="checkbox" name="remember" id="remenber">
         </li>
         <li>
            <button type="submit">Login</button>
         </li>
      </ul>
   </form>
   
</body>
</html>