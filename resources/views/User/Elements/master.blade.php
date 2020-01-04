<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Zing</title>
	<link rel="stylesheet" href="{{ asset('css/frontend/reset.css') }}" type="text/css">
	<link rel="stylesheet" href="{{ asset('css/frontend/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('js/frontend/slick/slick.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('css/frontend/font-awesome.css') }}" type="text/css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	{{-- <link rel="stylesheet" href="{{ asset('css/frontend/app.css') }}"> --}}
</head>
<body>
    @include('User.Elements.header')

    @yield('content')

    @include('User.Elements.footer')
    <script src="{{ asset('js/frontend/jquery-2.2.1.min.js') }}"></script>
	<script src="{{ asset('js/frontend/slick/slick.js') }}"></script>
	<script src="{{ asset('js/frontend/script.js') }}"></script>
	<script src="{{ asset('js/frontend/app.js') }}"></script>

	@yield('script')
</body>
</html>