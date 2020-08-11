<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    //

    public function images()
    {
        return $this->hasMany('\App\images');
    }

    public function count()
    {
        return images::where('gallery_id', $this->id)->count();
    }
}
