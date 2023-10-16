<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SPKTPFailed extends Model
{
    use HasFactory;

    protected $table = "surat_pengantar_ktp_failed";

    protected $fillable = [
        'spktp_id',
        'spktpDesk'
    ];
}
