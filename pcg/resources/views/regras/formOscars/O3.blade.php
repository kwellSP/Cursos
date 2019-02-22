<div class="hidden" id="tbOscar3" name="tbOscar">
    <h4 class="text-center">Oscar3 (Doc Cli)</h4>
    <div class="form-group form-group-sm">
       <label for="obrigatorioO3" class="col-md-1">Requirido?</label>
       <div class="col-md-2">
          <select class="form-control" id="obrigatorioO3" name="obrigatorioO3" value="{{old('obrigatórioO3')}}">
             <option value="nao">não</option>
             <option value="sim">sim</option>
          </select>
       </div>
       <label for="quebrarO3" class="col-md-1 hidden quebrarO3">Quebrar</label>
       <div class="col-md-2 ">
          <select class="form-control hidden quebrarO3" id="quebrarO3" name="quebrarO3" value="{{old('quebrarO3')}}">
             <option value="nao">não</option>
             <option value="sim">sim</option>
          </select>
       </div>
       
       <!--<label for="numQuebrasO3" class="col-md-2 hidden numQuebrasO3" name="numQuebrasO3">Num. Quebras</label>
       <div class="col-md-2">
          <input type ="number"  min="2" max="7" class="form-control hidden numQuebrasO3" id="numQuebrasO3" name="numQuebrasO3" value="{{old('numQuebrasO3')}}">
       </div>-->
    </div>
        <div id="rulesO3" class="hidden">
            <div class="form-group form-group-sm">
            <label for="OSO3" class="col-md-1">OS?</label>
            <div class="col-md-2">
                <select class="form-control" id="OSO3" name="OSO3" value="{{old('OSO3')}}">
                    <option value="nao">não</option>
                    <option value="sim">sim</option>
                </select>
            </div>
            <label for="inOSO3" class="col-md-1">Dados OS</label>
            <div class="col-md-3">
                <input type ="text"  class="form-control" id="inOSO3" name="inOSO3" placeholder="SS,SN,NN" value="{{old('inOSO3')}}">
            </div>
            </div>
            <div class="form-group form-group-sm">
            <label for="minO3" class="col-md-1">Mínimo</label>
            <div class="col-md-2">
                <input type ="number" min="1" class="form-control" id="minO3" name="minO3" value="{{old('minO3')}}">
            </div>
            <label for="maxO3" class="col-md-1">Máximo</label>
            <div class="col-md-2">
                <input type ="number" min="1" class="form-control" id="maxO3" name="maxO3" value="{{old('maxO3')}}">
            </div>
            <label for="typeO3" class="col-md-1">Tipo</label>
            <div class="col-md-2">
                <select class="form-control" id="typeO3" name="typeO3" value="{{old('typeO3')}}">
                    <option value="text">texto</option>
                    <option value="number">número</option>
                </select>
            </div>
            </div>
        </div>
    <div class="quebrasO3 hidden">
       <h4 class="text-center">Quebras Oscar3 (Doc Cli)</h4>
       <div class="form-group form-group-sm">
          <label for="minO3P1" class="col-md-1">Mínimo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="minO3P1" name="minO3P1" value="{{old('minO3P1')}}">
          </div>
          <label for="maxO3P1" class="col-md-1">Máximo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="maxO3P1" name="maxO3P1" value="{{old('maxO3P1')}}">
          </div>
          <label for="typeO3P1" class="col-md-1">Tipo</label>
          <div class="col-md-2">
             <select class="form-control" id="typeO3P1" name="typeO3P1" value="{{old('typeO3P1')}}">
                <option value="text">texto</option>
                <option value="number">número</option>
             </select>
          </div>
          <label for="dadosO3P1" class="col-md-1">Dados</label>
          <div class="col-md-2">
             <input type ="text" class="form-control" id="dadosO3P1" name="dadosO3P1" placeholder="separar por virgulas" value="{{old('dadosO3P1')}}">
          </div>
       </div>
       <div class="form-group form-group-sm">
          <label for="minO3P2" class="col-md-1">Mínimo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="minO3P2" name="minO3P2" value="{{old('minO3P2')}}">
          </div>
          <label for="maxO3P2" class="col-md-1">Máximo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="maxO3P2" name="maxO3P2" value="{{old('maxO3P2')}}">
          </div>
          <label for="typeO3P2" class="col-md-1">Tipo</label>
          <div class="col-md-2">
             <select class="form-control" id="typeO3P2" name="typeO3P2" value="{{old('typeO3P2')}}">
                <option value="text">texto</option>
                <option value="number">número</option>
             </select>
          </div>
          <label for="dadosO3P2" class="col-md-1">Dados</label>
          <div class="col-md-2">
             <input type ="text" class="form-control" id="dadosO3P2" name="dadosO3P2" placeholder="separar por virgulas" value="{{old('dadosO3P2')}}">
          </div>
       </div>
       <div class="form-group form-group-sm">
          <label for="minO3P3" class="col-md-1">Mínimo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="minO3P3" name="minO3P3" value="{{old('minO3P3')}}">
          </div>
          <label for="maxO3P3" class="col-md-1">Máximo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="maxO3P3" name="maxO3P3" value="{{old('maxO3P3')}}">
          </div>
          <label for="typeO3P3" class="col-md-1">Tipo</label>
          <div class="col-md-2">
             <select class="form-control" id="typeO3P3" name="typeO3P3" value="{{old('typeO3P3')}}">
                <option value="text">texto</option>
                <option value="number">número</option>
             </select>
          </div>
          <label for="dadosO3P3" class="col-md-1">Dados</label>
          <div class="col-md-2">
             <input type ="text" class="form-control" id="dadosO3P3" name="dadosO3P3" placeholder="separar por virgulas" value="{{old('dadosO3P3')}}">
          </div>
       </div>
       <div class="form-group form-group-sm">
          <label for="minO3P4" class="col-md-1">Mínimo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="minO3P4" name="minO3P4" value="{{old('minO3P4')}}">
          </div>
          <label for="maxO3P4" class="col-md-1">Máximo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="maxO3P4" name="maxO3P4" value="{{old('maxO3P4')}}">
          </div>
          <label for="typeO3P4" class="col-md-1">Tipo</label>
          <div class="col-md-2">
             <select class="form-control" id="typeO3P4" name="typeO3P4" value="{{old('typeO3P4')}}">
                <option value="text">texto</option>
                <option value="number">número</option>
             </select>
          </div>
          <label for="dadosO3P4" class="col-md-1">Dados</label>
          <div class="col-md-2">
             <input type ="text" class="form-control" id="dadosO3P4" name="dadosO3P4" placeholder="separar por virgulas" value="{{old('dadosO3P4')}}">
          </div>
       </div>
    </div>
        <div class="regraO3 hidden">
          <label for="regraO3" class="text-center col-md-12 hidden">Regra do Oscar 3</label>
          <textarea class="form-control" rows ="3" id ="regraO3" name ="regraO3" value="{{old('regraO3')}}"> </textarea>
        </div>  
 </div>