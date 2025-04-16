<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Line Chart with Chart.js</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <style>
        canvas {
            max-width: 900px;
            margin: 20px auto;
            display: block;
        }
    </style>
</head>
<body>
    <canvas id="lineChart"></canvas>

    <script>
        const ctx = document.getElementById('lineChart').getContext('2d');

        // Define chart data
        const data = {
            labels: ['$0', '$100,000', '$200,000', '$300,000', '$400,000', '$500,000', '$600,000', '$700,000', '$800,000', '$900,000'],
            datasets: [{
                label: 'Percentage',
                data: [30, 50, 40, 90, 60, 70, 50, 80, 65, 60], // Data points
                backgroundColor: 'rgba(0, 200, 0, 0.1)', // Fill under the line
                borderColor: 'rgb(0, 150, 0)', // Line color
                pointBackgroundColor: 'rgb(0, 150, 0)', // Point color
                pointBorderColor: '#ffffff', // Border of points
                pointHoverBackgroundColor: '#ffffff', // Hover point background
                pointHoverBorderColor: 'rgb(0, 150, 0)', // Hover point border
                borderWidth: 2, // Thickness of the line
                tension: 0.4, // Smooth curves
                fill: true // Fill under the line
            }]
        };

        // Chart options
        const options = {
            responsive: true,
            plugins: {
                tooltip: {
                    callbacks: {
                        label: function(tooltipItem) {
                            return `$ ${tooltipItem.raw.toFixed(2)}`;
                        }
                    }
                }
            },
            scales: {
                x: {
                    title: {
                        display: true,
                        text: 'Revenue ($)',
                        color: '#666',
                        font: {
                            size: 14
                        }
                    },
                    grid: {
                        display: false // Hide vertical grid lines
                    }
                },
                y: {
                    title: {
                        display: true,
                        text: 'Percentage (%)',
                        color: '#666',
                        font: {
                            size: 14
                        }
                    },
                    ticks: {
                        callback: function(value) {
                            return value + '%'; // Append % to Y-axis values
                        }
                    },
                    grid: {
                        color: '#f0f0f0' // Light gray grid lines
                    }
                }
            }
        };

        // Create the chart
        new Chart(ctx, {
            type: 'line', // Type of chart
            data: data,
            options: options
        });
    </script>
</body>
</html>
