<?php

namespace seeNameSpace\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CartaoUsuarioFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'descricao'     => 'required|string|max:255',
            'limite'        => 'required|numeric',
            'fechamento'    => 'required|integer',
            'vencimento'    => 'required|integer',
        ];
    }
}
