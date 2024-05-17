<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        Fonts
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="{{ asset('css/styleespace.css')}}">
        <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css')}}">

    </head>
    <body >
        <canvas id="myChart"></canvas>
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    Votre script JavaScript qui utilise Chart.js
    fetch('{{ route("chart-data") }}')
        .then(response => response.json())
        .then(data => {
            var labels = data.map(entry => entry.degre);
            var counts = data.map(entry => entry.total);

            var ctx = document.getElementById('myChart').getContext('2d');
            var myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: labels,
                    datasets: [{
                        label: 'Nombre de réponses de satisfaction',
                        data: counts,
                        backgroundColor: 'rgba(54, 162, 235, 0.2)',
                        borderColor: 'rgba(54, 162, 235, 1)',
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    },
                    plugins: {
                        title: {
                            display: true,
                            text: 'Réponses de satisfaction',
                            font: {
                                size: 18
                            }
                        },
                        legend: {
                            display: false
                        }
                    }
                }
            });
        })
        .catch(error => console.error('Erreur lors de la récupération des données du graphique :', error));
</script>

    </body></html> -->













    <!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chart Example</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body> 
    <div style="width: 900px; padding-top: 10em; height: 750px;">
        <canvas id="myChart"></canvas>
    </div>
    
    <script>
        fetch('{{ route("chart-data1") }}')
            .then(response => response.json())
            .then(data => {
                var labels = data.map(entry => entry.degre);
                var counts = data.map(entry => entry.total);

                var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Nombre de réponses de satisfaction',
                            data: counts,
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        },
                        plugins: {
                            title: {
                                display: true,
                                text: 'Réponses de satisfaction',
                                font: {
                                    size: 18
                                }
                            },
                            legend: {
                                display: false
                            }
                        }
                    }
                });
            })
            .catch(error => console.error('Erreur lors de la récupération des données du graphique :', error));
    </script>
</body>
</html> -->




<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chart Example</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body> 
    <div style="width: 900px; padding-top: 10em; height: 750px;">
        <canvas id="myChart"></canvas>
    </div>
    
    <script>
        fetch('{{ route("chart-data") }}')
            .then(response => response.json())
            .then(data => {
                var emojis = ['😡', '😠', '😐', '😊', '😄']; // Emojis correspondant aux degrés de satisfaction de 1 à 5
                var labels = emojis;
                var counts = data.map(entry => entry.total);

                var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Nombre de réponses de satisfaction',
                            data: counts,
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    stepSize: 1 // Afficher les nombres entiers sur l'axe y
                                }
                            },
                            x: {
                                ticks: {
                                    callback: function(value, index, values) {
                                        return emojis[index]; // Afficher l'emoji correspondant à l'index
                                    }
                                }
                            }
                        },
                        plugins: {
                            title: {
                                display: true,
                                text: 'Réponses de satisfaction',
                                font: {
                                    size: 18
                                }
                            },
                            legend: {
                                display: false
                            }
                        }
                    }
                });
            })
            .catch(error => console.error('Erreur lors de la récupération des données du graphique :', error));
    </script>
</body>
</html> -->



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chart Example</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body> 
@extends('layout/default')
        @section('main')
    <div style="width: 900px; padding-top: 10em; height: 750px;margin-left:10em;">
        <canvas id="myChart"></canvas>
    </div>
    @endsection
    <script>
        fetch('{{ route("chart-data1") }}')
            .then(response => response.json())
            .then(data => {
                var emojis = ['1-😡', '2-😠', '3-😐', '4-😊', '5-😄']; // Emojis correspondant aux degrés de satisfaction de 1 à 5
                var labels = data.map(entry => emojis[parseInt(entry.degre) - 1]);
                var counts = data.map(entry => entry.total);

                var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Nombre de réponses de satisfaction',
                            data: counts,
                            backgroundColor: 'rgba(54, 162, 235, 0.2)',
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    stepSize: 1 // Afficher les nombres entiers sur l'axe y
                                }
                            }
                        },
                        plugins: {
                            title: {
                                display: true,
                                text: 'Réponses de satisfaction',
                                font: {
                                    size: 18
                                }
                            },
                            legend: {
                                display: false
                            }
                        }
                    }
                });
            })
            .catch(error => console.error('Erreur lors de la récupération des données du graphique :', error));
    </script>
</body>
</html>
