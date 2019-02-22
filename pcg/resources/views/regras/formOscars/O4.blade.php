<div class="hidden" id="tbOscar4" name="tbOscar">
    <h4 class="text-center">Oscar4 (OBS1)</h4>
    <div class="form-group form-group-sm">
       <label for="obrigatorioO4" class="col-md-1">Requirido?</label>
       <div class="col-md-2">
          <select class="form-control" id="obrigatorioO4" name="obrigatorioO4" value="{{old('obrigatórioO4')}}">
             <option value="nao">não</option>
             <option value="sim">sim</option>
          </select>
       </div>
       <label for="quebrarO4" class="col-md-1 hidden quebrarO4">Quebrar</label>
       <div class="col-md-2 ">
          <select class="form-control hidden quebrarO4" id="quebrarO4" name="quebrarO4" value="{{old('quebrarO4')}}">
             <option value="nao">não</option>
             <option value="sim">sim</option>
          </select>
       </div>
       
       <!--<label for="numQuebrasO4" class="col-md-2 hidden numQuebrasO4" name="numQuebrasO4">Num. Quebras</label>
       <div class="col-md-2">
          <input type ="number"  min="2" max="7" class="form-control hidden numQuebrasO4" id="numQuebrasO4" name="numQuebrasO4" value="{{old('numQuebrasO4')}}">
       </div>-->
    </div>
        <div id="rulesO4" class="hidden">
            <div class="form-group form-group-sm">
            <label for="OSO4" class="col-md-1">OS?</label>
            <div class="col-md-2">
                <select class="form-control" id="OSO4" name="OSO4" value="{{old('OSO4')}}">
                    <option value="nao">não</option>
                    <option value="sim">sim</option>
                </select>
            </div>
            <label for="inOSO4" class="col-md-1">Dados OS</label>
            <div class="col-md-3">
                <input type ="text"  class="form-control" id="inOSO4" name="inOSO4" placeholder="SS,SN,NN" value="{{old('inOSO4')}}">
            </div>
            </div>
            <div class="form-group form-group-sm">
            <label for="minO4" class="col-md-1">Mínimo</label>
            <div class="col-md-2">
                <input type ="number" min="1" class="form-control" id="minO4" name="minO4" value="{{old('minO4')}}">
            </div>
            <label for="maxO4" class="col-md-1">Máximo</label>
            <div class="col-md-2">
                <input type ="number" min="1" class="form-control" id="maxO4" name="maxO4" value="{{old('maxO4')}}">
            </div>
            <label for="typeO4" class="col-md-1">Tipo</label>
            <div class="col-md-2">
                <select class="form-control" id="typeO4" name="typeO4" value="{{old('typeO4')}}">
                    <option value="text">texto</option>
                    <option value="number">número</option>
                </select>
            </div>
            </div>
        </div>
    <div class="quebrasO4 hidden">
       <h4 class="text-center">Quebras Oscar4 (OBS1)</h4>
       <div class="form-group form-group-sm">
          <label for="minO4P1" class="col-md-1">Mínimo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="minO4P1" name="minO4P1" value="{{old('minO4P1')}}">
          </div>
          <label for="maxO4P1" class="col-md-1">Máximo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="maxO4P1" name="maxO4P1" value="{{old('maxO4P1')}}">
          </div>
          <label for="typeO4P1" class="col-md-1">Tipo</label>
          <div class="col-md-2">
             <select class="form-control" id="typeO4P1" name="typeO4P1" value="{{old('typeO4P1')}}">
                <option value="text">texto</option>
                <option value="number">número</option>
             </select>
          </div>
          <label for="dadosO4P1" class="col-md-1">Dados</label>
          <div class="col-md-2">
             <input type ="text" class="form-control" id="dadosO4P1" name="dadosO4P1" placeholder="separar por virgulas" value="{{old('dadosO4P1')}}">
          </div>
       </div>
       <div class="form-group form-group-sm">
          <label for="minO4P2" class="col-md-1">Mínimo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="minO4P2" name="minO4P2" value="{{old('minO4P2')}}">
          </div>
          <label for="maxO4P2" class="col-md-1">Máximo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="maxO4P2" name="maxO4P2" value="{{old('maxO4P2')}}">
          </div>
          <label for="typeO4P2" class="col-md-1">Tipo</label>
          <div class="col-md-2">
             <select class="form-control" id="typeO4P2" name="typeO4P2" value="{{old('typeO4P2')}}">
                <option value="text">texto</option>
                <option value="number">número</option>
             </select>
          </div>
          <label for="dadosO4P2" class="col-md-1">Dados</label>
          <div class="col-md-2">
             <input type ="text" class="form-control" id="dadosO4P2" name="dadosO4P2" placeholder="separar por virgulas" value="{{old('dadosO4P2')}}">
          </div>
       </div>
       <div class="form-group form-group-sm">
          <label for="minO4P3" class="col-md-1">Mínimo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="minO4P3" name="minO4P3" value="{{old('minO4P3')}}">
          </div>
          <label for="maxO4P3" class="col-md-1">Máximo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="maxO4P3" name="maxO4P3" value="{{old('maxO4P3')}}">
          </div>
          <label for="typeO4P3" class="col-md-1">Tipo</label>
          <div class="col-md-2">
             <select class="form-control" id="typeO4P3" name="typeO4P3" value="{{old('typeO4P3')}}">
                <option value="text">texto</option>
                <option value="number">número</option>
             </select>
          </div>
          <label for="dadosO4P3" class="col-md-1">Dados</label>
          <div class="col-md-2">
             <input type ="text" class="form-control" id="dadosO4P3" name="dadosO4P3" placeholder="separar por virgulas" value="{{old('dadosO4P3')}}">
          </div>
       </div>
       <div class="form-group form-group-sm">
          <label for="minO4P4" class="col-md-1">Mínimo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="minO4P4" name="minO4P4" value="{{old('minO4P4')}}">
          </div>
          <label for="maxO4P4" class="col-md-1">Máximo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="maxO4P4" name="maxO4P4" value="{{old('maxO4P4')}}">
          </div>
          <label for="typeO4P4" class="col-md-1">Tipo</label>
          <div class="col-md-2">
             <select class="form-control" id="typeO4P4" name="typeO4P4" value="{{old('typeO4P4')}}">
                <option value="text">texto</option>
                <option value="number">número</option>
             </select>
          </div>
          <label for="dadosO4P4" class="col-md-1">Dados</label>
          <div class="col-md-2">
             <input type ="text" class="form-control" id="dadosO4P4" name="dadosO4P4" placeholder="separar por virgulas" value="{{old('dadosO4P4')}}">
          </div>
       </div>
    </div>
        <div class="regraO4 hidden">
          <label for="regraO4" class="text-center col-md-12 hidden">Regra do Oscar 4</label>
          <textarea class="form-control" rows ="3" id ="regraO4" name ="regraO4" value="{{old('regraO4')}}"> </textarea>
        </div>  
 </div>