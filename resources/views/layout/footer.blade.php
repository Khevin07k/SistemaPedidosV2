<!-- Main Footer -->
<footer class="main-footer">
    <!-- To the end -->
    <div class="float-end d-none d-sm-inline">
        Anything you want
    </div>
    <!-- Default to the start -->
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
</footer>
</div>
<!--  ./wrapper -->
<!-- OPTIONAL SCRIPTS -->

<!-- overlayScrollbars -->
<script src="https://cdn.jsdelivr.net/npm/overlayscrollbars@1.13.1/js/OverlayScrollbars.min.js" integrity="sha256-7mHsZb07yMyUmZE5PP1ayiSGILxT6KyU+a/kTDCWHA8=" crossorigin="anonymous"></script>
<!-- Bootstrap 5 -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha256-9SEPo+fwJFpMUet/KACSwO+Z/dKMReF9q4zFhU/fT9M=" crossorigin="anonymous"></script>

<!-- REQUIRED SCRIPTS -->

<!-- AdminLTE App -->
<script src="../../assets/AdminLTE4/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->

<script>
    const SELECTOR_SIDEBAR = '.sidebar'
    const Default = {
        scrollbarTheme: 'os-theme-light',
        scrollbarAutoHide: 'leave'
    }
    document.addEventListener("DOMContentLoaded", function() {
        if (typeof OverlayScrollbars !== 'undefined') {
            OverlayScrollbars(document.querySelectorAll(SELECTOR_SIDEBAR), {
                className: Default.scrollbarTheme,
                sizeAutoCapable: true,
                scrollbars: {
                    autoHide: Default.scrollbarAutoHide,
                    clickScrolling: true
                }
            })
        }
    })
</script>


<!-- OPTIONAL SCRIPTS -->

<!-- ChartJS -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@3.6.0/dist/chart.min.js" integrity="sha256-7lWo7cjrrponRJcS6bc8isfsPDwSKoaYfGIHgSheQkk=" crossorigin="anonymous"></script>
<script>
    // NOTICE!! DO NOT USE ANY OF THIS JAVASCRIPT
    // IT'S ALL JUST JUNK FOR DEMO
    // ++++++++++++++++++++++++++++++++++++++++++

    /* Chart.js Charts */
    // Sales chart
    (function () {
        'use strict'

        var salesChartCanvas = document.querySelector('#revenue-chart-canvas').getContext('2d')

        var salesChartData = {
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
            datasets: [
                {
                    label: 'Digital Goods',
                    backgroundColor: 'rgba(60,141,188,0.9)',
                    borderColor: 'rgba(60,141,188,0.8)',
                    fill: true,
                    tension: 0.4,
                    pointRadius: 0,
                    pointColor: '#3b8bba',
                    pointStrokeColor: 'rgba(60,141,188,1)',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(60,141,188,1)',
                    data: [28, 48, 40, 19, 86, 27, 90]
                },
                {
                    label: 'Electronics',
                    backgroundColor: 'rgba(210, 214, 222, 1)',
                    borderColor: 'rgba(210, 214, 222, 1)',
                    fill: true,
                    tension: 0.4,
                    pointRadius: 0,
                    pointColor: 'rgba(210, 214, 222, 1)',
                    pointStrokeColor: '#c1c7d1',
                    pointHighlightFill: '#fff',
                    pointHighlightStroke: 'rgba(220,220,220,1)',
                    data: [65, 59, 80, 81, 56, 55, 40]
                }
            ]
        }

        var salesChartOptions = {
            maintainAspectRatio: false,
            responsive: true,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                xAxes: {
                    gridLines: {
                        display: false
                    }
                },
                yAxes: {
                    gridLines: {
                        display: false
                    }
                }
            }
        }

        // This will get the first returned node in the js collection.
        var salesChart = new Chart(salesChartCanvas, { // lgtm[js/unused-local-variable]
            type: 'line',
            data: salesChartData,
            options: salesChartOptions
        })

        // Donut Chart
        var pieChartCanvas = document.querySelector('#sales-chart-canvas').getContext('2d')
        var pieData = {
            labels: [
                'Instore Sales',
                'Download Sales',
                'Mail-Order Sales'
            ],
            datasets: [
                {
                    data: [30, 12, 20],
                    backgroundColor: ['#f56954', '#00a65a', '#f39c12']
                }
            ]
        }
        var pieOptions = {
            plugins: {
                legend: {
                    display: false
                }
            },
            maintainAspectRatio: false,
            responsive: true
        }
        // Create pie or douhnut chart
        // You can switch between pie and douhnut using the method below.
        // eslint-disable-next-line no-unused-vars
        var pieChart = new Chart(pieChartCanvas, { // lgtm[js/unused-local-variable]
            type: 'doughnut',
            data: pieData,
            options: pieOptions
        })
    })()

</script>
<script src="../../../assets/js/previewIMG.js"></script>
</body>
</html>
