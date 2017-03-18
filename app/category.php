<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function posts(){
        return $this->has_many('\App\Post');
    }
    public function portfolios(){
        return $this->has_many('\App\Portfolio');
    }
}
