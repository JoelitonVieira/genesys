@extends('adminlte::page')

@section('title', 'Editar existentes')

@section('content_header')

    <h3 style="background-color:white;text-align:center;">EDITAR EXISTENTES</h3><br/>

@stop

@section('content')

      <div class="header">
        <h3>Cadastrar Disciplina</h3>
      </div>
      <form action="{{action('DisciplinaController@update', $disciplina->id)}}" method="POST" >
        {{ csrf_field() }}
        {{ method_field('PUT')}}
        <div class="box-body">
          <div class="col-md-4">
            <label for="name" >Nome:</label></br>
            <input type="text" name="nome" value="{{$disciplina->nome}}"></br>
          </div>
          <div class="col-md-4">
            <label for="name" >Código:</label></br>
            <input type="text" name="codigo" value="{{$disciplina->codigo}}"></br>
          </div>
          <div class="col-md-4">
            <label for="name">Turma:</label></br>
            <input type="text" name="turma"  value="{{$disciplina->turma}}"></br>
          </div>
          <div class="col-md-4">
            <label for="name">Professor:</label></br>
            <input type="text" name="professor" value="{{$disciplina->professor}}"></br>
          </div>
          <div class="col-md-4">
            <label for="name">Turno:</label></br>
            <select name="turno">
              <option value="matutino" selected="selected">Matutino</option>
              <option value="vespertino" <?php if ($disciplina->turno == "vespertino") { echo 'selected="selected"'; } ?>>Vespertino</option>
              <option value="noturno" <?php if ($disciplina->turno == "noturno") { echo 'selected="selected"'; } ?>>Noturno</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="name">Horário:</label></br>
            <select name="horario">
              <option value="primeiro" selected="selected">1º</option>
              <option value="segundo" <?php if ($disciplina->horario == "segundo") { echo 'selected="selected"'; } ?>>2º</option>
              <option value="terceiro" <?php if ($disciplina->horario == "terceiro") { echo 'selected="selected"'; } ?>>3º</option>
              <option value="quarto" <?php if ($disciplina->horario == "quarto") { echo 'selected="selected"'; } ?>>4º</option>
              <option value="quinto" <?php if ($disciplina->horario == "quinto") { echo 'selected="selected"'; } ?>>5º</option>
              <option value="sexto" <?php if ($disciplina->horario == "sexto") { echo 'selected="selected"'; } ?>>6º</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="name">Dias:</label></br>
            <select class="selectpicker" multiple="multiple" name="dia[]">
              <option value="seg" <?php if ($disciplina->dia->seg == "1") { echo 'selected="selected"'; } ?>>Segunda</option>
              <option value="ter" <?php if ($disciplina->dia->ter == "1") { echo 'selected="selected"'; } ?>>Terça</option>
              <option value="quar" <?php if ($disciplina->dia->quar == "1") { echo 'selected="selected"'; } ?>>Quarta</option>
              <option value="quin" <?php if ($disciplina->dia->quin == "1") { echo 'selected="selected"'; } ?>>Quinta</option>
              <option value="sex" <?php if ($disciplina->dia->sex == "1") { echo 'selected="selected"'; } ?>>Sexta</option>
              <option value="sab" <?php if ($disciplina->dia->sab == "1") { echo 'selected="selected"'; } ?>>Sábado</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary info">Salvar</button>
        </div>
      </form>






@stop

@section('js')
@stop
