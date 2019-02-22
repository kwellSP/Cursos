@extends('adminlte::page')

@section('title', 'C&G')

@section('content_header')
    <h1 class = "text-center">Regras de Validação</h1>
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
    <script src="/js/regrasCustom.js"></script>
@stop


@section('content')
<div class="container">            
   
    <form method="post" action="/previas/regras/" class ="form-horizontal">
        @csrf
      <div class="form-group row">
        <label for="grupo" class="col-sm-1 col-form-label">Grupo:</label>
        <div class="col-sm-2">
        <input type="text" class="form-control" id="grupo"  value="{{old('grupo')}}" name="grupo" placeholder="Grupo Ex: LQ" aria-describedby="grupolHelp" required>
        </div>

        <label for="divisao" class="col-sm-1 col-form-label">Divisao:</label>
        <div class="col-sm-2">
            <select class="form-control" id="divisao" name="divisao" value="{{old('divisao')}}">
                <option value="2000"> 2000</option>
                <option value="6000"> 6000</option>
            </select>    
        </div>

        <label for="divisao" class="col-sm-1 col-form-label">Divisao:</label>
        <div class="col-sm-2">
            <select class="form-control" id="tipo" name="tipo" value="{{old('tipo')}}">
                <option value="Aereo"> aereo</option>
                <option value="Terrestre"> terrestre</option>
            </select>    
        </div>

        
        <div class="form-group">
            <button type="submit" class="btn btn-primary" id="pesquisaRegras" >Pesquisar </button>
        </div>

      </div>
    
    </form>
      
</div>
<br>

<div class="container">
    @if(@isset($regras) && !empty($regras))
    
    <h1 class="text-center"> Listagem de Regras </h1>
    <table style="width:100%" id="tabelaRegras"  class="table table-striped table-bordered table-hover  stripe row-borde nowrap  cell-border  datataTable  compact order-column">
        <tr>
            <th>grupo</th>
            <th>divisao</th> 
            <th>tipo</th>
            <th>cliente</th>
            <th>dataInicial</th>
            <th>dataFinal</th>
            <th>mostra</th>
            <th>atualiza</th>
            <th>remove</th>
            </tr>
        
        @foreach($regras as $r)            
        <tr>
            <td>{{$r->grupo}}</td>
            <td>{{$r->divisao}}</td>
            <td>{{$r->tipo}}</td>
            <td>{{$r->cliente}}</td>
            <td>{{$r->dataInicial}}</td>
            <td>{{$r->dataFinal}}</td>
            <td><a href="{{action('RegrasController@mostra',[$r->grupo,$r->divisao,$r->dataInicial,$r->tipo])}}">
            <span class="glyphicon glyphicon-search"></span>
            </a></td>
            <td><a href="{{action('RegrasController@atualiza',[$r->grupo,$r->divisao,$r->dataInicial,$r->tipo])}}">
                <span class="glyphicon glyphicon-refresh"></span>
            </a></td>
            <td><a href="{{action('RegrasController@remove',[$r->grupo,$r->divisao,$r->dataInicial,$r->tipo])}}">
                <span class="glyphicon glyphicon-trash"></span>
            </a></td>                             
        </tr>

        @endforeach
     </table>

@endif

@if (count($errors)>0)  
    <div class="alert alert-danger">
        Nenhuma regra cadastrada rara o grupo {{old('grupo')}} e divisao  {{old('divisao')}} informados
    </div>
@endif  

@section('js')
<script>
      $('#tabelaRegras').DataTable({
        destroy:true,
            //defini scroll eixo y
            scrollY: 400,
            //defini scroll eixo x
            scrollX: true,
            colReorder: true,
            dom: 'Bfrtip',
    
            select: {
                style:    'multi',
                selector: 'td:first-child'
            },
            order: [[ 9, 'asc' ]],
           
            //desabilita tamanho automático colunas
            autoWidth: false,
            //defini a linguagem em português
            language: {
                "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"
            },
            //processamento
            processing: true,
            //processamento client-side
            serverSide: false,
            //defini a tabela como responsiva
            responsive: true, 
      })
  </script>

@endsection                  
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