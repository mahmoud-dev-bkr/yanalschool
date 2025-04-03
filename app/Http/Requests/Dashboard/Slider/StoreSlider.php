<?php

namespace App\Http\Requests\Dashboard\Slider;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreSlider extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        $inputs = [];

        foreach (config('translatable.locales') as $locale) {
            $inputs[$locale . '.title'] = ['required','string','max:255'];
            $inputs[$locale . '.description'] = ['required'];
        }
        $inputs['image_1'] = ['nullable','file','mimes:mp4,webp,png,jpg,jpeg','max:102400',Rule::requiredIf(function(){ return !isset($this->id);})];
        $inputs['image_2'] = ['nullable','file','mimes:mp4,webp,png,jpg,jpeg','max:102400',Rule::requiredIf(function(){ return !isset($this->id);})];
        $inputs['image_3'] = ['nullable','file','mimes:mp4,webp,png,jpg,jpeg','max:102400',Rule::requiredIf(function(){ return !isset($this->id);})];

        return $inputs;
    }
}
