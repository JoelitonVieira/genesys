<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Sala;

class SalaController extends Controller
{
  public function index()
  {
    return view('admin.sala.index');
  }
  public function store(Request $request){
    Sala::create($request->all());
    return redirect()->route('sala.index')->with('success','Sala Criada Com Sucesso');
  }
}
