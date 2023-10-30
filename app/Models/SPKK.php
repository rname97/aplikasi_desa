<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SPKK extends Model
{
    use HasFactory;
    protected $table = "surat_pengantar_kk";

    protected $fillable = [
        'noKartuKeluarga',
        'user_id',
        'admin_id',
        'status_id',
    ];
}
