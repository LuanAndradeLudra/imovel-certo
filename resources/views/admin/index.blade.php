@include('admin.components.header')
</head>

<body class="hold-transition sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="#" class="nav-link">Inicio</a>
                </li>
            </ul>
            @include('admin.components.navbarsettings')
        </nav>
        <!-- /.navbar -->

        @include('admin.components.sidebar')

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Inicio</h1>
                        </div>
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Inicio</a></li>
                            </ol>
                        </div>
                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>x</h3>

                                <p>Imóveis</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer">Mais informações <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <!-- small box -->
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>x</h3>

                                <p>Leads</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-person-add"></i>
                            </div>
                            <a href="#" class="small-box-footer">Mais informações <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>

                </div>

                <div class="card bg-gradient-info">
                    <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">
                        <h3 class="card-title">
                            <i class="fas fa-th mr-1"></i>
                            Mês atual
                        </h3>

                        <div class="card-tools">
                            <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                                <i class="fas fa-minus"></i>
                            </button>
                            <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chartjs-size-monitor">
                            <div class="chartjs-size-monitor-expand">
                                <div class=""></div>
                            </div>
                            <div class="chartjs-size-monitor-shrink">
                                <div class=""></div>
                            </div>
                        </div>
                        <canvas class="chart chartjs-render-monitor" id="line-chart"
                            style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%; display: block; width: 634px;"
                            width="1268" height="500"></canvas>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer bg-transparent">
                        <div class="row">
                            <div class="col-4 text-center">
                                <div style="display:inline;width:60px;height:60px;"><input type="text" class="knob"
                                        data-readonly="true" value="20" data-width="60" data-height="60"
                                        data-fgcolor="#39CCCC" readonly="readonly"
                                        style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px; background: none; font: bold 12px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; appearance: none;">
                                </div>

                                <div class="text-white">Mês anterior - 1</div>
                            </div>
                            <!-- ./col -->
                            <div class="col-4 text-center">
                                <div style="display:inline;width:60px;height:60px;"><input type="text" class="knob"
                                        data-readonly="true" value="50" data-width="60" data-height="60"
                                        data-fgcolor="#39CCCC" readonly="readonly"
                                        style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px; background: none; font: bold 12px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; appearance: none;">
                                </div>

                                <div class="text-white">Mês anterior</div>
                            </div>
                            <!-- ./col -->
                            <div class="col-4 text-center">
                                <div style="display:inline;width:60px;height:60px;"><input type="text" class="knob"
                                        data-readonly="true" value="30" data-width="60" data-height="60"
                                        data-fgcolor="#39CCCC" readonly="readonly"
                                        style="width: 34px; height: 20px; position: absolute; vertical-align: middle; margin-top: 20px; margin-left: -47px; border: 0px; background: none; font: bold 12px Arial; text-align: center; color: rgb(57, 204, 204); padding: 0px; appearance: none;">
                                </div>

                                <div class="text-white">Mês atual</div>
                            </div>
                            <!-- ./col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.card-footer -->
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        @include('admin.components.footer')

        <!-- jQuery Knob Chart -->
        <script src="/admin_view/plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="/admin_view/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="/admin_view/plugins/summernote/summernote-bs4.min.js"></script>
        <!-- daterangepicker -->
        <script src="/admin_view/plugins/moment/moment.min.js"></script>
        <script src="/admin_view/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- ChartJS -->
        <script src="/admin_view/plugins/chart.js/Chart.min.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="/admin_view/dist/js/pages/dashboard.js"></script>
        <!-- Chart -->
        <script>
            function daysInMonth(month, year) {
                return new Date(year, month, 0).getDate();
            }

            function GFG_Fun() {
                let date = new Date();
                let month = date.getMonth() + 1;
                let year = date.getFullYear();
                return daysInMonth(month, year);
            }
            let totalDaysInMoth = GFG_Fun()

            const labels = [];

            for (let i = 0; i < totalDaysInMoth; i++) {
                labels.push(i + 1);
            }

            const datas = [];

            for (let i = 0; i < totalDaysInMoth; i++) {
                datas.push(Math.floor(Math.random() * 100).toString());
            }

            // Sales graph chart
            var salesGraphChartCanvas = $('#line-chart').get(0).getContext('2d')

            let steps = 10;

            var salesGraphChartData = {
                labels: labels,
                datasets: [{
                    label: 'Leads recebidos',
                    fill: false,
                    borderWidth: 2,
                    lineTension: 0,
                    spanGaps: true,
                    borderColor: '#efefef',
                    pointRadius: 3,
                    pointHoverRadius: 7,
                    pointColor: '#efefef',
                    pointBackgroundColor: '#efefef',
                    data: datas
                }]
            }

            var salesGraphChartOptions = {
                maintainAspectRatio: false,
                responsive: true,
                legend: {
                    display: false
                },
                scales: {
                    xAxes: [{
                        ticks: {
                            fontColor: '#efefef'
                        },
                        gridLines: {
                            display: false,
                            color: '#efefef',
                            drawBorder: false
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            stepSize: steps,
                            fontColor: '#efefef'
                        },
                        gridLines: {
                            display: true,
                            color: '#efefef',
                            drawBorder: false
                        }
                    }]
                }
            }

            // This will get the first returned node in the jQuery collection.
            // eslint-disable-next-line no-unused-vars
            var salesGraphChart = new Chart(salesGraphChartCanvas, { // lgtm[js/unused-local-variable]
                type: 'line',
                data: salesGraphChartData,
                options: salesGraphChartOptions
            })
        </script>
</body>

</html>
