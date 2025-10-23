<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){

        $fornecedores = [
            [ "nome"=> "Marcos barroso",
              "status" => "S"],
           [ "nome"=> "Eliane Barroso",
              "status" => "N"],
                      [ "nome"=> "Carlos barroso",
                        "status" => "N"]
    
    ];
        return view('app.Fornecedor.index',compact('fornecedores'));



    }
}
