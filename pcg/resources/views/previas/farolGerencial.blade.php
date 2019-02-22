@extends('adminlte::page')
@section('title', 'C&G')

@section('content_header')
    <h1 class = "text-center">Farol Gerencial de Prévias</h1>
@stop

@section('css')
    <link rel="stylesheet" href="/css/custom.css">
@stop

@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>
    <script src="/js/chartCustom.js"></script>
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
            <button type="button" class="btn btn-primary" id="pesquisar"> Pesquisar </button>
        </div>
      </div>  
    </form>

<div class="ocultar" id="graphs">    
    <div class="row">
        <div class = "col-md-6"> 
            <canvas id="grap1"></canvas>
        </div>
        <div class = "col-md-6"> 
            <canvas id="grap2"></canvas>
        </div>
    </div>

    <div class="row">
        <div class = "col-md-6"> 
            <canvas id="grap3"></canvas>
        </div>
        <div class = "col-md-6"> 
            <canvas id="grap4"></canvas>
        </div>
    </div>

    </div>
</div>
</div>
@stop