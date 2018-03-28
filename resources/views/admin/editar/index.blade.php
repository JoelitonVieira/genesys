@extends('adminlte::page')

@section('title', 'Editar existentes')

@section('content_header')

    <h3 style="background-color:white;text-align:center;">Editar Existentes</h3><br/>

@stop

@section('content')
<div class="box">

  <form action="/action_page.php">
    <div class="form-group">
      <label for="name">Escolher:</label>
      <input type="text" id="name">
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>

</div>
@stop

@section('js')

@stop
