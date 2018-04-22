
@extends('adminlte::page')

@section('title', 'Cadastro de Salas e Laboratórios')

@section('content_header')

<div class ="header"><h1 style="color:white;background-color:#00A65A;text-align:center;font-size:200%;padding:6px;">SALAS E LABORATÓRIOS</h1><br/></div>

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
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="header">
      <h4 class="pageHeader">CADASTRAR SALA/LABORATÓRIO</h4>
    </div>
    <form action="{{action('SalaController@store')}}" method="POST" >
    {{ csrf_field() }}
      <div class="box-body">
        <div class="form-group has-feedback {{ $errors->has('nome') ? 'has-error' : '' }}">
          <label for="name">Nome:</label></br>
          <input type="text" name="nome" placeholder="Nome da Sala/Laboratório" class="form-control">
          @if ($errors->has('nome'))
            <span class="help-block">
                <strong>{{ $errors->first('nome') }}</strong>
            </span>
          @endif
        </div>

        <div class="form-group">
          <label for="name">Tipo:</label></br>
          <select class="selectpicker" name="tipo">
            <option value="Sala Comum"  class="optionSelect" selected="selected">Sala Comum</option>
            <option value="Laboratório" class="optionSelect">Laboratório</option>
          </select>
        </div>
        <button class="buttonSalvar"><span>SALVAR</span></button>
      </div>
    </form>
  </div>
</div>
</br>

<div class="row">
  <div class="col-md-12">
    <div class="header">
      <h4 class="pageHeader">SALAS/LABORATÓRIOS EXISTENTES</h4>
    </div>
    <div class="body table-responsive">
      <table class="table table-dark table-striped table-bordered table-hover">
        <thead>
          <tr style="background-color:#616161">
            <th  scope="col" style="color:white">#</th>
            <th  scope="col" style="color:white">NOME</th>
            <th scope="col" style="color:white">TIPO</th>
            <th class="text-center" scope="col" style="color:white" width="28%">OPÇÕES</th>
          </tr>
        </thead>
        @foreach ($salas as $sala)
        <tbody>
          <tr>
            <th scope="row">{{ ++$i }}</th>
            <td>{{ $sala->nome }}</td>
            <td>{{ $sala->tipo }}</td>
            <td class="text-center">
            	<a class="btn btn-primary" href="{{ route('sala.edit', $sala) }}"><i class="fa fa-edit"></i> EDITAR</a>
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
                  <h2 class="modal-title" style="text-align:center">Confirmação de Exclusão</h2>
                </div>
                <div class="modal-body">
                  <p style="text-align:center">Tem certeza que deseja excluir a sala selecionada?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">NÃO</button>
                  <form style="display: inline;" action="{{ route('sala.destroy', $sala->id) }}" method="POST">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-info" value="DELETAR" name="deletar">
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
<div class="box">



@stop

@section('js')

@stop
