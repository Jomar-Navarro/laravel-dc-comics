<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:3|max:255',
            'thumb' => 'max:512',
            'price' => 'required|min:3|max:255',
            'series' => 'required|min:3|max:255',
            'sale_date' => 'required|date',
            'type' => 'required|max:255',
            'artists' => 'required',
            'writers' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'The title is required and cannot be empty',
            'title.min' => 'The title must have at least: 3 characters',
            'title.max' => 'The title must have max: 255 characters',
            'thumb.required' => 'The image is required and cannot be empty',
            'price.required' => 'The price is required and cannot be empty',
            'series.required' => 'The series is required and cannot be empty',
            'sale_date.required' => 'The sale_date is required and cannot be empty',
            'type.required' => 'The type is required and cannot be empty',
            'artists.required' => 'The artists is required and cannot be empty',
            'writers.required' => 'The writers is required and cannot be empty',

        ];
    }
}
