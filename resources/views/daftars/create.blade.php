@extends('daftars.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Daftar Sekarang</h2>
        </div>
        <div class="pull-right">
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Daftar gagal silahkan coba lagi!<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('daftars.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="nama" class="form-control" placeholder="Nama">
            </div>
        </div>
        <div class="row mt-3">
        <div class="col-md-4">
        <strong>Jenis Kelamin:</strong>
            <select name="jk" id="jk" class="form-control" required>
                  <option disabled selected> Pilih jenis kelamin</option>
                     <option value="Laki - Laki">Laki - Laki</option>
                  <option value="Perempuan">Perempuan</option>
            </select>
         </div>
        </div>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat:</strong>
                <input type="text" name="alamat" class="form-control" placeholder="Alamat">
            </div>
        </div>
        <div class="row mt-3">
        <div class="col-md-4">
        <strong>Agama:</strong>
            <select name="agama" id="agama" class="form-control" required>
                  <option disabled selected> Agama</option>
                  <option value="Islam">Islam</option>
                  <option value="kristen">Kristen</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Buddha">Buddha</option>
            </select>
         </div>
        </div>
        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Asal Sekolah:</strong>
                <input type="text" name="asal_sekolah" class="form-control" placeholder="Asal Sekolah">
            </div>
        </div>
        <div class="row mt-3">
        <div class="col-md-4">
        <strong>Minat Jurusan:</strong>
            <select name="minat_jurusan" id="minat_jurusan" class="form-control" required>
                  <option disabled selected> Minat Jurusan</option>
                  <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                  <option value="Tata Boga">Tata Boga</option>
                  <option value="Tata Busana">Tata Busana</option>
                  <option value="Multimedia">Multimedia</option>
            </select>
         </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection