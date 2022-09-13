<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Kategori;
use App\Models\Pembeli;
use App\Models\Pembelian;
use App\Models\penjualan;
use App\Models\Suplier;

class Barang extends Model
{
    use HasFactory;

    protected $table = 'barang';

    protected $guarded = [];

    public function Kategori(){
        return $this->belongsTo(Kategori::class);
    }

    public function Pembeli(){
        return $this->belongsTo(Pembeli::class);
    }

    public function Pembelian(){
        return $this->hasMany(Pembelian::class);
    }

    public function Penjualan(){
        return $this->hasMany(Penjualan::class);
    }

    public function Suplier(){
        return $this->belongsTo(Suplier::class);
    }
}
