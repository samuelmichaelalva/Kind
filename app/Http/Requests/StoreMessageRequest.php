<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMessageRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'conversation_id' => ['nullable', 'exists:conversations,id'],
            'recipient_id' => ['required_without:conversation_id', 'exists:users,id'],
            'body' => ['required', 'string'],
        ];
    }
}
