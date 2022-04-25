<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    use HasFactory;

    public static function getPage($name) {

        if(!empty($name)) {
            return view(Page::getRouteName($name));
        }
        else {
            return view(config('constants.home-page'));
        }

    }

    private static function getRouteName($name) {
        return config('constants.'.$name);
    }
}
