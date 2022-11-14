<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProjectImage extends Model
{
    //
    protected $guarded=[];
    //relations -------------------------------------------
    public function projects()
    {
        return $this->belongsTo(Project::class);
    }
}
