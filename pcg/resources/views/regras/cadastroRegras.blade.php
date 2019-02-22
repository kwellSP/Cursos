@extends('adminlte::page')

@section('title', 'C&G')

@section('content_header')
    <h1 class = "text-center">Cadastro de Regras</h1>
@stop

@section('css')
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">    
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="/css/custom.css">
  @stop
@section('js')
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
    <script src="/js/regrasCustom.js"></script>
@stop


@section('content')
<div class="container-fluid">            
  <form method="post" action="/previas/regras/cadastro/cadastrar" class ="form-horizontal">
    @csrf
      <div class="form-group form-group-sm">
          <label for="grupo" class="col-md-1">Grupo</label>
          <div class="col-md-2">
              <input type="input-sm" class="form-control" id="grupo" name="grupo" required placeholder="Grupo Cliente" value="{{old('grupo')}}">
          </div>

          <label for="divisao" class="col-md-1">Divisao</label>
          <div class="col-md-2">
              <select class="form-control" id="divisao" name="divisao" value="{{old('divisao')}}">
                  <option value="2000"> 2000</option>
                  <option value="6000"> 6000</option>
              </select>   
          </div>
          <label for="cliente" class="col-md-1">Cliente</label>
          <div class="col-md-4">
              <input type="input-sm" class="form-control" id="cliente" name="cliente" required placeholder="Nome Cliente" value="{{old('cliente')}}">
          </div>
      </div>
      <div class="form-group form-group-sm">
          <label for="dataIni" class="col-md-1">Data Ini</label>
          <div class="col-md-2">
              <input type="date" class="form-control" id="dataIni"  name="dataIni" value="{{old('dataIni')}}">
          </div>
          <label for="dataFim" class="col-md-1">Data Fim</label>
          <div class="col-md-2">
              <input type="date" class="form-control" id="dataFim" name="dataFim"  value="{{old('dataFim')}}">
          </div>
          <label for="oscar" class="col-md-1">Oscar</label>
          <div class="col-md-4">
              <select class="form-control" id="oscar" name="oscar" value="{{old('oscar')}}">
                  <option value="tbOscar1"> oscar1 (Centro de Custo)</option>
                  <option value="tbOscar2"> oscar2 (Produto)</option>
                  <option value="tbOscar3"> oscar3 (Doc Cli)</option>
                  <option value="tbOscar4"> oscar4 (OBS1)</option>
                  <option value="tbOscar5"> oscar5 (OBS2)</option>
                  <option value="tbOscar6"> oscar6 (OBS3)</option>
                  <option value="tbOscar7"> oscar7 (OBS4)</option>
              </select>   
          </div>
      </div>    

        @include('regras.formOscars.O1')
        @include('regras.formOscars.O2')
        @include('regras.formOscars.O3')
        @include('regras.formOscars.O4')
        @include('regras.formOscars.O5')
        @include('regras.formOscars.O6')
        @include('regras.formOscars.O7')
 
      <br>
      <br>
      <div class="form-group form-group-sm">
            <div class="col-md-2">
                <input type="submit" class="btn btn-info" value="Cadastrar"></input>
            </div>
        
      </div>    
    
    </form>
</div>
@stop