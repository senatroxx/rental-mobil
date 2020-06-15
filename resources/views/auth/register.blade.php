<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<!-- Form-->
<div class="form">
  <div class="form-panel">
    <div class="form-header">
      <h1>Register Account</h1>
    </div>
    <div class="form-content">
      <form method="POST" action="{{ route('register') }}">
      @csrf
        <div class="form-group">
          <label for="name">Full Name</label>
          <input type="text" id="name" name="name" required="required"/>
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" required="required"/>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required="required" autocomplete="new-password"/>
        </div>
        <div class="form-group">
          <label for="password_confirmation">Confirm Password</label>
          <input type="password" id="password_confirmation" name="password_confirmation" required="required" autocomplete="new-password"/>
        </div>
        <div class="form-group">
          <label for="telp">Telp</label>
          <input type="number" id="telp" name="telp" required="required" autocomplete="telp"/>
        </div>
        <input type="hidden" name="status" value="register_user">
        <a class="form-recovery" href="{{ route('login') }}">Have an Account? Login</a>
        <div class="form-group mt-2">
          <button type="submit">Register</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/login.js') }}"></script>
</body>
</html>