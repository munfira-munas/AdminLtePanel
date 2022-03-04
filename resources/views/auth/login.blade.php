@extends('layouts.app')

@section('content')

<body class="hold-transition login-page">
<div class="login-box">

<div class="card card-outline card-primary">

<div class="card-header text-center" style="background-color:white">
<h1><b>Quote</b>Software</h1>
</div>


<div class="card-body">
<p class="login-box-msg">Sign in to start your session</p>
<form action="{{ route('login') }}" method="post">
        @csrf
<div class="input-group mb-3">
{{-- <input type="email" class="form-control" placeholder="Email"> --}}

<input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-envelope"></span>
</div>
</div>

@error('email')
<span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
@enderror

</div>
<div class="input-group mb-3">

<input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

<div class="input-group-append">
<div class="input-group-text">
<span class="fas fa-lock"></span>
</div>
</div>
@error('password')
<span class="invalid-feedback" role="alert">
    <strong>{{ $message }}</strong>
</span>
@enderror

</div>
<div class="row">
<div class="col-8">
<div class="icheck-primary">
<input type="checkbox" id="remember">
<label for="remember">
Remember Me
</label>
</div>
</div>

<div class="col-4">

    {{-- <button type="submit" class="btn btn-primary  btn-block">
        {{ __('Login') }}
    </button> --}}
    <button type="submit" class="btn btn-primary btn-block">
        {{ __('Login') }}
    </button>
{{-- <button type="submit" class="btn btn-primary btn-block">Sign In</button> --}}
</div>

</div>
</form>


</div>

</div>

</div>
@endsection
