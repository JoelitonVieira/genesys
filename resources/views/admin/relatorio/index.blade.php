@extends('adminlte::page')

@section('title', 'Visualizar Relatório')

@section('content_header')
<ol class="breadcrumb" style="float:right">
  <li class="text-secondary"><a href="{{ route('admin.index') }}" class="text-success"><i class="fa fa-home text-success"></i>Home</a></li>
  <li class="active text-dark" aria-current="page">Relatório</li>
</ol></br></br>
<div class ="header text-center">
      <p style="color:white; background: linear-gradient(to right, #00ab5d , #00eb7f);font-size:25px; padding:13px 0px 13px 0px;"></span>Visualizar Relatório</p><br/>
</div>

@stop

@section('content')
@if ( isset ( $message ) )
<div class="alert bg-red alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  	<span aria-hidden="true">&times;</span>
  </button>
  <p>{{ $message }}</p>
  <a href="{{route('alocacao.index')}}">Clique aqui para gerar uma alocação.</a>
</div>
@else
<div class="box-body">
  <p><b>Data de Geração da Alocação: </b>{{ $diasDeChoques_Salas[1]->created_at->format('d/m/Y') }}</p>
  <p><b>Quantidade de choques de alocações: </b><span style="color:red">{{ $diasDeChoques_Salas[1]->choques }}</span></p>
  <p>Obs: Caso existam, os dias em vermelho e sublinhados significam que, para aquela disciplina, há choque de alocação com outra(s) disciplina(s).</p>
  <a class="btn btn-success" onclick="window.print()" id="botaoImprimir" style="float:right;background-color:#00e079;border-color:#00e079"><i class="fa fa-print"></i></a></br></br></br>
  <div class="body table-responsive" >
    <table class="table table-dark table-striped table-bordered table-hover" style="margin-top: 0px; border:none;">
      <thead>
        <tr style="background-color:#333333">
          <th scope="col" style="color:white">NOME</th>
          <th scope="col" style="color:white">CÓDIGO</th>
          <th scope="col" style="color:white">TURMA</th>
          <th scope="col" style="color:white">PROFESSOR</th>
          <th scope="col" style="color:white">TURNO</th>
          <th scope="col" style="color:white">HORÁRIO</th>
          <th scope="col" style="color:white">DIAS</th>
          <th scope="col" style="color:white">SALA</th>
        </tr>
      </thead>
      @for ( $i = 0; $i < sizeof( $disciplinas ) ; $i++)
      <tbody>
        <tr>
          <td>{{ $disciplinas[$i]->nome }}</td>
          <td>{{ $disciplinas[$i]->codigo }}</td>
          <td>{{ $disciplinas[$i]->turma }}</td>
          <td>{{ $disciplinas[$i]->professor }}</td>
          <td>{{ $disciplinas[$i]->turno }}</td>
          <td>{{ $disciplinas[$i]->horario }}</td>
          <td>{!! $diasFinal[$i] !!}</td>
          <td>{{ $diasDeChoques_Salas[$i]->nm_sala }}</td>
        </tr>
      </tbody>
      @endfor
    </table>
  </div>
</div>
@endif
@stop

@section('js')

@stop
