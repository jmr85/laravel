<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaveUserRequest extends FormRequest
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
        /* 
            esta clase y metodo lo termine reemplazando por Validator::make en 
            UserControlleren el metodo update ya que fue la unica manera de 
            destrabar de que el mail del user que esta editando lo ignore, desde aca 
            el request no lo podia hacer funcionar, o sea esta clase SaveUserRequest 
            no se esta usando, se podria eliminar
         */
        // unique:users, email (unique en tabla users y en la columna email)
        return [
            'name' => 'required',
            'email' => 'required|unique:users, email, '.$this->route('user.update')
        ];
    }
}
