@extends('adminlte::page')

@section('title', 'Editar existentes')

@section('content_header')

    <h3 style="background-color:white;text-align:center;">EDITAR EXISTENTES</h3><br/>

@stop

@section('content')
<div class="row">
  <div class="col-md-12">
  <div class="box">

    <a class="btn btn-success" href="{{ route('sala.index') }}">Editar Sala</a>
    <a class="btn btn-info" href="{{ route('disciplina.index') }}">Editar Dsiciplina</a>


    </div>
    </div>
    </div>



@stop

@section('js')



@stop
