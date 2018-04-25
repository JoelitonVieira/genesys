@extends('adminlte::page')

@section('title', 'Cadastro de Disciplina')

@section('content_header')
<ol class="breadcrumb" style="float:right">
  <li class="text-secondary"><a href="{{ route('admin.index') }}" class="text-success"><i class="fa fa-home text-success"></i>Home</a></li>
  <li class="text-secondary"><a href="{{ route('disciplina.index') }}" class="text-success">Disciplina</a></li>
  <li class="active text-dark" aria-current="page">Cadastrar Disciplina</li>
</ol></br></br>
<div class ="header text-center">
      <p style="color:white; background: linear-gradient(to right, #00ab5d , #00eb7f);font-size:25px; padding:13px 0px 13px 0px;"></span>Cadastro de Disciplina</p><br/>
</div>

@stop

@section('content')

<div class="row">
  <div class="col-md-3">
    <form action="{{action('DisciplinaController@store')}}" method="POST" >
    {{ csrf_field() }}
      <div class="box-body">
        <div class="form-group has-feedback {{ $errors->has('nome') ? 'has-error' : '' }}">
          <p for="name" style="color:#141414;">Nome</p>
          <input type="text" name="nome" placeholder="Nome" class="form-control">
          @if ($errors->has('nome'))
            <span class="help-block">
                <strong>{{ $errors->first('nome') }}</strong>
            </span>
          @endif
        </div>
        <div class="form-group has-feedback {{ $errors->has('codigo') ? 'has-error' : '' }}">
          <p for="name" style="color:#141414;">Código</p>
          <input type="text" name="codigo" placeholder="Código" class="form-control">
          @if ($errors->has('codigo'))
            <span class="help-block">
                <strong>{{ $errors->first('codigo') }}</strong>
            </span>
          @endif
        </div>
        <div class="form-group has-feedback {{ $errors->has('turma') ? 'has-error' : '' }}">
          <p for="name" style="color:#141414;">Turma</p>
          <input type="text" name="turma" placeholder="Turma" class="form-control">
          @if ($errors->has('turma'))
            <span class="help-block">
                <strong>{{ $errors->first('turma') }}</strong>
            </span>
          @endif
        </div>
        <div class="form-group has-feedback {{ $errors->has('professor') ? 'has-error' : '' }}">
          <p for="name" style="color:#141414;">Professor</p>
          <input type="text" name="professor" placeholder="Professor" class="form-control">
          @if ($errors->has('professor'))
            <span class="help-block">
                <strong>{{ $errors->first('professor') }}</strong>
            </span>
          @endif
        </div>
        <div class="form-group">
          <p for="name" style="color:#141414;">Turno</p>
          <select class="selectpicker" name="turno">
            <option value="Matutino"  class="optionSelect" selected="selected">Matutino</option>
            <option value="Vespertino" class="optionSelect">Vespertino</option>
            <option value="Noturno" class="optionSelect">Noturno</option>
          </select>
        </div>
        <div class="form-group">
          <p for="name" style="color:#141414;">Horário</p>
          <select class="selectpicker" name="horario">
            <option value="Primeiro" class="optionSelect" selected="selected">1º</option>
            <option value="Segundo" class="optionSelect">2º</option>
            <option value="Terceiro" class="optionSelect">3º</option>
            <option value="Quarto" class="optionSelect">4º</option>
            <option value="Quinto" class="optionSelect">5º</option>
            <option value="Sexto" class="optionSelect">6º</option>
          </select>
        </div>
        <div class="form-group">
          <p for="name" style="color:#141414;">Dias</p>
          <select class="selectpicker" multiple="multiple" name="dia[]">
            <option value="seg" class="optionSelect" selected="selected">Segunda</option>
            <option value="ter" class="optionSelect">Terça</option>
            <option value="quar" class="optionSelect" selected="selected">Quarta</option>
            <option value="quin" class="optionSelect">Quinta</option>
            <option value="sex" class="optionSelect" selected="selected">Sexta</option>
            <option value="sab" class="optionSelect">Sábado</option>
          </select>
        </div>
        <button class="buttonSalvar" style="background-color:#00A65A;" ><span>SALVAR</span></button>
      </div>
    </form>
  </div>

  <div class="col-md-7">
  </div>

  <div class="col-md-2">
    <br><br>
    <i class="fas fa-graduation-cap"style="font-size:80px;color:#00e77d;"></i>
  </div>
</div>

@stop

@section('js')

@stop
