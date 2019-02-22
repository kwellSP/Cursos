<?php

namespace cg\Http\Controllers;
use cg\models\terrestre;
use cg\models\aerea;
use Illuminate\Support\Facades\DB;
use DataTables;
use Redirect;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
//use Request;

class PreviasController extends Controller
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
    
    public function ranking(){
        return view('previas.ranking');
    }

    public function getRanking(Request $request){
        $terrestre = terrestre::getRanking($request->input('grupo'),$request->input('divisao'));
        $aereo = aerea::getRanking($request->input('grupo'),$request->input('divisao'));
    }

    public function farolGerencial()
    {
        return view('previas.farolGerencial');
    }

    public function aereo()
    {
        return view('previas.aereo');
    }

    public function terrestre()
    {
        return view('previas.terrestre');
    }
    public function tabela()
    {
        return view('previas.tabela');
    }

    public function aereoTable(Request $request)
    {
        $previas =  aerea::tabelaAerea($request->input('grupo'),$request->input('divisao'),$request->input('erros'));
        return Datatables::of($previas)->make();
    }

    public function terrestreTable(Request $request)
    {   
        $previas =  terrestre::tabelaTerrestre($request->input('grupo'),$request->input('divisao'),$request->input('erros'));
        return Datatables::of($previas)->make();
               
    }

}
