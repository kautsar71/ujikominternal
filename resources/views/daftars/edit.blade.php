@extends('daftars.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Siswa</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('daftars.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> Mengubah data gagal, silahkan coba lagi!<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('daftars.update',$daftar->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nama:</strong>
                    <input type="text" name="nama" value="{{ $daftar->nama }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Jenis Kelamin:</strong>
                <select type="text" name="jk" value="{{ $daftar->jk }}" class="form-control" placeholder="Jenis_Kelamin">
                  <option selected value="{{ $daftar->jk }}">{{ $daftar->jk }}</option>
                  <option value="Laki - Laki">Laki - Laki</option>
                  <option value="Perempuan">Perempuan</option>
            </select>
                </div>
            </div>
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>alamat:</strong>
                    <input type="text" name="alamat" value="{{ $daftar->alamat }}" class="form-control" placeholder="Alamat">
                </div>
            </div>
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>agama:</strong>
                    <select type="text" name="agama" value="{{ $daftar->agama }}" class="form-control" placeholder="Agama">
                  <option selected value="{{ $daftar->agama }}">{{ $daftar->agama }}</option>
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
                    <input type="text" name="asal_sekolah" value="{{ $daftar->asal_sekolah }}" class="form-control" placeholder="Asal Sekolah">
                </div>
            </div>
            <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Minat Jurusan:</strong>
                    <select type="text" name="minat_jurusan" value="{{ $daftar->minat_jurusan }}" class="form-control" placeholder="Minat Jurusan">
                  <option selected value="{{ $daftar->minat_jurusan }}">{{ $daftar->minat_jurusan }}</option>
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