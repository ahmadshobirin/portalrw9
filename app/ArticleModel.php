<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class ArticleModel extends Model
{
    use SoftDeletes;
    protected $table = 'article';
    protected $dates = ['deleted_at'];

    public function scopeSearch($query, $s)
    {
        return $query->where('title','=','%'. $s .'%');
    }
}
