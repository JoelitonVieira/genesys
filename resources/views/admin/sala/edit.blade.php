@extends('adminlte::page')

@section('title', 'Editar Sala')

@section('content_header')
<div class ="header"><h1 style="color:WHITE;background-color:#00A65A;text-align:center;font-size:200%;padding:6px;">SALAS E LABORATÓRIOS</h1><br/></div>

@stop

@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="header">
      <h4 class="pageHeader">ALTERAR SALA</h4>
    </div>
    <div style="border:1.5px solid #444">
      <form action="{{action('SalaController@update', $sala->id)}}" method="POST">
      {{ csrf_field() }}
      {{ method_field('PUT')}}
        <div class="box-body">
          <div class="form-group has-feedback {{ $errors->has('nome') ? 'has-error' : '' }}">
            <label for="name">Nome:</label></br>
            <input type="text" name="nome" value="{{$sala->nome}}" class="form-control">
            @if ($errors->has('nome'))
              <span class="help-block">
                <strong>{{ $errors->first('nome') }}</strong>
              </span>
            @endif
          </div>
          <div class="form-group">
            <label for="name">Tipo:</label></br>
            <select class="selectpicker" name="tipo">
              <option value="Sala Comum"  class="optionSelect" selected="selected">Sala Comum</option>
              <option value="Laboratório" class="optionSelect" id="laboratorio">Laboratório</option>
            </select>
            <param value="{{$sala->tipo}}" id="teste">
          </div>
          <button class="buttonSalvar"><span>SALVAR</span></button>
        </div>
      </form>
    </div>
  </div>
</div>


@stop

@section('js')
<script>
  if ( document.getElementById("teste").value == "Laboratório")
  {
    document.getElementById("laboratorio").selected = "true";
  }
</script>

@stop
