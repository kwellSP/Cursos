<?php

namespace cg\models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use DataTables;

class aerea extends Model
{
    //
    protected $table = 'aerea';
    public $timestamps = false;
    protected $fillable = array();
    protected $guarded =[];

    public static function tabelaAerea($grupo,$divisao,$erros){
        $previas = null;
        switch($erros){
            case 'Sim':
            $previas = DB::table('aerea')->where([
                ['GrupoCLi','=',$grupo],
                ['divisao','=',$divisao],
                ['Cliente','not like','%particular%'],
                ['Cliente','not like','%evento%'],
                ['Cliente','not like','%lazer%'],
                ['Referencia','not like','%ADM%'],
                ['Alerta_Geral','<>','OK']
            ])->wherenotIn('Fil',['JRS','FEE','TRR','CLT','EVE','LAZ','COB','CMT','PAC','VCT','PRE','STS'])
            ->get();
            return $previas;
            break;

            case 'Nao':
            $previas = DB::table('aerea')->where([
                ['GrupoCLi','=',$grupo],
                ['divisao','=',$divisao],
                ['Cliente','not like','%particular%'],
                ['Cliente','not like','%evento%'],
                ['Referencia','not like','%ADM%'],
                ['Cliente','not like','%lazer%'],
                ['Cliente','not like','%lazer%']
                ])->wherenotIn('Fil',['JRS','FEE','TRR','CLT','EVE','LAZ','COB','CMT','PAC','VCT','PRE','STS'])->get();
            return $previas;
            break;
        }
    }

    public static function getRanking(){
        

            $aereo = DB::table('aereo')->select(
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
