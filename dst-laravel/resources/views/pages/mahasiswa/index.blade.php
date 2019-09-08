@extends('pages.layout.master')
@section('title','mahasiswa')

@section('content')
<div class="container">
<div class="row mt-5">

<div class="col">
<a href="{{route('mahasiswa.create')}}" class="btn btn-primary">Tambah </a>


<table class="table">
  <thead class="thead-light">
    
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nama</th>
      <th scope="col">NIM</th>
      <th scope="col">Email</th>
      <th>Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php $nomor = 1 ?>
    @foreach($mahasiswas as $mahasiswa)
    <tr>
      <th scope="row">{{$nomor}}</th>
      <td>{{$mahasiswa->nama}}</td>
      <td>{{$mahasiswa->nim}}</td>
      <td>{{$mahasiswa->email}}</td>
      <td>
      <a href="{{route('mahasiswa.edit',$mahasiswa->id)}}" class="btn btn-secondary">Edit</a>
      <form action="{{route('mahasiswa.destroy',$mahasiswa->id)}}" method="post" class="d-inline-block">  
      {{csrf_field()}}
      {{method_field('delete')}} 
    <button type="submit" class="btn btn-danger">Delete</button>
    </form>
      </td>
    </tr>
    <?php $nomor++ ?>
    @endforeach
  </tbody>
</table>
{{$mahasiswas->links()}}
</div>
</div>
</div>
@stop


