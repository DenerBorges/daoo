<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RecompensaRequest extends FormRequest
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
        return [
            'valor' => 'required | min:3 | numeric'
        ];
    }

    public function message()
    {
        return [
            'valor' => 'Insira um valor maior que R$3,00!'
        ];
    }
}
