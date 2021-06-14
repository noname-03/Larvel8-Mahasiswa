@extends('layout.template')
@section('title')
<h1>Kegiatan</h1>
@endsection
@section('judul')
<h1>Kegiatan</h1>
<a class="btn btn-primary" href="{{ route('activity.create') }}" role="button">Tambah Data</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Jam</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Ruangan</th>
            <th scope="col">Nama Kegiatan</th>
            <th scope="col">Photo</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($activities as $data)
        <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$data->time}}</td>
        <td>{{$data->date}}</td>
        <td>{{$data->room}}</td>
        <td>{{$data->activity}}</td>
        <td><img src="{{ asset('images') }}/{{$data->namephoto}}"/ height="100" width="100"></td>
        <td>
            <form action="{{ route('activity.destroy', ['activity'=>$data->id]) }}" method="post">
            @csrf @method('DELETE')
            <a class="btn btn-primary" href="{{ route('activity.edit', ['activity'=>$data->id]) }}" role="button">Edit</a>
            <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda mau menghapus data ini ?')"> Delete</button>
            </form>
        </td>
        </tr>
    </tbody>
    @endforeach
</table>
@endsection
