
$('#pesquisarAerea').on('click', function () {
    $('#containerTabela').hide();
    if ($('#grupo').val() == "" ||
        $('#divisao option:selected').text() == "" ||
        $('#erros option:selected').text() == "") {
        alert("Todos os campos são de preenchimento obrigatório");
    } else {

        $.ajax({
            url: "/previas/aereoTable",
            type: "POST",
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
                console.log(erro);
            },

            beforeSend: function () {
                $('#myModal').modal('show');
            },

            complete: function () {
                $('#myModal').modal('hide');
            }

        });//fecha ajax
    }//fecha medodo else ajax

    function criaDataTable(data) {

        if (data.recordsTotal < 1) {
            alert("Nenhum dado Localizado");
        } else {


            $('#tabelaAerea').DataTable({
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
                order: [[9, 'asc']],

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
                    { data: 'LI', name: 'LI' },
                    { data: 'CodCliente', name: 'CodCliente' },
                    { data: 'Cliente', name: 'Cliente' },
                    { data: 'GrupoCli', name: 'GrupoCli' },
                    { data: 'lider', name: 'lider' },
                    { data: 'coordenador', name: 'coordenador' },
                    { data: 'Alerta_Data', name: 'Alerta_Data' },
                    { data: 'DtEmissao', name: 'DtEmissao' },
                    { data: 'DtEmbarque', name: 'DtEmbarque' },
                    { data: 'Alerta_Acordo', name: 'Alerta_Acordo' },
                    { data: 'Acordo_Obtido', name: 'Acordo_Obtido' },
                    { data: 'Alerta_Eco_Obtida', name: 'Alerta_Eco_Obtida' },
                    { data: 'Econ_Obtida', name: 'Econ_Obtida' },
                    { data: 'Alerta_Eco_Nao_Obtida', name: 'Alerta_Eco_Nao_Obtida' },
                    { data: 'Econ_Nao_Obtida', name: 'Econ_Nao_Obtida' },
                    { data: 'Alerta_Reason_Code_Vazio', name: 'Alerta_Reason_Code_Vazio' },
                    { data: 'tipo', name: 'tipo' },
                    { data: 'CodMotivo', name: 'CodMotivo' },
                    { data: 'Motivo', name: 'Motivo' },
                    { data: 'Alerta_Reason_Code_Reemissao', name: 'Alerta_Reason_Code_Reemissao' },
                    { data: 'Alerta_Reason_Code_Menor_Tarifa', name: 'Alerta_Reason_Code_Menor_Tarifa' },
                    { data: 'Alerta_Reason_Code_Preferencia', name: 'Alerta_Reason_Code_Preferencia' },
                    { data: 'TarifaNormal', name: 'TarifaNormal' },
                    { data: 'Tarifa_RS', name: 'Tarifa_RS' },
                    { data: 'TarifaSugerida', name: 'TarifaSugerida' },
                    { data: 'VlrOnline', name: 'VlrOnline' },
                    { data: 'TxEmbarque', name: 'TxEmbarque' },
                    { data: 'Alerta_Cidade', name: 'Alerta_Cidade' },
                    { data: 'Alerta_Cidade_Destino_ou_Origem_Vazia', name: 'Alerta_Cidade_Destino_ou_Origem_Vazia' },
                    { data: 'Origem', name: 'Origem' },
                    { data: 'Cidade_Origem', name: 'Cidade_Origem' },
                    { data: 'Destino', name: 'Destino' },
                    { data: 'Cidade_Destino', name: 'Cidade_Destino' },
                    { data: 'Alerta_Bilhete', name: 'Alerta_Bilhete' },
                    { data: 'Alerta_tipo_de_Viagem', name: 'Alerta_tipo_de_Viagem' },
                    { data: 'Nro_Bilhete', name: 'Nro_Bilhete' },
                    { data: 'TpBil', name: 'TpBil' },
                    { data: 'Nome_Cia', name: 'Nome_Cia' },
                    { data: 'Rota', name: 'Rota' },
                    { data: 'Referencia', name: 'Referencia' },
                    { data: 'LocCia', name: 'LocCia' },
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

            });//fecha função de criar datatable

            $('#containerTabela').show();
        };//fecha else
    };//fecha metodo de criar table

});//fecha médoto de pesquisar