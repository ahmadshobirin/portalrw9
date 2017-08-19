<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SliderModel extends Model
{
	use SoftDeletes;
    protected $table = 'slider';
    protected $dates = ['deleted_at'];
 

}
