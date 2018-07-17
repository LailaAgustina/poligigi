@extends('layout')
@section('judul')
Edit poligigi
@endsection
@section('konten')
<form action="{{ url('poligigi/'.$data->id) }}" method="post">
	<input type="hidden" name="_method" value="PUT">
	{{ csrf_field() }}
	<label>pasien</label>
	<input type="text" name="pasien" value="{{$data->pasien}}" class="form-control">
	<label>usia</label>
	<input type="text" name="usia" value="{{$data->usia}}" class="form-control">
	<label>keluhan</label>
	<input type="text" name="keluhan" value="{{$data->keluhan}}" class="form-control">
	<input type="submit" class="btn btn-success" value="Simpan">
</form>
@endsection