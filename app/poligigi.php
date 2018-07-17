<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class poligigi extends Model
{
        protected $table = 'poligigi';
	    protected $fillable = ['pasien','usia','keluhan'];
}
