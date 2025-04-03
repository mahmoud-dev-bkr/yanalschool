<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;

class StoreMetaTag extends FormRequest
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
        $rules = [
            'image' => 'nullable|image|mimes:png,jpg,jpeg,webp'
        ];

        foreach (config('translatable.locales') as $locale) {
            $rules[$locale . '.title'] = 'required';
            $rules[$locale . '.description'] = 'required';
            $rules[$locale . '.keywords'] = 'nullable';
        }

        return $rules;

    }
}
