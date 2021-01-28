<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $guarded = ['id'];

    public function catalogs(): \Illuminate\Database\Eloquent\Relations\BelongsToMany
    {
        return $this->belongsToMany('App\Models\Catalog');
    }

    public function scopeActive($query){
        return $query->where('status','=',1);
    }

    public function scopeSimpleType($query){
        return $query->where('type','=','simple');
    }
    public function scopeBundleType($query){
        return $query->where('type','=','bundle');
    }

    public function scopeAdditionalType($query){
        return $query->where('type','=','additional');
    }

    public function scopeNotIsAdditionalType($query){
        return $query->where('type','<>','additional');
    }
}
