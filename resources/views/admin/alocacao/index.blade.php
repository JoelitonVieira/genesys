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
</div>
@else
Quantidade de choques da alocação final: {!! $melhorSolucao->choques() !!}</br>
Resultado das Alocações: </br>NOME &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp DIAS &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp HORA &nbsp&nbsp&nbsp SALA</br>{!! $melhorSolucao !!}
@endif



@stop

@section('js')

@stop
