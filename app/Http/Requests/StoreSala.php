<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSala extends FormRequest
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
           'nome' => 'required',
           'tipo' => 'required',
       ];
     }

     /*public function messages()
      {
        return [
            'nome.required' => 'A title is required',
            'tipo.required'  => 'A message is required',
        ];
      }*/
}
