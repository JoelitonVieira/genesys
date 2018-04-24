@extends('adminlte::page')

@section('title', 'Editar Sala')

@section('content_header')

<div class ="header text-center"><h1 style="color:white; background: linear-gradient(to right, #00ab5d , #00eb7f);font-size:25px; padding:13px 0px 13px 0px;"><i class="fa fa-edit" style="font-size:20px;"></i>&nbsp Editar Sala/Laboratório</h1><br/></div>

@stop

@section('content')
<div class="row">
  <div class="col-md-12">
    <form action="{{action('SalaController@update', $sala->id)}}" method="POST">
    {{ csrf_field() }}
    {{ method_field('PUT')}}
      <div class="box-body">
        <div class="form-group has-feedback {{ $errors->has('nome') ? 'has-error' : '' }}">
          <p for="name" style="color:#141414;">Nome</p>
          <input type="text" name="nome" value="{{$sala->nome}}" class="form-control" style="margin-top:0px;border:none; border-radius:0px;border-bottom:1px solid #00A65A">
          @if ($errors->has('nome'))
            <span class="help-block">
              <strong>{{ $errors->first('nome') }}</strong>
            </span>
          @endif
        </div>
        <div class="form-group">
          <p for="name" style="color:#141414;">Tipo</p>
          <select class="selectpicker" name="tipo">
            <option value="Sala Comum" selected="selected">Sala Comum</option>
            <option value="Laboratório" class="optionSelect" <?php if ($sala->tipo == "Laboratório") { echo 'selected="selected"'; } ?>>Laboratório</option>
          </select>
        </div>
        <button class="buttonSalvar" style="background-color: #00a65a;"><span>SALVAR</span></button>
      </div>
    </form>
  </div>
</div>


@stop

@section('js')


@stop
