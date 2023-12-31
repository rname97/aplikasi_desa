<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SKUsahaSuccess extends Model
{
    use HasFactory;
    protected $table = "surat_keterangan_usaha_success";

    protected $fillable = [
        'skUsaha_id',
        'skUsahaFile'
    ];
}
