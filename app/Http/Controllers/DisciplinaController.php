<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Disciplina;
use App\Dia;
use App\Http\Requests\StoreDisciplina;
use Validator;
use Illuminate\Support\Facades\Auth;

class DisciplinaController extends Controller
{
  public function index()
  {
      $disciplinas = Auth::user()->disciplina()->latest()->paginate(5);
      $countDisciplinas = sizeof( Auth::user()->disciplina()->get() );
      return view('admin.disciplina.index', compact('disciplinas', 'countDisciplinas'))
      ->with('i', (request()->input('page', 1) - 1) * 5);
  }

  public function create(){
    return view('admin.disciplina.create');
  }

  public function show(Disciplina $disciplina) {
        return view('admin.disciplina.show', compact('disciplina'));
    }

  public function store(StoreDisciplina $request){
    $disciplina = Auth::user()->disciplina()->create([
      'nome' => $request->nome,
      'codigo' => $request->codigo,
      'turma' => $request->turma,
      'turno' => $request->turno,
      'professor' => $request->professor,
      'horario' => $request->horario,
      ]) ;
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
      return view('admin.disciplina.edit', compact('disciplina'));
  }

  public function update(StoreDisciplina $request, $id) {
    $disciplina = Disciplina::find($id);

    $disciplina->nome = $request->nome;
    $disciplina->codigo = $request->codigo;
    $disciplina->turma = $request->turma;
    $disciplina->turno = $request->turno;
    $disciplina->professor = $request->professor;
    $disciplina->horario = $request->horario;
    $disciplina->save();
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

  public function search(Request $request){
    $validator = Validator::make($request->all(), [
        'pesquisa' => 'required',
    ]);
    if ($validator->fails()) {
          return redirect()->route('disciplina.index')
                      ->withErrors($validator)
                      ->withInput();
    }
    $disciplinas = Disciplina::where(''.$request->modo.'', 'like', '%'.$request->pesquisa.'%')->where('user_id', Auth::id())->paginate(5);
    $countDisciplinas = sizeof( Auth::user()->disciplina()->where(''.$request->modo.'', 'like', '%'.$request->pesquisa.'%')->get() );
    $request->flash();
    $dataform = $request->except('_token');
    return view('admin.disciplina.index', compact('disciplinas', 'dataform', 'countDisciplinas'))
    ->with('i', (request()->input('page', 1) - 1) * 5);
  }
}
