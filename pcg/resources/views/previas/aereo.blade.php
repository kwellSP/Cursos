@extends('adminlte::page')

@section('title', 'C&G')

@section('content_header')
    <h1 class = "text-center">Prévia Aérea</h1>
@stop

@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/dataTables.jqueryui.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/select/1.2.7/css/select.dataTables.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/colreorder/1.5.1/css/colReorder.dataTables.min.css">
    <link rel="stylesheet" href="/css/custom.css">
  @stop
@section('js')
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="//cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="//cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
    <script src="//cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
    <script src="//cdn.datatables.net/colreorder/1.5.1/js/dataTables.colReorder.min.js"></script>
    <script src="/js/aereoCustom.js"></script>
@stop


@section('content')
<div class="container">            
   
    <form action="" method="POST" class ="form-horizontal">
        @csrf
       <div class="form-group row">
        <label for="grupo" class="col-sm-1 col-form-label">Grupo:</label>
        <div class="col-sm-2">
        <input type="text" class="form-control" id="grupo"  name="grupo" placeholder="Grupo Ex: LQ" aria-describedby="grupolHelp" required>
        </div>

        <label for="divisao" class="col-sm-1 col-form-label">Divisao:</label>
        <div class="col-sm-2">
            <select class="form-control" id="divisao" name="divisao">
                <option value="2000"> 2000</option>
                <option value="6000"> 6000</option>
            </select>    
        </div>

        <label for="erros" class="col-sm-1 col-form-label">Somente Erros?</label>
        <div class="col-sm-2">
            <select class="form-control" id="erros">
                <option value="Sim"> Sim</option>
                <option value="Nao"> Não</option>
            </select>    
        </div>
        
        <div class="form-group">
            <button type="button" class="btn btn-primary" id="pesquisarAerea" >Pesquisar </button>
        </div>

      </div>
    
    </form>
      
</div>
<br>
<div class="container-open oculta"  id="containerTabela">
                            <table id="tabelaAerea"  style="width:100%" class="table table-striped table-bordered table-hover  stripe row-borde nowrap  cell-border  datataTable  compact order-column">
                                    <thead class="">
                                        <tr class="bg-info">   
                                            <th></th>
                                            <th>Alerta Geral</th>
                                            <th>LI</th>
                                            <th>Codigo Cli</th>
                                            <th>Cliente</th>
                                            <th>GrupoCli</th>
                                            <th>lider</th>
                                            <th>coordenador</th>
                                            <th>Alerta Data</th>
                                            <th>Dt Emissao</th>
                                            <th>Dt Embarque</th>
                                            <th>Alerta Acordo</th>
                                            <th>Acordo Obtido</th>
                                            <th>Alerta Eco Obtida</th>
                                            <th>Econ Obtida</th>
                                            <th>Alerta Eco Nao Obtida</th>
                                            <th>Econ Obtida</th>
                                            <th>Alerta Reason Code Vazio</th>
                                            <th>Tipo RC</th>
                                            <th>Cod Motivo</th>
                                            <th>Motivo</th>
                                            <th>Alerta Reason Code Reemissao</th>
                                            <th>Alerta Reason Code Menor Tarifa</th>
                                            <th>Alerta Reason Code Preferencia</th>
                                            <th>Tarifa Cheia</th>
                                            <th>Tarifa Mercado</th>
                                            <th>Tarifa Sugerida</th>
                                            <th>Tarifa Paga</th>
                                            <th>Taxa</th>
                                            <th>Alerta Cidade</th>
                                            <th>Alerta Cidade Destino/Origem Vazia</th>
                                            <th>Sigla Origem</th>
                                            <th>Cidade Origem</th>
                                            <th>Destino</th>
                                            <th>Cidade Destino</th>
                                            <th>Alerta Bilhete</th>
                                            <th>Alerta_tipo_de_Viagem</th>
                                            <th>Nro Bilhete</th>
                                            <th>Tipo Bilhete</th>
                                            <th>Companhia</th>
                                            <th>Rota</th>
                                            <th>Referencia</th>
                                            <th>LocCia</th>
                                            <th>Alerta O1</th>
                                            <th>Descricao_CCusto</th>
                                            <th>Alerta_O2</th>
                                            <th>Produto</th>
                                            <th>Alerta_O3</th>
                                            <th>DocCliente</th>
                                            <th>Alerta_O4</th>
                                            <th>OScar 4</th>
                                            <th>Alerta_O5</th>
                                            <th>OScar 5</th>
                                            <th>Alerta_O6</th>
                                            <th>OScar 6</th>
                                            <th>Alerta_O7</th>
                                            <th>OScar 7</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                            
                                    </tbody> 
                                </table>
    </div>
	
<div id="myModal" class="modal fade" role="dialog" data-backdrop="static">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title">Carregando</h4>
      </div>
      <div class="modal-body">
        <p>Dados Em Processamento Aguarde...</p>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>

  </div>
</div>	
	
@stop