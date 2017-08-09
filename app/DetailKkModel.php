<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Carbon\Carbon;

class DetailKkModel extends Model
{
    use SoftDeletes;
    protected $table = 'detail_kartu_keluarga';
    protected $dates = ['tanggal_lahir','deleted_at'];

    public function setTanggalLahirAttribute($date)
    {
        return $this->attributes['tanggal_lahir'] = Carbon::parse($date);
    //     //return ($this->attributes['tanggal_lahir']->year == Carbon::now()->year);
    }

}
