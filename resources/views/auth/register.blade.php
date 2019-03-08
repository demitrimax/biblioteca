@extends('layouts.app')

@section('content')
<div class="page-header header-filter" style="background-image: url('{{asset('materialkit/assets/img/bg7.jpg')}}'); background-size: cover; background-position: top center;">
    <div class="container">
      <div class="row">
        <div class="col-lg-4 col-md-6 ml-auto mr-auto">
          <div class="card card-login">
            <form class="form" method="POST" action="{{ route('register') }}">
                @csrf
              <div class="card-header card-header-primary text-center">
                <h4 class="card-title">{{ __('Register') }}</h4>

              </div>
              <div class="card-body">

                <span class="bmd-form-group"><div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">face</i>
                      </span>
                    </div>
                    <input id="name" type="text" class="form-control {{ $errors->has('name') ? ' is-invalid' : '' }}" placeholder="{{ __('Name') }}" name="name" value="{{ old('name') }}" required autofocus>
                    @if ($errors->has('name'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                    @endif
                  </div></span>

                <span class="bmd-form-group">
                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="material-icons">mail</i>
                      </span>
                    </div>
                    <input id="email" name="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="{{ __('E-Mail Address') }}" value="{{ old('email') }}" required autofocus>
                    @if ($errors->has('email'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
              </span>
                <span class="bmd-form-group">
                  <div class="input-group">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="material-icons">lock_outline</i>
                    </span>
                  </div>
                  <input id="password" name="password" type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Password') }}" required>
                  @if ($errors->has('password'))
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                </div>
              </span>

              <span class="bmd-form-group">
                <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">
                    <i class="material-icons">lock_outline</i>
                  </span>
                </div>
                <input id="password_confirmation" name="password_confirmation" type="password" class="form-control {{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="{{ __('Confirm Password') }}" required>
                @if ($errors->has('password'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>
            </span>


              </div>
              <div class="footer text-center">
                <button type="submit" class="btn btn-primary btn-link btn-wd btn-lg">{{ __('Login') }}</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  </div>

@endsection
