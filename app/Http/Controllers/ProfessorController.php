<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfessorController extends Controller
{
  public function index()
  {
    return view('admin.professor.index');
  }
  public function store(Request $request)
    {

      

        $attributes = array_merge($request->except(['_token']), $parameterBy);
        if (count($request->dias_array)) {
            $attributes['dias'] = null;
            $numDias = 1;
            foreach ($request->dias_array as $dia) {
                if (count($request->dias_array) != $numDias) {
                    $attributes['dias'] .= $dia . ';';
                } else {
                    $attributes['dias'] .= $dia;
                }
                $numDias++;
            }
        }
        $information = array_filter($attributes);
        if (array_key_exists('active', $request->all())) {
            $information['active'] = $request->active ? true : false;
        }
        $model = $this->model->create($information);

        return redirect()->back()->with('message', 'Registro atualizado com sucesso.');
    }
}
