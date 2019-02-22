<div class="hidden" id="tbOscar5" name="tbOscar">
    <h4 class="text-center">Oscar5 (OBS2)</h4>
    <div class="form-group form-group-sm">
       <label for="obrigatorioO5" class="col-md-1">Requirido?</label>
       <div class="col-md-2">
          <select class="form-control" id="obrigatorioO5" name="obrigatorioO5" value="{{old('obrigatórioO5')}}">
             <option value="nao">não</option>
             <option value="sim">sim</option>
          </select>
       </div>
       <label for="quebrarO5" class="col-md-1 hidden quebrarO5">Quebrar</label>
       <div class="col-md-2 ">
          <select class="form-control hidden quebrarO5" id="quebrarO5" name="quebrarO5" value="{{old('quebrarO5')}}">
             <option value="nao">não</option>
             <option value="sim">sim</option>
          </select>
       </div>
       
       <!--<label for="numQuebrasO5" class="col-md-2 hidden numQuebrasO5" name="numQuebrasO5">Num. Quebras</label>
       <div class="col-md-2">
          <input type ="number"  min="2" max="7" class="form-control hidden numQuebrasO5" id="numQuebrasO5" name="numQuebrasO5" value="{{old('numQuebrasO5')}}">
       </div>-->
    </div>
        <div id="rulesO5" class="hidden">
            <div class="form-group form-group-sm">
            <label for="OSO5" class="col-md-1">OS?</label>
            <div class="col-md-2">
                <select class="form-control" id="OSO5" name="OSO5" value="{{old('OSO5')}}">
                    <option value="nao">não</option>
                    <option value="sim">sim</option>
                </select>
            </div>
            <label for="inOSO5" class="col-md-1">Dados OS</label>
            <div class="col-md-3">
                <input type ="text"  class="form-control" id="inOSO5" name="inOSO5" placeholder="SS,SN,NN" value="{{old('inOSO5')}}">
            </div>
            </div>
            <div class="form-group form-group-sm">
            <label for="minO5" class="col-md-1">Mínimo</label>
            <div class="col-md-2">
                <input type ="number" min="1" class="form-control" id="minO5" name="minO5" value="{{old('minO5')}}">
            </div>
            <label for="maxO5" class="col-md-1">Máximo</label>
            <div class="col-md-2">
                <input type ="number" min="1" class="form-control" id="maxO5" name="maxO5" value="{{old('maxO5')}}">
            </div>
            <label for="typeO5" class="col-md-1">Tipo</label>
            <div class="col-md-2">
                <select class="form-control" id="typeO5" name="typeO5" value="{{old('typeO5')}}">
                    <option value="text">texto</option>
                    <option value="number">número</option>
                </select>
            </div>
            </div>
        </div>
    <div class="quebrasO5 hidden">
       <h4 class="text-center">Quebras Oscar5 (OBS2)</h4>
       <div class="form-group form-group-sm">
          <label for="minO5P1" class="col-md-1">Mínimo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="minO5P1" name="minO5P1" value="{{old('minO5P1')}}">
          </div>
          <label for="maxO5P1" class="col-md-1">Máximo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="maxO5P1" name="maxO5P1" value="{{old('maxO5P1')}}">
          </div>
          <label for="typeO5P1" class="col-md-1">Tipo</label>
          <div class="col-md-2">
             <select class="form-control" id="typeO5P1" name="typeO5P1" value="{{old('typeO5P1')}}">
                <option value="text">texto</option>
                <option value="number">número</option>
             </select>
          </div>
          <label for="dadosO5P1" class="col-md-1">Dados</label>
          <div class="col-md-2">
             <input type ="text" class="form-control" id="dadosO5P1" name="dadosO5P1" placeholder="separar por virgulas" value="{{old('dadosO5P1')}}">
          </div>
       </div>
       <div class="form-group form-group-sm">
          <label for="minO5P2" class="col-md-1">Mínimo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="minO5P2" name="minO5P2" value="{{old('minO5P2')}}">
          </div>
          <label for="maxO5P2" class="col-md-1">Máximo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="maxO5P2" name="maxO5P2" value="{{old('maxO5P2')}}">
          </div>
          <label for="typeO5P2" class="col-md-1">Tipo</label>
          <div class="col-md-2">
             <select class="form-control" id="typeO5P2" name="typeO5P2" value="{{old('typeO5P2')}}">
                <option value="text">texto</option>
                <option value="number">número</option>
             </select>
          </div>
          <label for="dadosO5P2" class="col-md-1">Dados</label>
          <div class="col-md-2">
             <input type ="text" class="form-control" id="dadosO5P2" name="dadosO5P2" placeholder="separar por virgulas" value="{{old('dadosO5P2')}}">
          </div>
       </div>
       <div class="form-group form-group-sm">
          <label for="minO5P3" class="col-md-1">Mínimo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="minO5P3" name="minO5P3" value="{{old('minO5P3')}}">
          </div>
          <label for="maxO5P3" class="col-md-1">Máximo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="maxO5P3" name="maxO5P3" value="{{old('maxO5P3')}}">
          </div>
          <label for="typeO5P3" class="col-md-1">Tipo</label>
          <div class="col-md-2">
             <select class="form-control" id="typeO5P3" name="typeO5P3" value="{{old('typeO5P3')}}">
                <option value="text">texto</option>
                <option value="number">número</option>
             </select>
          </div>
          <label for="dadosO5P3" class="col-md-1">Dados</label>
          <div class="col-md-2">
             <input type ="text" class="form-control" id="dadosO5P3" name="dadosO5P3" placeholder="separar por virgulas" value="{{old('dadosO5P3')}}">
          </div>
       </div>
       <div class="form-group form-group-sm">
          <label for="minO5P4" class="col-md-1">Mínimo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="minO5P4" name="minO5P4" value="{{old('minO5P4')}}">
          </div>
          <label for="maxO5P4" class="col-md-1">Máximo</label>
          <div class="col-md-2">
             <input type ="number" min="1" class="form-control" id="maxO5P4" name="maxO5P4" value="{{old('maxO5P4')}}">
          </div>
          <label for="typeO5P4" class="col-md-1">Tipo</label>
          <div class="col-md-2">
             <select class="form-control" id="typeO5P4" name="typeO5P4" value="{{old('typeO5P4')}}">
                <option value="text">texto</option>
                <option value="number">número</option>
             </select>
          </div>
          <label for="dadosO5P4" class="col-md-1">Dados</label>
          <div class="col-md-2">
             <input type ="text" class="form-control" id="dadosO5P4" name="dadosO5P4" placeholder="separar por virgulas" value="{{old('dadosO5P4')}}">
          </div>
       </div>
    </div>
        <div class="regraO5 hidden">
          <label for="regraO5" class="text-center col-md-12 hidden">Regra do Oscar 5</label>
          <textarea class="form-control" rows ="3" id ="regraO5" name ="regraO5" value="{{old('regraO5')}}"> </textarea>
        </div>  
 </div>