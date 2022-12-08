<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beli extends Model
{
    public function user()
    {
        return $this->hasMany('App/user','id_user', 'id');
    }
    public function bayar()
    {
        return $this->hasMany('App/Bayar','id_bayar', 'id');
    }
}
