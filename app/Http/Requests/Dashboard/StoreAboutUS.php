<?php

namespace App\Http\Requests\Dashboard;

use App\Models\About;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreAboutUS extends FormRequest
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
            $inputs[$locale . '.short_description'] = ['nullable','string'];
            $inputs[$locale . '.sub_title'] = ['nullable','string','max:255'];
        }
        $inputs['image'] = ['nullable','image','mimes:png,jpg,jpeg,webp',Rule::requiredIf(function(){ return !isset($this->id);})];

        return $inputs;
    }
}
