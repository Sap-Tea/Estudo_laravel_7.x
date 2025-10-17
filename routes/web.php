<?php
/*
...
*/
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;

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
/*
  Route::get('/', function () {
    return "inicio";
}) 
*/
Route::get('/','PrincipalController@Principal')->name('site.index');
Route::get('/Sobre-nos','SobreNosController@sobreNos')->name('site.sobre-nos');
Route::get('/Contato', 'ContatoController@contato')->name('site.contato');

Route::prefix('/app')->group(function(){
   Route::get('/Login',function(){  return 'Login';})->name('app.login');
    Route::get('/clientes',function(){  return 'Clientes';})->name('app.clientes');
    Route::get('/fornecedores',function(){return 'Fornecedores';})->name('app.fonecedors');
    Route::get('/produtos',function(){  return 'Produtos';})->name('app.produtos');
});


Route::get('/excluindo',function(){
  return redirect()->route('site.mensagem');

})->name('site.excluir');
  

Route::get('mensagem',function(){
    echo "Registro excluido com sucesso";

})->name('site.mensagem');

//Route::redirect('/excluindo','mensagem');

 
 



  


 



