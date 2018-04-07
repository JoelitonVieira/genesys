<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Disciplina;

class DisciplinaController extends Controller
{
  public function index()
  {
      $disciplinas = Disciplina::latest()->paginate(5);
      return view('admin.disciplina.index', compact('disciplinas'))
      ->with('i', (request()->input('page', 1) - 1) * 5);
  }

  public function store(Request $request){
    Disciplina::create($request->all());
    return redirect()->route('disciplina.index')->with('success','Disciplina Cadastrada Com Sucesso!');
  }

  public function edit(Disciplina $disciplina) {
      return view('admin.disciplina.edit', compact('disciplina'));
  }

  public function update(Request $request, $id) {
      $disciplina = Disciplina::find($id);
      $disciplina->update($request->all());
      return redirect()->route('disciplina.index')->with('success','Disciplina Atualizada com Sucesso!');
  }

  public function destroy($id) {
      $disciplina = Disciplina::find($id);
      $disciplina->delete();
      return redirect()->route('disciplina.index')->with('success','Disciplina Deletada com Sucesso!');
  }
}
