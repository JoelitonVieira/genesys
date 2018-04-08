@extends('adminlte::page')

@section('title', 'Contato')

@section('content_header')

    <h3 style="background-color:white;text-align:center;">Contato</h3><br/>

@stop

@section('content')
<div class="box">

  <form action="/action_page.php">
    <div class="form-group">
      <label for="name">Nosso Contato</label>
      <input type="text" id="name">
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>

</div>
@stop

@section('js')

@stop
