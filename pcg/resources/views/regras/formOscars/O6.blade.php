<div class="hidden" id="tbOscar6" name="tbOscar">
    <h4 class="text-center">Oscar6 (OBS3)</h4>
    <div class="form-group form-group-sm">
       <label for="obrigatorioO6" class="col-md-1">Requirido?</label>
       <div class="col-md-2">
          <select class="form-control" id="obrigatorioO6" name="obrigatorioO6" value="{{old('obrigatórioO6')}}">
             <option value="nao">não</option>
             <option value="sim">sim</option>
          </select>
       </div>
       <label for="quebrarO6" class="col-md-1 hidden quebrarO6">Quebrar</label>
       <div class="col-md-2 ">
          <select class="form-control hidden quebrarO6" id="quebrarO6" name="quebrarO6" value="{{old('quebrarO6')}}">
             <option value="nao">não</option>
             <option value="sim">sim</option>
          </select>
       </div>
       
       <!--<label for="numQuebrasO6" class="col-md-2 hidden numQuebrasO6" name="numQuebrasO6">Num. Quebras</label>
       <div class="col-md-2">
          <input type ="number"  min="2" max="7" class="form-control hidden numQuebrasO6" id="numQuebrasO6" name="numQuebrasO6" value="{{old('numQuebrasO6')}}">
       </div>-->
    </div>
        <div id="rulesO6" class="hidden">
            <div class="form-group form-group-sm">
            <label for="OSO6" class="col-md-1">OS?</label>
            <div class="col-md-2">
                <select class="form-control" id="OSO6" name="OSO6" value="{{old('OSO6')}}">
                    <option value="nao">não</option>
                    <option value="sim">sim</option>
                </select>
            </div>
            <label for="inOSO6" class="col-md-1">Dados OS</label>
            <div class="col-md-3">
                <input type ="text"  class="form-control" id="inOSO6" name="inOSO6" placeholder="SS,SN,NN" value="{{old('inOSO6')}}">
            </div>
            </div>
            <div class="form-group form-group-sm">
            <label for="minO6" class="col-md-1">Mínimo</label>
            <div class="col-md-2">
                <input type ="number" min="1" class="form-control" id="minO6" name="minO6" value="{{old('minO6')}}">
            </div>
            <label for="maxO6" class="col-md-1">Máximo</label>
            <div class="col-md-2">
                <input type ="number" min="1" class="form-control" id="maxO6" name="maxO6" value="{{old('maxO6')}}">
            </div>
            <label for="typeO6" class="col-md-1">Tipo</label>
            <div class="col-md-2">
                <select class="form-control" id="typeO6" name="typeO6" value="{{old('typeO6')}}">
                    <option value="text">texto</option>
                    <option value="number">número</option>
                </select>
            </div>
            </div>
        </div>
    <div class="quebrasO6 hidden">
       <h4 class="text-center">Quebras Oscar6 (OBS3)</h4>
       <div class="form-group form-group-sm">
          <label for="minO6P1" class="col-md-1">Mínimo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="minO6P1" name="minO6P1" value="{{old('minO6P1')}}">
          </div>
          <label for="maxO6P1" class="col-md-1">Máximo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="maxO6P1" name="maxO6P1" value="{{old('maxO6P1')}}">
          </div>
          <label for="typeO6P1" class="col-md-1">Tipo</label>
          <div class="col-md-2">
             <select class="form-control" id="typeO6P1" name="typeO6P1" value="{{old('typeO6P1')}}">
                <option value="text">texto</option>
                <option value="number">número</option>
             </select>
          </div>
          <label for="dadosO6P1" class="col-md-1">Dados</label>
          <div class="col-md-2">
             <input type ="text" class="form-control" id="dadosO6P1" name="dadosO6P1" placeholder="separar por virgulas" value="{{old('dadosO6P1')}}">
          </div>
       </div>
       <div class="form-group form-group-sm">
          <label for="minO6P2" class="col-md-1">Mínimo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="minO6P2" name="minO6P2" value="{{old('minO6P2')}}">
          </div>
          <label for="maxO6P2" class="col-md-1">Máximo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="maxO6P2" name="maxO6P2" value="{{old('maxO6P2')}}">
          </div>
          <label for="typeO6P2" class="col-md-1">Tipo</label>
          <div class="col-md-2">
             <select class="form-control" id="typeO6P2" name="typeO6P2" value="{{old('typeO6P2')}}">
                <option value="text">texto</option>
                <option value="number">número</option>
             </select>
          </div>
          <label for="dadosO6P2" class="col-md-1">Dados</label>
          <div class="col-md-2">
             <input type ="text" class="form-control" id="dadosO6P2" name="dadosO6P2" placeholder="separar por virgulas" value="{{old('dadosO6P2')}}">
          </div>
       </div>
       <div class="form-group form-group-sm">
          <label for="minO6P3" class="col-md-1">Mínimo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="minO6P3" name="minO6P3" value="{{old('minO6P3')}}">
          </div>
          <label for="maxO6P3" class="col-md-1">Máximo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="maxO6P3" name="maxO6P3" value="{{old('maxO6P3')}}">
          </div>
          <label for="typeO6P3" class="col-md-1">Tipo</label>
          <div class="col-md-2">
             <select class="form-control" id="typeO6P3" name="typeO6P3" value="{{old('typeO6P3')}}">
                <option value="text">texto</option>
                <option value="number">número</option>
             </select>
          </div>
          <label for="dadosO6P3" class="col-md-1">Dados</label>
          <div class="col-md-2">
             <input type ="text" class="form-control" id="dadosO6P3" name="dadosO6P3" placeholder="separar por virgulas" value="{{old('dadosO6P3')}}">
          </div>
       </div>
       <div class="form-group form-group-sm">
          <label for="minO6P4" class="col-md-1">Mínimo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="minO6P4" name="minO6P4" value="{{old('minO6P4')}}">
          </div>
          <label for="maxO6P4" class="col-md-1">Máximo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="maxO6P4" name="maxO6P4" value="{{old('maxO6P4')}}">
          </div>
          <label for="typeO6P4" class="col-md-1">Tipo</label>
          <div class="col-md-2">
             <select class="form-control" id="typeO6P4" name="typeO6P4" value="{{old('typeO6P4')}}">
                <option value="text">texto</option>
                <option value="number">número</option>
             </select>
          </div>
          <label for="dadosO6P4" class="col-md-1">Dados</label>
          <div class="col-md-2">
             <input type ="text" class="form-control" id="dadosO6P4" name="dadosO6P4" placeholder="separar por virgulas" value="{{old('dadosO6P4')}}">
          </div>
       </div>
    </div>
        <div class="regraO6 hidden">
          <label for="regraO6" class="text-center col-md-12 hidden">Regra do Oscar 6</label>
          <textarea class="form-control" rows ="3" id ="regraO6" name ="regraO6" value="{{old('regraO6')}}"> </textarea>
        </div>  
 </div>