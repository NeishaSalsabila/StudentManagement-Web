@extends('layouts.auth')

@section('css')

<style>
    .invalid-feedback {
        display: block
    }
</style>
@endsection

@section('content')
<p class="login-box-msg">Log in to start your session</p>

<form action="{{ route('login') }}" method="post">
    @csrf
    <div class="form-group">

        <div class="input-group">
            <input type="email" name="email" class="form-control @error('email') is-invalid @enderror"
                placeholder="Email" value="{{ old('email') }}" required autocomplete="email">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-envelope"></span>
                </div>
            </div>
        </div>
        @error('email')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
        @enderror
    </div>
    <div class="form-group">

        <div class="input-group">
            <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password"
                name="password" required autocomplete="current-password">
            <div class="input-group-append">
                <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                </div>
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
            </div>
        </div>
    
    <div class="col-4">
        <button type="submit" class="btn btn-success btn-block">Log In</button>
    </div>
</div>

    {{-- <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Sign in</button>
        <!-- /.col -->
    </div> --}}
</form>
    <p class="mb-0">
        <a href="{{route('register')}}" class="text-center">Register</a>
    </p>
@endsection