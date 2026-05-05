@extends('layouts.app')

@section('title', 'Register')

@section('content')

<style>
body {
  background: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)),
  url('https://www.emporioarchitect.com/upload/portofolio/1280/desain-pondok-pesantren-mediteran-2-lantai-55030223-829735221030223093338.jpg') center/cover;
  background-attachment: fixed;
}

/* CARD */
.auth-card {
  background: rgba(255,255,255,0.95);
  border-radius: 20px;
  padding: 40px;
  box-shadow: 0 10px 40px rgba(0,0,0,0.2);
}

/* TITLE */
.auth-title {
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
.btn-auth {
  background: #1f7a63;
  color: white;
  border-radius: 50px;
  padding: 12px;
  width: 100%;
  font-weight: 500;
  transition: 0.3s;
}

.btn-auth:hover {
  background: #166a55;
}

/* LINK */
.auth-link {
  color: #1f7a63;
  text-decoration: none;
}

.auth-link:hover {
  text-decoration: underline;
}
</style>

<div class="container d-flex align-items-center justify-content-center" style="min-height:100vh;">

  <div class="col-md-5">
    
    <div class="auth-card">

      <div class="text-center mb-4">
        <h3 class="auth-title">Register Ma’had</h3>
        <p class="text-muted">Buat akun untuk mulai bergabung</p>
      </div>

      <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- NAMA -->
        <div class="mb-3">
          <label>Nama Lengkap</label>
          <input type="text" name="name"
            class="form-control @error('name') is-invalid @enderror"
            value="{{ old('name') }}" required>

          @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
          @enderror
        </div>

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

        <!-- KONFIRMASI PASSWORD -->
        <div class="mb-3">
          <label>Konfirmasi Password</label>
          <input type="password" name="password_confirmation"
            class="form-control" required>
        </div>

        <!-- BUTTON -->
        <button type="submit" class="btn btn-auth">
          Register
        </button>

        <!-- LINK LOGIN -->
        <div class="text-center mt-3">
          <span>Sudah punya akun?</span>
          <a href="{{ route('login') }}" class="auth-link">
            Login disini
          </a>
        </div>

      </form>

    </div>

  </div>

</div>

@endsection