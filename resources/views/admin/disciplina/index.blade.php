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

  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
    <div class="box">
      <div class="header">
        <h3>Cadastrar Disciplina</h3>
      </div>
      <form action="{{action('DisciplinaController@store')}}" method="POST" >
      {{ csrf_field() }}
        <div class="box-body">
          <div class="col-md-4">
            <label for="name">Nome:</label></br>
            <input type="text" name="nome"></br>
          </div>
          <div class="col-md-4">
            <label for="name">Código:</label></br>
            <input type="text" name="codigo"></br>
          </div>
          <div class="col-md-4">
            <label for="name">Turma:</label></br>
            <input type="text" name="turma"></br>
          </div>
          <div class="col-md-4">
            <label for="name">Professor:</label></br>
            <input type="text" name="professor"></br>
          </div>
          <div class="col-md-4">
            <label for="name">Turno:</label></br>
            <select name="turno">
              <option value="matutino" selected="selected">Matutino</option>
              <option value="vespertino">Vespertino</option>
              <option value="noturno">Noturno</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="name">Horários:</label></br>
            <select name="horario">
              <option value="primeiro" selected="selected">1º</option>
              <option value="segundo">2º</option>
              <option value="terceiro">3º</option>
              <option value="quarto">4º</option>
              <option value="quinto">5º</option>
              <option value="sexto">6º</option>
            </select>
          </div>
          <div class="col-md-4">
            <label for="name">Dias:</label></br>
            <select class="selectpicker" multiple="multiple" name="dia[]">
              <option value="seg">Segunda</option>
              <option value="ter">Terça</option>
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
