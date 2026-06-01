<?php

namespace App\Http\Requests\Tasks;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class TaskFormRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255',
            'priority' => 'required|in:Low,Medium,High',
            'status' => 'required|in:pending,in_progress,completed',
            'due_date' => 'required|date',
            'details' => 'nullable|string',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Task title is required.',
            'priority.required' => 'Priority is required.',
            'due_date.required' => 'Due date is required.',
        ];
    }
}
