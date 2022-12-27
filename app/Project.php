<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Illuminate\Support\Facades\Storage;
use PhpParser\ErrorHandler\Collecting;

class Project extends Model
{

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
        $q = $this->apartments()->where('appendix', '<>', 'on')->get();
        if ($q->count() > 0) {
            return $q;
        }
        return false;
    }

    public function getFrontApartmentAttribute()
    {
        $q = $this->apartments()->where('appendix', '<>', 'on')->where('type', 'شقة أمامية')->get();

        if ($q->count() > 0) {
            return $q;
        }
        return false;
    }

    public function getBackApartmentAttribute()
    {
        $q = $this->apartments()->where('appendix', '<>', 'on')->where('type', 'شقة خلفية')->get();

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
        return asset('uploads/images/' . $this->id . '/' . $this->img);
        // return Storage::url('images/' . $this->id . '/' . $this->img);


    }
    public function getImagePathAttribute()
    {
        if ($this->projectImages()->exists()) {
            foreach ($this->projectImages as $key => $value) {
                return asset('uploads/images/' . $this->id . '/' . $value->img);

                // return Storage::url('images/' . $this->id . '/' . $value->img);
            }
        }
    }
    public function getImagesPathAttribute()
    {
        $array = [];
        if ($this->projectImages()->exists()) {
            foreach ($this->projectImages as $key => $value) {
                array_push(
                    $array,
                    asset('uploads/images/' . $this->id . '/' . $value->img)
                );
            }
        }
        return $array;
    }

    public function floors()
    {
        return $this->hasMany(Floor::class);
    }

    public function FloorRow($id)
    {
        $q = $this->floors->where('floor_id', $id)->where('apartment_id');
        $q1 = collect();
        $b = false;
        $item=null;
        foreach ($q as $key => $floor) {
            if ($floor->apartment->type=="أمامية") {
                if ($b) {
                    $item=$floor;
                } else {
                    $b = true;
                    $q1->push($floor);
                }
            } else {
                $q1->push($floor);
            }
        }
            if($item){

                $q1->push($item);
            }
        return $q1;
    }

    public function backCount($id,$a_id)
    {
        // dd($this->FloorRow($id)->where("apartment_id",$a_id)->count());
        return $this->FloorRow($id)->where("apartment_id",$a_id)->count();

    }

    public function backCount2($id)
    {
        $back=$this->apartments->where('type', 'خلفية');
        // dd($back->pluck('id'));
        // dd($this->FloorRow($id)->whereIn("apartment_id",$back->pluck('id'))->count());
        return $this->FloorRow($id)->whereIn("apartment_id",$back->pluck('id'))->count();


    }
}
