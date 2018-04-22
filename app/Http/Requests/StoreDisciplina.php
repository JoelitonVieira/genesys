<?php

namespace App\Http\Requests;

use App\Disciplina;
use Illuminate\Foundation\Http\FormRequest;

class StoreDisciplina extends FormRequest
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
          'nome' => 'required|unique:disciplinas,nome,'.$this->disciplina,
          'codigo' => 'nullable|unique:disciplinas,codigo,'.$this->disciplina,
          'turma' => 'required',
          'professor' => 'required',
      ];
    }
}
