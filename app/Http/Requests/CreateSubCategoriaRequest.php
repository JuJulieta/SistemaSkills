<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\SubCategoria;

class CreateSubCategoriaRequest extends FormRequest
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
        return SubCategoria::$rules;
    }
    
    public function messages()
    {
        return[
            'cat_id.required'   => 'La :attribute es obligatoria.',
            'cat_id.min'   => 'La :attribute es obligatoria.',
        ];
    }

    public function attributes()
    {
        return[
            'cat_id'=> 'categoria',
        ];
    }
}
