@extends('layouts.main')

     

@section('container')
    @include('layouts.preload')

        <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Data Mahasiswa</h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="row">
                    <div class="col-lg-12 " style="margin-top: -20px;">
                        <div class="pull-right text-right">
                            <a class="btn btn-success my-2" href="{{ route('mahasiswa.create') }}"> Input Data Baru</a>
                        </div>
                    </div>
                    </div>

                    @if ($message = Session::get('success'))

                    <div class="alert alert-success">

                        <p>{{ $message }}</p>

                    </div>

                    @endif



                    <table class="table table-bordered">

                    <tr class="text-center">

                        <th width="5%">No</th>

                        <th width="75px">Foto</th>

                        <th width="20%">Nama</th>

                        <th width="100px">Nim</th>

                        <th width="15%">Prodi</th>

                        <th>Alamat</th>

                        <th  width="15%">Action</th>

                    </tr>

                    @foreach ($mahasiswa as $mahasiswaa)

                    <tr>

                        <td>{{ ++$i }}</td>
                        <td><img alt="foto mahasiswa" src="/image/{{ $mahasiswaa->image }}" width="75px"></td>
                        <td>{{ $mahasiswaa->nama }}</td>
                        <td>{{ $mahasiswaa->nim }}</td>
                        <td>{{ $mahasiswaa->prodi }}</td>
                        <td> Kabupaten {{ $mahasiswaa->kabupaten}}, {{ $mahasiswaa->provinsi}}</td>
                        <td>

                            <form action="{{ route('mahasiswa.destroy',$mahasiswaa->id) }}" method="POST">
                                <a class="btn btn-info margin-small" href="{{ route('mahasiswa.show',$mahasiswaa->id) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
                                    <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                    <path d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                </a>
                                <a class="btn btn-primary margin-small"  href="{{ route('mahasiswa.edit',$mahasiswaa->id) }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil" viewBox="0 0 16 16">
                                    <path d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                    </svg> 
                                </a>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger margin-small">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z"/>
                                    </svg>
                                </button>
                            </form>
                        </td>
                    </tr>

                    @endforeach

                    </table>
                
              </div>
              <!-- ./card-body -->
              
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>

    
    {!! $mahasiswa->links() !!}
@endsection