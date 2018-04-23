
@extends('adminlte::page')

@section('title', 'Cadastro de Salas e Laboratórios')

@section('content_header')

<div class ="header left"><p style="border-left:3px solid #00A65A;color:#141414;font-size:200%;padding:6px;">&nbsp Cadastrar Sala/Laboratório</p><br/></div>

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
<div class="row ">
  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <form action="{{action('SalaController@store')}}" method="POST" >
    {{ csrf_field() }}
      <div class="box-body">
        <div class="form-group has-feedback {{ $errors->has('nome') ? 'has-error' : '' }}">
          <p for="name" style="color:#141414;">Nome</p>
          <input type="text" name="nome" style="margin-top:0px;border:none; border-bottom: 1px solid #00A65A; border-radius: 0px;" placeholder="Nome da Sala/Laboratório" class="form-control">
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
</div>
</br>

<div class="row">
<br>
  <div class="col-md-12">
    <div class ="header left"><h1 style="border-left:3px solid #00A65A;color:#141414;font-size:200%;padding:6px;">&nbsp Salas/Laboratórios existentes</h1><br/></div><br>
    <form action="{{action('SalaController@search')}}" method="POST">
      {{ csrf_field() }}
      <div class="form-group">
        <select class="selectpicker" name="modo" placeholder="Escolha o Modo">
          <option value="nome"  class="optionSelect">POR NOME</option>
          <option value="tipo" class="optionSelect">POR TIPO</option>
        </select>
        <input type="text" name="pesquisa" style="border: 1px solid #00A65A" class="form-control"  placeholder="Digite aqui">
        <button class="buttonSalvar" style="border-radius: 0px;background-color:#00A65A;"><span>PESQUISAR</span></button>
      </div>
    </form>

    <div class="body table-responsive" >
      <table class="table table-dark table-striped table-bordered table-hover" style="margin-top: 0px; border:none;">
        <thead>
          <tr style="background-color:#00A65A">
            <th  scope="col" style="color:white">ID</th>
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
            	<a class="btn btn-primary" style="background-color:#00A65A; border:none; border-radius: 0px;" href="{{ route('sala.edit', $sala) }}"><i class="fa fa-edit"></i> Editar</a>
              <button type="button" class="btn btn-danger" style="background-color:red; border:none; border-radius: 0px;" data-toggle="modal" data-target="#modal-danger">
              <i class="fa fa-close"></i> Deletar
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
      @if ( isset( $dataform ) )
        {!! $salas->appends($dataform)->links() !!}
      @else
        {!! $salas->links() !!}
      @endif
    </div>
  </div>
</div>



@stop

@section('js')

@stop
