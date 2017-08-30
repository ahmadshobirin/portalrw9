<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class KategoriArticleModel extends Model
{
    use SoftDeletes;
    protected $table = 'category';
    protected $dates = ['deleted_at'];

    public function getCategoryAttribute($value)
	{
		return ucfirst($value);
	}

    public function setCategoryAttribute($value)
    {
    	return $this->attributes['category'] = ucfirst($value);
    }
}
