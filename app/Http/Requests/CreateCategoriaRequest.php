<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Categoria;

class CreateCategoriaRequest extends FormRequest
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
        return Categoria::$rules;
    }

    public function messages()
    {
        return[
            'cat_nombre.unique'   => 'El :attribute se encuentra registrado.',
        ];
    }

    public function attributes()
    {
        return[
            'cat_nombre'=> 'nombre de la categoria',
        ];
    }
}
