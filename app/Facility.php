<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Facility extends Model
{
    //
    protected $guarded=[];

    public function scopeWhenSearch($query, $search)
    {
        return $query->when($search,function($q) use ($search){
            return $q->where('title','like',"%$search%");
        });
    }

    public function getImagePathAttribute()
    {
        return Storage::url('images/'.$this->img);

    }

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
