<?php

$this->group(['middleware' => ['auth'], 'namespace' => 'Admin'], function(){


    $this->get('admin/turma', 'TurmaController@index')->name('turma.home');
    $this->get('admin/ajuda', 'AjudaController@index')->name('ajuda.home');
    $this->get('admin/alocacao', 'AlocacaoController@index')->name('alocacao.home');
    $this->get('admin/contato', 'ContatoController@index')->name('contato.home');
    $this->get('admin/disciplina', 'DisciplinaController@index')->name('disciplina.home');
    $this->get('admin/editar', 'EditarController@index')->name('editar.home');
    $this->get('admin/professor', 'ProfessorController@index')->name('professor.home');
    $this->get('admin/relatorio', 'RelatorioController@index')->name('relatorio.home');

    $this->get('admin', 'AdminController@index')->name('admin.home');

});

$this->get('/', 'Site\SiteController@index')->name('home');

Route::resource('sala', 'SalaController');




Auth::routes();

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
