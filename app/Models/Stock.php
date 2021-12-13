<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    use HasFactory;
    protected $fillable = ['nama_barang', 'jenis_barang', 'jumlah_barang', 'tanggal_masuk', 'tanggal_kadaluarsa', 'keterangan' ];


}


