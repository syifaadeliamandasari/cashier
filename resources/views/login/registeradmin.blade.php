<!DOCTYPE html>
<!-- Coding By CodingNepal - www.codingnepalweb.com -->
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register Admin</title>
  <link rel="stylesheet" href="{{ asset('css/registeradmin.css') }}">
</head>
<body>
  <div class="wrapper">
    <form action="#">
      <h2>Register</h2>
        <div class="input-field">
        <input type="text" required>
        <label>Enter your name</label>
      </div>
      <div class="input-field">
        <input type="password" required>
        <label>Enter your Email</label>
      </div>
      <div class="input-field">
        <input type="password" required>
        <label>Enter your password</label>
      </div>
      <div class="input-field">
        <input type="password" required>
        <label>Enter your confirm password</label>
      </div>
      <button type="submit">Sign Up</button>
      <div class="register">
        <p>Already have an account? <a href="{{ route('loginadmin') }}">Log In</a></p>
      </div>
    </form>
  </div>
</body>
</html>
