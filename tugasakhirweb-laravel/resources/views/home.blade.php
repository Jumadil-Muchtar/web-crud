@extends('layouts.main')
@section('container')

<div class="card">
    <div class="card-header">
        <h2 class="card-title">Selamat Datang</h2>
    </div>
              
    <div class="card-body">
        <p>Assalamualaikum Warahmatullahi Wabarakatuh, saya mahasiswa dengan,</p>
        
        <table >
                         
            <tr>
                <td width="40%" class="text-md-start text-sm-start">Nama </td>
                <td class="text-md-start text-sm-start"> : </td>
                <td> Jumadil</td>
            </tr>

            <tr>
                <td>Nim</td>
                <td> : </td>
                <td> H071201061</td>
            </tr>
                          
            <tr>
                <td>Mata Kuliah</td>
                <td> : </td>
                <td> Pemrograman Web</td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td> : </td>
                <td>Pemrograman Web B</td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td> : </td>
                <td> Sistem Informasi</td>
            </tr>
            
        </table>
        <br>
                          

        <p class="text-justify">
            Website ini dibuat untuk memenuhi tugas akhir dari mata kuliah Pemrograman WEB yaitu membuat Web CRUD dengan menggunakan framework yaitu Laravel.
            Website ini dibuat menggunakan Laravel (Versi 8) dan AdminLTE (Versi 3) , sebagai template web.
            Adapun fitur-fitur Web CRUD ini yaitu menampilkan data mahasiswa, membuat atau menambahkan data mahasiswa, mengubah data mahasiswa serta menghapus data mahasiswa.
        </p>
        
    </div>
</div>
              



@endsection