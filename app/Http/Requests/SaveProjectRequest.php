<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
// valida nuevo project y edicion project
//sirve para procesar validacion de metodos store() y update()
class SaveProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        /*
            si es vedadero pasara a verificar las reglas de validacion en el metodo rules() 
            y si devuelve falso la peticion va a terminar devolviendo 
            una respuesta HTTP Response 403 Forbidden (Prohibido), es decir, 
            el usuario no esta autorizado para continuar
            Dejamos en return true; porque por ahora cualquier usuario va a poder crear un nuevo proyecto
        */
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        /*son las mismas validaciones del metodo validate([]) en el controller*/
        return [
            'title' => 'required',
            'url' => 'required',
            'description' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'El proyecto necesita un titulo',//o con __()multidioma           
        ];
    }
}
