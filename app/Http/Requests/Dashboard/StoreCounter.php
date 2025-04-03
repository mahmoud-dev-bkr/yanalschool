<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreCounter extends FormRequest
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
        $inputs = [
            'number' => ['nullable'],
        ];

        foreach (config('translatable.locales') as $locale) {
            $inputs[$locale . '.title'] = ['required','string','max:255'];
        }
        $inputs['image'] = ['nullable','image','mimes:png,jpg,jpeg,webp',Rule::requiredIf(function(){ return !isset($this->id);})];


        return $inputs;
        // return [
        //     'image' => ['nullable','image','mimes:png,jpg,jpeg',Rule::requiredIf(function(){ return !isset($this->id);})],
        //     'ar.title' => ['required','string'],
        //     'en.title' => ['required','string'],
        //     'number' => ['required'],
        // ];
    }
}
