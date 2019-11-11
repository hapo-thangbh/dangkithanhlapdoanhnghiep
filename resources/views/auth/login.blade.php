<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Đăng nhập</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link type="text/css" rel="stylesheet" href="{{ asset('css/all.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Google Font -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <h4>Đăng ký thành lập doanh nghiệp</h4>
        </div>
        <div class="login-box-body">
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group has-feedback">
                    <input type="email" name="email" class="form-control" placeholder="Email" value="{{ old('name') }}">
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password" class="form-control" placeholder="Password" value="{{ old('name') }}">
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck" style="margin-left: 20px">
                            <label>
                                <input type="checkbox"> Nhớ mật khẩu
                            </label>
                        </div>
                    </div>
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Đăng nhập</button>
                    </div>
                </div>
            </form>
            <div class="social-auth-links text-center">
                <p>- Hoặc -</p>
                <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> Đăng nhập thông qua
                    Facebook</a>
                <a href="#" class="btn btn-block btn-social btn-google btn-flat"><i class="fa fa-google-plus"></i> Đăng nhập thông qua
                    Google+</a>
            </div>
            <a href="#">Quên mật khẩu?</a><br>
            <a href="{{ route('register') }}" class="text-center">Đăng ký tài khoản</a>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
