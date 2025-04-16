<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.template.css')
    <title>dashboard</title>
</head>

<body>
    @include('admin.template.navbar')

    <div class="main">
        <div class="main-inner">
            <section>
                <div class="mycontainer">
                    <div class="row mt-3 align-items-center justify-content-between">
                        <div class="col-12">
                            <h1 class="fw-bold fs-2">Welcome, <span class="text-blue">DJ Robinson</span></h1>
                            <p class="mb-0">Welcome to the Admin Dashboard: Monitor key metrics, manage users, and oversee system performance all in one place.</p>
                        </div>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-6 my-2">
                                <div
                                    class="rounded-3 px-3 py-3 myshadow d-flex align-items-center justify-content-between h-100">
                                    <div>
                                        <h4 class="fs-6 mb-1">Total Users</h4>
                                        <p class="mb-0 fw-semibold fs-5">124,34.00</p>
                                    </div>
                                    <div>
                                        <img src="{{asset('img/icon1.png')}}" alt="userbox" class="user-box rounded-2">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 my-2">
                                <div
                                    class="rounded-3 px-3 py-3 myshadow d-flex align-items-center justify-content-between h-100">
                                    <div>
                                        <h4 class="fs-6 mb-1">Total items for rent</h4>
                                        <p class="mb-0 fw-semibold fs-5">01</p>
                                    </div>
                                    <div>
                                        <img src="{{asset('img/icon2.png')}}" alt="userbox" class="user-box rounded-2">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 my-2">
                                <div
                                    class="rounded-3 px-3 py-3 myshadow d-flex align-items-center justify-content-between h-100">
                                    <div>
                                        <h4 class="fs-6 mb-1">Total unique item types for rent</h4>
                                        <p class="mb-0 fw-semibold fs-5">10</p>
                                    </div>
                                    <div>
                                        <img src="{{asset('img/icon2.png')}}" alt="userbox" class="user-box rounded-2">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 my-2">
                                <div
                                    class="rounded-3 px-3 py-3 myshadow d-flex align-items-center justify-content-between h-100">
                                    <div>
                                        <h4 class="fs-6 mb-1">Total Rent transactions</h4>
                                        <p class="mb-0 fw-semibold fs-5">01</p>
                                    </div>
                                    <div>
                                        <img src="{{asset('img/icon4.png')}}" alt="userbox" class="user-box rounded-2">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 my-2">
                                <div
                                    class="rounded-3 px-3 py-3 myshadow d-flex align-items-center justify-content-between h-100">
                                    <div>
                                        <h4 class="fs-6 mb-1">Total items for sale</h4>
                                        <p class="mb-0 fw-semibold fs-5">01</p>
                                    </div>
                                    <div>
                                        <img src="{{asset('img/icon5.png')}}" alt="userbox" class="user-box rounded-2">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 my-2">
                                <div
                                    class="rounded-3 px-3 py-3 myshadow d-flex align-items-center justify-content-between h-100">
                                    <div>
                                        <h4 class="fs-6 mb-1">Total Sale transactions</h4>
                                        <p class="mb-0 fw-semibold fs-5">01</p>
                                    </div>
                                    <div>
                                        <img src="{{asset('img/icon6.png')}}" alt="userbox" class="user-box rounded-2">
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 my-2">
                                <div
                                    class="rounded-3 px-3 py-3 myshadow d-flex align-items-center justify-content-between h-100">
                                    <div>
                                        <h4 class="fs-6 mb-1">Total revenue</h4>
                                        <p class="mb-0 fw-semibold fs-5">01</p>
                                    </div>
                                    <div>
                                        <img src="{{asset('img/icon7.png')}}" alt="userbox" class="user-box rounded-2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="shadow px-3 py-3 mb-3 rounded-3 mt-3 col-lg-8 col-xxl-7">
                        <div class="d-flex flex-wrap pb-2 border-bottom border-1 justify-content-between align-items-center">
                            <h3 class="fs-5 mb-0 fw-semibold fs-5 my-2">Revenue</h3>
                            <input type="date" name="" id="" class="my-input rounded-3 my-2 px-3">
                        </div>
                        <div class="mt-4">
                            <canvas id="lineChart"></canvas>
                            
                       </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const ctx = document.getElementById('lineChart').getContext('2d');

        // Define chart data
        const data = {
            labels: ['$0', '$100,000', '$200,000', '$300,000', '$400,000', '$500,000', '$600,000', '$700,000', '$800,000', '$900,000'],
            datasets: [{
                label: 'Percentage',
                data: [30, 50, 40, 90, 60, 70, 50, 80, 65, 60,], // Data points
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
                            return value + '%'; 
                        }
                    },
                    grid: {
                        color: '#f0f0f0' 
                    }
                }
            }
        };
        new Chart(ctx, {
            type: 'line', 
            data: data,
            options: options
        });
    </script>
    <script src="../js/main.js"></script>
    
</body>

</html>