<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditarController extends Controller
{
  public function index()
  {
    return view('admin.editar.index');
  }
}
