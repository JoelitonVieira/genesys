<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContatoController extends Controller
{
  public function index()
  {
    return view('admin.contato.index');
  }
}
