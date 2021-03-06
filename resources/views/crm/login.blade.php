@extends("auth.login_main")

@section("content")
<div class="login-box-body">
  <p class="login-box-msg">Sign in to start your session</p>
 <form method="POST" action="{{ route('login') }}">
    <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group has-feedback">
      <input type="email" class="form-control" placeholder="Email" name="email" value="{!! old('email')  !!}"/>
      <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
    </div>
    <div class="form-group has-feedback">
      <input type="password" name="password" class="form-control" placeholder="Password"/>
      <span class="glyphicon glyphicon-lock form-control-feedback"></span>
    </div>
    <div class="row">
      <div class="col-xs-4">
        <button type="submit" class="btn btn-primary btn-block btn-flat">Send</button>
      </div><!-- /.col -->
      <div class="col-xs-8">
        <div>
          <label style="float: right;">
            <input name="remember" type="checkbox"> Remember Me
          </label><br />
          <a class="pull-right" href="{{ route('password.request') }}">Forgot password?</a>
        </div>
      </div><!-- /.col -->

    </div>

  </form>
  </div>
  @if($errors->any())
    <div style="margin-top:20px;" class="login-box-body">
      <ul>
          @foreach($errors->all() as $error)
          <li style="color:red">{!! $error !!}</li>
          @endforeach
      </ul>
    </div>
  @endif
  @if(isset($message) && $message !="default")
    <div style="margin-top:20px;" class="login-box-body">
      <ul>
          <li style="color:red">{!! $message !!}</li>
      </ul>
    </div>
  @endif
@endsection
