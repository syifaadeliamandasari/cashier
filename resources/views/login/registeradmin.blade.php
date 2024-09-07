<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Admin</title>
  <link rel="stylesheet" href="{{ asset('css/registeradmin.css') }}">
  <link rel="icon" href="{{ asset('assets/fashion.png') }}" type="image/png">
</head>
<body>
  <div class="wrapper">
    <form action="{{ url('register') }}" method="POST">
        @csrf
      <h2>Register</h2>
        <div class="input-field">
        <input type="text" name="name" id="name" required>
        <label for="name">Enter your name</label>
      </div>
      <div class="input-field">
        <input type="email" name="email" id="email" required>
        <label for="email">Enter your Email</label>
      </div>
      <div class="input-field">
        <input type="password" name="password" id="password" required>
        <label  for="password">Enter your password</label>
      </div>
      <div class="input-field">
        <input type="password" name="password_confirmation" id="password_confirmation"  required>
        <label  for="password_confirmation">Enter your confirm password</label>
      </div>
      <button type="submit">Sign Up</button>
      <div class="register">
        <p>Already have an account? <a href="{{ route('login') }}">Log In</a></p>
      </div>
    </form>
  </div>
</body>
</html>
