<div class="" id="tbOscar1" name="tbOscar">
        <h4 class="text-center">Oscar1 (Centro de Custo)</h4>
        <div class="form-group form-group-sm">
           <label for="obrigatorioO1" class="col-md-1">Requirido?</label>
           <div class="col-md-2">
              <select class="form-control" id="obrigatorioO1" name="obrigatorioO1" value="{{old('obrigatórioO1')}}">
                 <option value="nao">não</option>
                 <option value="sim">sim</option>
              </select>
           </div>
           <label for="quebrarO1" class="col-md-1 hidden quebrarO1">Quebrar</label>
           <div class="col-md-2 ">
              <select class="form-control hidden quebrarO1" id="quebrarO1" name="quebrarO1" value="{{old('quebrarO1')}}">
                 <option value="nao">não</option>
                 <option value="sim">sim</option>
              </select>
           </div>
           
           <!--<label for="numQuebrasO1" class="col-md-2 hidden numQuebrasO1" name="numQuebrasO1">Num. Quebras</label>
           <div class="col-md-2">
              <input type ="number"  min="2" max="7" class="form-control hidden numQuebrasO1" id="numQuebrasO1" name="numQuebrasO1" value="{{old('numQuebrasO1')}}">
           </div>-->
        </div>
            <div id="rulesO1" class="hidden">
                <div class="form-group form-group-sm">
                <label for="OSO1" class="col-md-1">OS?</label>
                <div class="col-md-2">
                    <select class="form-control" id="OSO1" name="OSO1" value="{{old('OSO1')}}">
                        <option value="nao">não</option>
                        <option value="sim">sim</option>
                    </select>
                </div>
                <label for="inOSO1" class="col-md-1">Dados OS</label>
                <div class="col-md-3">
                    <input type ="text"  class="form-control" id="inOSO1" name="inOSO1" placeholder="SS,SN,NN" value="{{old('inOSO1')}}">
                </div>
                </div>
                <div class="form-group form-group-sm">
                <label for="minO1" class="col-md-1">Mínimo</label>
                <div class="col-md-2">
                    <input type ="number" min="1" class="form-control" id="minO1" name="minO1" value="{{old('minO1')}}">
                </div>
                <label for="maxO1" class="col-md-1">Máximo</label>
                <div class="col-md-2">
                    <input type ="number" min="1" class="form-control" id="maxO1" name="maxO1" value="{{old('maxO1')}}">
                </div>
                <label for="typeO1" class="col-md-1">Tipo</label>
                <div class="col-md-2">
                    <select class="form-control" id="typeO1" name="typeO1" value="{{old('typeO1')}}">
                        <option value="text">texto</option>
                        <option value="number">número</option>
                    </select>
                </div>
                </div>
            </div>
        <div class="quebrasO1 hidden">
           <h4 class="text-center">Quebras Oscar1 (Centro de Custo)</h4>
           <div class="form-group form-group-sm">
              <label for="minO1P1" class="col-md-1">Mínimo</label>
              <div class="col-md-2">
                 <input type ="number" min="1" class="form-control" id="minO1P1" name="minO1P1" value="{{old('minO1P1')}}">
              </div>
              <label for="maxO1P1" class="col-md-1">Máximo</label>
              <div class="col-md-2">
                 <input type ="number" min="1" class="form-control" id="maxO1P1" name="maxO1P1" value="{{old('maxO1P1')}}">
              </div>
              <label for="typeO1P1" class="col-md-1">Tipo</label>
              <div class="col-md-2">
                 <select class="form-control" id="typeO1P1" name="typeO1P1" value="{{old('typeO1P1')}}">
                    <option value="text">texto</option>
                    <option value="number">número</option>
                 </select>
              </div>
              <label for="dadosO1P1" class="col-md-1">Dados</label>
              <div class="col-md-2">
                 <input type ="text" class="form-control" id="dadosO1P1" name="dadosO1P1" placeholder="separar por virgulas" value="{{old('dadosO1P1')}}">
              </div>
           </div>
           <div class="form-group form-group-sm">
              <label for="minO1P2" class="col-md-1">Mínimo</label>
              <div class="col-md-2">
                 <input type ="number" min="1" class="form-control" id="minO1P2" name="minO1P2" value="{{old('minO1P2')}}">
              </div>
              <label for="maxO1P2" class="col-md-1">Máximo</label>
              <div class="col-md-2">
                 <input type ="number" min="1" class="form-control" id="maxO1P2" name="maxO1P2" value="{{old('maxO1P2')}}">
              </div>
              <label for="typeO1P2" class="col-md-1">Tipo</label>
              <div class="col-md-2">
                 <select class="form-control" id="typeO1P2" name="typeO1P2" value="{{old('typeO1P2')}}">
                    <option value="text">texto</option>
                    <option value="number">número</option>
                 </select>
              </div>
              <label for="dadosO1P2" class="col-md-1">Dados</label>
              <div class="col-md-2">
                 <input type ="text" class="form-control" id="dadosO1P2" name="dadosO1P2" placeholder="separar por virgulas" value="{{old('dadosO1P2')}}">
              </div>
           </div>
           <div class="form-group form-group-sm">
              <label for="minO1P3" class="col-md-1">Mínimo</label>
              <div class="col-md-2">
                 <input type ="number" min="1" class="form-control" id="minO1P3" name="minO1P3" value="{{old('minO1P3')}}">
              </div>
              <label for="maxO1P3" class="col-md-1">Máximo</label>
              <div class="col-md-2">
                 <input type ="number" min="1" class="form-control" id="maxO1P3" name="maxO1P3" value="{{old('maxO1P3')}}">
              </div>
              <label for="typeO1P3" class="col-md-1">Tipo</label>
              <div class="col-md-2">
                 <select class="form-control" id="typeO1P3" name="typeO1P3" value="{{old('typeO1P3')}}">
                    <option value="text">texto</option>
                    <option value="number">número</option>
                 </select>
              </div>
              <label for="dadosO1P3" class="col-md-1">Dados</label>
              <div class="col-md-2">
                 <input type ="text" class="form-control" id="dadosO1P3" name="dadosO1P3" placeholder="separar por virgulas" value="{{old('dadosO1P3')}}">
              </div>
           </div>
           <div class="form-group form-group-sm">
              <label for="minO1P4" class="col-md-1">Mínimo</label>
              <div class="col-md-2">
                 <input type ="number" min="1" class="form-control" id="minO1P4" name="minO1P4" value="{{old('minO1P4')}}">
              </div>
              <label for="maxO1P4" class="col-md-1">Máximo</label>
              <div class="col-md-2">
                 <input type ="number" min="1" class="form-control" id="maxO1P4" name="maxO1P4" value="{{old('maxO1P4')}}">
              </div>
              <label for="typeO1P4" class="col-md-1">Tipo</label>
              <div class="col-md-2">
                 <select class="form-control" id="typeO1P4" name="typeO1P4" value="{{old('typeO1P4')}}">
                    <option value="text">texto</option>
                    <option value="number">número</option>
                 </select>
              </div>
              <label for="dadosO1P4" class="col-md-1">Dados</label>
              <div class="col-md-2">
                 <input type ="text" class="form-control" id="dadosO1P4" name="dadosO1P4" placeholder="separar por virgulas" value="{{old('dadosO1P4')}}">
              </div>
           </div>
        </div>
            <div class="regraO1 hidden">
              <label for="regraO1" class="text-center col-md-12 hidden">Regra do Oscar 1</label>
              <textarea class="form-control" rows ="3" id ="regraO1" name ="regraO1" value="{{old('regraO1')}}"> </textarea>
            </div>  
     </div>