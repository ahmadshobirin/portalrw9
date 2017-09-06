<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GalleryModel extends Model
{
    use SoftDeletes;
    protected $table = 'galleries';
    protected $dates = ['deleted_at'];
    protected $fillable = ['images'];
}
