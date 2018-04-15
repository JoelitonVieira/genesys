@extends('adminlte::page')

@section('title', 'Cadastro de Professor')

@section('content_header')

    <h3 style="background-color:white;text-align:center;">Cadastro de Professor</h3><br/>

@stop

@section('content')
@if ($message = Session::get('success'))
<div class="alert bg-green alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  	<span aria-hidden="true">&times;</span>
  </button>
  <p>{{ $message }}</p>
</div>
@endif
<form action="{{action('ProfessorController@store')}}" method="POST" >
{{ csrf_field() }}

<label for="name">Dias:</label>
<select class="selectpicker" multiple="multiple" name="dias_array[]">
  <option value="1">Segunda</option>
  <option value="2">Terça</option>
  <option value="quar">Quarta</option>
  <option value="quin">Quinta</option>
  <option value="sex">Sexta</option>
  <option value="sab">Sábado</option>
</select>
<button type="submit" class="btn btn-primary info">Salvar</button>
</form>
@stop

@section('js')

@stop
