<?php

namespace cg\Http\Controllers;

use Illuminate\Http\Request;
use cg\models\terrestre;
use cg\models\aerea;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class HomeController extends Controller
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
    public function index()
    {   
        return view('home');
    }

    private function aereo(Request $request){
            $aereo = DB::table('aerea')->select(
                'GrupoCli',
                DB::raw("SUM(IIF(Alerta_O1<>'Ok',1,0)) as Alerta_O1"),
                DB::raw("SUM(IIF(Alerta_O2<>'Ok',1,0)) as Alerta_O2"),
                DB::raw("SUM(IIF(Alerta_O3<>'Ok',1,0)) as Alerta_O3"),
                DB::raw("SUM(IIF(Alerta_O4<>'Ok',1,0)) as Alerta_O4"),
                DB::raw("SUM(IIF(Alerta_O5<>'Ok',1,0)) as Alerta_O5"),
                DB::raw("SUM(IIF(Alerta_O6<>'Ok',1,0)) as Alerta_O6"),
                DB::raw("SUM(IIF(Alerta_O7<>'Ok',1,0)) as Alerta_O7"),
                DB::raw("SUM(IIF(Alerta_Acordo<>'Ok',1,0)) as Alerta_Acordo"),
                DB::raw("SUM(IIF(Alerta_Eco_Obtida<>'Ok',1,0)) as Alerta_Eco_Obtida"),
                DB::raw("SUM(IIF(Alerta_Eco_Nao_Obtida<>'Ok',1,0)) as Alerta_Eco_Nao_Obtida"),
                DB::raw("SUM(IIF(Alerta_Cidade<>'Ok',1,0)) as Alerta_Cidade"),
                DB::raw("SUM(IIF(Alerta_Reason_Code_Vazio<>'Ok',1,0)) as Alerta_Reason_Code_Vazio"),
                DB::raw("SUM(IIF(Alerta_Reason_Code_Reemissao<>'Ok',1,0)) as Alerta_Reason_Code_Reemissao"),
                DB::raw("SUM(IIF(Alerta_Reason_Code_Menor_Tarifa<>'Ok',1,0)) as Alerta_Reason_Code_Menor_Tarifa"),
                DB::raw("SUM(IIF(Alerta_Reason_Code_Preferencia<>'Ok',1,0)) as Alerta_Reason_Code_Preferencia"),
                DB::raw("SUM(IIF(Alerta_Bilhete<>'Ok',1,0)) as Alerta_Bilhete"),
                DB::raw("SUM(IIF(Alerta_Data<>'Ok',1,0)) as Alerta_Data"),
                DB::raw("SUM(IIF(Alerta_tipo_de_Viagem<>'Ok',1,0)) as Alerta_tipo_de_Viagem"),
                DB::raw("SUM(IIF(Alerta_Cidade_Destino_ou_Origem_Vazia<>'Ok',1,0)) as Alerta_Cidade_Destino_ou_Origem_Vazia"),
                DB::raw("SUM(IIF(Alerta_Geral<>'Ok',1,0)) as Alerta_Geral"),
                DB::raw("count(*) as total")
            )->where([
                ['GrupoCLi','=',$request->input('grupo')],
                ['divisao','=',$request->input('divisao')],
                ['Cliente','not like','%particular%'],
                ['Cliente','not like','%evento%'],
                ['Cliente','not like','%lazer%'],
                ['Referencia','not like','%ADM%']
            ])->wherenotIn('Fil',['JRS','FEE','TRR','CLT','EVE','LAZ','COB','CMT','PAC','VCT','PRE','STS'])
            ->groupBy('GrupoCli')
            ->get();
            return $aereo->first();
        }

        private function terrestre(Request $request){
            $terrestre = DB::table('terrestre')->select(
                'GrupoCli',
                DB::raw("SUM(IIF(Alerta_O1<>'Ok',1,0)) as Alerta_O1"),
                DB::raw("SUM(IIF(Alerta_O2<>'Ok',1,0)) as Alerta_O2"),
                DB::raw("SUM(IIF(Alerta_O3<>'Ok',1,0)) as Alerta_O3"),
                DB::raw("SUM(IIF(Alerta_O4<>'Ok',1,0)) as Alerta_O4"),
                DB::raw("SUM(IIF(Alerta_O5<>'Ok',1,0)) as Alerta_O5"),
                DB::raw("SUM(IIF(Alerta_O6<>'Ok',1,0)) as Alerta_O6"),
                DB::raw("SUM(IIF(Alerta_O7<>'Ok',1,0)) as Alerta_O7"),
                DB::raw("SUM(IIF(Alerta_de_Data<>'Ok',1,0)) as Alerta_de_Data"),
                DB::raw("SUM(IIF(Alerta_Tarifa_Zerada<>'Ok',1,0)) as Alerta_Tarifa_Zerada"),
                DB::raw("SUM(IIF(Alerta_Valor_Pago<>'Ok',1,0)) as Alerta_Valor_Pago"),
                DB::raw("SUM(IIF(Alerta_Diaria<>'Ok',1,0)) as Alerta_Diaria"),
                DB::raw("SUM(IIF(Alerta_Data_Entrada<>'Ok',1,0)) as Alerta_Data_Entrada"),
                DB::raw("SUM(IIF(Alerta_Data_Saida<>'Ok',1,0)) as Alerta_Data_Saida"),
                DB::raw("SUM(IIF(Alerta_Tipo<>'Ok',1,0)) as Alerta_Tipo"),
                DB::raw("SUM(IIF(Alerta_Geral<>'Ok',1,0)) as Alerta_Geral"),
                DB::raw("count(*) as total")
            )->where([
                ['GrupoCLi','=',$request->input('grupo')],
                ['divisao','=',$request->input('divisao')],
                ['Cliente','not like','%particular%'],
                ['Cliente','not like','%evento%'],
                ['Cliente','not like','%lazer%']
            ])->wherenotIn('Fil',['JRS','FEE','TRR','CLT','EVE','LAZ','COB','CMT','PAC','VCT','PRE','STS'])
            ->groupBy('GrupoCli')
            ->get();
            return $terrestre->first();
        }

