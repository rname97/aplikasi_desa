<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SKUsaha extends Model
{
    use HasFactory;
    protected $table = "surat_keterangan_usaha";

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
