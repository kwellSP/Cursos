<div class="hidden" id="tbOscar7" name="tbOscar">
    <h4 class="text-center">Oscar7 (OBS4)</h4>
    <div class="form-group form-group-sm">
       <label for="obrigatorioO7" class="col-md-1">Requirido?</label>
       <div class="col-md-2">
          <select class="form-control" id="obrigatorioO7" name="obrigatorioO7" value="{{old('obrigatórioO7')}}">
             <option value="nao">não</option>
             <option value="sim">sim</option>
          </select>
       </div>
       <label for="quebrarO7" class="col-md-1 hidden quebrarO7">Quebrar</label>
       <div class="col-md-2 ">
          <select class="form-control hidden quebrarO7" id="quebrarO7" name="quebrarO7" value="{{old('quebrarO7')}}">
             <option value="nao">não</option>
             <option value="sim">sim</option>
          </select>
       </div>
       
       <!--<label for="numQuebrasO7" class="col-md-2 hidden numQuebrasO7" name="numQuebrasO7">Num. Quebras</label>
       <div class="col-md-2">
          <input type ="number"  min="2" max="7" class="form-control hidden numQuebrasO7" id="numQuebrasO7" name="numQuebrasO7" value="{{old('numQuebrasO7')}}">
       </div>-->
    </div>
        <div id="rulesO7" class="hidden">
            <div class="form-group form-group-sm">
            <label for="OSO7" class="col-md-1">OS?</label>
            <div class="col-md-2">
                <select class="form-control" id="OSO7" name="OSO7" value="{{old('OSO7')}}">
                    <option value="nao">não</option>
                    <option value="sim">sim</option>
                </select>
            </div>
            <label for="inOSO7" class="col-md-1">Dados OS</label>
            <div class="col-md-3">
                <input type ="text"  class="form-control" id="inOSO7" name="inOSO7" placeholder="SS,SN,NN" value="{{old('inOSO7')}}">
            </div>
            </div>
            <div class="form-group form-group-sm">
            <label for="minO7" class="col-md-1">Mínimo</label>
            <div class="col-md-2">
                <input type ="number" min="1" class="form-control" id="minO7" name="minO7" value="{{old('minO7')}}">
            </div>
            <label for="maxO7" class="col-md-1">Máximo</label>
            <div class="col-md-2">
                <input type ="number" min="1" class="form-control" id="maxO7" name="maxO7" value="{{old('maxO7')}}">
            </div>
            <label for="typeO7" class="col-md-1">Tipo</label>
            <div class="col-md-2">
                <select class="form-control" id="typeO7" name="typeO7" value="{{old('typeO7')}}">
                    <option value="text">texto</option>
                    <option value="number">número</option>
                </select>
            </div>
            </div>
        </div>
    <div class="quebrasO7 hidden">
       <h4 class="text-center">Quebras Oscar7 (OBS4)</h4>
       <div class="form-group form-group-sm">
          <label for="minO7P1" class="col-md-1">Mínimo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="minO7P1" name="minO7P1" value="{{old('minO7P1')}}">
          </div>
          <label for="maxO7P1" class="col-md-1">Máximo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="maxO7P1" name="maxO7P1" value="{{old('maxO7P1')}}">
          </div>
          <label for="typeO7P1" class="col-md-1">Tipo</label>
          <div class="col-md-2">
             <select class="form-control" id="typeO7P1" name="typeO7P1" value="{{old('typeO7P1')}}">
                <option value="text">texto</option>
                <option value="number">número</option>
             </select>
          </div>
          <label for="dadosO7P1" class="col-md-1">Dados</label>
          <div class="col-md-2">
             <input type ="text" class="form-control" id="dadosO7P1" name="dadosO7P1" placeholder="separar por virgulas" value="{{old('dadosO7P1')}}">
          </div>
       </div>
       <div class="form-group form-group-sm">
          <label for="minO7P2" class="col-md-1">Mínimo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="minO7P2" name="minO7P2" value="{{old('minO7P2')}}">
          </div>
          <label for="maxO7P2" class="col-md-1">Máximo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="maxO7P2" name="maxO7P2" value="{{old('maxO7P2')}}">
          </div>
          <label for="typeO7P2" class="col-md-1">Tipo</label>
          <div class="col-md-2">
             <select class="form-control" id="typeO7P2" name="typeO7P2" value="{{old('typeO7P2')}}">
                <option value="text">texto</option>
                <option value="number">número</option>
             </select>
          </div>
          <label for="dadosO7P2" class="col-md-1">Dados</label>
          <div class="col-md-2">
             <input type ="text" class="form-control" id="dadosO7P2" name="dadosO7P2" placeholder="separar por virgulas" value="{{old('dadosO7P2')}}">
          </div>
       </div>
       <div class="form-group form-group-sm">
          <label for="minO7P3" class="col-md-1">Mínimo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="minO7P3" name="minO7P3" value="{{old('minO7P3')}}">
          </div>
          <label for="maxO7P3" class="col-md-1">Máximo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="maxO7P3" name="maxO7P3" value="{{old('maxO7P3')}}">
          </div>
          <label for="typeO7P3" class="col-md-1">Tipo</label>
          <div class="col-md-2">
             <select class="form-control" id="typeO7P3" name="typeO7P3" value="{{old('typeO7P3')}}">
                <option value="text">texto</option>
                <option value="number">número</option>
             </select>
          </div>
          <label for="dadosO7P3" class="col-md-1">Dados</label>
          <div class="col-md-2">
             <input type ="text" class="form-control" id="dadosO7P3" name="dadosO7P3" placeholder="separar por virgulas" value="{{old('dadosO7P3')}}">
          </div>
       </div>
       <div class="form-group form-group-sm">
          <label for="minO7P4" class="col-md-1">Mínimo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="minO7P4" name="minO7P4" value="{{old('minO7P4')}}">
          </div>
          <label for="maxO7P4" class="col-md-1">Máximo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="maxO7P4" name="maxO7P4" value="{{old('maxO7P4')}}">
          </div>
          <label for="typeO7P4" class="col-md-1">Tipo</label>
          <div class="col-md-2">
             <select class="form-control" id="typeO7P4" name="typeO7P4" value="{{old('typeO7P4')}}">
                <option value="text">texto</option>
                <option value="number">número</option>
             </select>
          </div>
          <label for="dadosO7P4" class="col-md-1">Dados</label>
          <div class="col-md-2">
             <input type ="text" class="form-control" id="dadosO7P4" name="dadosO7P4" placeholder="separar por virgulas" value="{{old('dadosO7P4')}}">
          </div>
       </div>
    </div>
        <div class="regraO7 hidden">
          <label for="regraO7" class="text-center col-md-12 hidden">Regra do Oscar 7</label>
          <textarea class="form-control" rows ="3" id ="regraO7" name ="regraO7" value="{{old('regraO7')}}"> </textarea>
        </div>  
 </div>