@extends('layouts.auth')
@section('content')
<style type="text/css">
    #navbar{
        display: none;
    }
    body{
        background: #fff;
    }
</style>
<div class="col-12 p-0 row ms-0">
    <div class="col-12 col-md-6 text-center p-0" style="">
        <div class="col-12 p-4 align-items-center justify-content-center d-flex row" style="height:100vh">
            <div class="col-12 p-0">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                       
                        <div class="form-group row mb-3 ">
                            <label for="email" class="col-md-4 col-form-label text-md-end">@lang('site.email')</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}"  required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3 ">
                            <label for="password" class="col-md-4 col-form-label text-md-end">@lang('site.password')</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password"  required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-3 ">
                            <div  class="col-md-4 col-form-label text-md-end"></div>
                            <div class="col-md-6">
                                <input class="form-check-input ms-2 me-0" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} style="position:relative;">

                                <label class="form-check-label" for="remember" style="position:relative;">
                                    @lang('site.remember_me')
                                </label>
                            </div>
                        </div>
 

                        <div class="form-group row mb-3  mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    @lang('site.login')
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        @lang('site.forget_your_password')
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
        </div>
    </div>
    <div class="col-12 col-md-6 p-0 d-none d-md-block" >
            <div style="height: 100vh;background-image: url('{{asset('/images/auth_backgroud.png')}}');object-fit: cover;backgound-position:center;vertical-align: middle;background-size: cover;background-repeat: no-repeat;"></div>
    </div>
</div>
@endsection