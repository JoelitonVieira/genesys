@extends('adminlte::page')

@section('title', 'Alteração de Disciplina')

@section('content_header')

<div class ="header"><h1 style="color:WHITE;background-color:#00A65A;text-align:center;font-size:200%;padding:6px;">DISCIPLINAS</h1><br/></div>

@stop

@section('content')

<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="header">
      <h4 class="pageHeader">ALTERAR DISCIPLINA</h4>
    </div>
    <form action="{{action('DisciplinaController@update', $disciplina->id)}}" method="POST" >
    {{ csrf_field() }}
    {{ method_field('PUT')}}
      <div class="box-body">
        <div class="form-group has-feedback {{ $errors->has('nome') ? 'has-error' : '' }}">
          <label for="name">Nome:</label></br>
          <input type="text" name="nome" value="{{$disciplina->nome}}" class="form-control">
          @if ($errors->has('nome'))
            <span class="help-block">
                <strong>{{ $errors->first('nome') }}</strong>
            </span>
          @endif
        </div>
        <div class="form-group has-feedback {{ $errors->has('codigo') ? 'has-error' : '' }}">
          <label for="name">Código:</label></br>
          <input type="text" name="codigo" value="{{$disciplina->codigo}}" class="form-control">
          @if ($errors->has('codigo'))
            <span class="help-block">
                <strong>{{ $errors->first('codigo') }}</strong>
            </span>
          @endif
        </div>
        <div class="form-group has-feedback {{ $errors->has('turma') ? 'has-error' : '' }}">
          <label for="name">Turma:</label></br>
          <input type="text" name="turma" value="{{$disciplina->turma}}" class="form-control">
          @if ($errors->has('turma'))
            <span class="help-block">
                <strong>{{ $errors->first('turma') }}</strong>
            </span>
          @endif
        </div>
        <div class="form-group has-feedback {{ $errors->has('professor') ? 'has-error' : '' }}">
          <label for="name">Professor:</label></br>
          <input type="text" name="professor" value="{{$disciplina->professor}}" class="form-control">
          @if ($errors->has('professor'))
            <span class="help-block">
                <strong>{{ $errors->first('professor') }}</strong>
            </span>
          @endif
        </div>
        <div class="form-group">
          <label for="name">Turno:</label></br>
          <select class="selectpicker" name="turno">
            <option value="Matutino"  class="optionSelect" selected="selected">Matutino</option>
            <option value="Vespertino" class="optionSelect" <?php if ($disciplina->turno == "vespertino") { echo 'selected="selected"'; } ?>>Vespertino</option>
            <option value="Noturno" class="optionSelect" <?php if ($disciplina->turno == "noturno") { echo 'selected="selected"'; } ?>>Noturno</option>
          </select>
        </div>
        <div class="form-group">
          <label for="name">Hórario:</label></br>
          <select class="selectpicker" name="horario">
            <option value="primeiro" class="optionSelect" selected="selected">1º</option>
            <option value="segundo" class="optionSelect" <?php if ($disciplina->horario == "segundo") { echo 'selected="selected"'; } ?>>2º</option>
            <option value="terceiro" class="optionSelect" <?php if ($disciplina->horario == "terceiro") { echo 'selected="selected"'; } ?>>3º</option>
            <option value="quarto" class="optionSelect" <?php if ($disciplina->horario == "quarto") { echo 'selected="selected"'; } ?>>4º</option>
            <option value="quinto" class="optionSelect" <?php if ($disciplina->horario == "quinto") { echo 'selected="selected"'; } ?>>5º</option>
            <option value="sexto" class="optionSelect" <?php if ($disciplina->horario == "sexto") { echo 'selected="selected"'; } ?>>6º</option>
          </select>
        </div>
        <div class="form-group">
          <label for="name">Dias:</label></br>
          <select class="selectpicker" multiple="multiple" name="dia[]">
            <option value="seg" class="optionSelect" <?php if ($disciplina->dia->seg == "1") { echo 'selected="selected"'; } ?>>Segunda</option>
            <option value="ter" class="optionSelect" <?php if ($disciplina->dia->ter == "1") { echo 'selected="selected"'; } ?>>Terça</option>
            <option value="quar" class="optionSelect" <?php if ($disciplina->dia->quar == "1") { echo 'selected="selected"'; } ?>>Quarta</option>
            <option value="quin" class="optionSelect" <?php if ($disciplina->dia->quin == "1") { echo 'selected="selected"'; } ?>>Quinta</option>
            <option value="sex" class="optionSelect" <?php if ($disciplina->dia->sex == "1") { echo 'selected="selected"'; } ?>>Sexta</option>
            <option value="sab" class="optionSelect" <?php if ($disciplina->dia->sab == "1") { echo 'selected="selected"'; } ?>>Sábado</option>
          </select>
        </div>
        <button class="buttonSalvar"><span>SALVAR</span></button>
      </div>
    </form>
  </div>
</div>

@stop

@section('js')

@stop
