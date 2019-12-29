<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable=['imageable_type','imageable_id','file_name'];
    public function imageable()
    {
        return $this->morphTo();
    }
}
