<?php

$this->group(['middleware' => ['auth']], function(){

    Route::resource('ajuda', 'AjudaController');
    Route::resource('disciplina', 'DisciplinaController');
    Route::resource('relatorio', 'RelatorioController');
    Route::resource('sala', 'SalaController');
    Route::resource('admin', 'AdminController');
    Route::get('alocacao.gerar', 'AlocacaoController@gerar')->name('alocacao.gerar');
    Route::get('alocacao', 'AlocacaoController@index')->name('alocacao');
    Route::any('sala.search', 'SalaController@search');
    Route::any('disciplina.search', 'DisciplinaController@search');

});

$this->get('/', 'Site\SiteController@index')->name('home');
Auth::routes();
