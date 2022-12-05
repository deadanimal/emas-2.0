@extends('base-kt')
@section('content')
    <!-- Styles -->
    <style>
        #chartdiv {
            width: 100%;
            height: 500px;
        }
    </style>

    <div class="container">
        <div class="mb-4 text-center">
            <H2>PELAKSANAAN PROGRAM PEMBASMIAN
                KEMISKINAN TEGAR KELUARGA MALAYSIA
                (BMTKM)</H2>
        </div>

        <div class="col">
            <div class="row align-items-center">
                <div class="col col-lg-8">

                    <span><b>Lokaliti Mengikut Daerah</b></span>

                </div>
                <div class="col-12 col-sm-auto ms-auto">
                    <input class="form-control myInput" type="text" placeholder="Search">
                </div>
            </div>
        </div>

        <hr style="width:100%;text-align:center;">
        <div class='tableauPlaceholder' id='viz1669953444552' style='position: relative'><noscript><a href='#'><img
                        alt='Lokaliti Mengikut Daerah '
                        src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Da&#47;Dashboardlokaliti&#47;LokalitiMengikutDaerah&#47;1_rss.png'
                        style='border: none' /></a></noscript><object class='tableauViz' style='display:none;'>
                <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
                <param name='embed_code_version' value='3' />
                <param name='site_root' value='' />
                <param name='name' value='Dashboardlokaliti&#47;LokalitiMengikutDaerah' />
                <param name='tabs' value='no' />
                <param name='toolbar' value='yes' />
                <param name='static_image'
                    value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Da&#47;Dashboardlokaliti&#47;LokalitiMengikutDaerah&#47;1.png' />
                <param name='animate_transition' value='yes' />
                <param name='display_static_image' value='yes' />
                <param name='display_spinner' value='yes' />
                <param name='display_overlay' value='yes' />
                <param name='display_count' value='yes' />
                <param name='language' value='en-GB' />
            </object></div>
        <script type='text/javascript'>
            var divElement = document.getElementById('viz1669953444552');
            var vizElement = divElement.getElementsByTagName('object')[0];
            if (divElement.offsetWidth > 800) {
                vizElement.style.width = '100%';
                vizElement.style.height = (divElement.offsetWidth * 0.75) + 'px';
            } else if (divElement.offsetWidth > 500) {
                vizElement.style.width = '100%';
                vizElement.style.height = (divElement.offsetWidth * 0.75) + 'px';
            } else {
                vizElement.style.width = '100%';
                vizElement.style.height = '1027px';
            }
            var scriptElement = document.createElement('script');
            scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
            vizElement.parentNode.insertBefore(scriptElement, vizElement);
        </script>
        {{-- <div id="chartdiv"></div>


        <div class="chart_line_div">
            <div class="pie_chart">
                <canvas id="myChart" style="width:100%;max-width:600px"></canvas>
            </div>
            <div class="pie_chart">
                <canvas id="myChart1" style="width:100%;max-width:600px"></canvas>
            </div>
        </div> --}}



        <!-- Resources -->
        <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/xy.js"></script>
        <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
        <script src="vendors/echarts/echarts.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>


        <!-- Chart code -->
        <script>
            var xValues = ["Kir", "Air", "Perempuan", "Lelaki", "Kir", "Air"];
            var yValues = [55, 49, 44, 24, 15, 10];
            var barColors = [
                "#EC7D32",
                "#EC7D32",
                "#EC7D32",
                "#4370B6",
                "#4370B6",
                "#4370B6"
            ];

            new Chart("myChart", {
                type: "doughnut",
                data: {
                    labels: xValues,
                    datasets: [{
                        backgroundColor: barColors,
                        data: yValues
                    }]
                },
                options: {
                    title: {
                        display: true,
                        text: "Jumlah KIR dan AIR Mengikut Jantina"
                    }
                }
            });

            var xValues = ["Bantuan Peralatan Dan Mesin", "Pengubahsuaian Premis Perniagaan",
                "Pembungkusan, Perlabelan & Pensijilan Jaya", "Pembangunan Pusat Pengumpulan Produk Intan",
                "Pemasaran & Pendigitalan"
            ];
            var yValues = [55, 49, 44, 24, 15];
            var barColors = [
                "#b91d47",
                "#00aba9",
                "#2b5797",
                "#e8c3b9",
                "#1e7145"
            ];

            new Chart("myChart1", {
                type: "doughnut",
                data: {
                    labels: xValues,
                    datasets: [{
                        backgroundColor: barColors,
                        data: yValues
                    }]
                },
                options: {
                    title: {
                        display: true,
                        text: "Jumlah Bantuan Mengikut Kategori"
                    }
                }
            });
        </script>

        <script>
            am5.ready(function() {

                // Create root element
                // https://www.amcharts.com/docs/v5/getting-started/#Root_element
                var root = am5.Root.new("chartdiv");


                // Set themes
                // https://www.amcharts.com/docs/v5/concepts/themes/
                root.setThemes([
                    am5themes_Animated.new(root)
                ]);


                // Create chart
                // https://www.amcharts.com/docs/v5/charts/xy-chart/
                var chart = root.container.children.push(am5xy.XYChart.new(root, {
                    panX: false,
                    panY: false,
                    wheelX: "panX",
                    wheelY: "zoomX",
                    layout: root.verticalLayout
                }));


                // Add legend
                // https://www.amcharts.com/docs/v5/charts/xy-chart/legend-xy-series/
                var legend = chart.children.push(
                    am5.Legend.new(root, {
                        centerX: am5.p50,
                        x: am5.p50
                    })
                );

                var data = [{
                    "daerah": "Bachok",
                    "kir": 2.5,
                    "air": 2.9,

                }, {
                    "daerah": "Kuala Krai",
                    "kir": 2.6,
                    "air": 2.7,

                }, {
                    "daerah": "Jeli",
                    "kir": 2.8,
                    "air": 2.9,

                }, {
                    "daerah": "Pokok Sena",
                    "kir": 2.4,
                    "air": 2.2,

                }]


                // Create axes
                // https://www.amcharts.com/docs/v5/charts/xy-chart/axes/
                var xAxis = chart.xAxes.push(am5xy.CategoryAxis.new(root, {
                    categoryField: "daerah",
                    renderer: am5xy.AxisRendererX.new(root, {
                        cellStartLocation: 0.1,
                        cellEndLocation: 0.9
                    }),
                    tooltip: am5.Tooltip.new(root, {})
                }));

                xAxis.data.setAll(data);

                var yAxis = chart.yAxes.push(am5xy.ValueAxis.new(root, {
                    renderer: am5xy.AxisRendererY.new(root, {})
                }));


                // Add series
                // https://www.amcharts.com/docs/v5/charts/xy-chart/series/
                function makeSeries(name, fieldName) {
                    var series = chart.series.push(am5xy.ColumnSeries.new(root, {
                        name: name,
                        xAxis: xAxis,
                        yAxis: yAxis,
                        valueYField: fieldName,
                        categoryXField: "daerah"
                    }));

                    series.columns.template.setAll({
                        tooltipText: "{name}, {categoryX}:{valueY}",
                        width: am5.percent(90),
                        tooltipY: 0
                    });

                    series.data.setAll(data);

                    // Make stuff animate on load
                    // https://www.amcharts.com/docs/v5/concepts/animations/
                    series.appear();

                    series.bullets.push(function() {
                        return am5.Bullet.new(root, {
                            locationY: 0,
                            sprite: am5.Label.new(root, {
                                text: "{valueY}",
                                fill: root.interfaceColors.get("alternativeText"),
                                centerY: 0,
                                centerX: am5.p50,
                                populateText: true
                            })
                        });
                    });

                    legend.data.push(series);
                }

                makeSeries("Kir", "kir");
                makeSeries("Air", "air");



                // Make stuff animate on load
                // https://www.amcharts.com/docs/v5/concepts/animations/
                chart.appear(1000, 100);

            }); // end am5.ready()
        </script>
    @endsection
