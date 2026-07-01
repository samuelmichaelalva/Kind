<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreReportRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'reason' => ['required', 'string'],
            'details' => ['nullable', 'string'],
            'reportable_type' => ['required', 'string'],
            'reportable_id' => ['required', 'integer'],
        ];
    }
}
