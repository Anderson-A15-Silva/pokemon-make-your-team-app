<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class Pokemon extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Ajuste para true para permitir a requisição
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
            'nivel' => ['required', 'integer', 'between:1,100'],
            'item' => ['required', 'string', 'max:255'],
            'habilidade' => ['required', 'string', 'max:255'],
            'natureza' => ['required', 'string', 'max:255'],
            'evs' => ['required', 'array'],
            'evs.*' => ['integer', 'between:0,252'],
            'habilidade_1' => ['nullable', 'string', 'max:255'],
            'habilidade_2' => ['nullable', 'string', 'max:255'],
            'habilidade_3' => ['nullable', 'string', 'max:255'],
            'habilidade_4' => ['nullable', 'string', 'max:255'],
        ];
    }

    /**
     * Configure the validator instance.
     */
    public function withValidator($validator)
    {
        $validator->after(function ($validator) {
            $evs = $this->input('evs', []);
            if (is_array($evs)) {
                $totalEvs = array_sum($evs);
                if ($totalEvs > 510) {
                    $validator->errors()->add('evs', 'A soma dos EVs não pode ultrapassar 510.');
                }
            }
        });
    }
}
