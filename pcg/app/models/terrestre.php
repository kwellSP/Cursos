<?php

namespace cg\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use DataTables;

class terrestre extends Model
{
    //
    protected $table = 'terrestre';
    public $timestamps = false;
    protected $fillable = array();
    protected $guarded =[];

    public static function tabelaTerrestre($grupo,$divisao,$erros){
        switch($erros){
            case 'Sim':
            $previas = DB::table('terrestre')->where([
                ['GrupoCLi','=',$grupo],
                ['divisao','=',$divisao],
                ['Cliente','not like','%particular%'],
                ['Cliente','not like','%evento%'],
                ['Cliente','not like','%lazer%'],
                ['Alerta_Geral','<>','OK']
            ])->wherenotIn('Fil',['JRS','FEE','TRR','CLT','EVE','LAZ','COB','CMT','PAC','VCT','PRE','STS'])
            ->get();
            return $previas;
            break;

            case 'Nao':
            $previas = DB::table('terrestre')->where([
                ['GrupoCLi','=',$grupo],
                ['divisao','=',$divisao],
                ['Cliente','not like','%particular%'],
                ['Cliente','not like','%evento%'],
                ['Cliente','not like','%lazer%']
                ])->wherenotIn('Fil',['JRS','FEE','TRR','CLT','EVE','LAZ','COB','CMT','PAC','VCT','PRE','STS'])->get();
            return $previas;
            break;
        }
    }

    public static function getRanking($grupo,$divisao){
        $terrestre = DB::table('terrestre')->select(
            'Cliente',
            DB::raw("SUM(IIF(Alerta_Geral<>'Ok',1,0)) as Erros")
        )->where([
            ['GrupoCLi','=',$grupo],
            ['divisao','=',$divisao],
            ['Cliente','not like','%particular%'],
            ['Cliente','not like','%evento%'],
            ['Cliente','not like','%lazer%']
        ])->wherenotIn('Fil',['JRS','FEE','TRR','CLT','EVE','LAZ','COB','CMT','PAC','VCT','PRE','STS'])
        ->groupBy('Cliente')
        ->get();
    }

}
