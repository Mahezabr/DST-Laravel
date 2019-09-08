@extends('pages.layout.master');

@section('title','Mahasiswa');
@section('content')
<div class="container">
    <div class="row mt-5">
        <div class="col">
        
        <form action="{{route('mahasiswa.store')}} " method="post">
        {{csrf_field()}}
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" id="nama"  placeholder="Masukkan Nama...">
                
            </div>
            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" class="form-control" name="nim"id="nim" placeholder="Masukkan NIM..">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Masukkan email..">
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