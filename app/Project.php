<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Storage;
class Project extends Model
{
    //
    protected $guarded=[];
    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }

    public function scopeWhenSearch($query, $search)
    {
        return $query->when($search,function($q) use ($search){
            return $q->where('name','like',"%$search%");
        });
    }

    public function getImagePathAttribute()
    {
        return Storage::url('images/'.$this->img);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function prperties()
    {
        return $this->hasMany(Propertie::class);
    }
}
