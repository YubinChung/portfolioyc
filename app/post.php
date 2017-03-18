<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    public function images(){
        return $this->has_many('\App\Image', 'custom_field_name');
    }
    public function categories(){
        return $this->belongs_to('\App\Category');
    }

    public function getRouteKeyName()
    {
        return 'post_id';
    }
}
