@extends('layout')
@section('judul')
Buat poligigi
@endsection
@section('konten')
<form action="{{ url('poligigi') }}" method="post">
	{{ csrf_field() }}
	<label>pasien</label>
	<input type="text" name="pasien" class="form-control">
	<label>usia</label>
	<input type="text" name="usia" class="form-control">
	<label>keluhan</label>
	<input type="text" name="keluhan" class="form-control">
	<input type="submit" class="btn btn-success" value="Simpan">
</form>
@endsection