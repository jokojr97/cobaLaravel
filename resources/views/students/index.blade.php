@extends ('layout/main')

@section('title', 'Daftar Mahasiswa')

@section('container')
	<div class="container">
		<div class="row">
			<div class="col">
				<h1 class="mt-3">Daftar Mahasiswa
				<a href="/students/create" class="btn btn-primary">Tambah Data</a></h1>
				<hr>
				<div class="row">
					<div class="col-6">
						@if (session('status'))
						<div class="alert alert-success">
							{{session('status')}}
						</div>
						@endif						
						<ul class="list-group">
							@foreach ($students as $student)
						  <li class="list-group-item d-flex justify-content-between align-items-center">
						    {{$student->nama}}
						    <a class="badge badge-info" href="/students/{{$student->id}}">Detail</a>
						  </li>
						  @endforeach
						</ul>	
					</div>	
				</div>		
			</div>
		</div>
	</div>
@endsection()
