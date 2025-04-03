<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;


class Category extends Model implements TranslatableContract
{
    use Translatable;
    use HasFactory;
    public $translatedAttributes = ['title'];

    public $fillable = ['parent_id', 'image'];




    public function scopeFilter($query)
    {
        if (request()->has('search')) {
            $query->whereTranslationLike('title', '%' . request()->search . '%');
        }
        if (request()->has('parent_id')) {
            $query->where('parent_id', request()->parent_id);
        }


    }
}




class CategoryTranslation extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['title'];
}
