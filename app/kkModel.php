<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kkModel extends Model
{
     use SoftDeletes;
     protected $table = 'kartu_keluarga';
     protected $dates = ['deleted_at'];
}
