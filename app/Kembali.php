<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kembali extends Model
{
    protected $guarded = ['id','created_at', 'updated_at'];

     public function pinjam()
    {
    return $this->belongsTo('App\Pinjam');
    }
}
