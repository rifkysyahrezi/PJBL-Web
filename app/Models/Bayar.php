<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bayar extends Model
{
    public function barang()
    {
        return $this->belongsTo('App/Barang','id_barang', 'id');
    }
    public function bayar()
    {
        return $this->belongsTo('App/Bayar','id_bayar', 'id');
    }
}
