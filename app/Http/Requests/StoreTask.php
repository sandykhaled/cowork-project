<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTask extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
                'title' => 'required|string|max:255',
                'description' => 'required|string',
                 'skill_id'=>'required',
            ];
    }
    public function messages()
    {
        return[
            'title.required' => 'Title required',
            'description.required' =>'Description required'
        ];
    }
}
