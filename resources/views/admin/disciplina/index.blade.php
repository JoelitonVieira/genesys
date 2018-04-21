@extends('adminlte::page')

@section('title', 'Cadastro de Disciplina')

@section('content_header')

<div class ="header"><h1 style="color:white;background-color:#00A65A;text-align:center;font-size:200%;padding:6px;">DISCIPLINAS</h1><br/></div>

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
      <h4 class="pageHeader">CADASTRAR DISCIPLINA</h4>
    </div>
    <form action="{{action('DisciplinaController@store')}}" method="POST" >
    {{ csrf_field() }}
      <div class="box-body">
        <div class="form-group has-feedback {{ $errors->has('nome') ? 'has-error' : '' }}">
          <label for="name">Nome:</label></br>
          <input type="text" name="nome" placeholder="Nome" class="form-control">
          @if ($errors->has('nome'))
            <span class="help-block">
                <strong>{{ $errors->first('nome') }}</strong>
            </span>
          @endif
        </div>
        <div class="form-group has-feedback {{ $errors->has('codigo') ? 'has-error' : '' }}">
          <label for="name">Código:</label></br>
          <input type="text" name="codigo" placeholder="Código" class="form-control">
          @if ($errors->has('codigo'))
            <span class="help-block">
                <strong>{{ $errors->first('codigo') }}</strong>
            </span>
          @endif
        </div>
        <div class="form-group has-feedback {{ $errors->has('turma') ? 'has-error' : '' }}">
          <label for="name">Turma:</label></br>
          <input type="text" name="turma" placeholder="Turma" class="form-control">
          @if ($errors->has('turma'))
            <span class="help-block">
                <strong>{{ $errors->first('turma') }}</strong>
            </span>
          @endif
        </div>
        <div class="form-group has-feedback {{ $errors->has('professor') ? 'has-error' : '' }}">
          <label for="name">Professor:</label></br>
          <input type="text" name="professor" placeholder="Professor" class="form-control">
          @if ($errors->has('professor'))
            <span class="help-block">
                <strong>{{ $errors->first('professor') }}</strong>
            </span>
          @endif
        </div>
        <div class="form-group">
          <label for="name">Turno:</label></br>
          <select class="selectpicker" name="turno">
            <option value="Matutino"  class="optionSelect" selected="selected">Matutino</option>
            <option value="Vespertino" class="optionSelect">Vespertino</option>
            <option value="Noturno" class="optionSelect">Noturno</option>
          </select>
        </div>
        <div class="form-group">
          <label for="name">Hórario:</label></br>
          <select class="selectpicker" name="horario">
            <option value="primeiro" class="optionSelect" selected="selected">1º</option>
            <option value="segundo" class="optionSelect">2º</option>
            <option value="terceiro" class="optionSelect">3º</option>
            <option value="quarto" class="optionSelect">4º</option>
            <option value="quinto" class="optionSelect">5º</option>
            <option value="sexto" class="optionSelect">6º</option>
          </select>
        </div>
        <div class="form-group">
          <label for="name">Dias:</label></br>
          <select class="selectpicker" multiple="multiple" name="dia[]">
            <option value="seg" class="optionSelect" selected="selected">Segunda</option>
            <option value="ter" class="optionSelect">Terça</option>
            <option value="quar" class="optionSelect" selected="selected">Quarta</option>
            <option value="quin" class="optionSelect">Quinta</option>
            <option value="sex" class="optionSelect" selected="selected">Sexta</option>
            <option value="sab" class="optionSelect">Sábado</option>
          </select>
        </div>
        <button class="buttonSalvar"><span>SALVAR</span></button>
      </div>
    </form>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="header">
      <h4 class="pageHeader">DISCIPLINAS EXISTENTES</h4>
    </div>
    <div class="body table-responsive">
      <table class="table table-dark table-striped table-bordered table-hover">
        <thead>
          <tr style="background-color:#616161">
            <th  scope="col" style="color:white">#</th>
            <th  scope="col" style="color:white">NOME</th>
            <th scope="col" style="color:white">CÓDIGO</th>
            <th class="text-center" scope="col" style="color:white" width="32%">OPÇÕES</th>
          </tr>
        </thead>
        @foreach ($disciplinas as $disciplina)
          <tbody>
            <tr>
              <th scope="row">{{ ++$i }}</th>
              <td>{{ $disciplina->nome }}</td>
              <td>{{ $disciplina->codigo }}</td>
              <td class="text-center">
                <a class="btn btn-info" href="{{ route('disciplina.show', $disciplina) }}"><i class="fa fa-eye"></i> DETALHAR</a>
                <a class="btn btn-primary" href="{{ route('disciplina.edit', $disciplina) }}"><i class="fa fa-edit"></i> EDITAR</a>
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
                  <p style="text-align:center">Tem certeza que deseja excluir a disciplina selecionada?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Não</button>
                  <form style="display: inline;" action="{{ route('disciplina.destroy', $disciplina->id) }}" method="POST">
                    {{ method_field('DELETE') }}
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-info" value="Deletar" name="deletar">
                  </form>
                </div>
              </div>
              <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
          </div>
        @endforeach
      </table>
      {!! $disciplinas->links() !!}
    </div>
  </div>
</div>
@stop

@section('js')

@stop
