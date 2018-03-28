@extends('adminlte::page')

@section('title', 'Cadastro de Sala')

@section('content_header')
  <div class="callout callout-info">
    <h1 style="text-align:center">Cadastro de Sala</h1>
  </div>

@stop

@section('content')
<div class="row">
  <div class="col-md-12">
  <div class="box box-primary">
  <form action="{{action('SalaController@store')}}" method="POST" >
{{ csrf_field() }}
    <div class="box-body">
    <div class="form-group">

      <label for="name">Número:</label>
      <input type="text" name="numero"></br>
    </div>
      <div class="form-group">
      <label for="name">Tipo:</label>
      <select name="tipo">
        <option value="Sala" selected="selected">Sala</option>
        <option value="Laboratorio">Laboratório</option>
      </select>
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
  </form>
</div>
</div>
</div>
@stop

@section('js')

@stop
