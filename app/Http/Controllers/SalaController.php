<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Sala;
use App\Http\Requests\StoreSala;



class SalaController extends Controller
{
  public function index()
  {
      $salas = Sala::latest()->paginate(5);
      return view('admin.sala.index', compact('salas'))
      ->with('i', (request()->input('page', 1) - 1) * 5);
  }

  public function store(StoreSala $request){
    Sala::create($request->all());    
    return redirect()->route('sala.index')->with('success','Sala Cadastrada Com Sucesso!');
    $validated = $request->validated();
  }

  public function edit(Sala $sala) {
      return view('admin.sala.edit', compact('sala'));
  }

  public function update(StoreSala $request, $id) {
      $sala = Sala::find($id);
      $sala->update($request->all());
      return redirect()->route('sala.index')->with('success','Sala Atualizada com Sucesso!');
      $validated = $request->validated();
  }

  public function destroy($id) {
      $sala = Sala::find($id);
      $sala->delete();
      return redirect()->route('sala.index')->with('success','Sala Deletada com Sucesso!');
  }
}
