<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBookRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:200',
            'author' => 'required|string|max:200',
            'publisher' => 'required|string|max:200',
            'year' => 'required|string|max:200',
            'isbn' => 'required|string|max:200',
            'cover' => 'required',
            'description' => 'required|string',
            'category' => 'required|string|max:200',
        ];
    }
}
