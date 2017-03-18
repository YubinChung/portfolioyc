<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class portfolio extends Model
{
    public function categories(){
        return $this->belongs_to('\App\Category');
    }
}
