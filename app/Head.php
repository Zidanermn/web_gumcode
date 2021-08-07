<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Head extends Model
{
    protected $table = 'header';
    protected $fillable = ['keterangan', 'gambar'];
}
