@extends('layout.template')
@section('title')
<h1>Dosen</h1>
@endsection
@section('judul')
<h1>Dosen</h1>
<a class="btn btn-primary" href="{{ route('lectur.create') }}" role="button">Tambah Data</a>
<table class="table">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">NIDN</th>
            <th scope="col">Nama</th>
            <th scope="col">Jenis Kelamin</th>
            <th scope="col">Alamat</th>
            <th scope="col">Photo</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($lecturs as $data)
        <tr>
        <th scope="row">{{$loop->iteration}}</th>
        <td>{{$data->nidn}}</td>
        <td>{{$data->name}}</td>
        <td>{{$data->gender}}</td>
        <td>{{$data->address}}</td>
        <td><img src="{{ asset('images') }}/{{$data->namephoto}}"/ height="100" width="100"></td>
        <td>
            <form action="{{ route('lectur.destroy', ['lectur'=>$data->id]) }}" method="post">
            @csrf @method('DELETE')
            <a class="btn btn-primary" href="{{ route('lectur.edit', ['lectur'=>$data->id]) }}" role="button">Edit</a>
            <a class="btn btn-success" href="{{ route('lectur.show', ['lectur'=>$data->id]) }}" role="button">Show</a>
            <button type="submit" class="btn btn-danger" onclick="return confirm('apakah anda mau menghapus data ini ?')"> Delete</button>
            </form>
        </td>
        </tr>
    </tbody>
    @endforeach
</table>
@endsection
