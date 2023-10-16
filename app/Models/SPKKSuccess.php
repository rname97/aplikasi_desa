<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SPKKSuccess extends Model
{
    use HasFactory;
    protected $table = "surat_pengantar_kk_success";

    protected $fillable = [
        'spkk_id',
        'spkkFile'
    ];
}
