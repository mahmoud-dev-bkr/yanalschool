<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;

class CustomerRate extends Model implements TranslatableContract
{
    use HasFactory;
    use Translatable;
    public $translatedAttributes = ['title', 'comment'];

    protected $fillable = ['image', 'rate'];
}


class CustomerRateTranslation extends Model
{
    public $timestamps = false;
    protected $fillable = ['title', 'comment'];
}
