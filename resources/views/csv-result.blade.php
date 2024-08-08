<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard com Chart.js</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        .container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            width: 60%;
        }
        .chart-container {
            width: 45%;
            margin: 20px;
        }
    </style>
</head>
<body>      
    <div class="container">
        <div class="chart-container">
            <canvas id="barChart"></canvas>
        </div>
        <div class="chart-container">
            <canvas id="lineChart"></canvas>
        </div>
        <div class="chart-container">
            <canvas id="pieChart"></canvas>
        </div>
    </div>

    <script>
        let notificacoes = [{{$lineCount}}]
       



        // Dados e configurações para o gráfico de barras
        var ctxBar = document.getElementById('barChart').getContext('2d');
        var barChart = new Chart(ctxBar, {
            type: 'bar',
            data: {
                labels: ['Notificações'],
                datasets: [{
                    label: 'TOTAL NOTIFICAÇÕES',
                    data: notificacoes,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
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
    </script>
</body>
</html>