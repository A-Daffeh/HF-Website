@extends('main')

@section('content')
<section class="hf-sections hf-login">
    <div class="hf-contactMain">
        <h2 class="h-red">Authorized Access Only</h2>
        <form method="POST" action="{{ route('login') }}" class="hf-form">
            @csrf

            <div class="hf-email">
                <label for="email" class="hf-Labels">{{ __('Email Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="hf-box @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="hf-name">
                <label for="password" class="hf-labels">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="hf-box @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>

            <div class="row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="hf-login-submit">
                        {{ __('Login') }}
                    </button>

                    <!-- @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif -->
                </div>
            </div>
        </form>
    </div>
</section>
@endsection
