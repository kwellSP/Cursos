<div class="hidden" id="tbOscar2" name="tbOscar">
    <h4 class="text-center">Oscar2 (Produto)</h4>
    <div class="form-group form-group-sm">
       <label for="obrigatorioO2" class="col-md-1">Requirido?</label>
       <div class="col-md-2">
          <select class="form-control" id="obrigatorioO2" name="obrigatorioO2" value="{{old('obrigatórioO2')}}">
             <option value="nao">não</option>
             <option value="sim">sim</option>
          </select>
       </div>
       <label for="quebrarO2" class="col-md-1 hidden quebrarO2">Quebrar</label>
       <div class="col-md-2 ">
          <select class="form-control hidden quebrarO2" id="quebrarO2" name="quebrarO2" value="{{old('quebrarO2')}}">
             <option value="nao">não</option>
             <option value="sim">sim</option>
          </select>
       </div>
       
       <!--<label for="numQuebrasO2" class="col-md-2 hidden numQuebrasO2" name="numQuebrasO2">Num. Quebras</label>
       <div class="col-md-2">
          <input type ="number"  min="2" max="7" class="form-control hidden numQuebrasO2" id="numQuebrasO2" name="numQuebrasO2" value="{{old('numQuebrasO2')}}">
       </div>-->
    </div>
        <div id="rulesO2" class="hidden">
            <div class="form-group form-group-sm">
            <label for="OSO2" class="col-md-1">OS?</label>
            <div class="col-md-2">
                <select class="form-control" id="OSO2" name="OSO2" value="{{old('OSO2')}}">
                    <option value="nao">não</option>
                    <option value="sim">sim</option>
                </select>
            </div>
            <label for="inOSO2" class="col-md-1">Dados OS</label>
            <div class="col-md-3">
                <input type ="text"  class="form-control" id="inOSO2" name="inOSO2" placeholder="SS,SN,NN" value="{{old('inOSO2')}}">
            </div>
            </div>
            <div class="form-group form-group-sm">
            <label for="minO2" class="col-md-1">Mínimo</label>
            <div class="col-md-2">
                <input type ="number" min="1" class="form-control" id="minO2" name="minO2" value="{{old('minO2')}}">
            </div>
            <label for="maxO2" class="col-md-1">Máximo</label>
            <div class="col-md-2">
                <input type ="number" min="1" class="form-control" id="maxO2" name="maxO2" value="{{old('maxO2')}}">
            </div>
            <label for="typeO2" class="col-md-1">Tipo</label>
            <div class="col-md-2">
                <select class="form-control" id="typeO2" name="typeO2" value="{{old('typeO2')}}">
                    <option value="text">texto</option>
                    <option value="number">número</option>
                </select>
            </div>
            </div>
        </div>
    <div class="quebrasO2 hidden">
       <h4 class="text-center">Quebras Oscar2 (Produto)</h4>
       <div class="form-group form-group-sm">
          <label for="minO2P1" class="col-md-1">Mínimo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="minO2P1" name="minO2P1" value="{{old('minO2P1')}}">
          </div>
          <label for="maxO2P1" class="col-md-1">Máximo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="maxO2P1" name="maxO2P1" value="{{old('maxO2P1')}}">
          </div>
          <label for="typeO2P1" class="col-md-1">Tipo</label>
          <div class="col-md-2">
             <select class="form-control" id="typeO2P1" name="typeO2P1" value="{{old('typeO2P1')}}">
                <option value="text">texto</option>
                <option value="number">número</option>
             </select>
          </div>
          <label for="dadosO2P1" class="col-md-1">Dados</label>
          <div class="col-md-2">
             <input type ="text" class="form-control" id="dadosO2P1" name="dadosO2P1" placeholder="separar por virgulas" value="{{old('dadosO2P1')}}">
          </div>
       </div>
       <div class="form-group form-group-sm">
          <label for="minO2P2" class="col-md-1">Mínimo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="minO2P2" name="minO2P2" value="{{old('minO2P2')}}">
          </div>
          <label for="maxO2P2" class="col-md-1">Máximo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="maxO2P2" name="maxO2P2" value="{{old('maxO2P2')}}">
          </div>
          <label for="typeO2P2" class="col-md-1">Tipo</label>
          <div class="col-md-2">
             <select class="form-control" id="typeO2P2" name="typeO2P2" value="{{old('typeO2P2')}}">
                <option value="text">texto</option>
                <option value="number">número</option>
             </select>
          </div>
          <label for="dadosO2P2" class="col-md-1">Dados</label>
          <div class="col-md-2">
             <input type ="text" class="form-control" id="dadosO2P2" name="dadosO2P2" placeholder="separar por virgulas" value="{{old('dadosO2P2')}}">
          </div>
       </div>
       <div class="form-group form-group-sm">
          <label for="minO2P3" class="col-md-1">Mínimo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="minO2P3" name="minO2P3" value="{{old('minO2P3')}}">
          </div>
          <label for="maxO2P3" class="col-md-1">Máximo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="maxO2P3" name="maxO2P3" value="{{old('maxO2P3')}}">
          </div>
          <label for="typeO2P3" class="col-md-1">Tipo</label>
          <div class="col-md-2">
             <select class="form-control" id="typeO2P3" name="typeO2P3" value="{{old('typeO2P3')}}">
                <option value="text">texto</option>
                <option value="number">número</option>
             </select>
          </div>
          <label for="dadosO2P3" class="col-md-1">Dados</label>
          <div class="col-md-2">
             <input type ="text" class="form-control" id="dadosO2P3" name="dadosO2P3" placeholder="separar por virgulas" value="{{old('dadosO2P3')}}">
          </div>
       </div>
       <div class="form-group form-group-sm">
          <label for="minO2P4" class="col-md-1">Mínimo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="minO2P4" name="minO2P4" value="{{old('minO2P4')}}">
          </div>
          <label for="maxO2P4" class="col-md-1">Máximo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="maxO2P4" name="maxO2P4" value="{{old('maxO2P4')}}">
          </div>
          <label for="typeO2P4" class="col-md-1">Tipo</label>
          <div class="col-md-2">
             <select class="form-control" id="typeO2P4" name="typeO2P4" value="{{old('typeO2P4')}}">
                <option value="text">texto</option>
                <option value="number">número</option>
             </select>
          </div>
          <label for="dadosO2P4" class="col-md-1">Dados</label>
          <div class="col-md-2">
             <input type ="text" class="form-control" id="dadosO2P4" name="dadosO2P4" placeholder="separar por virgulas" value="{{old('dadosO2P4')}}">
          </div>
       </div>
    </div>
        <div class="regraO2 hidden">
          <label for="regraO2" class="text-center col-md-12 hidden">Regra do Oscar 2</label>
          <textarea class="form-control" rows ="3" id ="regraO2" name ="regraO2" value="{{old('regraO2')}}"> </textarea>
        </div>  
 </div>