@extends('adminlte::page')

@section('title', 'Ajuda')

@section('content_header')
<ol class="breadcrumb" style="float:right">
  <li class="text-secondary"><a href="{{ route('admin.index') }}" class="text-success"><i class="fa fa-home text-success"></i>Home</a></li>
  <li class="active text-dark" aria-current="page">Ajuda</li>
</ol></br></br>
<div class ="header text-center">
      <p style="color:white; background: linear-gradient(to right, #00ab5d , #00eb7f);font-size:25px; padding:13px 0px 13px 0px;"></span>Ajuda</p><br/>
</div>

@stop

@section('content')



<div class="row">

  <div class="col-md-7">
    <ul class="list-group">
      <li class="list-group-item"><b>Cadastro de Sala: </b>Nessa página, você cadastra todas as salas e laboratórios.</li>
      <li class="list-group-item"><b>Cadastro de Disciplina: </b>Nessa página, você cadastra todas as disciplinas.</li>
      <li class="list-group-item"><b>Gerar Alocação: </b>Nessa página, você terá a opção de gerar a alocação do sistema. Se já houver alguma alocação gerada, o sistema irá sobrescrever a alocação antiga.</li>
      <li class="list-group-item"><b>Visualizar Relatório: </b>Nessa página, será exibida a alocação gerada. É possível imprimi-la clicando diretamente no ícone de impressão.</li>
    </ul>
  </div>

  <div class="col-md-3">
  </div>

  <div class="col-md-2">
    <span class="fas fa-question-circle" aria-hidden="true" style="font-size:80px;color:#00e77d;"></span>
  </div>
</div>


@stop

@section('js')

@stop
