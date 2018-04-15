<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Disciplina;
use App\Dia;

class DisciplinaController extends Controller
{
  public function index()
  {
      $disciplinas = Disciplina::latest()->paginate(5);
      return view('admin.disciplina.index', compact('disciplinas'))
      ->with('i', (request()->input('page', 1) - 1) * 5);
  }

  public function store(Request $request){
    $disciplina = Disciplina::create($request->all());
    $dias = new Dia();
    foreach ($request->dia as $dia) {
    if ($dia == "seg") { $dias->seg = 1; }
    elseif ( $dia == "ter" ) { $dias->ter = 1; }
    elseif ( $dia == "quar" ) { $dias->quar = 1; }
    elseif ( $dia == "quin" ) { $dias->quin = 1; }
    elseif ( $dia == "sex" ) { $dias->sex = 1; }
    elseif ( $dia == "sab" ) { $dias->sab = 1; }
    }
    $dias->disciplinaId = $disciplina->id;
    $disciplina->dia()->save($dias);
    return redirect()->route('disciplina.index')->with('success','Disciplina Cadastrada com Sucesso!');
  }

  public function edit(Disciplina $disciplina) {
      return view('admin.editar.index', compact('disciplina'));
  }

  public function update(Request $request, $id) {
    $disciplina = Disciplina::find($id);
    $disciplina->update($request->all());
    $dias = $disciplina->dia;
    $dias->seg = 0;
    $dias->ter = 0;
    $dias->quar = 0;
    $dias->quin = 0;
    $dias->sex = 0;
    $dias->sab = 0;
    foreach ($request->dia as $dia2) {
    if ($dia2 == "seg") { $dias->seg = 1; }
    elseif ( $dia2 == "ter" ) { $dias->ter = 1; }
    elseif ( $dia2 == "quar" ) { $dias->quar = 1; }
    elseif ( $dia2 == "quin" ) { $dias->quin = 1; }
    elseif ( $dia2 == "sex" ) { $dias->sex = 1; }
    elseif ( $dia2 == "sab" ) { $dias->sab = 1; }
    }
    $disciplina->dia()->save($dias);
    return redirect()->route('disciplina.index')->with('success','Disciplina Atualizada com Sucesso!');
  }

  public function destroy($id) {
      $disciplina = Disciplina::find($id);
      $disciplina->dia()->delete();
      $disciplina->delete();
      return redirect()->route('disciplina.index')->with('success','Disciplina Deletada com Sucesso!');
  }
}
