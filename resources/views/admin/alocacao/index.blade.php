@extends('adminlte::page')

@section('title', 'Gerar Alocação')

@section('content_header')

<div class ="header"><h1 style="color:white;background-color:#00A65A;text-align:center;font-size:200%;padding:6px;">GERAR ALOCAÇÃO</h1><br/></div>

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

<div class="box-body">
  <div class="form-group">
    <label for="name">Modo:</label></br>
    <select class="selectpicker" name="tipo">
      <option value="Sala Comum" class="optionSelect" selected="selected">Sala</option>
      <option value="Laboratório" class="optionSelect" disabled="disabled">Sala/Laboratório</option>
    </select>
  </div>
  <button class="buttonSalvar" onclick="location.href='{{ route('alocacao') }}';"><span>GERAR </span></button>
</div>

@if ( isset ( $message2 ) )
Quantidade de choques da alocação final: {!! $melhorSolucao->choques() !!}</br>
Resultado das Alocações: </br>NOME &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp DIAS &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp HORA &nbsp&nbsp&nbsp SALA</br>{!! $melhorSolucao !!}
@endif

@stop

@section('js')

@stop
