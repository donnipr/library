<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penerbit extends Model
{

    protected $guarded = ['id', 'created_at', 'updated_at'];

    public function buku()
    {
    	return $this->hasMany('App\Buku');
    }
}
