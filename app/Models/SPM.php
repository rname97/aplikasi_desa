<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SPM extends Model
{
    use HasFactory;
    protected $table = "surat_pengaduan_masyarakat";

    protected $fillable = [
        'keteranganSPM',
        'fotoBuktiSPM',
        'status',
        'statusDesk',
        'user',
        'admin_id',
    ];
}
