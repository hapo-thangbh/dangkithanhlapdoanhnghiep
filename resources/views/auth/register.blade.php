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
</head>

<body class="hold-transition register-page">
    <div class="register-box">
        <div class="register-logo">
            <h4>Đăng ký thành lập doanh nghiệp</h4>
        </div>
      
        <div class="register-box-body">      
          <form action="{{ route('register') }}" method="post">
            @csrf
            <div class="form-group has-feedback">
              <input type="text" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group has-feedback">
                <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group has-feedback">
                <input type="password" name="password" class="form-control" placeholder="Password" value="{{ old('password') }}">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group has-feedback">
                <input type="password" class="form-control" name="password_confirmation" placeholder="Confirm password" value="{{ old('password_confirmation') }}">
                @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="row">
              <!-- /.col -->
              <div class="col-md-12 text-center">
                <button type="submit" class="btn btn-primary btn-block btn-flat">Đăng ký</button>
              </div>
              <!-- /.col -->
            </div>
          </form>
      
          <div class="social-auth-links text-center">
            <p>- Hoặc -</p>
            <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Đăng ký thông qua
              Facebook</a>
            <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Đăng ký thông qua
              Google+</a>
          </div>
      
          <a href="{{ route('login') }}" class="text-center">Tôi đã có tài khoản</a>
        </div>
        <!-- /.form-box -->
      </div>
      <!-- /.register-box -->
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
</body>

</html>
