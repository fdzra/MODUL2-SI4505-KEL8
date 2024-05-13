<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class LaporanPengaduan extends Model
{
    use HasFactory;

    protected $table = 'pengaduan';
    protected $fillable = [
        'kategori', 'deskripsi','terakhir_diupdate', 'waktu_pengaduan','bukti_pengaduan','status_pengaduan'
    ];

}
