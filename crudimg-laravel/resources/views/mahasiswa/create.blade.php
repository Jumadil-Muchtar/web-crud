@extends('layouts.main')

  

@section('container')

<div class="row">

    <div class="col-lg-12 margin-tb">

        <div class="pull-left">

            <h2>Tambahkan Mahasiswa Baru</h2>

        </div>

        <div class="text-right my-2">

            <a class="btn btn-primary" href="{{ route('mahasiswa.index') }}"> Back</a>

        </div>

    </div>

</div>

     

@if ($errors->any())

    <div class="alert alert-danger">

        <strong>Whoops!</strong> There were some problems with your input.<br><br>

        <ul>

            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach

        </ul>

    </div>

@endif

     

<form action="{{ route('mahasiswa.store') }}" method="POST" enctype="multipart/form-data">

    @csrf
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nim:</strong>
                <input type="text" name="nim" class="form-control" placeholder="Masukkan Nim Anda">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama Anda">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat:</strong>
                <textarea class="form-control" style="height:100px" name="alamat" placeholder="Masukkan Alamat Anda"></textarea>
            </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12">
            <label for="prodi">Program Studi</label>
            <select id="prodi" class="form-control" name="prodi">
                <option selected>Choose...</option>
                <option>Matematika</option>
                <option>Sistem Informasi</option>
                <option>Ilmu Aktuaria </option>
            </select>
            </div>
            
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Image:</strong>
                <input type="file" name="image" class="form-control" placeholder="image">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary m-3">Submit</button>
        </div>

    </div>

     

</form>

@endsection