@extends('templates.master')


@section('content')
<style>

</style>
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
<div class="container-fluid">
    <div class="container">
        <p class="h2 text-center text-white">
            Evento
        </p>
        <div class="col-xl-10 col-lg-11 mx-auto login-container">
            <div class="row">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="col-lg-6 col-md-6 no-padding m-auto">
                        <div class="login-box">
                            <h5 class="text-warning h3">Welcome Back!</h5>

                            <div class="login-row row no-margin">
                                <label for=""><i class="fas fa-envelope"></i> Email Address</label>
                                <input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus class="form-control form-control-sm">
                            </div>

                            <div class="login-row row no-margin">
                                <label for=""><i class="fas fa-unlock-alt"></i> Password</label>
                                <input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" class="form-control form-control-sm">
                            </div>

                            <div class="login-row row forrr no-margin">
                                <p> <input id="remember_me" type="checkbox" name="remember"> Remember Me</p>

                            </div>

                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                    {{ __('Forgot your password?') }}
                                </a>
                                @endif

                                <button class="ml-4 btn btn-warning">
                                    {{ __('Log in') }}
                                </button>
                            </div>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
<hr />

<script src="{{asset('assets/js/popper.min.js')}}"></script>
@endsection