<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Astrotomic\Translatable\Contracts\Translatable as TranslatableContract;
use Astrotomic\Translatable\Translatable;
class MetaTagBanner extends Model  implements TranslatableContract
{
    use HasFactory,Translatable;

    protected $table = 'meta_tag_banners';

    protected $fillable = [
        'page',
        'image',
    ];
    public $translatedAttributes = ['title', 'description', 'keywords'];


    public const PAGE = [
        'home' , 'about', 'contact', 'products', 'services', 'projects',
    ];
}



Class MetaTagBannerTranslation extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $fillable = [
        'title',
        'keywords',
        'description',
    ];
}
