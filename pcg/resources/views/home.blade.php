@extends('adminlte::page')

@section('title', 'C&G')

@section('content_header')
    <h1 class = "text-center">Inconsistências de Prévias</h1>
@stop
@section('css')
@stop
@section('js')
<script src="/js/homeCustom.js"></script>
@stop

@section('content')
<div class="container-fluid">            
   
    <form action="" method="GET" class ="form-horizontal">
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
      
        <div class="form-group">
            <button type="button" class="btn btn-primary" id="pesquisar" >Pesquisar </button>
        </div>
      </div>  
    </form>
   
<div id="erros">
    
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