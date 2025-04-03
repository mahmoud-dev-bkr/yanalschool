<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
class Offer extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    public $translatedAttributes = ['title','description','discount_title'];
    protected $with = ['translations'];
    // forgeign key translation
    public $translationForeignKey = 'offer_id';
    public $timestamps = false;

    public $fillable = ['meals_id', 'image','background_color','category_id'];

    public function scopeFilter($query)
    {
        if (request()->has('search')) {
            $query->whereTranslationLike('title', '%' . request()->search . '%')
            ->whereTranslationLike('description', '%' . request()->search . '%');
        }
        if (request()->has('category_id')) {
            $query->where('category_id', request()->category_id);
        }
        if (request()->has('meals_id')) {
            $query->where('meals_id', request()->meals_id);
        }
    }
    public function category() {
        return $this->belongsTo(Category::class);
    }
    public function meals() {
        return $this->belongsTo(Meal::class);
    }
}

class OfferTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = [
        'title',
        'description',
        'discount_title',
    ];
}