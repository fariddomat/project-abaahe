<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Storage;

class Project extends Model
{
    //
    protected $guarded = [];
    public function getNameAttribute($value)
    {
        return ucfirst($value);
    }

    public function scopeWhenSearch($query, $search)
    {
        return $query->when($search, function ($q) use ($search) {
            return $q->where('name', 'like', "%$search%");
        });
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function propertie()
    {
        return $this->hasOne(Propertie::class);
    }

    public function apartments()
    {
        return $this->hasMany(Apartment::class);
    }

    public function facility()
    {
        return $this->hasOne(Facility::class);
    }

    public function getAApartmentAttribute()
    {
        $q = $this->apartments()->where('appendix','<>', 'on')->get();
        if ($q->count() > 0) {
            return $q;
        }
        return false;
    }

    public function getBackApartmentAttribute()
    {
        $q = $this->apartments()->where('type', '2')->get();
        if ($q->count() > 0) {
            return $q[0];
        }
        return false;
    }

    public function getAppendixApartmentAttribute()
    {
        $q = $this->apartments()->where('appendix', 'on')->get();
        if ($q->count() > 0) {
            return $q[0];
        }
        return false;
    }

    public function projectImages()
    {
        return $this->hasMany(ProjectImage::class);
    }

    public function getPosterPathAttribute()
    {
                return Storage::url('images/' . $this->id . '/' . $this->img);


    }
    public function getImagePathAttribute()
    {
        if ($this->projectImages()->exists()) {
            foreach ($this->projectImages as $key => $value) {
                return Storage::url('images/' . $this->id . '/' . $value->img);
            }
        }
    }
    public function getImagesPathAttribute()
    {
        $array = [];
        if ($this->projectImages()->exists()) {
            foreach ($this->projectImages as $key => $value) {
                    array_push($array, Storage::url('images/' . $this->id . '/' . $value->img));
            }
        }
        return $array;
    }
}
