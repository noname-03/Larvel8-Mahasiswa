@extends('layout.template')
@section('title')
<h1>Mahasiswa</h1>
@endsection
@section('judul')
<h1>Mahasiswa</h1>
<div class="container">
    <div class="card kartu">
      <div class="row">
        <div class="col-md-4">
        <div class="foto">
          <img src="{{ asset('images') }}/{{$lectur->namephoto}}" alt="" width="200" height="300">
        </div>
        </div>
        <div class="col-md-8 kertas-biodata">
          <div class="biodata">
          <table width="100%" border="0">
      <tbody><tr>
          <td valign="top"><br>
            <h1>Teknik Informatika</h1><br>
          <table border="0" width="100%" style="padding-left: 2px; padding-right: 13px;">
            <tbody>
                <tr>
                <td width="25%" valign="top" class="textt">NIDN</td>
                  <td width="2%">:</td>
                  <td style="color: rgb(118, 157, 29); font-weight:bold">{{ $lectur->nidn}}</td>
                </tr>
                <tr>
                  <td valign="top" class="textt">Nama</td>
                    <td valign="top">:</td>
                    <td>{{$lectur->name}}</td>
                </tr>
                <tr>
                  <td valign="top" class="textt">Jenis Kelamin</td>
                    <td valign="top">:</td>
                    <td>{{$lectur->gender}}</td>
                </tr>
            <tr>
                <td class="textt">Alamat</td>
                  <td>:</td>
                  <td>{{$lectur->address}}</td>
              </tr>
          </tbody></table>
          </td>
      </tr>
      </tbody></table>
    </div>
        </div>
      </div>
    </div>
  </div>
@endsection
