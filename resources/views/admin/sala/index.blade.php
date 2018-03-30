@extends('adminlte::page')

@section('title', 'Cadastro de Sala')

@section('content_header')
<div class ="header"><h1 style="background-color:white;text-align:center;font-size:200%">SALAS</h1><br/></div>

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
        <h3>Cadastrar Sala</h3>
      </div>
      <form action="{{action('SalaController@store')}}" method="POST" >
      {{ csrf_field() }}
        <div class="box-body">
          <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" name="nome"></br>
          </div>
          <div class="form-group">
            <label for="name">Tipo:</label>
            <select name="tipo">
              <option value="Sala Comum" selected="selected">Sala Comum</option>
              <option value="Laboratório">Laboratório</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary waves-effect">Salvar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="header">
        <h3>Salas Existentes</h3>
      </div>
      <div class="body table-responsive">
        <table class="table table-bordered">
          <thead>
            <tr style="background-color:gray">
              <th></th>
              <th>NOME</th>
              <th>TIPO</th>
              <th width="28%" class="text-center">OPÇÕES</th>
            </tr>
          </thead>
          @foreach ($salas as $sala)
            <tbody>
              <tr>
                <th scope="row">{{ ++$i }}</th>
                <td>{{ $sala->nome }}</td>
                <td>{{ $sala->tipo }}</td>
                <td class="text-center">
                	<a class="btn btn-info waves-effect" href="{{ route('sala.edit', $sala) }}">EDITAR</a>
                  <form style="display: inline;" action="{{ route('sala.destroy', $sala->id) }}" method="POST">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-danger waves-effect" value="DELETAR" name="deletar">
                  </form>
              	</td>
              </tr>
            </tbody>
          @endforeach
        </table>
        {!! $salas->links() !!}
      </div>
    </div>
  </div>
</div>
@stop

@section('js')

@stop
