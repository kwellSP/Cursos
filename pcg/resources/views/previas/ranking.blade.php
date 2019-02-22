@extends('adminlte::page')

@section('title', 'C&G')

@section('content_header')
    <h1 class = "text-center">Ranking de Inconsistências</h1>
@stop
@section('css')
@stop
@section('js')
<script src="/js/rankingCustom.js"></script>
@stop

@section('content')
<div class="container-fluid">            
   
    <form action="" method="GET" class ="form-horizontal">
        @csrf
      <div class="form-group row">
        <label for="top" class="col-sm-3 col-form-label">Tamanho do Ranking:</label>
        <div class="col-sm-3">
        <input type="number" min=5 value =5 class="form-control" id="top"  name="top"  required>
        </div>

        <div class="form-group">
            <button type="button" class="btn btn-primary" id="pesquisar" >Pesquisar </button>
        </div>
      </div>  
    </form>
   
<div id="ranking">
    
</div>

@stop