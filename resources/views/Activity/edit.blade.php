@extends('layout.template')
@section('title')
<h1>Kegiatan</h1>
@endsection
@section('judul')
<h1>Judul Kegiatan</h1>
@foreach ($activities as $data)
<form action="{{ route('activity.update', ['activity'=>$data->id]) }}" method="POST" enctype="multipart/form-data">
    @csrf @method('PATCH')
    <div class="form-row">
        <div class="form-group col-md-6">
            <label for="inputTime">Jam</label>
        <input type="time" name="time" class="form-control" value="{{$data->time}}" id="inputTime">
    </div>
        <div class="form-group col-md-6">
            <label for="inputDate">Tanggal</label>
            <input type="date" name="date" value="{{$data->date}}" class="form-control" id="inputDate">
        </div>
    </div>
    <div class="form-group">
        <label for="inputRoom">Ruangan</label>
        <input type="text" name="room" class="form-control" id="inputRoom" value="{{$data->room}}">
      </div>
    <div class="form-group">
      <label for="inputActivity">Nama Kegiatan</label>
      <input type="text" name="activity" class="form-control" id="inputActivity" value="{{$data->activity}}">
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">Masukan Foto Anda</label>
          <input type="file" name="photo" class="form-control-file" id="exampleFormControlFile1">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endforeach
@endsection
