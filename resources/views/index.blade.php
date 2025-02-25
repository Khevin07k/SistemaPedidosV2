<x-layout>
    <x-slot name="title">
        SiSAdmin
    </x-slot>
    <x-slot name="titleContent">
        Home
    </x-slot>
    <div class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-6 col-6">
                    <!-- small box -->
                    <div class="small-box bg-primary">
                        <div class="inner">
                            <h3>{{ $pedidos->count() }}</h3> <!-- Muestra la cantidad de pedidos nuevos -->
                            <p>Pedidos Realizados</p>
                        </div>
                        <div class="icon">
                            <i class="inner-icon ion ion-bag"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-6 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>{{ $usuariosRegistrados }}</h3>
                            <!-- Muestra la cantidad de usuarios registrados este mes -->
                            <p>Usuarios Registrados este mes</p>
                        </div>
                        <div class="icon">
                            <i class="inner-icon ion ion-person-add"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
            <!-- Main row -->
            <div class="row">
                <!-- Start col -->
                <div class="col-lg-7">
                    <!-- Custom tabs (Charts with tabs)-->
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">
                                <i class="fas fa-chart-pie me-1"></i>
                                Top 10 Platos Más Vendidos - {{ Carbon\Carbon::now()->format('F Y') }}
                            </h3>
                            <div class="card-tools">
                                <ul class="nav nav-pills ms-auto">
                                    <li class="nav-item">
                                        <a class="nav-link active" href="#bar-chart" data-bs-toggle="tab">Barras</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#donut-chart" data-bs-toggle="tab">Donut</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="tab-content p-0">
                                <div class="chart tab-pane active" id="bar-chart" style="position: relative; height: 300px;">
                                    <canvas id="bar-chart-canvas" height="300" style="height: 300px;"></canvas>
                                </div>
                                <div class="chart tab-pane" id="donut-chart" style="position: relative; height: 300px;">
                                    <canvas id="donut-chart-canvas" height="300" style="height: 300px;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.Start col -->
            </div>
            <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
    </div>
</x-layout>
{{--<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Datos para los gráficos
        const platosData = {
            labels: {!! json_encode($platosMasVendidos->pluck('nombre')) !!},
            datasets: [{
                data: {!! json_encode($platosMasVendidos->pluck('total')) !!},
                backgroundColor: [
                    '#f56954', '#00a65a', '#f39c12', '#00c0ef', '#3c8dbc',
                    '#d2d6de', '#6c757d', '#007bff', '#17a2b8', '#28a745'
                ]
            }]
        };

        // Gráfico de Barras
        new Chart(document.getElementById('bar-chart-canvas').getContext('2d'), {
            type: 'bar',
            data: {
                labels: platosData.labels,
                datasets: [{
                    label: 'Cantidad Vendida',
                    data: platosData.datasets[0].data,
                    backgroundColor: platosData.datasets[0].backgroundColor
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        // Gráfico de Donut
        new Chart(document.getElementById('donut-chart-canvas').getContext('2d'), {
            type: 'doughnut',
            data: platosData,
            options: {
                responsive: true,
                maintainAspectRatio: false
            }
        });
    });
</script>--}}
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Datos comunes para ambos gráficos
        const labels = {!! json_encode($platosMasVendidos->pluck('Nombre')) !!}; // Cambia 'nombre' por 'Nombre'
        const data = {!! json_encode($platosMasVendidos->pluck('total')) !!};

        // Colores para el gráfico
        const colors = [
            'rgba(255, 99, 132, 0.8)',
            'rgba(54, 162, 235, 0.8)',
            'rgba(255, 206, 86, 0.8)',
            'rgba(75, 192, 192, 0.8)',
            'rgba(153, 102, 255, 0.8)',
            'rgba(255, 159, 64, 0.8)',
            'rgba(199, 199, 199, 0.8)',
            'rgba(83, 102, 255, 0.8)',
            'rgba(40, 159, 64, 0.8)',
            'rgba(210, 199, 199, 0.8)'
        ];

        // Gráfico de Barras
        const barCtx = document.getElementById('bar-chart-canvas').getContext('2d');
        new Chart(barCtx, {
            type: 'bar',
            data: {
                labels: labels,
                datasets: [{
                    label: 'Cantidad Vendida',
                    data: data,
                    backgroundColor: colors,
                    borderColor: colors.map(color => color.replace('0.9', '1')),
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Cantidad'
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: false
                    }
                }
            }
        });

        // Gráfico de Donut
        const donutCtx = document.getElementById('donut-chart-canvas').getContext('2d');
        new Chart(donutCtx, {
            type: 'doughnut',
            data: {
                labels: labels,
                datasets: [{
                    data: data,
                    backgroundColor: colors,
                    borderColor: colors.map(color => color.replace('0.8', '1')),
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                plugins: {
                    legend: {
                        position: 'right'
                    }
                }
            }
        });
    });
</script>
