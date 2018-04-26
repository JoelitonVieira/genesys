@extends('adminlte::page')

@section('title', 'Disciplinas')

@section('content_header')
<ol class="breadcrumb" style="float:right">
  <li class="text-secondary"><a href="{{ route('admin.index') }}" class="text-success"><i class="fa fa-home text-success"></i>Home</a></li>
  <li class="active text-dark" aria-current="page">Disciplinas</li>
</ol></br></br>
<div class ="header text-center">
  <p style="color:white; background: linear-gradient(to right, #00ab5d , #00eb7f);font-size:25px; padding:13px 0px 13px 0px;"></span>Disciplinas Existentes</p><br/>
</div>
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

<form action="{{action('DisciplinaController@search')}}" method="POST">
      {{ csrf_field() }}

    <div class="row">
      <div class="col-sm-3">
        <div class="form-group has-feedback {{ $errors->has('pesquisa') ? 'has-error' : '' }}">
          <p for="name" style="color:#141414;">Informe a disciplina a ser pesquisada aqui:</p>
          <input  type="text" name="pesquisa" style="margin-top:0px;border:none; border-radius:0px;border-bottom:1px solid #00A65A" class="form-control" value="{{ old('pesquisa') }}">
            @if ($errors->has('pesquisa'))
            <span class="help-block">
                <strong>{{ $errors->first('pesquisa') }}</strong>
            </span>
          @endif
        </div>

        <div class="form-group">
          <p for="name" style="color:#141414;">Escolha o Modo</p>
          <select class="selectpicker" name="modo" placeholder="Escolha o Modo">
            <option value="nome"  class="optionSelect" selected="selected">POR NOME</option>
            <option value="codigo" class="optionSelect">POR CÓDIGO</option>
            <option value="turma" class="optionSelect">POR TURMA</option>
            <option value="professor"  class="optionSelect">POR PROFESSOR</option>
          </select>
        </div>
      </div>

      <div class="col-md-7">
      </div>

        <div class="col-md-2">
          <br><br>
          <span class="glyphicon glyphicon-list" aria-hidden="true" style="font-size:80px;color:#00e77d;"></span>
        </div>
    </div>
    <br>
    <button class="buttonSalvar" style="border-radius: 0px;background-color:#00A65A;"><span>PESQUISAR</span></button><br />
    <a class="btn btn-primary" href="{{ route('disciplina.create') }}" style="border-radius: 0px;background-color:transparent; color: #00A65A; border: 2px solid #00A65A;"><span>CADASTRAR DISCIPLINA</span></a>
    </br></br>
</form>

</br>
@if ( isset( $dataform ) )
  <span style="float:right">{!! $disciplinas->appends($dataform)->links() !!}</span></br></br>
  <b>{{"Total de Resultados: "}}</b>{{ $countDisciplinas }}</br>
@else
  <span style="float:right">{!! $disciplinas->links() !!}</span></br></br>
  <b>{{"Total de Disciplinas: "}}</b>{{ $countDisciplinas }}</br>
@endif
</br>

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
          <a class="btn btn-primary" style="background-color:#00e079;border-color:#00e079" href="{{ route('disciplina.edit', $disciplina) }}" style="background-color:#00e079;border-color:#00e079"><i class="fa fa-edit"></i> EDITAR</a>
          <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-danger">
            <i class="fa fa-close"></i> DELETAR
          </button>
        </td>
      </tr>
    </tbody>
    <div class="modal fade" id="modal-danger">
      <div class="modal-dialog" style="width:400px">
        <div class="modal-content">
          <div class="modal-header" style="background-color:red;color:white;">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h2 class="modal-title" style="text-align:center">Confirmação de Exclusão</h2>
          </div>
          <div class="modal-body text-center">
            <span class="glyphicon glyphicon-remove" style="color:red; font-size:40px;"></span><br />
            <p>Tem certeza que deseja excluir a disciplina selecionada?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal" style="border-radius:0px;background-color:white; color:red;">NÃO</button>
            <form style="display: inline;" action="{{ route('disciplina.destroy', $disciplina->id) }}" method="POST">
              {{ method_field('DELETE') }}
              {{ csrf_field() }}
              <input type="submit" class="btn btn-info" style="border-radius:0px;background-color:red;border:none;" value="DELETAR" name="deletar">
            </form>
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>
    @endforeach
  </table>
</div>

@stop

@section('js')

@stop
