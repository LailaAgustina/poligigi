@extends('layout')
@section('judul')
Daftar poligigi
@endsection
@section('konten')

<table class="table table-hover">
	<thead>
		<tr>
			<th>Nama</th>
			<th>Detail</th>
			<th>Edit</th>
			<th>Hapus</th>
		</tr>
	</thead>
	<tbody>
		@foreach($data as $a)
		<tr>
			<td>{{$a->pasien}}</td>
		<td>
			<a href="{{ url('poligigi/'.$a->id) }} " class="btn btn-primary"><i class="glyphicon glyphicon-eye-open">
			</i></a>
		</td>
		<td>
			<a href="{{ url('poligigi/'.$a->id.'/edit') }} " class="btn btn-primary"><i class="glyphicon glyphicon-edit"></i></a>
		</td>
		<td>
			<form action="{{ url('poligigi/'.$a->id)}}" method="post">
				{{csrf_field()}}
				<input type="hidden" name="_method" value="DELETE">
				<button type="sumbit" class="btn btn-danger"><i class="glyphicon glyphicon-trash"></i></button>
			</form>
		</td>
		</tr>
		@endforeach
	</tbody>
</table>
@endsection