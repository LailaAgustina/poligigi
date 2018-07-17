<!DOCTYPE html>
<html>
<head>
	<title>@yield('judul')</title>
	<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
		<link rel="stylesheet" type="text/css" href="{{ asset('bootstrap/css/ok.css') }}">
</head>
<body>
	<div class="row" align="center">
	<div class="col-md-6 col-md-offset-3">
		<a href="{{ url('')}}" class="btn btn-primary"><i class="glyphicon-plus"
		></i>Home</a>
		<a href="{{ url('/poligigi/create')}}" class="btn btn-success"><i class="glyphicon-plus"
		></i>Tambah</a>
		<a href="{{ url('/poligigi')}}" class="btn btn-primary"><i class="glyphicon-plus"
		></i>Daftar </a>
</div>
</div>
	<div class="row">
	<div class="col-md-6 col-md-offset-3">
		@yield('konten')
</div>
</div>
</body>
</html>