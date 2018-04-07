@extends('adminlte::page')

@section('title', 'Cadastro de Disciplina')

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
        <h3>Cadastrar Disciplina</h3>
      </div>
      <form action="{{action('DisciplinaController@store')}}" method="POST" >
      {{ csrf_field() }}
        <div class="box-body">
          <div class="form-group">
            <label for="name">Nome:</label>
            <input type="text" name="nome"></br>
          </div>
          <div class="form-group">
            <label for="name">Código:</label>
            <input type="text" name="codigo"></br>
          </div>
          <div class="form-group">
            <label for="name">Turma:</label>
            <input type="text" name="turma"></br>
          </div>
          <div class="form-group">
            <label for="name">Professor:</label>
            <input type="text" name="professor"></br>
          </div>
          <span class="form-group">
            <label for="name">Turno:</label>
            <select name="turno">
              <option value="matutino" selected="selected">Matutino</option>
              <option value="vespertino">Vespertino</option>
              <option value="noturno">Noturno</option>
            </select>
          </span>
          <div class="form-group">
            <label for="name">Dias:</label>
            <select name="horario">
              <option value="primeiro" selected="selected">1º</option>
              <option value="segundo">2º</option>
              <option value="terceiro">3º</option>
              <option value="quarto">4º</option>
              <option value="quinto">5º</option>
              <option value="sexto">6º</option>
            </select>
          </div>
          <div class="form-group">
            <label for="name">Horário:</label>
            <select class="selectpicker" multiple="multiple" name="dia">
              <option value="1">Segunda</option>
              <option value="2">Terça</option>
              <option value="quar">Quarta</option>
              <option value="quin">Quinta</option>
              <option value="sex">Sexta</option>
              <option value="sab">Sábado</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary info">Salvar</button>
        </div>
      </form>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="header">
        <h3>Disciplinas Existentes</h3>
      </div>
      <div class="body table-responsive">
        <table class="table table-hover table-dark">
          <thead>
            <tr style="background-color:gray">
              <th  scope="col">#</th>
              <th  scope="col">NOME</th>
              <th scope="col">CÓDIGO</th>
              <th width="28%" class="text-center" scope="col">OPÇÕES</th>
            </tr>
          </thead>
          @foreach ($disciplinas as $disciplina)
            <tbody>
              <tr>
                <th scope="row">{{ ++$i }}</th>
                <td>{{ $disciplina->nome }}</td>
                <td>{{ $disciplina->codigo }}</td>
                <td class="text-center">
                	<a class="btn btn-info waves-effect" href="{{ route('disciplina.edit', $disciplina) }}"><i class="fa fa-edit"></i> EDITAR</a>
                  <!--<form style="display: inline;" action="{{ route('disciplina.destroy', $disciplina->id) }}" method="POST">
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
                    <h3 class="modal-title">Confirmação de Exclusão</h3>
                  </div>
                  <div class="modal-body">
                    <p>Tem certeza que deseja excluir a disciplina selecionada?</p>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Não</button>
                    <form style="display: inline;" action="{{ route('disciplina.destroy', $disciplina->id) }}" method="POST">
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
        {!! $disciplinas->links() !!}
      </div>
    </div>
  </div>
</div>
@stop

@section('js')

@stop
