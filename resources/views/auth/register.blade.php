@extends('templates.master')


@section('content')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/style.css')}}" />
<div class="container-fluid">
    <div class="container">
        <p class="h2 text-white text-center mt-1 ">Evento</p>
        <div class="col-xl-6 col-lg-6 mx-auto login-container">
            <div class="row">
                <div class="login-box m-auto">
                    <h5 class="text-warning h3">SignUp </h5>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="login-row row no-margin">
                            <label for=""><i class="fas fa-envelope"></i> Name & Surname</label>
                            <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" class="form-control form-control-sm">
                        </div>
                        <div class="login-row row no-margin">
                            <label for=""><i class="fas fa-envelope"></i> Email Address</label>
                            <input id="email" type="email" name="email" :value="old('email')" required class="form-control form-control-sm">
                        </div>
                        <div class="login-row row no-margin">
                            <label for=""><i class="fas fa-envelope"></i> Select City</label>
                            <input list="city" value="" class="form-control form-control-sm">
                            <datalist id="city">
                                <option value="Sialkot">Sialkot</option>
                                <option value="Daska">Daska</option>
                                <option value="Gujranwala">Gujranwala</option>
                            </datalist>
                        </div>
                        <div class="login-row row no-margin">
                            <label for=""><i class="fas fa-envelope"></i> Password</label>
                            <input id="password" type="password" name="password" required autocomplete="new-password" class="form-control form-control-sm">
                        </div>

                        <div class="login-row row no-margin">
                            <label for=""><i class="fas fa-unlock-alt"></i>Confirm Password</label>
                            <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="form-control form-control-sm">
                        </div>
                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <div for="terms">
                                <div class="flex items-center">
                                    <input type="checkbox" name="terms" id="terms" />

                                    <div class="ml-2">
                                        {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        <div class="flex items-center justify-end mt-4">
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a>

                            <button class=" btn btn-warning " style="color:black;">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
</div>
<hr />

<script src="{{asset('assets/js/popper.min.js')}}"></script>
@endsection