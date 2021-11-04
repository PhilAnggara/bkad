@extends('layouts.auth')
@section('title', 'BKAD Inventory - Masuk')

@section('content')
<div class="col-md-5 col-sm-12 mx-auto">
  <div class="card pt-4">
    <div class="card-body">
      <div class="text-center mb-5">
        <img src="{{ url('frontend/images/logo.png') }}" height="48" class='mb-4'>
        <h3>BKAD Inventory</h3>
        <p>Silahkan masuk untuk melanjutkan ke BKAD Inventory.</p>
      </div>
      <form action="{{ route('login') }}" method="POST">
        @csrf

        <div class="form-group position-relative has-icon-left">
          <label for="email">Email</label>
          <div class="position-relative">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="off" autofocus>
            <div class="form-control-icon @error('email') invisible @enderror">
              <i data-feather="mail"></i>
            </div>
            @error('email')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
        <div class="form-group position-relative has-icon-left">
          <div class="clearfix">
            <label for="password">Kata Sandi</label>
          </div>
          <div class="position-relative">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="off">
            <div class="form-control-icon @error('password') invisible @enderror">
              <i data-feather="lock"></i>
            </div>
            @error('password')
              <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
              </span>
            @enderror
          </div>
        </div>
        <div class='form-check clearfix my-4'>
          <div class="checkbox float-start">
            <input type="checkbox" id="remember" class="form-check-input" name="remember" {{ old('remember') ? 'checked' : '' }}>
            <label for="remember">Ingat Saya</label>
          </div>
        </div>
        <div class="clearfix">
          <button type="submit" class="btn btn-primary float-end">Masuk</button>
        </div>

      </form>
    </div>
  </div>
</div>
@endsection