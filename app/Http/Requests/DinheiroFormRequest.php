<?php

namespace seeNameSpace\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DinheiroFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'saldo' => 'required|numeric',
        ];
    }
}
