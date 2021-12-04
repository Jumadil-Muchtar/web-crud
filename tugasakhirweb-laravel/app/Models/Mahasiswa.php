<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
   
    protected $table = 'mahasiswa';
    protected $fillable = [
        
            'nik', 'nama', 'tempatlahir', 'tgllahir', 'jenisklm', 'agama', 'goldar', 'asalprov', 
            'asalkab', 'asalkec', 'asaldes', 'asalkel', 'asaljalan', 'asalkompleks', 'asalnorumah',
            'provinsi', 'kabupaten', 'kecamatan', 'desa', 'kelurahan', 'jalan', 'kompleks', 'skill',
            'norumah', 'nohp', 'email', 'nim', 'prodi', 'fakultas', 'tahunmasuk', 'jalurmasuk', 'sekolah', 
            'npsn', 'image'
    ];
}
