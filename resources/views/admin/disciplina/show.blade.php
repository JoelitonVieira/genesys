@extends('adminlte::page')

@section('title', 'Exibição de Disciplina')

@section('content_header')
<ol class="breadcrumb" style="float:right">
  <li class="text-secondary"><a href="{{ route('admin.index') }}" class="text-success"><i class="fa fa-home text-success"></i>Home</a></li>
  <li class="text-secondary"><a href="{{ route('disciplina.index') }}" class="text-success">Disciplinas</a></li>
  <li class="active text-dark" aria-current="page">Detalhar Disciplina</li>
</ol></br></br>
<div class ="header text-center">
      <p style="color:white; background: linear-gradient(to right, #00ab5d , #00eb7f);font-size:25px; padding:13px 0px 13px 0px;"></span>Detalhar Disciplina</p><br/>
</div>

@stop

@section('content')

<div class="row">
  <div class="col-md-4">
      <div class="form-group">
        <p for="name" style="color:#141414;">Nome</p>
        <input type="text" name="nome" value="{{$disciplina->nome}}" class="form-control" disabled="disabled">
      </div>
      <div class="form-group">
        <p for="name" style="color:#141414;">Código</p>
        <input type="text" name="codigo" value="{{$disciplina->codigo}}" class="form-control" disabled="disabled">
      </div>
      <div class="form-group">
        <p for="name" style="color:#141414;">Turma</p>
        <input type="text" name="turma" value="{{$disciplina->turma}}" class="form-control" disabled="disabled">
      </div>
      <div class="form-group">
        <p for="name" style="color:#141414;">Professor</p>
        <input type="text" name="professor" value="{{$disciplina->professor}}" class="form-control" disabled="disabled">
      </div>


  </div>

  <div class="col-md-6">
    <div class="form-group">
      <p for="name" style="color:#141414;">Turno</p>
      <select class="selectpicker" name="turno">
        <option value="Matutino"  class="optionSelect" selected="selected" disabled="disabled">Matutino</option>
        <option value="Vespertino" class="optionSelect" <?php if ($disciplina->turno == "vespertino") { echo 'selected="selected"'; } ?> disabled="disabled">Vespertino</option>
        <option value="Noturno" class="optionSelect" <?php if ($disciplina->turno == "noturno") { echo 'selected="selected"'; } ?> disabled="disabled">Noturno</option>
      </select>
    </div>
    <div class="form-group">
      <p for="name" style="color:#141414;">Hórario</p>
      <select class="selectpicker" name="horario">
        <option value="primeiro" class="optionSelect" selected="selected" disabled="disabled">1º</option>
        <option value="segundo" class="optionSelect" <?php if ($disciplina->horario == "segundo") { echo 'selected="selected"'; } ?> disabled="disabled">2º</option>
        <option value="terceiro" class="optionSelect" <?php if ($disciplina->horario == "terceiro") { echo 'selected="selected"'; } ?> disabled="disabled">3º</option>
        <option value="quarto" class="optionSelect" <?php if ($disciplina->horario == "quarto") { echo 'selected="selected"'; } ?> disabled="disabled">4º</option>
        <option value="quinto" class="optionSelect" <?php if ($disciplina->horario == "quinto") { echo 'selected="selected"'; } ?> disabled="disabled">5º</option>
        <option value="sexto" class="optionSelect" <?php if ($disciplina->horario == "sexto") { echo 'selected="selected"'; } ?> disabled="disabled">6º</option>
      </select>
    </div>
    <div class="form-group">
      <p for="name" style="color:#141414;">Dias</p>
      <select class="selectpicker" multiple="multiple" name="dia[]">
        <option value="seg" class="optionSelect" <?php if ($disciplina->dia->seg == "1") { echo 'selected="selected"'; } ?> disabled="disabled">Segunda</option>
        <option value="ter" class="optionSelect" <?php if ($disciplina->dia->ter == "1") { echo 'selected="selected"'; } ?> disabled="disabled">Terça</option>
        <option value="quar" class="optionSelect" <?php if ($disciplina->dia->quar == "1") { echo 'selected="selected"'; } ?> disabled="disabled">Quarta</option>
        <option value="quin" class="optionSelect" <?php if ($disciplina->dia->quin == "1") { echo 'selected="selected"'; } ?> disabled="disabled">Quinta</option>
        <option value="sex" class="optionSelect" <?php if ($disciplina->dia->sex == "1") { echo 'selected="selected"'; } ?> disabled="disabled">Sexta</option>
        <option value="sab" class="optionSelect" <?php if ($disciplina->dia->sab == "1") { echo 'selected="selected"'; } ?> disabled="disabled">Sábado</option>
      </select>
    </div>
  </div>

  <div class="col-md-2">
    <span class="glyphicon glyphicon-list" aria-hidden="true" style="font-size:80px;color:#00e77d;"></span>
  </div>
</div>

@stop

@section('js')

@stop
