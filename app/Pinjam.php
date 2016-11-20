<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pinjam extends Model
{
    protected $guarded = ['id','created_at', 'updated_at'];

    public function buku()
    {
    return $this->belongsTo('App\Buku');
    }

    public function anggota()
    {
    return $this->belongsTo('App\Anggota');
    }
}
