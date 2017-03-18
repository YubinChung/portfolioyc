<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{

    public static $rules = [
        'name' => 'required|unique:menus|max:15',
        'slug' => 'required|unique:menus|max:20',
    ];


}
