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
            <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1">
            <h2>Biodata Mahasiswa</h2>
                <div class="form-group">
                    <strong>Nomor Induk Kewarganegaraan (NIK)</strong>
                    <input type="number" name="nik" class="form-control" value="{{ $mahasiswa->nik }}" placeholder="Masukkan Nik Mahasiswa">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1">
                <div class="form-group">
                    <strong>Nim:</strong>
                    <input type="text" name="nim" class="form-control" value="{{ $mahasiswa->nim }}" placeholder="Masukkan Nim Anda">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1">
                <div class="form-group">
                    <strong>Nama Lengkap</strong>
                    <input type="text" name="nama" class="form-control" value="{{ $mahasiswa->nama }}" placeholder="Masukkan Nama Anda">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1">
                <div class="form-group">
                    <strong>Tempat Lahir</strong>
                    <input type="text" name="tempatlahir" class="form-control" value="{{ $mahasiswa->tempatlahir }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1">
                <div class="form-group">
                    <strong>Tanggal Lahir</strong>
                    <input type="date" name="tgllahir" class="form-control" value="{{ $mahasiswa->tgllahir }}" placeholder="Masukkan Nama Anda">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1">
                <div class="form-group">
                <strong>Jenis Kelamin</strong><br>
                    <select id="jenisklm" class="form-control" value="{{ $mahasiswa->jenisklm }}" name="jenisklm">
                        <option selected>Pilih...</option>
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                    </select>  
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1">
                <div class="form-group">
                <strong>Agama</strong><br>
                    <select id="agama" class="form-control" value="{{ $mahasiswa->agama }}" name="agama">
                        <option selected>Pilih...</option>
                        <option>Islam</option>
                        <option>Kristen</option>
                        <option>Katolik</option>
                        <option>Buddha</option>
                        <option>Hindu</option>
                        <option>Konghuchu</option>
                    </select>  
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1">
                <div class="form-group">
                <strong>Golongan Darah</strong><br>
                    <select id="goldar" class="form-control" value="{{ $mahasiswa->goldar }}" name="goldar">
                        <option selected>Pilih...</option>
                        <option>A</option>
                        <option>B</option>
                        <option>AB</option>
                        <option>O</option>
                    </select>  
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1">
                <div class="form-group">
                    <strong>Nomor Handphone</strong>
                    <input type="number" name="nohp" class="form-control" value="{{ $mahasiswa->nohp }}" >
                </div>
                
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1">
                <div class="form-group">
                    <strong>E-mail</strong>
                    <input type="email" name="email" class="form-control" value="{{ $mahasiswa->email }}" >
                </div>
                
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1">
                <div class="form-group">
                <h3>Alamat Tempat Asal</h3>
                    <strong>Provinsi</strong>
                    <input type="text" name="asalprov" class="form-control" value="{{ $mahasiswa->asalprov }}">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1">
                <div class="form-group">
                    <strong>Kabupaten</strong>
                    <input type="text" name="asalkab" class="form-control" value="{{ $mahasiswa->asalkab }}" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1">
                <div class="form-group">
                    <strong>Kecamatan</strong>
                    <input type="text" name="asalkec" class="form-control" value="{{ $mahasiswa->asalkec }}" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1">
                <div class="form-group">
                    <strong>Desa</strong>
                    <input type="text" name="asaldes" class="form-control" value="{{ $mahasiswa->asaldes }}" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1">
                <div class="form-group">
                    <strong>Kelurahan</strong>
                    <input type="text" name="asalkel" class="form-control" value="{{ $mahasiswa->asalkel }}" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1">
                <div class="form-group">
                    <strong>Nama Jalan</strong>
                    <input type="text" name="asaljalan" class="form-control" value="{{ $mahasiswa-> asaljalan }}" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1">
                <div class="form-group">
                    <strong>Nama Kompleks</strong>
                    <input type="text" name="asalkompleks" class="form-control" value="{{ $mahasiswa-> asalkompleks }}" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1">
                <div class="form-group">
                    <strong>Nomor Rumah</strong>
                    <input type="number" name="asalnorumah" class="form-control" value="{{ $mahasiswa->asalnorumah }}" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1">
                <div class="form-group">
                <h3>Alamat Tempat Tinggal</h3>
                    <strong>Provinsi</strong>
                    <input type="text" name="provinsi" class="form-control" value="{{ $mahasiswa->provinsi }}" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1">
                <div class="form-group">
                    <strong>Kabupaten</strong>
                    <input type="text" name="kabupaten" class="form-control" value="{{ $mahasiswa->kabupaten }}" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1">
                <div class="form-group">
                    <strong>Kecamatan</strong>
                    <input type="text" name="kecamatan" class="form-control" value="{{ $mahasiswa->kecamatan }}" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1">
                <div class="form-group">
                    <strong>Desa</strong>
                    <input type="text" name="desa" class="form-control" value="{{ $mahasiswa->desa }}" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1">
                <div class="form-group">
                    <strong>Kelurahan</strong>
                    <input type="text" name="kelurahan" class="form-control" value="{{ $mahasiswa->kelurahan }}" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1">
                <div class="form-group">
                    <strong>Nama Jalan</strong>
                    <input type="text" name="jalan" class="form-control" value="{{ $mahasiswa->jalan }}" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1">
                <div class="form-group">
                    <strong>Nama Kompleks</strong>
                    <input type="text" name="kompleks" class="form-control" value="{{ $mahasiswa->kompleks }}" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1">
                <div class="form-group">
                    <strong>Skill</strong>
                    <textarea class="form-control" value="{{ $mahasiswa->skill }}" style="height:50px" name="skill" ></textarea>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1">
                <div class="form-group">
                    <strong>Nomor Rumah</strong>
                    <input type="number" name="norumah" class="form-control" value="{{ $mahasiswa->norumah }}" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1">
                <div class="form-group">
                    <strong>Image:</strong>
                    <input type="file" name="image" class="form-control" value="{{ $mahasiswa->image }}" placeholder="image">
                </div>
            </div>
        </div>
        
        
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1">
                <label for="fakultas">Fakultas</label>
                <select id="fakultas" class="form-control" value="{{ $mahasiswa->fakultas }}" name="fakultas">
                    <option selected>Choose...</option>
                    <option>Ekonomi dan Bisnis</option>
                    <option>Hukum</option>
                    <option>Kedokteran</option>
                    <option>Teknik</option>
                    <option>Ilmu Sosial dan Ilmu Politik</option>
                    <option>Ilum Budaya</option>
                    <option>Pertanian</option>
                    <option>Matematika dan Pengetahuan Alam</option>
                    <option>Peternakan</option>
                    <option>Kodekteran Gigi</option>
                    <option>Kesehatan Masyarakat</option>
                    <option>Ilum Kelautan dan Perikanan</option>
                    <option>Kehutanan</option>
                    <option>Farmasi</option>
                    <option>Keperawatan</option>
                </select>
            </div>
                
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1">
                <label for="prodi">Program Studi</label>
                <select id="prodi" class="form-control" value="{{ $mahasiswa->prodi }}" name="prodi">
                    <option selected>Choose...</option>
                    <option>Matematika-S1</option>
                    <option>Matematika-S2</option>
                    <option>Matematika-S3</option>
                    <option>Sistem Informasi-S1</option>
                    <option>Ilmu Aktuaria-S1</option>
                </select>
            </div>
                
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1">
                <div class="form-group">
                    <strong>Tahun Masuk</strong>
                    <input type="number" name="tahunmasuk" class="form-control" value="{{ $mahasiswa->tahunmasuk }}" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1">
                <div class="form-group">
                    <strong>Jalur Masuk</strong>
                    <input type="text" name="jalurmasuk" class="form-control" value="{{ $mahasiswa->jalurmasuk }}" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1">
                <div class="form-group">
                    <strong>Asal Sekolah</strong>
                    <input type="text" name="sekolah" class="form-control" value="{{ $mahasiswa->sekolah }}" >
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-10 offset-md-1">
                <div class="form-group">
                    <strong>NPSN Sekolah</strong>
                    <input type="number" name="npsn" class="form-control" value="{{ $mahasiswa->npsn }}" >
                </div>
            </div>
        </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">

              <button type="submit" class="btn btn-primary m-3">Submit</button>

            </div>

        </div>

     

    </form>

@endsection