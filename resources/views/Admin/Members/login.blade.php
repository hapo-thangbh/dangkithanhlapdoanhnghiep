<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Đăng nhập</title>
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

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <h4>Đăng ký thành lập doanh nghiệp</h4>
        </div>
        <div class="login-box-body">
            {{-- @if(session('thongbao'))
                <div class="alert alert-danger">
                    {{ session('thongbao') }}
                </div>
            @endif --}}
            <form action="{{ route('admin.login') }}" method="POST">
                @csrf
                <div class="form-group has-feedback">
                    <input type="text" name="username" class="form-control" placeholder="Tên đăng nhập" value="{{ old('username') }}">
                    @if($errors->has('username'))
                        <span class="required">{{ $errors->first('username') }}</span>
                    @endif
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control" placeholder="Mật khẩu">
                    @if($errors->has('password'))
                        <span class="required">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <label class="checkbox-primary">
                            <input type="checkbox" id="check">
                            <span></span>
                        </label>
                        <label class="lbl-checkbox-primary" for="check">Nhớ mật khẩu</label>
                    </div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Đăng nhập</button>
                    </div>
                </div>
            </form>
            {{-- <div class="social-auth-links text-center">
                <p>- Hoặc -</p>
                <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Đăng nhập thông qua
                    Facebook</a>
                <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Đăng nhập thông qua
                    Google+</a>
            </div>
            <a href="#">Quên mật khẩu?</a><br> --}}
            <a href="{{ route('admin.register') }}" class="text-center">Đăng ký tài khoản</a>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/backend/toastr.min.js') }}"></script>

    <script>
        @if(Session::has('fail'))
            toastr.warning("{{ Session::get('fail') }}","Thông báo",{timeOut:6000})
        @endif
    </script>
</body>
</html>
