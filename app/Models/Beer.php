<?php

namespace App\Models;

use illuminate\support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Beer extends Model
{
    use HasFactory;

    public static function generateSlug($string)
    {

        $slug = Str::slug($string, '-');

        $original_slug = $slug;

        $c = 1;

        $slug_beer_exist = Beer::where('slug', $slug)->first();

        while ($slug_beer_exist) {
            $slug = $original_slug . '-' . $c;
            $slug_beer_exist = Beer::where('slug', $slug)->first();
            $c++;
        }
        return $slug;
    }
}
