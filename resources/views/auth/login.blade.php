@extends('layouts.app')

@section('title', 'Login | Toko Sepatu')

@section('content')
<div class="card">
    <div class="card-body">
        <div class="m-sm-4">
            <div class="text-center">

            </div>
            <form role="form" method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3 {{ $errors->has('username') ? ' alert-message' : '' }}">
                    <label class="form-label">{{ __('Username') }}</label>
                    <input class="form-control form-control-lg{{ $errors->has('username') ? ' is-invalid' : '' }}"
                        placeholder="{{ __('Enter your username') }}" type="text" name="username"
                        value="{{ old('username') }}" required autofocus />
                </div>
                @if ($errors->has('username'))
                <span class="invalid-feedback alert-message" style="display: block;" role="alert">
                    <strong>{{ $errors->first('username') }}</strong>
                </span>
                @endif
                <div class="mb-3{{ $errors->has('password') ? ' alert-message' : '' }}">
                    <label class="form-label">{{ __('Password') }}</label>
                    <input class="form-control form-control-lg{{ $errors->has('password') ? ' is-invalid' : '' }}"
                        name="password" placeholder="{{ __('Enter your password') }}" type="password" required />
                    @if ($errors->has('password'))
                    <span class="invalid-feedback alert-message" style="display: block;" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif
                    <small>
                        @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="text-light">
                            <small>{{ __('Forgot password?') }}</small>
                        </a>
                        @endif
                    </small>
                </div>
                <div>
                    <label class="form-check">
                        <input class="form-check-input" type="checkbox" value="remember-me" name="remember-me"
                            {{ old('remember') ? 'checked' : '' }}>
                        <span class="form-check-label">
                            {{ __('Remember me next time') }}
                        </span>
                    </label>
                </div>
                <div class="text-center mt-3">
                    <button type="submit" class="btn btn-lg btn-primary">{{ __('Sign in') }}</button>
                    <!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
