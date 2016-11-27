<?php

namespace LikeHome\Http\Requests;

use LikeHome\Http\Requests\Request;

class UsuarioRequest extends Request
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
     * @return array
     */
    public function rules()
    {
        return [
            "UsuarioNombre" => "required|max:50",
            "UsuarioApellido" => "required|max:100",
            "UsuarioEmail" => "required|email",
            "UsuarioTelefono" => "required|number"
        ];
    }
}
