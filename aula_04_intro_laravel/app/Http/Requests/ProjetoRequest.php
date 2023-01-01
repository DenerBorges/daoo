<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjetoRequest extends FormRequest
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
            'meta_de_valor' => 'required | min:10 | numeric',
            'dias_para_atingir' => 'required | min:1 | numeric'
        ];
    }

    public function message()
    {
        return [
            'meta_de_valor' => 'Insira uma meta de valor maior que R$10,00!',
            'dias_para_atingir' => 'Insira ao menos 1 dia para completar a meta.'
        ];
    }
}
