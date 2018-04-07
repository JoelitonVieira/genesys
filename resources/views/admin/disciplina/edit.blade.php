@extends('adminlte::page')

@section('title', 'Alteração de Disciplina')

@section('content_header')

    <h3 style="background-color:white;text-align:center;">Disciplinas</h3><br/>

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
<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="header">
        <h3>Alterar Disciplina</h3>
      </div>
      <form action="{{action('DisciplinaController@update', $disciplina->id)}}" method="POST" >
      {{ csrf_field() }}
      {{ method_field('PUT')}}
        <div class="box-body">
          <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" name="nome" value="{{$disciplina->nome}}"></br>
          </div>
          <div class="form-group">
            <label for="name">Código:</label>
            <input type="text" name="codigo" value="{{$disciplina->codigo}}"></br>
          </div>
          <div class="form-group">
            <label for="name">Turma:</label>
            <input type="text" name="turma" value="{{$disciplina->turma}}"></br>
          </div>
          <div class="form-group">
            <label for="name">Professor:</label>
            <input type="text" name="professor" value="{{$disciplina->professor}}"></br>
          </div>
          <span class="form-group">
            <label for="name">Turno:</label>
            <select name="turno">
              <option value="matutino" selected="selected">Matutino</option>
              <option value="vespertino" id="vespertino">Vespertino</option>
              <option value="noturno" id="noturno">Noturno</option>
            </select>
          </span>
          <param value="{{$disciplina->turno}}" id="teste">
          <div class="form-group">
            <label for="name">Horário:</label>
            <select name="horario">
              <option value="primeiro" selected="selected">1º</option>
              <option value="segundo" id="segundo">2º</option>
              <option value="terceiro" id="terceiro">3º</option>
              <option value="quarto" id="quarto">4º</option>
              <option value="quinto" id="quinto">5º</option>
              <option value="sexto" id="sexto">6º</option>
            </select>
          </div>
          <param value="{{$disciplina->horario}}" id="teste2">
          <div class="form-group">
            <label for="name">Dias:</label>
            <select class="selectpicker" multiple="multiple" name="dia">
              <option value="1">Segunda</option>
              <option value="2">Terça</option>
              <option value="quar">Quarta</option>
              <option value="quin">Quinta</option>
              <option value="sex">Sexta</option>
              <option value="sab">Sábado</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary info">Alterar</button>
        </div>
      </form>
    </div>
  </div>
</div>

@stop

@section('js')
<script>
  if ( document.getElementById("teste").value == "vespertino")
  {
    document.getElementById("vespertino").selected = "true";
  }
  else if ( document.getElementById("teste").value == "noturno")
  {
    document.getElementById("noturno").selected = "true";
  }

  if ( document.getElementById("teste2").value == "segundo")
  {
    document.getElementById("segundo").selected = "true";
  }
  else if ( document.getElementById("teste2").value == "terceiro")
  {
    document.getElementById("terceiro").selected = "true";
  }
  else if ( document.getElementById("teste2").value == "quarto")
  {
    document.getElementById("quarto").selected = "true";
  }
  else if ( document.getElementById("teste2").value == "quinto")
  {
    document.getElementById("quinto").selected = "true";
  }
  else if ( document.getElementById("teste2").value == "sexto")
  {
    document.getElementById("sexto").selected = "true";
  }
</script>
@stop
