<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    public function bayar()
    {
        return $this->hasMany('App/Bayar','id_bayar', 'id');
    }
}
