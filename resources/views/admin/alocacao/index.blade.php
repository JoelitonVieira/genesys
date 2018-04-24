@extends('adminlte::page')

@section('title', 'Gerar Alocação')

@section('content_header')

<div class ="header text-center">
  <p style="color:white; background: linear-gradient(to right, #00ab5d , #00eb7f);font-size:25px; padding:13px 0px 13px 0px;">Gerar Alocação</p><br/><br/><br/>
</div>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css">
@stop

@section('content')
@if ( isset ( $message ) )
<div class="alert bg-red alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  	<span aria-hidden="true">&times;</span>
  </button>
  <p>{{ $message }}</p>
  <a href="{{route('disciplina.index')}}">Clique aqui para cadastrar uma disciplina</a> ou <a href="{{route('sala.index')}}">aqui para cadastrar uma sala.</a>
</div>
@endif
@if ( isset ( $message2 ) )
<div class="alert bg-green alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  	<span aria-hidden="true">&times;</span>
  </button>
  <p>{{ $message2 }}</p>
  <a href="{{route('relatorio.index')}}">Clique aqui para visualizar o relatório</a> com a alocação gerada.
</div>
@endif
<div class="row">
  <div class="col-md-10">
    <div class="form-group">
      <p for="name" style="color:#141414;">Modo</p>
      <select class="selectpicker" name="tipo">
        <option value="Sala Comum" class="optionSelect" selected="selected">Sala</option>
        <option value="Laboratório" class="optionSelect" disabled="disabled">Sala/Laboratório</option>
      </select>
    </div>
    <button class="buttonSalvar" style="border-radius: 0px;background-color:#00A65A;" onclick="location.href='{{ route('alocacao') }}'"><span>GERAR </span></button>
  </div>

  <div class="col-md-1">
    <i class="fas fa-mouse-pointer" style="font-size:80px;color:#00e77d;"></i>
  </div>
</div>

@stop

@section('js')

@stop
