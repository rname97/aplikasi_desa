<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SPKTP extends Model
{
    use HasFactory;
    protected $table = "surat_pengantar_ktp";

    protected $fillable = [
        'nik',
        'nama',
        'tempatLahir',
        'tanggalLahir',
        'pekerjaan',
        'alamat',
        'status',
        'user_id',
        'admin_id',
    ];
}
