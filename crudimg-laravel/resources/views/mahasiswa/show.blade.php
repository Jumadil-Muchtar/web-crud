@extends('layouts.main')
@section('container')

 
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
      </div>
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

                <p class="text-muted text-center">Student in <b>{{ $mahasiswa->prodi }}</b> from the <b>Hasanuddin University</b> at </b>Makassar City</b></p>
                

                <ul class="list-group list-group-unbordered mb-3">
                  <li class="list-group-item">
                    <b>NIM </b> <a class="float-right">{{ $mahasiswa->nim }}</a>
                  </li>
                 
                  
                </ul>

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
                <strong><i class="fas fa-book mr-1"></i> School</strong>

                <p class="text-muted">
                  SMAN 1 Makassar
                </p>

                <hr>

                <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

                <p class="text-muted">{{ $mahasiswa->alamat }}</p>

                <hr>

                <strong><i class="fas fa-pencil-alt mr-1"></i> Skills</strong>

                <p class="text-muted">
                  <span class="tag tag-danger">Analitic, </span>
                  <span class="tag tag-success">Coding, </span>
                  <span class="tag tag-info">Java, </span>
                  <span class="tag tag-warning">C#, and </span>
                  <span class="tag tag-primary">Computer Networking</span>
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
                  <h1 class="card-title">Achievement</h1>
              </div><!-- /.card-header -->
              
              <div class="card-body">
                <div class="tab-content">
                  
                  
                  <!-- /.tab-pane -->
                  <div  id="timeline">
                    <!-- The timeline -->
                    <div class="timeline timeline-inverse">
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-danger">
                          2020
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-user bg-primary"></i>

                        <div class="timeline-item">
                          
                          <h3 class="timeline-header">Juara 1 di Computer Networking Competition</h3>

                          <div class="timeline-body">
                            Pada 17 Agustus tahun 2020, <b>{{ $mahasiswa->nama}}</b> meraih juara 1 pada Computer Networking Competition Tingkat Nasional. Dia meraih juara setelah menyelesaikan Makalah dengan judul "Networking dan AI untuk merubah wajah dunia".
                          </div>
                          
                        </div>
                      </div>
                      <!-- END timeline item -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-user bg-primary"></i>

                        <div class="timeline-item">
                          

                          <h3 class="timeline-header">Juara 2 di Trans Studio Bandung Robotic Competition</h3>

                          <div class="timeline-body">
                            Pada 25 April tahun 2020, <b>{{ $mahasiswa->nama}}</b> meraih juara 2 pada Trans Studio Bandung Robotic Competition. Dia meraih juara 2 setelah menyelesaikan Robot Terbang ".
                          </div>
                          
                        </div>
                      </div>
                      
                      
                      <!-- END timeline item -->
                      <!-- timeline time label -->
                      <div class="time-label">
                        <span class="bg-success">
                          2019
                        </span>
                      </div>
                      <!-- /.timeline-label -->
                      <!-- timeline item -->
                      <div>
                        <i class="fas fa-user bg-primary"></i>

                        <div class="timeline-item">
                          
                          <h3 class="timeline-header">Juara 1 Olimpiade Sains Nasional Informatika</h3>

                          <div class="timeline-body">
                            Pada 02 April tahun 2019, <b>{{ $mahasiswa->nama}}</b> meraih juara 1 Olimpiade Sains Nasional Informatika 2018 Tingkat Kabupaten. Dia meraih juara 1 dengan skor 95,43 dari 100.
                          </div>
                          
                        </div>
                      </div>
                      
                      <div>
                        <i class="far fa-clock bg-gray"></i>
                      </div>
                    </div>
                  </div>
                  <!-- /.tab-pane -->

                  
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