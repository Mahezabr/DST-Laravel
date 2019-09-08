@extends('pages.layout.master');

@section('title','Edit Mahasiswa');
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col">
        
        <form action="{{route('mahasiswa.update', $mahasiswa->id)}} " method="post">
        {{csrf_field()}}
        {{method_field('put')}}
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama"  value="{{$mahasiswa->nama}}">
                
            </div>
            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" class="form-control" name="nim"id="nim" value="{{$mahasiswa->nim}}">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" value="{{$mahasiswa->email}}" id="email" aria-describedby="emailHelp">
            </div>

            <!--<div class="form-group form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
        </div>
    </div>
</div>