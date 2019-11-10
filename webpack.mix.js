const mix = require('laravel-mix');
// mix.js('resources/js/app.js', '/js')
mix.js([
    'resources/js/app.js',
	'resources/css/modules/admin/js/jquery.min.js',
	'resources/css/modules/admin/js/bootstrap.min.js',
	'resources/css/modules/admin/js/bootstrap-datepicker.min.js',
	'resources/css/modules/admin/js/fastclick.js',
	'resources/css/modules/admin/js/adminlte.min.js',
	'resources/css/modules/admin/js/app.js',
], './js/app.js')
.setPublicPath('./')
mix.styles([
    'resources/css/modules/admin/css/bootstrap.min.css',
    'resources/css/modules/admin/css/font-awesome/css/font-awesome.min.css',
    'resources/css/modules/admin/css/AdminLTE.min.css',
    'resources/css/modules/admin/css/_all-skins.min.css',
    'resources/css/modules/admin/css/bootstrap-datepicker.min.css',
    'resources/css/modules/admin/css/app.css',
], './css/all.css')

mix.sass('resources/sass/app.scss', './css/app.css')

mix.disableNotifications()
