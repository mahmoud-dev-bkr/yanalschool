<?php

namespace App\Http\Requests\Dashboard;

use App\Models\About;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreOffer extends FormRequest
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

        foreach (config('translatable.locales') as $locale) {
            $inputs[$locale . '.title'] = ['required','string','max:255'];
            $inputs[$locale . '.description'] = ['required'];
            $inputs[$locale . '.discount_title'] = ['nullable','string'];
        }
        $inputs['image']            = ['nullable','image','mimes:png,jpg,jpeg,webp',Rule::requiredIf(function(){ return !isset($this->id);})];
        $inputs['background_color'] = ['required'];
        $inputs['category_id']      = ['nullable','exists:categories,id'];
        $inputs['meals_id']         = ['nullable','exists:meals,id'];
        $inputs['type']             = ['required'];
        return $inputs;
    }
}
