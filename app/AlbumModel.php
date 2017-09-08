<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class AlbumModel extends Model
{
    use SoftDeletes;
    protected $table = 'gallery_folder';
    protected $dates = ['deleted_at'];

}
