@extends('adminlte::page')

@section('title', 'Ajuda')

@section('content_header')

    <h3 style="background-color:white;text-align:center;">Ajuda</h3><br/>

@stop

@section('content')
<div class="box">
  

  <form action="/action_page.php">
    <div class="form-group">
      <label for="name">Seção de Ajuda</label>
      <input type="text" id="name">
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>

</div>
@stop

@section('js')

@stop
