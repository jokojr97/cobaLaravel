@extends ('layout/main')

@section('title', 'Tambah Mahasiswa')

@section('container')
	<div class="container">
		<div class="row">
			<div class="col">
				<h1 class="mt-3">Form Tambah Mahasiswa</h1>
				<hr>

				<div class="row">
					<div class="col-6">	
						<form method="post" action="/students">							
						  @csrf
						  <div class="form-group">
						    <label for="nama">Nama</label>
						    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" placeholder="Masukkan Nama Mahasiswa" value="{{old('nama')}}">
							
				            @error('username')
				            <div class="invalid-feedback">salah</div>
				            @enderror
						  </div>						
						  <div class="form-group">
						    <label for="email">Email</label>
						    <input type="email" class="form-control @error('nama') is-invalid @enderror" name="email" id="email" placeholder="Masukkan Email Mahasiswa" value="{{old('email')}}">		
							@error('email')
							    <div class="invalid-feedback">{{ $message }}</div>
							@enderror
						  </div>						
						  <div class="form-group">
						    <label for="nrp">NRP</label>
						    <input type="text" class="form-control @error('nrp') is-invalid @enderror" name="nrp" id="nrp" placeholder="Masukkan NRP Mahasiswa" value="{{old('nrp')}}">
							@error('nrp')
							    <div class="invalid-feedback">{{ $message }}</div>
							@enderror
						  </div>						
						  <div class="form-group">
						    <label for="jurusan">Jurusan</label>
						    <input type="text" class="form-control @error('jurusan') is-invalid @enderror" name="jurusan" id="jurusan" placeholder="Masukkan Jurusan Mahasiswa" value="{{old('jurusan')}}">
							@error('jurusan')
							    <div class="invalid-feedback">{{ $message }}</div>
							@enderror
						  </div>	
						  <button type="submit" class="btn btn-primary float-right">Simpan</button>	
						</form>
					</div>	
				</div>		
			</div>
		</div>
	</div>
@endsection()
