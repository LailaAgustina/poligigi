@extends('layout')
@section('judul')
Detail poligigi
@endsection
@section('konten')
<table class="table table-hover">
	<thead>
		<tr>
			<th>pasien</th>
			<th>usia</th>
			<th>keluhan</th>
			<th>Di buat tgl</th>
		</tr>
	</thead>
<tbody>
	<tr>
		<td>{{$data->pasien}}</td>
		<td>{{$data->usia}}</td>
		<td>{{$data->keluhan}}</td>
		<td>{{$data->created_at}}</td>
	</tr>
</tbody>
</table>
@endsection