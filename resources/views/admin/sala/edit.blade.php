@extends('adminlte::page')

@section('title', 'Editar Sala')

@section('content_header')
<div class ="header"><h1 style="background-color:white;text-align:center;font-size:200%">SALAS</h1><br/></div>

@stop

@section('content')

<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="header">
        <h3>Alterar Sala</h3>
      </div>
      <form action="{{action('SalaController@update', $sala->id)}}" method="POST">
      {{ csrf_field() }}
      {{ method_field('PUT')}}
        <div class="box-body">
          <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" name="nome" value="{{$sala->nome}}"></br>
          </div>
          <div class="form-group">
            <label for="name">Tipo:</label>
            <select name="tipo">
              <option value="Sala Comum" selected="return mySelection()">Sala Comum</option>
              <option value="Laboratório" selected="true">Laboratório</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary waves-effect">Alterar</button>
        </div>
      </form>
    </div>
  </div>
</div>


@stop

@section('js')
<script>
  function mySelection()
  {
    if ({{$sala->tipo}} == "Laboratório" )
    {
      return false;
    }
    return true;
  }
</script>
@stop
