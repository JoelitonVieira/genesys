<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Sala;
use App\Http\Requests\StoreSala;
use Validator;
use Illuminate\Support\Facades\Auth;


class SalaController extends Controller
{
  public function index()
  {
      $salas = Auth::user()->sala()->latest()->paginate(5);
      $countSalas = sizeof( Auth::user()->sala()->get() );
      return view('admin.sala.index', compact('salas', 'countSalas'))
      ->with('i', (request()->input('page', 1) - 1) * 5);
  }

  public function create(){
    return view('admin.sala.create');
  }

  public function store(StoreSala $request){
    $salas = Auth::user()->sala()->create([
      'nome' => $request->nome,
      'tipo' => $request->tipo,
      ]) ;
    return redirect()->route('sala.index')->with('success','Sala Cadastrada Com Sucesso!');
  }

  public function edit(Sala $sala) {
      return view('admin.sala.edit', compact('sala'));
  }

  public function update(StoreSala $request, $id) {
      $sala = Sala::find($id);
      $sala->nome = $request->nome;
      $sala->tipo = $request->tipo;
      $sala->save();
      return redirect()->route('sala.index')->with('success','Sala Atualizada com Sucesso!');
  }

  public function destroy($id) {
      $sala = Sala::find($id);
      $sala->delete();
      return redirect()->route('sala.index')->with('success','Sala Deletada com Sucesso!');
  }

  public function search(Request $request) {
      $validator = Validator::make($request->all(), [
          'pesquisa' => 'required',
      ]);
      if ($validator->fails()) {
            return redirect()->route('sala.index')
                        ->withErrors($validator)
                        ->withInput();
      }

      $salas = Sala::where(''.$request->modo.'', 'like', '%'.$request->pesquisa.'%')->where('user_id', Auth::id())->paginate(5);
      $countSalas = sizeof( Auth::user()->sala()->where(''.$request->modo.'', 'like', '%'.$request->pesquisa.'%')->get() );
      $request->flash();
      $dataform = $request->except('_token');
      return view('admin.sala.index', compact('salas', 'dataform', 'countSalas'))
      ->with('i', (request()->input('page', 1) - 1) * 5);
  }
}
