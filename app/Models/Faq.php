<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class Faq extends Model implements TranslatableContract
{
    use HasFactory;use Translatable;
    public $translatedAttributes = ['question','answer'];

}


class FaqTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['question','answer'];
}
