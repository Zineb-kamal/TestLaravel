<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable=['category_id','name','description','slug'];
    public function image()
    {
        return $this->morphOne('App\Image', 'imageable');
    }
}
