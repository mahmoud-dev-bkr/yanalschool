<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreTeam extends FormRequest
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
        $rules= [
            'image' => ['nullable'],
        ];

        foreach (config('translatable.locales') as $locale) {
            $rules[$locale . '.title'] = ['required', 'string', 'max:255'];
            $rules[$locale . '.degree'] = ['required', 'string'];
            $rules[$locale . '.job'] = ['required', 'string'];
        }
        return $rules;
    }
}
