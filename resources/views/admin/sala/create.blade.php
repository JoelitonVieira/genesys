
@extends('adminlte::page')

@section('title', 'Cadastro de Salas e Laboratórios')

@section('content_header')
<ol class="breadcrumb" style="float:right">
  <li class="text-secondary"><a href="{{ route('admin.index') }}" class="text-success"><i class="fa fa-home text-success"></i>Home</a></li>
  <li class="text-secondary"><a href="{{ route('sala.index') }}" class="text-success">Salas</a></li>
  <li class="active text-dark" aria-current="page">Cadastrar Sala</li>
</ol></br></br>

<div class ="header text-center">
      <p style="color:white; background: linear-gradient(to right, #00ab5d , #00eb7f);font-size:25px; padding:13px 0px 13px 0px;"></span>Cadastrar Sala/Laboratório</p><br/>
</div>

@stop

@section('content')

<div class="row ">
  <div class="col-md-3">
    <form action="{{action('SalaController@store')}}" method="POST" >
      {{ csrf_field() }}
      <div class="box-body">
        <div class="form-group has-feedback {{ $errors->has('nome') ? 'has-error' : '' }}">
          <p for="name" style="color:#141414;">Informe o nome</p>
          <input type="text" name="nome" placeholder="Sala/Laboratório" class="form-control">
          @if ($errors->has('nome'))
          <span class="help-block">
            <strong>{{ $errors->first('nome') }}</strong>
          </span>
          @endif
        </div>
        <div class="form-group">
          <p for="name" style="color:#141414;">Tipo</p>
          <select class="selectpicker" name="tipo">
            <option value="Sala Comum"  class="optionSelect" selected="selected">SALA COMUM</option>
            <option value="Laboratório" class="optionSelect">LABORATÓRIO</option>
          </select>
        </div>
        <button class="buttonSalvar" style="border-radius: 0px;background-color:#00A65A;"><span>SALVAR</span></button>
      </div>
    </form>
  </div>
  <div class="col-md-7">
  </div>
  <div class="col-md-2">
    <br><br>
    <span class="glyphicon glyphicon-edit" aria-hidden="true" style="font-size:80px;color:#00e77d;"></span>
  </div>
</div>




</div>
</div>

@stop

@section('js')

@stop
