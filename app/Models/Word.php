<?php

namespace App\Models;


use Astrotomic\Translatable\Translatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;

class Word extends Model implements TranslatableContract
{
    use HasFactory, Translatable;
    protected $fillable = ['key'];
    protected $translatedAttributes = ['value'];
}
