<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Barang;

class Penjualan extends Model
{
    use HasFactory;

    protected $table = 'penjualan';

    protected $guarded = [];

    public function barang(){
        return $this->belongsToMany(Barang::class);
    }
}
