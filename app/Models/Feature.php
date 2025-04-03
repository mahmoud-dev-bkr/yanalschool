<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
class Feature extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    public $translatedAttributes = ['title','description'];

    public $fillable = ['image'];

    public function scopeFilter($query)
    {
        if (request()->has('search')) {
            $query->whereTranslationLike('title', '%' . request()->search . '%');
        }
    }
}

class FeatureTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'title',
        'description',
    ];
}