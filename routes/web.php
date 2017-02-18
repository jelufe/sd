<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');
Route::post('Diretor/salvar', 'CadastroController@salvarDiretor')->name('diretor');
Route::post('Coordenador/salvar', 'CadastroController@salvarCoordenador')->name('coordenador');
Route::post('Professor/salvar', 'CadastroController@salvarProfessor')->name('professor');

Auth::routes();

Route::get('/escolhacadastro', 'CadastroController@index')->name('escolhacadastro');
Route::get('/cadastrodiretor', 'CadastroController@diretor')->name('cadastrodiretor');
Route::get('/cadastrocoordenador', 'CadastroController@coordenador')->name('cadastrocoordenador');
Route::get('/cadastroprofessor', 'CadastroController@professor')->name('cadastroprofessor');

Route::get('/professores', 'TeacherController@index')->name('professores');
Route::get('/coordenadores', 'CoordinatorController@index')->name('coordenadores');

Route::get('/Coordenador/{coordenador}/editar', 'CoordinatorController@editar');
Route::patch('/Coordenador/{coordenador}', 'CoordinatorController@atualizar');

Route::get('/Professor/{professor}/editar', 'TeacherController@editar');
Route::patch('/Professor/{professor}', 'TeacherController@atualizar');


