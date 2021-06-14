@extends('layout.template')
@section('title')
<h1>Mahasiswa</h1>
@endsection
@section('judul')
<h1>Mahasiswa</h1>
<a class="btn btn-primary" href="{{ route('student.create') }}" role="button">Tambah Data</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nim</th>
            <th scope="col">Nama</th>
            <th scope="col">Gender</th>
            <th scope="col">Alamat</th>
            <th scope="col">Photo</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($students as $data)
        <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$data->nim}}</td>
        <td>{{$data->name}}</td>
        <td>{{$data->gender}}</td>
        <td>{{$data->address}}</td>
        <td><img src="{{ asset('images') }}/{{$data->namephoto}}"/ height="100" width="100"></td>
        <td>
            <form action="{{ route('student.destroy', ['student'=>$data->id]) }}" method="post">
            @csrf @method('DELETE')
            <a class="btn btn-primary" href="{{ route('student.edit', ['student'=>$data->id]) }}" role="button">Edit</a>
            <a class="btn btn-success" href="{{ route('student.show', ['student'=>$data->id]) }}" role="button">Show</a>
            <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda mau menghapus data ini ?')"> Delete</button>
            </form>
        </td>
        </tr>
    </tbody>
    @endforeach
</table>
@endsection
