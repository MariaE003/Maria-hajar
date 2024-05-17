<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chart Example</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.2/dist/chart.umd.min.js"></script>
</head>
<body> 
   
 <canvas id="myChart" width="400" height="400"></canvas>

    <script>
        // Récupérer les données depuis la route
        fetch('/chart-data')
            .then(response => response.json())
            .then(data => {
                // Créer un tableau de labels et de données à partir des données JSON reçues
                var labels = data.map(entry => entry.label);
                var values = data.map(entry => entry.value);

                // Créer le graphique avec Chart.js
                var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Chart Data',
                            data: values,
                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                            borderColor: 'rgba(255, 99, 132, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            })
            .catch(error => console.error('Error fetching chart data:', error));
    </script>
</body>
</html>  -->



<!-- <!DOCTYPE html>
<html>
<head>
    <title>Statistiques des demandes par mois</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="demandesParMoisChart" width="800" height="400"></canvas>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            axios.get('{{ route("demandes.par.mois") }}')
                .then(function(response) {
                    var data = response.data;
                    var moisLabels = [];
                    var totalDemandes = [];

                    data.forEach(function(item) {
                        moisLabels.push(item.mois);
                        totalDemandes.push(item.total);
                    });

                    var ctx = document.getElementById('demandesParMoisChart').getContext('2d');
                    var chart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: moisLabels,
                            datasets: [{
                                label: 'Nombre de demandes par mois',
                                data: totalDemandes,
                                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                borderColor: 'rgba(255, 99, 132, 1)',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                })
                .catch(function(error) {
                    console.error('Une erreur s\'est produite :', error);
                });
        });
    </script>
</body>
</html> -->


<!-- <!DOCTYPE html>
<html>
<head>
    <title>Statistiques des demandes par mois</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="demandesParMoisChart" width="800" height="400"></canvas>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            axios.get('{{ route("demandes.par.mois") }}')
                .then(function(response) {
                    var data = response.data;
                    var moisLabels = [];
                    var totalDemandes = [];

                    data.forEach(function(item) {
                        moisLabels.push(item.mois);
                        totalDemandes.push(item.total);
                    });

                    var ctx = document.getElementById('demandesParMoisChart').getContext('2d');
                    var chart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: moisLabels,
                            datasets: [{
                                label: 'Nombre de demandes par mois',
                                data: totalDemandes,
                                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                borderColor: 'rgba(255, 99, 132, 1)',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                })
                .catch(function(error) {
                    console.error('Une erreur s\'est produite :', error);
                });
        });
    </script>
</body>
</html>

 -->


<!-- /makhadamach -->
 <!-- <!DOCTYPE html>
<html>
<head>
    <title>Statistiques des demandes par mois</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="demandesParMoisChart" width="800" height="400"></canvas>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            fetch('{{ route("demandes.par.mois") }}')
                .then(function(response) {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(function(data) {
                    var moisLabels = [];
                    var totalDemandes = [];
                    console.log(data);

                    data.forEach(function(item) {
                        moisLabels.push(item.mois);
                        totalDemandes.push(item.total);
                    });
                    

                    var ctx = document.getElementById('demandesParMoisChart').getContext('2d');
                    var chart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: moisLabels,
                            datasets: [{
                                label: 'Nombre de demandes par mois',
                                data: totalDemandes,
                                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                borderColor: 'rgba(255, 99, 132, 1)',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                })
                .catch(function(error) {
                    console.error('Une erreur s\'est produite :', error);
                });
        });
    </script>
</body>
</html> -->



<!-- makhadamach -->
<!-- <!DOCTYPE html>
<html>
<head>
    <title>Statistiques des demandes par mois</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="demandesParMoisChart" width="800" height="400"></canvas>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            fetch('{{ route("demandes.par.mois") }}')
                .then(function(response) {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(function(data) {
                    var moisLabels = [];
                    var totalDemandes = [];

                    data.forEach(function(item) {
                        moisLabels.push(item.mois);
                        totalDemandes.push(item.total);
                    });

                    var ctx = document.getElementById('demandesParMoisChart').getContext('2d');
                    var chart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: moisLabels,
                            datasets: [{
                                label: 'Nombre de demandes par mois',
                                data: totalDemandes,
                                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                borderColor: 'rgba(255, 99, 132, 1)',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                })
                .catch(function(error) {
                    console.error('Une erreur s\'est produite :', error);
                });
        });
    </script>
</body>
</html> -->



<!-- pas -->
<!-- <!DOCTYPE html>
<html>
<head>
    <title>Statistiques des demandes par mois</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    Affichage JSON
    <div id="jsonDisplay" style="white-space: pre-wrap;"></div>
    
    <canvas id="demandesParMoisChart" width="800" height="400"></canvas>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            fetch('{{ route("demandes.par.mois") }}')
                .then(function(response) {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(function(data) {
                    // Affichage JSON
                    document.getElementById('jsonDisplay').innerText = JSON.stringify(data, null, 2);
                    
                    var moisLabels = [];
                    var totalDemandes = [];

                    data.forEach(function(item) {
                        moisLabels.push(item.mois);
                        totalDemandes.push(item.total);
                    });

                    var ctx = document.getElementById('demandesParMoisChart').getContext('2d');
                    var chart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: moisLabels,
                            datasets: [{
                                label: 'Nombre de demandes par mois',
                                data: totalDemandes,
                                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                borderColor: 'rgba(255, 99, 132, 1)',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                })
                .catch(function(error) {
                    console.error('Une erreur s\'est produite :', error);
                });
        });
    </script>
</body>
</html> -->


<!-- pas -->
<!-- <!DOCTYPE html>
<html>
<head>
  <title>Statistiques des demandes par mois</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  <canvas id="demandesParMoisChart" width="800" height="400"></canvas>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      fetch('/api/demandes-par-mois') // Replace with your API endpoint URL
        .then(function(response) {
          return response.json();
        })
        .then(function(data) {
          var moisLabels = [];
          var totalDemandes = [];

          data.forEach(function(item) {
            moisLabels.push(item.mois);
            totalDemandes.push(item.total);
          });

          var ctx = document.getElementById('demandesParMoisChart').getContext('2d');
          var chart = new Chart(ctx, {
            type: 'bar',
            data: {
              labels: moisLabels,
              datasets: [{
                label: 'Nombre de demandes par mois',
                data: totalDemandes,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
              }]
            },
            options: {
              scales: {
                y: {
                  beginAtZero: true
                }
              }
            }
          });
        })
        .catch(function(error) {
          console.error('Une erreur s\'est produite :', error);
        });
    });
  </script>
</body>
</html> -->

<!-- pas -->
<!-- <!DOCTYPE html>
<html>
<head>
  <title>Statistiques des demandes par mois</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
  <div id="chart-container">
    <canvas id="demandesParMoisChart" width="800" height="400"></canvas>
    <pre id="json-data"></pre> </div>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      fetch('/api/demandes-par-mois') // Replace with your API endpoint URL
        .then(function(response) {
          if (!response.ok) {
            throw new Error('Network response was not ok');
          }
          return response.json();
        })
        .then(function(data) {
          // Process the JSON data
          var moisLabels = [];
          var totalDemandes = [];

          data.forEach(function(item) {
            moisLabels.push(item.mois);
            totalDemandes.push(item.total);
          });

          // Display JSON data in pre element
          document.getElementById('json-data').textContent = JSON.stringify(data, null, 2);

          // Create the chart using Chart.js
          var ctx = document.getElementById('demandesParMoisChart').getContext('2d');
          var chart = new Chart(ctx, {
            type: 'bar',
            data: {
              labels: moisLabels,
              datasets: [{
                label: 'Nombre de demandes par mois',
                data: totalDemandes,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1
              }]
            },
            options: {
              scales: {
                y: {
                  beginAtZero: true
                }
              }
            }
          });
        })
        .catch(function(error) {
          console.error('Une erreur s\'est produite :', error);
        });
    });
  </script>
</body>
</html>

 -->



<!-- pas -->
 <!-- <!DOCTYPE html>
<html>
<head>
    <title>Statistiques des demandes par mois</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    Affichage JSON
    <div>
        <h2>Données JSON :</h2>
        <pre id="jsonDisplay"></pre>
    </div>
    
    Graphique
    <div>
        <h2>Graphique :</h2>
        <canvas id="demandesParMoisChart" width="800" height="400"></canvas>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            fetch('{{ route("demandes.par.mois") }}')
                .then(function(response) {
                    if (!response.ok) {
                        throw new Error('Network response was not ok');
                    }
                    return response.json();
                })
                .then(function(data) {
                    // Affichage JSON
                    document.getElementById('jsonDisplay').innerText = JSON.stringify(data, null, 2);
                    
                    var moisLabels = [];
                    var totalDemandes = [];

                    data.forEach(function(item) {
                        moisLabels.push(item.mois);
                        totalDemandes.push(item.total);
                    });

                    var ctx = document.getElementById('demandesParMoisChart').getContext('2d');
                    var chart = new Chart(ctx, {
                        type: 'bar',
                        data: {
                            labels: moisLabels,
                            datasets: [{
                                label: 'Nombre de demandes par mois',
                                data: totalDemandes,
                                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                                borderColor: 'rgba(255, 99, 132, 1)',
                                borderWidth: 1
                            }]
                        },
                        options: {
                            scales: {
                                y: {
                                    beginAtZero: true
                                }
                            }
                        }
                    });
                })
                .catch(function(error) {
                    console.error('Une erreur s\'est produite :', error);
                });
        });
    </script>
</body>
</html>
 -->

 <!-- <!DOCTYPE html>
<html>
<head>
  <title>Statistiques des demandes par mois</title>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="path/to/jsonviewer.min.js"></script>
</head>
<body>
  <div id="chart-container">
    <canvas id="demandesParMoisChart" width="800" height="400"></canvas>
    <div id="json-data"></div>
  </div>

  <script>
    // Import JSONViewer (assuming it's installed using npm or yarn)
    import JSONViewer from '@textea/json-viewer'; // Or '@alenaksu/json-viewer' if you use that package

    document.addEventListener("DOMContentLoaded", function() {
      fetch('/api/demandes-par-mois') // Replace with your API endpoint URL
        .then(function(response) {
          if (!response.ok) {
            throw new Error('Network response was not ok');
          }
          return response.json();
        })
        .then(function(data) {
          // Process the JSON data
          var moisLabels = [];
          var totalDemandes = [];

          data.forEach(function(item) {
            moisLabels.push(item.mois);
            totalDemandes.push(item.total);
          });

          // Display JSON data using JSONViewer
          var jsonViewer = new JSONViewer(data, {
            collapsed: false, // Keep all objects expanded by default
            theme: 'dark' // Use a dark theme (optional)
          });

          document.getElementById('json-data').appendChild(jsonViewer.render());

          // Create the chart using Chart.js (unchanged)
          var ctx = document.getElementById('demandesParMoisChart').getContext('2d');
          var chart = new Chart(ctx, {
            // ... chart configuration ...
          });
        })
        .catch(function(error) {
          console.error('Une erreur s\'est produite :', error);
        });
    });
  </script>
</body>
</html>
 -->






 <!-- yarbi ysda9 -->
 <!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chart Example</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="myChart" width="400" height="400"></canvas>

    <script>
        // Récupérer les données depuis la route
        fetch('/chart-data')
            .then(response => response.json())
            .then(data => {
                // Créer un tableau de labels et de données à partir des données JSON reçues
                var moisLabels = data.map(entry => entry.mois);
                var totalDemandes = data.map(entry => entry.total);

                // Créer le graphique avec Chart.js
                var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: moisLabels,
                        datasets: [{
                            label: 'Nombre de demandes par mois',
                            data: totalDemandes,
                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                            borderColor: 'rgba(255, 99, 132, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            })
            .catch(error => console.error('Error fetching chart data:', error));
    </script>
</body>
</html> -->



<!-- alhamdolilah -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chart Example</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body> 
   
    <canvas id="myChart" width="400" height="400"></canvas>

    <script>
        // Récupérer les données depuis la route
        fetch('{{ route("chart-data") }}')
            .then(response => response.json())
            .then(data => {
                // Créer un tableau de labels et de données à partir des données JSON reçues
                var months = data.map(entry => entry.mois);
                var demandes = data.map(entry => entry.total);

                // Créer le graphique avec Chart.js
                var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: months,
                        datasets: [{
                            label: 'Nombre de demandes par mois',
                            data: demandes,
                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                            borderColor: 'rgba(255, 99, 132, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });
            })
            .catch(error => console.error('Erreur lors de la récupération des données du graphique :', error));
    </script>
</body>
</html> -->


<!-- ok -->
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chart Example</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body> 
   
    <canvas id="myChart" width="400" height="400"></canvas>

    <script>
        // Récupérer les données depuis la route
        fetch('{{ route("chart-data") }}')
            .then(response => response.json())
            .then(data => {
                // Créer un tableau de labels et de données à partir des données JSON reçues
                var months = data.map(entry => entry.mois);
                var demandes = data.map(entry => entry.total);

                // Créer le graphique avec Chart.js
                var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: months,
                        datasets: [{
                            label: 'Nombre de demandes par mois',
                            data: demandes,
                            backgroundColor: 'rgba(255, 99, 132, 0.2)',
                            borderColor: 'rgba(255, 99, 132, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    callback: function(value, index, values) {
                                        return value + '%';
                                    }
                                }
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
   
    <canvas id="myChart" width="400" height="400"></canvas>

    <script>
        // Récupérer les données depuis la route
        fetch('{{ route("chart-data") }}')
            .then(response => response.json())
            .then(data => {
                // Créer un tableau de labels et de données à partir des données JSON reçues
                var months = data.map(entry => entry.mois);
                var demandes = data.map(entry => entry.total);

                // Créer le graphique avec Chart.js
                var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: months,
                        datasets: [{
                            label: 'Nombre de demandes par mois',
                            data: demandes,
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
                                    callback: function(value, index, values) {
                                        return value + '%';
                                    }
                                }
                            }
                        },
                        animation: {
                            duration: 1500, // Durée de l'animation en millisecondes
                            easing: 'easeInOutQuart' // Type d'animation
                        },
                        plugins: {
                            title: {
                                display: true,
                                text: 'Demandes par mois',
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
   
    <canvas id="myChart" width="400" height="400"></canvas>

    <script>
        // Récupérer les données depuis la route
        fetch('{{ route("chart-data") }}')
            .then(response => response.json())
            .then(data => {
                // Créer un tableau de labels et de données à partir des données JSON reçues
                var months = data.map(entry => entry.mois);
                var demandes = data.map(entry => entry.total);

                // Créer un tableau de couleurs différentes pour chaque mois
                var backgroundColors = [];
                for (var i = 0; i < months.length; i++) {
                    var randomColor = 'rgba(' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ',0.2)';
                    backgroundColors.push(randomColor);
                }

                // Créer le graphique avec Chart.js
                var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: months.map(month => 'Mois ' + month), // Utiliser 'Mois' + mois pour afficher le nom du mois
                        datasets: [{
                            label: 'Nombre de demandes par mois',
                            data: demandes,
                            backgroundColor: backgroundColors, // Utiliser les couleurs générées aléatoirement
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    callback: function(value, index, values) {
                                        return value + '%';
                                    }
                                }
                            }
                        },
                        animation: {
                            duration: 1500,
                            easing: 'easeInOutQuart'
                        },
                        plugins: {
                            title: {
                                display: true,
                                text: 'Demandes par mois',
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
   
    <!-- <canvas id="myChart" width="600" height="400"></canvas> -->
    <div style="width: 905px; padding-top: 10em; height: 755px;margin-left:10em;">
        <canvas id="myChart"> </canvas>
    </div>
    
    @endsection
    <script>
        // Récupérer les données depuis la route
        fetch('{{ route("chart-data") }}')
            .then(response => response.json())
            .then(data => {
                // Créer un tableau de labels et de données à partir des données JSON reçues
                var months = data.map(entry => entry.mois);
                var demandes = data.map(entry => entry.total);

                // Noms complets des mois
                var monthNames = ['Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre'];

                // Créer un tableau de couleurs différentes pour chaque mois
                var backgroundColors = [];
                for (var i = 0; i < months.length; i++) {
                    var randomColor = 'rgba(' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ',' + Math.floor(Math.random() * 256) + ',0.2)';
                    backgroundColors.push(randomColor);
                }

                // Créer le graphique avec Chart.js
                var ctx = document.getElementById('myChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: months.map(month => monthNames[month - 1]), // Utiliser les noms complets des mois
                        datasets: [{
                            label: 'Nombre de demandes par mois',
                            data: demandes,
                            backgroundColor: backgroundColors, // Utiliser les couleurs générées aléatoirement
                            borderColor: 'rgba(54, 162, 235, 1)',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true,
                                ticks: {
                                    callback: function(value, index, values) {
                                        return value + '%';
                                    }
                                }
                            }
                        },
                        animation: {
                            duration: 2000,
                            easing: 'easeInOutQuart'
                        },
                        plugins: {
                            title: {
                                display: true,
                                text: 'Demandes par mois',
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
