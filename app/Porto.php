<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Porto extends Model
{
    protected $table = 'portofolio';
    protected $fillable = ['nama', 'foto', 'jenis'];
}
