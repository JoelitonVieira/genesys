<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AjudaController extends Controller
{
  public function index()
  {
    return view('admin.ajuda.index');
  }
}
