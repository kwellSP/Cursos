<?php

namespace cg\Http\Controllers;
use Illuminate\Http\Request;
use cg\models\Regras;
use Illuminate\Support\Facades\Input;


class RegrasController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function mostra($grupo,$divisao,$dataInicial,$tipo){
        
    }
    public function remove($grupo,$divisao,$dataInicial,$tipo){
        
    }
    public function atualiza($grupo,$divisao,$dataInicial,$tipo){
        
    }
       
    public function regras(){
        $regras = null;
        return view('regras.regrasLista')->withregras($regras);
    }
   
    public function listaRegras(Request $request){
        $regras =  Regras::listaRegras($request->input('grupo'),$request->input('divisao'),$request->input('tipo'));
        return view('regras.regrasLista')->withregras($regras);
    }

    public function cadastro(){
        return view('regras.cadastroRegras');
    }
    public function cadastrar(Request $request){
        var_dump($request->all());
    }
}
