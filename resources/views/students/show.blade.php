@extends ('layout/main')

@section('title', 'Detail Mahasiswa')

@section('container')
	<div class="container">
		<div class="row">
			<div class="col">
				<h1 class="mt-3">Detail Mahasiswa</h1>
				<hr>
				<div class="row">
					<div class="col-6">	
						<div class="card">
						  <div class="card-body">
						    <h5 class="card-title text-capitalize">{{$student->nama}}</h5>
						    <h6 class="card-subtitle mb-2 text-muted">{{$student->nrp}}</h6>
						    <p class="card-text">{{$student->email}}</p>
						    <p class="card-text">{{$student->jurusan}}</p>
						    <a href="" class="btn btn-info mr-1">Edit</a>
						    <a href="" class="btn btn-danger mr-1">Hapus</a>
						    <a href="/students" class="card-link">Kembali</a>
						  </div>
						</div>
					</div>	
				</div>		
			</div>
		</div>
	</div>
@endsection()
