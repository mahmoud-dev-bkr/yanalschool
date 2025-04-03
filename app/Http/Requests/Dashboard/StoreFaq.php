<?php

namespace App\Http\Requests\Dashboard;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreFaq extends FormRequest
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
            $inputs[$locale . '.question'] = ['required','string','max:255'];
            $inputs[$locale . '.answer'] = ['required'];
        }


        return $inputs;

    }
}
