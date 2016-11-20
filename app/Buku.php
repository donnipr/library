<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Buku extends Model
{

  protected $guarded = ['id', 'pengarang_id', 'penerbit_id', 'rak_id' ,'created_at', 'updated_at'];

    public function pengarang()
    {
    return $this->belongsTo('App\Pengarang');
    }

    public function penerbit()
    {
    	return $this->belongsTo('App\Penerbit');
    }

    public function rak()
    {
    	return $this->belongsTo('App\Rak');
    }

    public function pinjam()
    {
        return $this->belongsTo('App\Pinjam');
    }

    public function kembali()
    {
        return $this->hasMany('App\Kembali');
    }
}
