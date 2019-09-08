@extends('pages.layout.master')
@section('title','mahasiswa')

@section('content')
<div class="container">
<div class="row">

<div class="col">


<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">NIM</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
    @foreach(mahasiswas as mahasiswa)
    <tr>
      <th scope="row">{{$mahasiswa->id}}</th>
      <td>{{mahasiswa->nama}}</td>
      <td>{{mahasiswa->nim}}</td>
      <td>{{mahasiswa->email}}</td>
    </tr>

    @endforeach
  </tbody>
</table>

</div>
</div>
</div>
@stop


