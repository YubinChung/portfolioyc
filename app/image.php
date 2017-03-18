<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    public function posts(){
        return $this->belongs_to('\App\Post', 'custom_foreign_key');
    }
}
