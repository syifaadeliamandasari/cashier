<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Admin</title>
  <link rel="stylesheet" href="{{ asset('css/loginadmin.css') }}">
  <link rel="icon" href="{{ asset('assets/fashion.png') }}" type="image/png">
</head>
<body>
  <div class="wrapper">
    <form action="#">
      <h2>Login Admin</h2>
        <div class="input-field">
        <input type="text" required>
        <label>Enter your email</label>
      </div>
      <div class="input-field">
        <input type="password" required>
        <label>Enter your password</label>
      </div>
      <div class="forget">
        <label for="remember">
          <input type="checkbox" id="remember">
          <p>Remember me</p>
        </label>
        <a href="#">Forgot password?</a>
      </div>
      <a href="{{ route('admin') }}" class="button-link" ><h4 class="teks">Register Now</h4></a>
      <div class="register">
        <p>Don't have an account? <a href="{{ route('register') }}">Register</a></p>
      </div>
    </form>
  </div>
</body>
</html>
