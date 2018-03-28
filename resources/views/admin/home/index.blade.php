@extends('adminlte::page')

@section('title', 'Início')

@section('content_header')
    <h1>Bem-vindo(a)!</h1>
@stop

@section('content')
    <p>Login realizado com sucesso.</p>
@stop

@section('js')
    <script> console.log('Login realizado com sucesso!'); </script>
@stop
