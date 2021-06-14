@extends('layout.template')
@section('title')
<h1>Mahasiswa</h1>
@endsection
@section('judul')
<h1>Judul Mahasiswa</h1>
@foreach ($students as $data)
<form action="{{ route('student.update', ['student'=>$data->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PATCH')
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputPassword4">Nim</label>
        <input type="text" name="nim" class="form-control" value="{{$data->nim}}" id="inputPassword4">
    </div>
        <div class="form-group col-md-6">
            <label for="inputEmail4">Nama</label>
            <input type="text" name="name" value="{{$data->name}}" class="form-control" id="inputEmail4">
        </div>
    </div>
    <div class="form-group">
        <label for="inputGender">Jenis Kelamin</label>
        <input type="text" name="gender" class="form-control" id="inputGender" value="{{$data->gender}}">
      </div>
    <div class="form-group">
      <label for="inputAddress">Alamat</label>
      <input type="text" name="address" class="form-control" id="inputAddress" value="{{$data->address}}">
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">Masukan Foto Anda</label>
          <input type="file" name="photo" class="form-control-file" id="exampleFormControlFile1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endforeach
@endsection
