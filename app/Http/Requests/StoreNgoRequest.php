<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNgoRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'slug' => ['required', 'string', 'max:255', 'unique:ngos,slug'],
            'email' => ['required', 'email', 'max:255', 'unique:ngos,email'],
            'phone' => ['nullable', 'string', 'max:255'],
            'website' => ['nullable', 'url'],
            'location' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'mission' => ['nullable', 'string', 'max:255'],
            'status' => ['nullable', 'string'],
        ];
    }
}
