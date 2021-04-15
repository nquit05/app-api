<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokumenModel extends Model
{
    use HasFactory;
    protected $table = "dokumen";
    protected $fillable = [
        'id_kategori',
        'id_user',
        'nama_dokumen',
        'tahun_dokumen',
        'id_periode_dokumen',
        'url',
        'nama_file',
        'deskripsi_dokumen',
        'sistem_id',
        'hasil_import',
        'tahun_upload',
        'tanggal_upload',
        'tanggal_hapus'
    ];
}
