<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SKUsahaFailed extends Model
{
    use HasFactory;
    protected $table = "surat_keterangan_usaha_failed";

    protected $fillable = [
        'sku_id',
        'skuDesk'
    ];
}
