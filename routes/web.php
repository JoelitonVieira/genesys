<?php

$this->group(['middleware' => ['auth']], function(){

    Route::resource('ajuda', 'AjudaController');
    Route::resource('disciplina', 'DisciplinaController');
    Route::resource('relatorio', 'RelatorioController');
    Route::resource('sala', 'SalaController');
    Route::resource('admin', 'AdminController');
    Route::get('alocacao', 'AlocacaoController@gerar')->name('alocacao');
    Route::get('alocacao.index', 'AlocacaoController@index')->name('alocacao.index');
    Route::get('alocacao.erro', 'AlocacaoController@index2')->name('alocacao.erro');


});

$this->get('/', 'Site\SiteController@index')->name('home');
Auth::routes();
