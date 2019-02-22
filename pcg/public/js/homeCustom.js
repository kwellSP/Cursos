$('#pesquisar').on('click', function () {

    if ($('#grupo').val() == "" ||
        $('#divisao option:selected').text() == "") {
        alert("Todos os campos são de preenchimento obrigatório");
    } else {
        $('#erros').empty();

        $.ajax({
            type: "GET",
            url: "/home/erros",
            data: {
                grupo: $('#grupo').val(),
                divisao: $('#divisao option:selected').text()
            },
            dataType: 'HTML',
            success: function (html) {
                //inserir a função para preencher os campos de dados aéreos
                $('#erros').empty();
                $('#erros').html(html);
            },
            error: function (error) {
                alert("Erro ao solicitar dados aereos");
                $('#erros').empty();
            },
            beforeSend: function () {
                $('#myModal').modal('show');
            },
            complete: function () {
                $('#myModal').modal('hide');
            }
        });

    }

});