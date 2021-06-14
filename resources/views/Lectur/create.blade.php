@extends('layout.template')
@section('title')
<h1>Dosen</h1>
@endsection
@section('judul')
<h1>Judul Dosen</h1>
<form action="{{ route('lectur.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="form-row">
        <div class="form-group col-md-6">
          <label for="inputPassword4">NIDN</label>
          <input type="text" name="nidn" class="form-control" id="inputPassword4">
        </div>
      <div class="form-group col-md-6">
        <label for="inputEmail4">Nama</label>
        <input type="text" name="name" class="form-control" id="inputEmail4">
      </div>
    </div>
    <div class="form-group">
      <label for="inputGender">Jenis Kelamin</label>
      <input type="text" name="gender" class="form-control" id="inputGender" placeholder="Masukan Jenis Kelamin anda">
    </div>
    <div class="form-group">
      <label for="inputAddress">Alamat</label>
      <input type="text" name="address" class="form-control" id="inputAddress" placeholder="Masukan alamat anda">
    </div>
    <div class="form-group">
          <label for="exampleFormControlFile1">Masukan Foto Anda</label>
          <input type="file" name="photo" class="form-control-file" id="exampleFormControlFile1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection
