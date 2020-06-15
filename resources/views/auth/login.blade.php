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
      <h1>Account Login</h1>
    </div>
    <div class="form-content">
      <form method="POST" action="{{ route('login') }}">
      @csrf
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" class="@error('email') is-invalid @enderror" required="required"/>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" required="required" class="@error('password') is-invalid @enderror"/>
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div class="form-group">
          <label class="form-remember">
            <!-- <input type="checkbox"/>Remember Me -->
            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
            
            <label class="form-check-label" for="remember">
                {{ __('Remember Me') }}
            </label>
          </label><a class="form-recovery" href="{{ route('register') }}">Don't have an Account? Register</a>
        </div>
        <div class="form-group">
          <button type="submit">Log In</button>
        </div>
      </form>
    </div>
  </div>
</div>
<script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
<script src="{{ asset('js/login.js') }}"></script>
</body>
</html>