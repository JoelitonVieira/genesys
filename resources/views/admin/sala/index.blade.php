
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
          <div class="form-group has-feedback {{ $errors->has('nome') ? 'has-error' : '' }}">


              <div class="imputWithIcon">

                
              <input type="text" name="nome" class="form-control">


</div>
@if ($errors->has('nome'))
    <span class="help-block">
        <strong>{{ $errors->first('nome') }}</strong>
    </span>
@endif

          </div>
          <div class="form-group">
            <label for="name">Tipo</label>
            <select name="tipo">
              <option value="Sala Comum" selected="selected">Sala Comum</option>
              <option value="Laboratório">Laboratório</option>
            </select>
          </div>
        <h1><button class="button"><span>Salvar </span></button></h1>
        <style>
        .button {
        border-radius: 100px;
        background-color: #2F4F4F;
        border: none;
        color: #FFFFFF;
        text-align: center;
        font-size: 14px;
        padding: 20px;
        width: 90px;
        transition: all 0.5s;
        cursor: pointer;
        margin: 5px;
      }

      .button span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
      }

      .button span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 0.5s;
      }

      .button:hover span {
        padding-right: 25px;
      }

      .button:hover span:after {
        opacity: 1;
        right: 0;
      }
      </style>
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
        <table class="table table-hover table-dark">
          <thead>
            <tr style="background-color:gray">
              <th  scope="col">#</th>
              <th  scope="col">NOME</th>
              <th scope="col">TIPO</th>
              <th width="28%" class="text-center" scope="col">OPÇÕES</th>
            </tr>
          </thead>
          @foreach ($salas as $sala)
            <tbody>
              <tr>
                <th scope="row">{{ ++$i }}</th>
                <td>{{ $sala->nome }}</td>
                <td>{{ $sala->tipo }}</td>
                <td class="text-center">
                	<a class="btn btn-info waves-effect" href="{{ route('sala.edit', $sala) }}"><i class="fa fa-edit"></i> EDITAR</a>
                  <!--<form style="display: inline;" action="{{ route('sala.destroy', $sala->id) }}" method="POST">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-danger waves-effect" value="DELETAR" name="deletar">
                  </form>-->
                  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger">
                  <i class="fa fa-close"></i> DELETAR
                  </button>
              	</td>
              </tr>
            </tbody>
            <div class="modal fade" id="modal-danger">
              <div class="modal-dialog" style="width:400px">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span></button>
                    <h2 class="modal-title">Confirmação de exclusão</h2>
                  </div>
                  <div class="modal-body">
                    <p>Tem certeza que deseja excluir a sala selecionada?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Não</button>
                    <form style="display: inline;" action="{{ route('sala.destroy', $sala->id) }}" method="POST">
                      {{ method_field('DELETE') }}
                      {{ csrf_field() }}
                      <input type="submit" class="btn btn-info waves-effect" value="Deletar" name="deletar">
                    </form>
                  </div>
                </div>
                <!-- /.modal-content -->
              </div>
              <!-- /.modal-dialog -->
            </div>
          @endforeach
        </table>
        {!! $salas->links() !!}
      </div>
    </div>
  </div>
</div>
<div class="box">



@stop

@section('js')

@stop
