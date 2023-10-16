<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SPKKFailed extends Model
{
    use HasFactory;
    protected $table = "surat_pengantar_kk_failed";

    protected $fillable = [
        'spkk_id',
        'spkkDesk'
    ];
}
