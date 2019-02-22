
$('#pesquisar').on('click', function () {
    $('#containerTabela').hide();
    if ($('#grupo').val() == "" ||
        $('#divisao option:selected').text() == "" ||
        $('#erros option:selected').text() == "") {
        alert("Todos os campos são de preenchimento obrigatório");
    } else {
        $.ajax({
            url: "/previas/terrestreTable",
            type:"POST",
            data: {
                grupo: $('#grupo').val(),
                divisao: $('#divisao option:selected').val(),
                _token:$( "input[name='_token']" ).val(),
                erros: $('#erros option:selected').val()
            },
            success: function (data) {
                criaDataTable(data);
            },

            error: function (erro) {
                $('#myModal').modal('hide');
                console.log(erro);
            },

            beforeSend: function () {
                $('#myModal').modal('show');
            },

            complete: function () {
                $('#myModal').modal('hide');
            }

        });

    }

    function criaDataTable(data) {

        if (data.recordsTotal < 1) {
            alert("Nenhum dado Localizado");
        } else {


            $('#tabelaTerrestre').DataTable({
                //apaga a tabela antes de recria-la
                destroy: true,
                //defini scroll eixo y
                scrollY: 400,
                //defini scroll eixo x
                scrollX: true,
                colReorder: true,
                dom: 'Bfrtip',
                buttons: [
                    'csv', 'excel'
                ],

                columnDefs: [{
                    orderable: false,
                    className: 'select-checkbox',
                    targets: 0
                }],
                select: {
                    style: 'multi',
                    selector: 'td:first-child'
                },
                order: [[3, 'asc']],

                //desabilita tamanho automático colunas
                autoWidth: false,
                //defini a linguagem em português
                language: {
                    "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"
                },
                //processamento
                processing: true,
                //processamento client-side
                serverSide: false,
                //defini a tabela como responsiva
                responsive: true,

                data: data.data,
                //colunas da tabela    
                columns: [
                    { data: "updated_at", name: "updated_at" },
                    { data: 'Alerta_Geral', name: 'Alerta_Geral' },
                    { data: 'Voucher', name: 'Voucher' },
                    { data: 'DtFaturam', name: 'DtFaturam' },
                    { data: 'CodigoCli', name: 'CodigoCli' },
                    { data: 'Cliente', name: 'Cliente' },
                    { data: 'GrupoCli', name: 'GrupoCli' },
                    { data: 'lider', name: 'lider' },
                    { data: 'coordenador', name: 'coordenador' },
                    { data: 'Alerta_de_Data', name: 'Alerta_de_Data' },
                    { data: 'Alerta_Data_Entrada', name: 'Alerta_Data_Entrada' },
                    { data: 'Alerta_Data_Saida', name: 'Alerta_Data_Saida' },
                    { data: 'DtEntrada', name: 'DtEntrada' },
                    { data: 'DtSaida', name: 'DtSaida' },
                    { data: 'Alerta_Tarifa_Zerada', name: 'Alerta_Tarifa_Zerada' },
                    { data: 'Tarifa', name: 'Tarifa' },
                    { data: 'OutServs', name: 'OutServs' },
                    { data: 'Taxas', name: 'Taxas' },
                    { data: 'OutTaxas', name: 'OutTaxas' },
                    { data: 'VlTotal', name: 'VlTotal' },
                    { data: 'Alerta_Valor_Pago', name: 'Alerta_Valor_Pago' },
                    { data: 'VlUnitario', name: 'VlUnitario' },
                    { data: 'Diaria_Calculo', name: 'Diaria_Calculo' },
                    { data: 'Alerta_Diaria', name: 'Alerta_Diaria' },
                    { data: 'UnidCobr', name: 'UnidCobr' },
                    { data: 'Alerta_Tipo', name: 'Alerta_Tipo' },
                    { data: 'TpFor', name: 'TpFor' },
                    { data: 'TpVch', name: 'TpVch' },
                    { data: 'Alerta_O1', name: 'Alerta_O1' },
                    { data: 'Descricao_CCusto', name: 'Descricao_CCusto' },
                    { data: 'Alerta_O2', name: 'Alerta_O2' },
                    { data: 'Produto', name: 'Produto' },
                    { data: 'Alerta_O3', name: 'Alerta_O3' },
                    { data: 'DocCliente', name: 'DocCliente' },
                    { data: 'Alerta_O4', name: 'Alerta_O4' },
                    { data: 'Obs1', name: 'Obs1' },
                    { data: 'Alerta_O5', name: 'Alerta_O5' },
                    { data: 'Obs2', name: 'Obs2' },
                    { data: 'Alerta_O6', name: 'Alerta_O6' },
                    { data: 'Obs3', name: 'Obs3' },
                    { data: 'Alerta_O7', name: 'Alerta_O7' },
                    { data: 'Obs4', name: 'Obs4' },
                ],

                //defini a valores do menu de paginação
                aLengthMenu: [[20, 40, 60, 80, 100, -1], [20, 40, 60, 80, 100, "All"]],
                //defini o tamanho inicial da paginação
                pageLength: 20,

            });//fecha função de  datatable;
            //Mostra a tabela após sua criação
            $('#containerTabela').show();
        };//fecha else	
    };//fecha função criar criar datatable  ;



});//fecha função de pesquisar;