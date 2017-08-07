<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class kkModel extends Model
{
     use SoftDeletes;
     protected $table = 'kartu_keluarga';
     protected $dates = ['deleted_at'];

    public function getAlamatAttribute($value)
	{
		return ucfirst($value);
	}

    public function setAlamatAttribute($value)
    {
    	return $this->attributes['alamat'] = ucfirst($value);
    }

    public function getKecamatanAttribute($value)
	{
		return ucfirst($value);
	}

    public function setKecamatanAttribute($value)
    {
    	return $this->attributes['kecamatan'] = ucfirst($value);
    }

    public function getProvinsiAttribute($value)
	{
		return ucfirst($value);
	}

    public function setProvinsiAttribute($value)
    {
    	return $this->attributes['provinsi'] = ucfirst($value);
    }

    public function getKepalaKeluargaAttribute($value)
	{
		return ucfirst($value);
	}

    public function setKepalaKeluargaAttribute($value)
    {
    	return $this->attributes['kepala_keluarga'] = ucfirst($value);
    }

    public function getDesaKelurahanAttribute($value)
	{
		return ucfirst($value);
	}

    public function setDesaKelurahanAttribute($value)
    {
    	return $this->attributes['desa_kelurahan'] = ucfirst($value);
    }

    public function getKabupatenKotaAttribute($value)
	{
		return ucfirst($value);
	}

    public function setKabupatenKotaAttribute($value)
    {
    	return $this->attributes['kabupaten_kota'] = ucfirst($value);
    }
}
