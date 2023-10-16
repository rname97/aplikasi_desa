<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SPKTPSuccess extends Model
{
    use HasFactory;
    protected $table = "surat_pengantar_ktp_success";

    protected $fillable = [
        'spktp_id',
        'spktpFile'
    ];
}
