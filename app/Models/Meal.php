<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
class Meal extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    public $translatedAttributes = ['title','description'];

    public $fillable = ['status', 'image','price','category_id'];

    public function scopeFilter($query)
    {
        if (request()->has('search')) {
            $query->whereTranslationLike('title', '%' . request()->search . '%');
        }
        if (request()->has('category_id')) {
            $query->where('category_id', request()->category_id);
        }
    }
    public function category() {
        return $this->belongsTo(Category::class);
    }
}

class MealTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'title',
        'description',
    ];
}