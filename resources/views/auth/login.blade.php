@extends('layouts.app')

@section('title', 'Login')

@section('content')

<style>
body {
  background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
  url('https://www.emporioarchitect.com/upload/portofolio/1280/desain-pondok-pesantren-mediteran-2-lantai-55030223-829735221030223093338.jpg') center/cover;
  background-attachment: fixed;
}

/* CARD LOGIN */
.login-card {
  background: rgba(255,255,255,0.95);
  border-radius: 20px;
  padding: 40px;
  box-shadow: 0 10px 40px rgba(0,0,0,0.2);
}

/* TITLE */
.login-title {
  font-weight: 600;
  color: #1f7a63;
}

/* INPUT */
.form-control {
  border-radius: 10px;
  padding: 12px;
}

.form-control:focus {
  border-color: #1f7a63;
  box-shadow: 0 0 0 0.2rem rgba(31,122,99,0.25);
}

/* BUTTON */
.btn-login {
  background: #1f7a63;
  color: white;
  border-radius: 50px;
  padding: 12px;
  width: 100%;
  font-weight: 500;
  transition: 0.3s;
}

.btn-login:hover {
  background: #166a55;
}

/* LINK */
.login-link {
  color: #1f7a63;
  text-decoration: none;
}

.login-link:hover {
  text-decoration: underline;
}
</style>

<div class="container d-flex align-items-center justify-content-center" style="min-height:100vh;">

  <div class="col-md-5">
    
    <div class="login-card">

      <div class="text-center mb-4">
        <h3 class="login-title">Login Ma’had</h3>
        <p class="text-muted">Silakan masuk ke akun Anda</p>
      </div>

      <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- EMAIL -->
        <div class="mb-3">
          <label>Email</label>
          <input type="email" name="email"
            class="form-control @error('email') is-invalid @enderror"
            value="{{ old('email') }}" required>

          @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <!-- PASSWORD -->
        <div class="mb-3">
          <label>Password</label>
          <input type="password" name="password"
            class="form-control @error('password') is-invalid @enderror"
            required>

          @error('password')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

        <!-- REMEMBER -->
        <div class="mb-3 form-check">
          <input type="checkbox" name="remember" class="form-check-input">
          <label class="form-check-label">Remember Me</label>
        </div>

        <!-- BUTTON -->
        <button type="submit" class="btn btn-login">
          Login
        </button>

        <!-- LUPA PASSWORD -->
        <div class="text-center mt-3">
          @if (Route::has('password.request'))
            <a class="login-link" href="{{ route('password.request') }}">
              Lupa Password?
            </a>
          @endif
        </div>

      </form>

    </div>

  </div>

</div>

@endsection