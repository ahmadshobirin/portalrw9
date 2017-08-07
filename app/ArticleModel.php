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

    public function getTitleAttribute($value)
	{
		return ucfirst($value);
	}

    public function setTitleAttribute($value)
    {
    	return $this->attributes['title'] = ucwords($value);
    }

    public function getDescriptionAttribute($value)
	{
		return ucfirst($value);
	}

    public function setDescriptionAttribute($value)
    {
    	return $this->attributes['description'] = ucfirst($value);
    }

    public function getContentAttribute($value)
	{
		return ucfirst($value);
	}

    public function setContentAttribute($value)
    {
    	return $this->attributes['content'] = ucfirst($value);
    }

    public function getCategoryAttribute($value)
	{
		return ucfirst($value);
	}

    public function setCategoryAttribute($value)
    {
    	return $this->attributes['category'] = ucfirst($value);
    }
}