public function errosHmtl(Request $request){
    //seleciona os erros terrestres
    $terrestre = $this->terrestre($request);
    //seleciona os erros aereos
    $aereo = $this->aereo($request);
    //retorna as função com o codigo html das tabelas.
    return $this->getHtmlErros($terrestre,$aereo);
}

private function getHtmlErros($terrestre,$aereo){
$html = null;

    if(empty($terrestre) && empty($aereo)){

        $html = "<br><br><div><h5><p class = 'text-center text-danger'>Nenhum dado localizado para o cliente solicitado!!</p></h5></div>";

    }else{

        $html = "<div id ='totalInconsistencia'> 
        <h5><p class = 'text-center text-danger'>% Total Inconsistências</p></h5>
        <h3><p class = 'text-center text-danger'>". number_format((float)((($aereo->Alerta_Geral + $terrestre->Alerta_Geral) / ($aereo->total+$terrestre->total))*100),2)  ."%</p></h3>
        </div>

    <div class='row'>
        <div class='col-md-6'>
        <table id='tbDashAereo'   class='table table-sm table-striped table-bordered table-hover  stripe row-borde nowrap  cell-border  datataTable  compact order-column'>
            <thead>
                <tr class='bg-warning'>   
                    <th >Tipo de Alerta</th>
                    <th>Total Correções</th>
                    <th>% Percentual</th>
                </tr>
            </thead>
            <tbody>
                    <tr> <td>Alerta Acordo</td><td>". $aereo->Alerta_Acordo ."</td><td>". number_format((float)$aereo->Alerta_Acordo / $aereo->total,2) ."%</td></tr>
                        <tr> <td>Alerta Eco Obtida</td><td>". $aereo->Alerta_Eco_Obtida ."</td><td>" . number_format((float)$aereo->Alerta_Eco_Obtida / $aereo->total,2) . "%</td></tr>
                        <tr> <td>Alerta Eco Não Obtida</td><td>".$aereo->Alerta_Eco_Nao_Obtida  ."</td><td>".number_format((float)$aereo->Alerta_Eco_Nao_Obtida / $aereo->total,2) ."%</td></tr>
                        <tr> <td>Alerta Cidade</td><td>".$aereo->Alerta_Cidade  ."</td><td>".number_format((float)$aereo->Alerta_Cidade / $aereo->total,2) ."%</td></tr>
                        <tr> <td>Alerta Reason Code Vazio</td><td>".$aereo->Alerta_Reason_Code_Vazio  ."</td><td>".number_format((float)$aereo->Alerta_Reason_Code_Vazio / $aereo->total,2) ."%</td></tr>
                        <tr> <td>Alerta Reason Code Reemissão</td><td>".$aereo->Alerta_Reason_Code_Reemissao  ."</td><td>".number_format((float)$aereo->Alerta_Reason_Code_Reemissao / $aereo->total,2) ."%</td></tr>
                        <tr> <td>Alerta Reason Code Menor Tarifa</td><td>".$aereo->Alerta_Reason_Code_Menor_Tarifa  ."</td><td>".number_format((float)$aereo->Alerta_Reason_Code_Menor_Tarifa / $aereo->total,2) ."%</td></tr>
                        <tr> <td>Alerta Reason Code Preferência</td><td>".$aereo->Alerta_Reason_Code_Preferencia  ."</td><td>".number_format((float)$aereo->Alerta_Reason_Code_Preferencia / $aereo->total,2) ."%</td></tr>
                        <tr> <td>Alerta Bilhete</td><td>".$aereo->Alerta_Bilhete  ."</td><td>".number_format((float)$aereo->Alerta_Bilhete / $aereo->total,2) ."%</td></tr>
                        <tr> <td>Alerta Data</td><td>".$aereo->Alerta_Data  ."</td><td>".number_format((float)$aereo->Alerta_Data / $aereo->total,2) ."%</td></tr>
                        <tr> <td>Alerta tipo de Viagem</td><td>".$aereo->Alerta_tipo_de_Viagem  ."</td><td>".number_format((float)$aereo->Alerta_tipo_de_Viagem / $aereo->total,2) ."%</td></tr>
                        <tr> <td>Alerta Cidade Destino ou Origem Vazia</td><td>".$aereo->Alerta_Cidade_Destino_ou_Origem_Vazia  ."</td><td>".number_format((float)$aereo->Alerta_Cidade_Destino_ou_Origem_Vazia / $aereo->total,2) ."%</td></tr>
                        <tr> <td>Oscar 1 (Centro Custo)</td><td>".$aereo->Alerta_O1  ."</td><td>".number_format((float)$aereo->Alerta_O1 / $aereo->total,2) ."%</td></tr>
                        <tr> <td>Oscar 2 (Produto)</td><td>".$aereo->Alerta_O2  ."</td><td>".number_format((float)$aereo->Alerta_O2 / $aereo->total,2) ."%</td></tr>
                        <tr> <td>Oscar 3 (Doc Cli)</td><td>".$aereo->Alerta_O3  ."</td><td>".number_format((float)$aereo->Alerta_O3 / $aereo->total,2) ."%</td></tr>
                        <tr> <td>Oscar 4 (OBS 1)</td><td>".$aereo->Alerta_O4  ."</td><td>".number_format((float)$aereo->Alerta_O4 / $aereo->total,2) ."%</td></tr>
                        <tr> <td>Oscar 5 (OBS 2)</td><td>".$aereo->Alerta_O5  ."</td><td>".number_format((float)$aereo->Alerta_O5 / $aereo->total,2) ."%</td></tr>
                        <tr> <td>Oscar 6 (OBS 3)</td><td>".$aereo->Alerta_O6  ."</td><td>".number_format((float)$aereo->Alerta_O6 / $aereo->total,2) ."%</td></tr>
                        <tr> <td>Oscar 7 (OBS 4)</td><td>".$aereo->Alerta_O7  ."</td><td>".number_format((float)$aereo->Alerta_O7 / $aereo->total,2) ."%</td></tr>
                        <tr> <td>Alerta Geral</td><td>".$aereo->Alerta_Geral  ."</td><td>".number_format((float)$aereo->Alerta_Geral / $aereo->total,2) ."%</td></tr>
            </tbody> 
        </table>
        </div>
        <div class='col-md-6'>
        <table id='tbDashTerrestre'   class='table table-sm table-striped table-bordered table-hover  stripe row-borde nowrap  cell-border  datataTable  compact order-column'>
                <thead >
                    <tr class='bg-warning'>   
                        <th >Tipo de Alerta</th>
                        <th>Total Correções</th>
                        <th>% Percentual</th>
                    </tr>
                </thead>
                <tbody>
                        <Tr> <td>Alerta de Data</td><td>".$terrestre->Alerta_de_Data  ."</td><td>".number_format((float)$terrestre->Alerta_de_Data / $aereo->total,2) ."%</td></tr>
                            <Tr> <td>Alerta Tarifa Zerada</td><td>".$terrestre->Alerta_Tarifa_Zerada  ."</td><td>".number_format((float)$terrestre->Alerta_Tarifa_Zerada / $aereo->total,2) ."%</td></tr>
                            <Tr> <td>Alerta Valor Pago</td><td>".$terrestre->Alerta_Valor_Pago  ."</td><td>".number_format((float)$terrestre->Alerta_Valor_Pago / $aereo->total,2) ."%</td></tr>
                            <Tr> <td>Alerta Diaria</td><td>".$terrestre->Alerta_Diaria  ."</td><td>".number_format((float)$terrestre->Alerta_Diaria / $aereo->total,2) ."%</td></tr>
                            <Tr> <td>Alerta Data Entrada</td><td>".$terrestre->Alerta_Data_Entrada  ."</td><td>".number_format((float)$terrestre->Alerta_Data_Entrada / $aereo->total,2) ."%</td></tr>
                            <Tr> <td>Alerta Data Saida</td><td>".$terrestre->Alerta_Data_Saida  ."</td><td>".number_format((float)$terrestre->Alerta_Data_Saida / $aereo->total,2) ."%</td></tr>
                            <Tr> <td>Alerta Tipo</td><td>".$terrestre->Alerta_Tipo  ."</td><td>".number_format((float)$terrestre->Alerta_Tipo / $aereo->total,2) ."%</td></tr>
                            <tr> <td>Oscar 1 (Centro Custo)</td><td>".$terrestre->Alerta_O1  ."</td><td>".number_format((float)$terrestre->Alerta_O1 / $aereo->total,2) ."%</td></tr>
                            <tr> <td>Oscar 2 (Produto)</td><td>".$terrestre->Alerta_O2  ."</td><td>".number_format((float)$terrestre->Alerta_O2 / $aereo->total,2) ."%</td></tr>
                            <tr> <td>Oscar 3 (Doc Cli)</td><td>".$terrestre->Alerta_O3  ."</td><td>".number_format((float)$terrestre->Alerta_O3 / $aereo->total,2) ."%</td></tr>
                            <tr> <td>Oscar 4 (OBS 1)</td><td>".$terrestre->Alerta_O4  ."</td><td>".number_format((float)$terrestre->Alerta_O4 / $aereo->total,2) ."%</td></tr>
                            <tr> <td>Oscar 5 (OBS 2)</td><td>".$terrestre->Alerta_O5  ."</td><td>".number_format((float)$terrestre->Alerta_O5 / $aereo->total,2) ."%</td></tr>
                            <tr> <td>Oscar 6 (OBS 3)</td><td>".$terrestre->Alerta_O6  ."</td><td>".number_format((float)$terrestre->Alerta_O6 / $aereo->total,2) ."%</td></tr>
                            <tr> <td>Oscar 7 (OBS 4)</td><td>".$terrestre->Alerta_O7  ."</td><td>".number_format((float)$terrestre->Alerta_O7 / $aereo->total,2) ."%</td></tr>
                            <tr> <td>Alerta Geral</td><td>".$terrestre->Alerta_Geral  ."</td><td>".number_format((float)$terrestre->Alerta_Geral / $aereo->total,2) ."%</td></tr>
                            
                </tbody> 
            </table>
        </div>
        </div>
    </div>
    <br> ";
    }

    

    return $html;
}

}
