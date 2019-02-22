<?php

namespace cg\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Regras extends Model
{
    //
    protected $table = 'regras';
    public $timestamps = false;
    protected $fillable = array('grupo','divisao','tipo','cliente','dataInicial','dataFinal',
    'regraO1','regraO2','regraO3','regraO4','regraO5','regraO6','regraO7');
    protected $guarded =[];

    public static function listaRegras($grupo,$divisao,$tipo){
        $regras =  DB::select("select * from regras where grupo ='".
        $grupo."' and divisao ='".$divisao."' and tipo ='".
        $tipo."'");
        return $regras;
    }

    public static function criaRegra(
        $oscar,
        $nomeCampo,
        $OS,
        $requerido,
        $tipo,
        $min,
        $max,
        $inOS,
        $quebrar,
        $partes
    ){
        $regra = null;

        return $regra;
    }
}
