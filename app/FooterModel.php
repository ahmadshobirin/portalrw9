<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FooterModel extends Model
{
    use SoftDeletes;
    protected $table = 'footer';
    protected $dates = ['deleted_at'];
}
