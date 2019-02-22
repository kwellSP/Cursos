    //função disparada quando oscar é alterado
    $("#oscar").change(function() {
        alteraOscar(  $('#oscar option:selected').val());
    });

    //função para ocultar o oscar
    function alteraOscar(oscar){
        $('#tbOscar1').addClass('hidden');
        $('#tbOscar2').addClass('hidden');
        $('#tbOscar3').addClass('hidden');
        $('#tbOscar4').addClass('hidden');
        $('#tbOscar5').addClass('hidden');
        $('#tbOscar6').addClass('hidden');
        $('#tbOscar7').addClass('hidden');
        $('#'+oscar).removeClass('hidden');
    };
    
    //função para ocultar partes do formulário
    $("select").on("change",function() {
       
        if(this.id.substring(0,11)=="obrigatorio"){
            ocultaRegras(this.id.substring(0,11),this.id.substring(11,14));
        }else if(this.id.substring(0,7)=="quebrar"){
            ocultaQuebras(this.id.substring(0,7),this.id.substring(7,9));
        }        
        
    });

    //função para ocultar as regras padrões
    function ocultaRegras(nome,oscar){
        if( $('#'+nome+oscar +' option:selected').val()=="sim"){
            $('.quebrar'+oscar).removeClass('hidden');
            $('#rules'+oscar).removeClass('hidden');
        }else{
            $('#rules'+oscar).addClass('hidden');
            $('.quebrar'+oscar).addClass('hidden');
            $('.quebras'+oscar).addClass('hidden');
        }

    };
    //função para ocultar as quebras
    function ocultaQuebras(nome,oscar){
        if( $('#'+nome+oscar+' option:selected').val()=="sim"){
            // $('.numQuebrasO1').removeClass('hidden');
             //$('.numQuebrasO1').text = 2;
             $('#rules'+oscar).addClass('hidden');
             $('.quebras'+oscar).removeClass('hidden');
         }else{
             $('.numQuebras'+oscar).addClass('hidden');
             $('#rules'+oscar).removeClass('hidden');
             $('.quebras'+oscar).addClass('hidden');
             
         }
    };

    //função para encontra os tamanhos
   $("input[type='number']").bind("input", function() {
        if(this.id.substring(5,6)=="P"){
            MinMaxPartes(this.id.substring(0,3),this.id.substring(3,5),this.id.substring(5,7));
        };
    });

    function MinMaxPartes(nome,oscar,partes){
        alert('#min'+oscar+'P'+(parseInt(partes.substring(1,2))+1));
        
        if(nome=="max"){
           $('#min'+oscar+'P'+(parseInt(partes.substring(1,2))+1)).val(
               parseInt($('#'+nome+oscar+partes).val())+1);
        }else{

        }
    };


    $('#numQuebrasO1').change(function(){
        if($('#numQuebrasO1').val()>=2 && $('#numQuebrasO1').val() <=7){
           
            $('.quebrasO1').removeClass('hidden');
                    
        }else{
            $('.quebrasO1').addClass('hidden');
          
        }
    });