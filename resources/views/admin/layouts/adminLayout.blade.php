<!-- Loopple Templates: https://www.loopple.com/templates | Copyright Loopple (https://www.loopple.com) | This copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Profile Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <link rel="stylesheet"
        href="https://rawcdn.githack.com/Loopple/loopple-public-assets/ad60f16c8a16d1dcad75e176c00d7f9e69320cd4/argon-dashboard/css/nucleo/css/nucleo.css">
    <link rel="stylesheet" href="{{ asset('dashboard/css/theme.css') }}" />
    <link rel="stylesheet" href="{{ asset('dashboard/css/style.css') }}" />
</head>

<body>
    @include('admin.layouts.nav')
    <div class="main-content" id="panel">
        @include('admin.layouts.sidebar')
        @yield('admin_content')
        @include('admin.layouts.footer')

    </div>
    <div class="loopple-badge">Made with<a href="https://www.loopple.com"><img
                src="https://www.loopple.com/img/loopple-logo.png" class="loopple-ml-1" style="width:55px"></a></div>
    <script
        src="https://rawcdn.githack.com/Loopple/loopple-public-assets/5cef8f62939eeb089fa26d4c53a49198de421e3d/argon-dashboard/js/vendor/jquery.min.js">
    </script>
    <script
        src="https://rawcdn.githack.com/Loopple/loopple-public-assets/5cef8f62939eeb089fa26d4c53a49198de421e3d/argon-dashboard/js/vendor/bootstrap.bundle.min.js">
    </script>
    <script
        src="https://rawcdn.githack.com/Loopple/loopple-public-assets/5cef8f62939eeb089fa26d4c53a49198de421e3d/argon-dashboard/js/vendor/js.cookie.js">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
    <script
        src="https://rawcdn.githack.com/Loopple/loopple-public-assets/5cef8f62939eeb089fa26d4c53a49198de421e3d/argon-dashboard/js/vendor/chart.extension.js">
    </script>
    <script
        src="https://rawcdn.githack.com/Loopple/loopple-public-assets/7bb803d2af2ab6d71d429b0cb459c24a4cd0fbb4/argon-dashboard/js/argon.min.js">
    </script>
    <script>
        if (document.querySelector(".chart-bar")) {
            var chartsBar = document.querySelectorAll(".chart-bar");

            chartsBar.forEach(function(chart) {
                new Chart(chart, {
                    type: "bar",
                    data: {
                        labels: ["Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                        datasets: [{
                            label: "Sales",
                            tension: 0.4,
                            borderWidth: 0,
                            pointRadius: 0,
                            backgroundColor: "#fb6340",
                            data: [25, 20, 30, 22, 17, 29],
                            maxBarThickness: 10,
                        }, ],
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        legend: {
                            display: false,
                        },
                        tooltips: {
                            enabled: true,
                            mode: "index",
                            intersect: false,
                        },
                        scales: {
                            yAxes: [{
                                gridLines: {
                                    borderDash: [2],
                                    borderDashOffset: [2],
                                    drawTicks: false,
                                    drawBorder: false,
                                    lineWidth: 1,
                                    zeroLineWidth: 0,
                                    zeroLineBorderDash: [0],
                                    zeroLineBorderDashOffset: [2],
                                },
                                ticks: {
                                    beginAtZero: true,
                                    padding: 10,
                                    fontSize: 13,
                                    lineHeight: 5,
                                    fontColor: "#8898aa",
                                    fontFamily: "Open Sans",
                                },
                            }, ],
                            xAxes: [{
                                gridLines: {
                                    display: false,
                                    drawBorder: false,
                                    drawOnChartArea: false,
                                    drawTicks: false,
                                },
                                ticks: {
                                    padding: 20,
                                    fontSize: 13,
                                    fontColor: "#8898aa",
                                    fontFamily: "Open Sans",
                                },
                            }, ],
                        },
                    },
                });
            });
        }

        if (document.querySelector(".chart-line")) {

            var chartsLine = document.querySelectorAll(".chart-line");

            chartsLine.forEach(function(chart) {

                new Chart(chart, {
                    type: "line",
                    data: {
                        labels: ["May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
                        datasets: [{
                            label: "Performance",
                            tension: 0.4,
                            borderWidth: 4,
                            borderColor: "#5e72e4",
                            pointRadius: 0,
                            backgroundColor: "transparent",
                            data: [0, 20, 10, 30, 15, 40, 20, 60, 60],
                        }, ],
                    },
                    options: {
                        responsive: true,
                        maintainAspectRatio: false,
                        legend: {
                            display: false,
                        },
                        tooltips: {
                            enabled: true,
                            mode: "index",
                            intersect: false,
                        },
                        scales: {
                            yAxes: [{
                                barPercentage: 1.6,
                                gridLines: {
                                    drawBorder: false,
                                    color: "rgba(29,140,248,0.0)",
                                    zeroLineColor: "transparent",
                                },
                                ticks: {
                                    padding: 0,
                                    fontColor: "#8898aa",
                                    fontSize: 13,
                                    fontFamily: "Open Sans",
                                },
                            }, ],
                            xAxes: [{
                                barPercentage: 1.6,
                                gridLines: {
                                    drawBorder: false,
                                    color: "rgba(29,140,248,0.0)",
                                    zeroLineColor: "transparent",
                                },
                                ticks: {
                                    padding: 10,
                                    fontColor: "#8898aa",
                                    fontSize: 13,
                                    fontFamily: "Open Sans",
                                },
                            }, ],
                        },
                        layout: {
                            padding: 0,
                        },
                    },
                });

            });
        }
    </script>
</body>
