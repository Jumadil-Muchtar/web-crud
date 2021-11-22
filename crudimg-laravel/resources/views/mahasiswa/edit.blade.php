@extends('layouts.main')

     

@section('container')

    <div class="row">

        <div class="col-lg-12 margin-tb">

            <div class="pull-left">

                <h2>Edit Data Mahasiswa</h2>

            </div>

            <div class="text-right m-3">

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

    

    <form action="{{ route('mahasiswa.update',$mahasiswa->id) }}" method="POST" enctype="multipart/form-data"> 

        @csrf

        @method('PUT')

     

         <div class="row">

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Nim:</strong>

                    <input type="text" name="nim" value="{{ $mahasiswa->nim }}" class="form-control" placeholder="Masukkan Nim Anda">

                </div>

            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Nama:</strong>

                    <input type="text" name="nama" value="{{ $mahasiswa->nama }}" class="form-control" placeholder="Masukkan Nama Anda">

                </div>

            </div>
            

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Alamat:</strong>

                    <textarea class="form-control" style="height:150px" name="alamat" placeholder="Masukkan Alamat Anda">{{ $mahasiswa->alamat }}</textarea>

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <strong>Program Studi:</strong>

                    <input type="text" name="prodi" value="{{ $mahasiswa->prodi }}" class="form-control" placeholder="Masukkan Prodi Anda">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">

                <div class="form-group">

                    <p style="margin: 10px 0 10px 0;"><b>Image sebelumnya :</b></p>

                    <img width="200px" src="/image/{{ $mahasiswa->image }}" width="300px">

                    <p><b>Image :</b></p>

                    <input type="file" name="image" class="form-control" placeholder="image">

                </div>

            </div>

            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

              <button type="submit" class="btn btn-primary m-3">Submit</button>

            </div>

        </div>

     

    </form>

@endsection