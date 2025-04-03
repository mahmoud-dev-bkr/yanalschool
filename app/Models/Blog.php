<?php

namespace App\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;


class Blog extends Model implements TranslatableContract
{
    use Translatable;
    use HasFactory;
    public $translatedAttributes = ['title','short_description','description'];

    public $fillable = [ 'image'];




    public function scopeFilter($query)
    {
        if (request()->has('search')) {
            $query->whereTranslationLike('title', '%' . request()->search . '%')
            ->orWhereTranslationLike('short_description', '%' . request()->search . '%')
            ->orWhereTranslationLike('description', '%' . request()->search . '%');
        }


    }
}




class BlogTranslation extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['title', 'short_description', 'description'];
}
