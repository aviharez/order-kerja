@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('username') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">Username</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Login
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

{{-- @extends('layouts.main')
@section('title_site','Login Page')

@section('content')
  <section class="flexbox-container">
    <div class="col-12 d-flex align-items-center justify-content-center">
      <div class="col-md-4 col-10 box-shadow-2 p-0">
        <div class="card border-grey border-lighten-3 m-0">
          <div class="card-header border-0">
            <div class="card-title text-center">
              <div class="p-1">
                <img src="../../../logo.png" alt="branding logo">
              </div>
            </div>
            <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2">
              <span>Enter your credential below</span>
            </h6>
          </div>
          <div class="card-content">
            <div class="card-body">
              @if(Session::has('_msg'))
              <div id="alert-message">
                  <div id="inner-message" class="alert @if(session()->get('_e') == 'success') alert-success @else alert-danger @endif">
                      <button type="button" class="close" data-dismiss="alert">&times;</button>
                      {{session()->get('_msg')}}
                  </div>
              </div>
              @endif              
              <form class="form-horizontal form-simple" action="{{ route('login') }}" method="POST">
                {{ csrf_field() }}
                <fieldset class="form-group position-relative has-icon-left mb-0">
                  <input class="form-control form-control-lg input-lg" id="user-name" autocomplete="off" type="email" name="email" placeholder="Email">              
                  <div class="form-control-position">
                    <i class="ft-user"></i>
                  </div>
                  @if ($errors->has('email'))
                      <span class="help-block">
                          <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif                     
                </fieldset>
                <br>
                <fieldset class="form-group position-relative has-icon-left">
                  <input name="password" type="password" class="form-control form-control-lg input-lg" id="user-password"
                  placeholder="Enter Password" required>
                  <div class="form-control-position">
                    <i class="fa fa-key"></i>
                  </div>
                  @if ($errors->has('password'))
                      <span class="help-block">
                          <strong>{{ $errors->first('password') }}</strong>
                      </span>
                  @endif
                </fieldset>
                <div class="form-group row">
                  <div class="col-md-6 col-12 text-center text-md-left">
                    <fieldset>
                      <input type="checkbox" id="remember-me" class="chk-remember">
                      <label for="remember-me"> Remember Me</label>
                    </fieldset>
                  </div>
                  <div class="col-md-6 col-12 text-center text-md-right"><a href="{{ route('password.request')}}" class="card-link">Forgot Password?</a></div>
                </div>
                <button type="submit" class="btn btn-info btn-lg btn-block"><i class="ft-unlock"></i> Login</button>
              </form>
            </div>
          </div>
          <div class="card-footer">
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection 

 @section('pageJs')
  <script src="../../../app-assets/vendors/js/forms/icheck/icheck.min.js" type="text/javascript"></script>
  <script src="../../../app-assets/vendors/js/forms/validation/jqBootstrapValidation.js"
  type="text/javascript"></script>
 @endsection --}}
