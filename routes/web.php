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
Route::get('/','PrincipalController@Principal');

Route::get('/Sobre-nos/{assunto}','SobreNosController@sobreNos');
   

Route::get('/contato', 'ContatoController@contato');

Route::get('/contato/{nome}/{contato_id}',function(
    string $nome = 'desconhecido',
    int $contato_id= 1 //1 - informação
    
    )
    {
        return "o Nome do aluno é .$nome.e o seu email  é .$contato_id";
}
)->where('contato_id','[1-9]+')->where('nome','[A-Za-z]+1');

 

 
 



  


 



