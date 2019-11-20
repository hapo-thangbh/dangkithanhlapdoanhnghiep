<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Đăng ký tài khoản</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/backend/app.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/backend/all.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
    <link rel="stylesheet" href="{{ asset('js/backend/toastr.css') }}">
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <h4>Đăng ký thành lập doanh nghiệp</h4>
        </div>
      
        <div class="register-box-body">
          <form action="{{ route('admin.register') }}" method="post">
            @csrf
            <div class="form-group has-feedback">
              <input type="text" name="username" class="form-control" placeholder="Tên đăng nhập" value="{{ old('username') }}">
                @if($errors->has('username'))
                  <span class="required">{{ $errors->first('username') }}</span>
                @endif
            </div>
            <div class="form-group has-feedback">
              <input type="text" name="name" class="form-control" placeholder="Họ tên" value="{{ old('name') }}">
                @if($errors->has('name'))
                  <span class="required">{{ $errors->first('name') }}</span>
                @endif
            </div>
            <div class="form-group has-feedback">
                <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                @if($errors->has('email'))
                  <span class="required">{{ $errors->first('email') }}</span>
                @endif
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" placeholder="Mật khẩu" value="{{ old('password') }}">
                @if($errors->has('password'))
                  <span class="required">{{ $errors->first('password') }}</span>
                @endif
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name="confirm_password" placeholder="Xác nhận mật khẩu" value="{{ old('confirm_password') }}">
                @if($errors->has('confirm_password'))
                  <span class="required">{{ $errors->first('confirm_password') }}</span>
                @endif
            </div>
            <div class="row">
              <!-- /.col -->
              <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Đăng ký</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
      
          {{-- <div class="social-auth-links text-center">
            <p>- Hoặc -</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Đăng ký thông qua
              Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Đăng ký thông qua
              Google+</a>
          </div> --}}
      
          <a href="{{ route('admin.login') }}" class="text-center">Tôi đã có tài khoản</a>
        </div>
        <!-- /.form-box -->
      </div>
      <!-- /.register-box -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/backend/toastr.min.js') }}"></script>
    <script>
        @if(Session::has('fail'))
            toastr.warning("{{ Session::get('fail') }}","Thông báo",{timeOut:6000})
        @endif
    </script>
</body>

</html>
