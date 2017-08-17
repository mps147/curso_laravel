<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PessoasController extends Controller
{
    
  public function index(){
    $lista_pessoas = \App\Pessoas::all();
    return view("pessoas.index", [
        "pessoas" => $lista_pessoas
    ]);
  }
}
