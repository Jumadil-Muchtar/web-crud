@extends('layouts.main')
@section('container')

 
  
  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('mahasiswa.index') }}"> Back</a>
            </div>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                <img class="profile-user-img img-fluid img-circle"
                       src="/image/{{ $mahasiswa->image }}"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center">{{ $mahasiswa->nama }}</h3>

                <p class="text-muted text-center">Mahasiswa <b>{{ $mahasiswa->prodi }}</b> di <b>Universitas Hasanuddin</b> , </b>Kota Makassar</b></p>

              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- About Me Box -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">About Me</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <strong><i class="fas fa-book mr-1"></i>Asal Sekolah</strong>

                <p class="text-muted">
                {{ $mahasiswa->sekolah }}
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Lokasi</strong>

                <p class="text-muted">{{ $mahasiswa->kabupaten }}, {{ $mahasiswa->provinsi }}</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">{{ $mahasiswa->skill }}</span>
                </p>

                

                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Biodata</a></li>
                  
                </ul>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">
                    <!-- Post -->
                    <div class="post">
                      <table cellpadding="5">
                         
                          <tr>
                            <td width="30%" class="text-md-start text-sm-start">Nama Lengkap</td>
                            <td class="text-md-start text-sm-start"> : </td>
                            <td> {{ $mahasiswa->nama }}</td>
                          </tr>

                          <tr>
                            <td>NIK</td>
                            <td> : </td>
                            <td> {{ $mahasiswa->nik }}</td>
                          </tr>
                          
                          <tr>
                            <td>Tempat Tanggal Lahir</td>
                            <td> : </td>
                            <td> {{ $mahasiswa->tempatlahir }}, {{ $mahasiswa->tgllahir}}</td>
                          </tr>
                          <tr>
                            <td>Jenis Kelamin</td>
                            <td> : </td>
                            <td> {{ $mahasiswa->jenisklm }}</td>
                          </tr>
                          <tr>
                            <td>Agama</td>
                            <td> : </td>
                            <td> {{ $mahasiswa->agama }}</td>
                          </tr>
                          <tr>
                            <td>Golongan Darah</td>
                            <td> : </td>
                            <td> {{ $mahasiswa->goldar }}</td>
                          </tr>
                          <tr>
                            <td>Alamat Tempat Asal</td>
                            <td> : </td>
                            <td> {{ $mahasiswa->asalkompleks }}, {{ $mahasiswa->asaljalan }} No.{{ $mahasiswa->asalnorumah}}, Kelurahan {{ $mahasiswa->asalkel}}, Desa {{ $mahasiswa->asaldes}}, Kecamatan {{ $mahasiswa->asalkec}}, Kabpuaten {{ $mahasiswa->asalkab}}, {{ $mahasiswa->asalprov}} </td>
                          </tr>
                          <tr>
                            <td>Alamat Tempat Tinggal</td>
                            <td> : </td>
                            <td> {{ $mahasiswa->kompleks }}, {{ $mahasiswa->jalan }} No.{{ $mahasiswa->norumah}}, Kelurahan {{ $mahasiswa->kelurahan}}, Desa {{ $mahasiswa->Desa}}, Kecamatan {{ $mahasiswa->kecamatan}}, Kabupaten {{ $mahasiswa->kabupaten}}, {{ $mahasiswa->provinsi}} </td>
                          </tr>
                          <tr>
                            <td>Nomor Handphone</td>
                            <td> : </td>
                            <td> {{ $mahasiswa->nohp }}</td>
                          </tr>
                          <tr>
                            <td>E-mail</td>
                            <td> : </td>
                            <td> {{ $mahasiswa->email }}</td>
                          </tr>
                          <tr>
                            <td>NIM</td>
                            <td> : </td>
                            <td> {{ $mahasiswa->nim }}</td>
                          </tr>
                          <tr>
                            <td>Program Studi</td>
                            <td> : </td>
                            <td> {{ $mahasiswa->prodi }}</td>
                          </tr>
                          <tr>
                            <td>Fakultas</td>
                            <td> : </td>
                            <td> {{ $mahasiswa->fakultas }}</td>
                          </tr>
                          <tr>
                            <td>Tahun Masuk</td>
                            <td> : </td>
                            <td> {{ $mahasiswa->tahunmasuk }}</td>
                          </tr>
                          <tr>
                            <td>Jalur Masuk</td>
                            <td> : </td>
                            <td> {{ $mahasiswa->jalurmasuk }}</td>
                          </tr>
                          <tr>
                            <td>Asal Sekolah</td>
                            <td> : </td>
                            <td> {{ $mahasiswa->sekolah }}</td>
                          </tr>
                          <tr>
                            <td>NPSN Sekolah</td>
                            <td> : </td>
                            <td> {{ $mahasiswa->npsn }}</td>
                          </tr>
                          
                          

                        
                      </table>
                    </div>
                      
                    
                  </div>
                  <!-- /.tab-pane -->
                  
                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  
  

@endsection