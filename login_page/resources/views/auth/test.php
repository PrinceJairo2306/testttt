<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ env('APP_NAME') }} | Log in</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="{{ asset('alte/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="{{ asset('alte/dist/css/AdminLTE.min.css') }}">
  <link rel="stylesheet" href="{{ asset('alte/plugins/iCheck/square/green.css') }}">
  <link rel="stylesheet" href="{{ asset('alte/css/animate.css') }}">
  <link rel="stylesheet" href="{{ asset('alte/css/in1go.css') }}">
  <link rel="stylesheet" href="{{ asset('alte/dist/css/In1go.css') }}">
  <link rel="icon" type="image/x-icon" href="{{ asset('images/favicon.ico') }}" size="32x32">
  <style type="text/css">
    body,
    html {
      height: auto !important;
    }

    .login-page,
    .register-page {
      background: #4FAF51;
    }
  </style>
</head>

<body class="hold-transition login-page">
  @if(session('alert-error'))
  <div class="alert alert-danger alert-dismissible animated fadeInDown">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-ban"></i> Error!</h4>
    {{ session('alert-error') }}
  </div>
  @elseif(session('alert-info'))
  <div class="alert alert-info alert-dismissible animated fadeInDown">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-info"></i> Info!</h4>
    {{ session('alert-info') }}
  </div>
  @elseif(session('alert-warning'))
  <div class="alert alert-warning alert-dismissible animated fadeInDown">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-warning"></i> Warning!</h4>
    {{ session('alert-warning') }}
  </div>
  @elseif(session('alert-success'))
  <div class="alert alert-success alert-dismissible animated fadeInDown">
    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
    <h4><i class="icon fa fa-check"></i> Success!</h4>
    {{ session('alert-success') }}
  </div>
  @endif
  <div class="login-box">
    <div class="login-box-body">
      <div class="login-logo">
        <!-- <a href=""><img src="{{ asset('alte/dist/img/unilever-logo.png') }}" style="width: 40%; height: auto; display: block; margin: 0 auto; margin-top: 15px;"></a> -->
      </div>
      <p class="login-box-msg">Sign in to start your session</p>
      <form action="{{ url('login') }}" class="form margin-bottom-40" method="POST">
        {{ csrf_field() }}
        <div class="form-group has-feedback">
          <input type="text" name="email" class="form-control" placeholder="Email" required>
          <span class="glyphicon glyphicon-user form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" name="password" class="form-control" placeholder="Password" autocomplete="new-password" required>
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <div class="row">
          @if(session('error'))<div class="col-md-12" style="padding-bottom:10px;">
            <center><small style="color:red;"> {{ session('error') }}</small></center>
          </div>@endif
        </div>
        <div class="row">
          <div class="col-xs-8">
            {{-- <div class="checkbox icheck">
            <label>
              <input type="checkbox" name="remember_me"> Remember Me
            </label>
          </div> --}}
          </div>
          <div class="col-xs-4">
            <button type="submit" class="btn btn-success btn-block btn-flat">Sign In</button>
          </div>
        </div>
        <div style="padding-bottom:5px;">
          <center>or</center>
        </div>
        <div class="row" style="padding:0px 13px 0px 13px;">
          <a href="{{url('login-fb')}}"><button type="button" class="btn btn-primary btn-flat btn-block" style="background-color:#4267b2"><i class="fa fa-facebook-square" style="margin-right:10px;"></i>Login With Facebook</button></a>
        </div>
        <div class="row" style="padding:0px 13px 0px 13px;">
          <a href="{{ url('login-office') }}" class="btn btn-default bg-orange btn-block btn-flat"><i class="fa fa-windows"></i> Sign In with Office 365</a>
          <!-- <a href="{{url('login-office')}}" target="_blank" class=><button type="button" class="btn btn-primary btn-flat btn-block" style="background-color:#4267b2"><i class="fa fa-facebook-square" style="margin-right:10px;"></i>Login With Facebook</button></a> -->
        </div>
      </form>
      <a href="#" class="forgot-password">I forgot my password</a><br>
      <a href="{{ url('register') }}" class="text-center">Register a new membership</a><br><br>
      <p style="font-size: 14px; text-align: center;"><img src="{{ asset('alte/dist/img/1go_logistics.png') }}" style="width: 50%; height: auto;"></p>
    </div>
  </div>
  <div class="modal fade modal-password-reset">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span></button>
          <h4 class="modal-title">Password Reset</h4>
        </div>
        <form action="{{ url('api/forgot-password') }}" method="GET">
          <div class="modal-body">
            <div class="form-group">
              <label>Verified Email</label>
              <input type="email" name="email" class="form-control" required>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-primary">Send Reset Link</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>

</html>
<script src="{{ asset('alte/plugins/jQuery/jquery-2.2.3.min.js') }}"></script>
<script src="{{ asset('alte/bootstrap/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('alte/plugins/iCheck/icheck.min.js') }}"></script>
<script>
  $(function() {
    let width = window.innerWidth;
    let height = window.innerHeight;
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-green',
      radioClass: 'iradio_square-green',
    });

    $('.forgot-password').on('click', function() {
      $('.modal-password-reset').modal('show');
    });

  });
</script>