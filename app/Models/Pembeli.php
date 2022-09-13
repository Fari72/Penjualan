<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;

class Pembeli extends Model
{
    use HasFactory;

    protected $table = 'pembeli';

    protected $guarded = [];

    public function Barang(){
        return $this->belongsToMany(Barang::class);
    }

    public function Penjualan(){
        return $this->hasMany(Penjualan::class);
    }
}
