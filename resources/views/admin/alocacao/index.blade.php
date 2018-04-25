@extends('adminlte::page')

@section('title', 'Gerar Alocação')

@section('content_header')
<ol class="breadcrumb" style="float:right">
  <li class="text-secondary"><a href="{{ route('admin.index') }}" class="text-success"><i class="fa fa-home text-success"></i>Home</a></li>
  <li class="active text-dark" aria-current="page">Alocação</li>
</ol></br></br>
<div class ="header text-center">
  <p style="color:white; background: linear-gradient(to right, #00ab5d , #00eb7f);font-size:25px; padding:13px 0px 13px 0px;">Gerar Alocação</p><br/><br/><br/>
</div>

@stop

@section('content')
@if ( $message = Session::get('fail') )
<div class="alert bg-red alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  	<span aria-hidden="true">&times;</span>
  </button>
  <p>{{ $message }}</p>
  <a href="{{route('disciplina.index')}}">Clique aqui para cadastrar uma disciplina</a> ou <a href="{{route('sala.index')}}">aqui para cadastrar uma sala.</a>
</div>
@endif
@if ( $message = Session::get('success') )
<div class="alert bg-green alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
  	<span aria-hidden="true">&times;</span>
  </button>
  <p>{{ $message }}</p>
  <a href="{{route('relatorio.index')}}">Clique aqui para visualizar o relatório</a> com a alocação gerada.
</div>
@endif
<div class="row">
  <div class="col-md-10">
    <div class="form-group">
      <p for="name" style="color:#141414;">Modo</p>
      <select class="selectpicker" name="tipo">
        <option value="Sala Comum" class="optionSelect" selected="selected">Sala</option>
        <option value="Laboratório" class="optionSelect" disabled="disabled">Sala/Laboratório</option>
      </select>
    </div>
    @if ( isset ( $isAlocacao ) )
    <button class="buttonSalvar" style="border-radius: 0px;background-color:#00A65A;" data-toggle="modal" data-target="#modal-danger"><span>GERAR </span></button>
    <div class="modal fade" id="modal-danger">
      <div class="modal-dialog" style="width:400px;">
        <div class="modal-content">
          <div class="modal-header" style="background-color:red;color:white;">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span></button>
            <h2 class="modal-title" style="text-align:center;">Aviso</h2>
          </div>
          <div class="modal-body text-center">
            <p>Você já gerou uma alocação anteriormente. Gerar uma nova alocação apagará a alocação atual.</p>
              <p><b>Tem certeza que deseja continuar?</b></p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger pull-left" data-dismiss="modal" style="border-radius:0px;background-color:white; color:red;">NÃO</button>

              <a class="btn btn-info" style="border-radius:0px;background-color:green;border:none;" href="{{ route('alocacao.gerar') }}">SIM</a>

          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>

    @else
    <button class="buttonSalvar" style="border-radius: 0px;background-color:#00A65A;" onclick="location.href='{{ route('alocacao.gerar') }}'"><span>GERAR </span></button>
    @endif
  </div>

  <div class="col-md-1">
    <i class="fas fa-mouse-pointer" style="font-size:80px;color:#00e77d;"></i>
  </div>
</div>

@stop

@section('js')

@stop
