$('#pesquisar').on('click', function () {


    var ctx = document.getElementById('grap1').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: ["14/09/2018", "15/09/2018", "16/09/2018", "17/09/2018", "18/09/2018", "19/09/2018", "20/09/2018"],
            datasets: [
                {
                    label: "Alerta Geral",
                    backgroundColor: 'rgb(255, 255, 255)',
                    borderColor: 'rgb(46, 42, 154)',
                    data: [
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1)],
                    fill: false,
                },
                {
                    label: "Oscar 1",
                    backgroundColor: 'rgb(255, 255, 255)',
                    borderColor: 'rgb(23, 15, 94)',
                    data: [
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1)],
                    fill: false,
                }

            ]
        },

        // Configuration options go here
        options: {
            title: {
                display: true,
                text: 'Grafico 01'
            }
        }
    });

    var ctx = document.getElementById('grap2').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: ["14/09/2018", "15/09/2018", "16/09/2018", "17/09/2018", "18/09/2018", "19/09/2018", "20/09/2018"],
            datasets: [
                {
                    label: "Alerta Geral",
                    backgroundColor: 'rgb(255, 255, 255)',
                    borderColor: 'rgb(46, 42, 154)',
                    data: [
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1)],
                    fill: false,
                },
                {
                    label: "Oscar 1",
                    backgroundColor: 'rgb(255, 255, 255)',
                    borderColor: 'rgb(23, 15, 94)',
                    data: [
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1)],
                    fill: false,
                }

            ]
        },

        // Configuration options go here
        options: {
            title: {
                display: true,
                text: 'Grafico 02'
            }

        }
    });

    var ctx = document.getElementById('grap3').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: ["14/09/2018", "15/09/2018", "16/09/2018", "17/09/2018", "18/09/2018", "19/09/2018", "20/09/2018"],
            datasets: [
                {
                    label: "Alerta Geral",
                    backgroundColor: 'rgb(255, 255, 255)',
                    borderColor: 'rgb(46, 42, 154)',
                    data: [
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1)],
                    fill: false,
                },
                {
                    label: "Oscar 1",
                    backgroundColor: 'rgb(255, 255, 255)',
                    borderColor: 'rgb(23, 15, 94)',
                    data: [
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1)],
                    fill: false,
                }

            ]
        },

        // Configuration options go here
        options: {
            title: {
                display: true,
                text: 'Grafico 03'
            }

        }
    });
    var ctx = document.getElementById('grap4').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'line',

        // The data for our dataset
        data: {
            labels: ["SAO", "CAMP", "RIO", "BHZ", "RS", "BSB", "ETC"],
            datasets: [
                {
                    label: "Alerta Geral",
                    backgroundColor: 'rgb(255, 255, 255)',
                    borderColor: 'rgb(46, 42, 154)',
                    data: [
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1)],
                    fill: false,
                },
                {
                    label: "Oscar 1",
                    backgroundColor: 'rgb(255, 255, 255)',
                    borderColor: 'rgb(23, 15, 94)',
                    data: [
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1),
                        Math.floor((Math.random() * 100) + 1)],
                    fill: false,
                }

            ]
        },

        // Configuration options go here
        options: {
            title: {
                display: true,
                text: 'Grafico Por Unidade'
            }

        }
    });



});

