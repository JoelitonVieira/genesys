@extends('adminlte::page')

@section('title', 'Exibição de Disciplina')

@section('content_header')

<div class ="header"><h1 style="color:white;background-color:#00A65A;text-align:center;font-size:200%;padding:6px;">DISCIPLINAS</h1><br/></div>

@stop

@section('content')

<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="header">
      <h4 class="pageHeader">DETALHAR DISCIPLINA</h4>
    </div>
    <div class="box-body">
      <div class="form-group">
        <label for="name">Nome:</label></br>
        <input type="text" name="nome" value="{{$disciplina->nome}}" class="form-control" disabled="disabled">
      </div>
      <div class="form-group">
        <label for="name">Código:</label></br>
        <input type="text" name="codigo" value="{{$disciplina->codigo}}" class="form-control" disabled="disabled">
      </div>
      <div class="form-group">
        <label for="name">Turma:</label></br>
        <input type="text" name="turma" value="{{$disciplina->turma}}" class="form-control" disabled="disabled">
      </div>
      <div class="form-group">
        <label for="name">Professor:</label></br>
        <input type="text" name="professor" value="{{$disciplina->professor}}" class="form-control" disabled="disabled">
      </div>
      <div class="form-group">
        <label for="name">Turno:</label></br>
        <select class="selectpicker" name="turno">
          <option value="Matutino"  class="optionSelect" selected="selected" disabled="disabled">Matutino</option>
          <option value="Vespertino" class="optionSelect" <?php if ($disciplina->turno == "vespertino") { echo 'selected="selected"'; } ?> disabled="disabled">Vespertino</option>
          <option value="Noturno" class="optionSelect" <?php if ($disciplina->turno == "noturno") { echo 'selected="selected"'; } ?> disabled="disabled">Noturno</option>
        </select>
      </div>
      <div class="form-group">
        <label for="name">Hórario:</label></br>
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
        <label for="name">Dias:</label></br>
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
  </div>
</div>

@stop

@section('js')

@stop
