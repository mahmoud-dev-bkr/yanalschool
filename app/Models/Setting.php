<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = ['key', 'value'];



    public const DAYS = [
        'Saturday' => 'Saturday',
        'Sunday' => 'Sunday',
        'Monday' => 'Monday',
        'Tuesday' => 'Tuesday',
        'Wednesday' => 'Wednesday',
        'Thursday' => 'Thursday',
        'Friday' => 'Friday',
    ];


    public const PROFILE = [
        'profile_specialty',
        'profile_lang',
        'profile_address',
        'profile_job_time',
        'profile_recommened',
        'profile_new_patient',
    ];



    public static function setMany($data)
    {
        foreach ($data as $key => $value) {
            Self::set($key, $value);
            // if ($value != null) {
            //     # code...
            // }
        }
    }

    public static function set($key, $value)
    {
        $setting = self::where('key', $key)->first();
        if ($setting) {
            $setting->value = $value;
            $setting->save();
        } else {
            Setting::create(['key' => $key, 'value' => $value]);
        }
    }


    public static function getValue($key)
    {
        $setting = self::where('key', $key)->first();
        if ($setting) {
            return $setting->value;
        }
        return null;
    }
}
