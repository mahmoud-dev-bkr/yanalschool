<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;


class About extends Model implements TranslatableContract
{
    use Translatable;
    use HasFactory;
    public $translatedAttributes = ['title', 'description','sub_title'];
    protected $fillable = ['image'];


    protected $appends =['image_url'];

    public function getImageUrlAttribute()
    {
        return asset($this->image);
    }
}
