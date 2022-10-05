@extends('base')
@section('content')
    <!-- Styles -->
    <style>
        .column {
            float: left;
            width: 30%;
            /* padding: 10px; */
            height: 300;
        }
    </style>

    <div class="container">
        {{-- @cannot('BPKP')
            <div class="mb-4 text-center">
                <img src="/img/image 2.png" alt="banner" width="50%">
            </div>
        @endcannot --}}


        <div class="mb-4 text-center">
            <img src="/img/image 3.png" alt="banner" width="50%">
        </div>

        @can('BPKP')
            <div class="row">
                <div class="column">
                    <b>Peratusan Dan Bilangan
                        Status Kelulusan</b>
                    <div id="chartdiv"></div>
                </div>
                <div class="column">
                    <b>Peratusan Dan Bilangan
                        Mengikut Kementerian</b>
                    <div id="chartdiv1"></div>
                </div>
                <div class="column">
                    <b>Peratusan Dan Bilangan Status
                        Tema Dan Pemangkin Dasar</b>
                    <div id="chartdiv2"></div>
                </div>
            </div>
        @endcan


        <br><br>
        <hr style="width:100%;text-align:center;"><br>

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label" for="tema_id">Tema/Pemangkin Dasar</label>
            <div class="col-sm-10" style="width:40%">
                <select class="form-control" name="tema_id">
                    <option selected disabled hidden>Sila Pilih</option>

                    @foreach ($tema as $tema)
                        <option value="{{ $tema->id }}">{{ $tema->namaTema }}</option>
                    @endforeach

                </select>
            </div>

            <label class="col-sm-2 col-form-label" for="bab_id">Sukuan Tahun</label>
            <div class="col-sm-10" style="width:20%">
                <select class="form-control" name="bab_id">
                    <option selected disabled hidden>Sila Pilih</option>

                    {{-- @foreach ($listBab as $listBab)
                        <option value="{{ $listBab->id }}">Bab {{ $listBab->noBab }}. {{ $listBab->namaBab }} </option>
                    @endforeach --}}

                </select>
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label" for="bab_id">Bab</label>
            <div class="col-sm-10" style="width:40%">
                <select class="form-control" name="bab_id">
                    <option selected disabled hidden>Sila Pilih</option>

                    @foreach ($bab as $bab)
                        <option value="{{ $bab->id }}">Bab {{ $bab->noBab }}. {{ $bab->namaBab }}</option>
                    @endforeach

                </select>
            </div>

            <label class="col-sm-2 col-form-label" for="outcome_id">Tahun</label>
            <div class="col-sm-10" style="width:20%">
                <select class="form-control" name="outcome_id">
                    <option selected disabled hidden>SILA PILIH</option>

                    {{-- @foreach ($list as $list)
                        <option value="{{ $list->id }}">{{ $list->namaOutcome }}</option>
                    @endforeach --}}

                </select>
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label" for="bidang_id">Bidang Keutamaan</label>
            <div class="col-sm-10" style="width:40%">
                <select class="form-control" name="bidang_id">
                    <option selected disabled hidden>Sila Pilih</option>

                    @foreach ($bidang as $bidang)
                        <option value="{{ $bidang->id }}">{{ $bidang->namaBidang }}</option>
                    @endforeach

                </select>
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label" for="bidang_id">Status Tindakan</label>
            <div class="col-sm-10" style="width:40%">
                <select class="form-control" name="bidang_id">
                    <option selected disabled hidden>Sila Pilih</option>

                    {{-- @foreach ($listBidang as $listBidang)
                        <option value="{{ $listBidang->id }}">{{ $listBidang->namaBidang }}</option>
                    @endforeach --}}

                </select>
            </div>
        </div>

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label" for="bidang_id">Kementerian/Bahagian </label>
            <div class="col-sm-10" style="width:40%">
                <select class="form-control" name="bidang_id">
                    <option selected disabled hidden>Sila Pilih</option>

                    {{-- @foreach ($listBidang as $listBidang)
                        <option value="{{ $listBidang->id }}">{{ $listBidang->namaBidang }}</option>
                    @endforeach --}}

                </select>
            </div>
        </div><br>

        <hr style="width:100%;text-align:center;">



        <div class="card mx-ncard my-ncard shadow-none">
            <div class="card-body">
                <div class="table-responsive scrollbar">
                    <table class="table table-bordered" id="example">
                        <thead class="text-black bg-200">
                            <tr>
                                <th class="align-middle">User</th>
                                <th class="align-middle">Tindakan</th>
                                <th class="align-middle">Kementerian/ Agensi Penyelaras </th>
                                <th class="align-middle">Kementerian/ Agensi Pelaksana</th>
                                <th class="align-middle">Tempoh Siap</th>
                                <th class="align-middle">Kategori Sasaran </th>
                                <th class="align-middle">Status Pelaksanaan 2021</th>
                                <th class="align-middle">Catatan 2021</th>
                                <th class="align-middle">Pencapaian 2021</th>
                                <th class="align-middle">Status Pelaksanaan 2022 </th>
                                <th class="align-middle">Catatan 2022</th>
                                <th class="align-middle">Pencapaian 2022</th>

                                <th class="align-middle">Status Pengesahan</th>

                                <th class="align-middle">Pengesahan</th>
                            </tr>
                        </thead>
                        <tbody class="list myTable" id="bulk-select-body">
                            @foreach ($tindakans as $tindakan)
                                <tr class="perkara">
                                    <td class="align-middle">{{ $loop->iteration }}. {{ $tindakan->user->name }}
                                    </td>
                                    <td class="align-middle">{{ $tindakan->namaTindakan }}</td>
                                    {{-- <td class="align-middle">{{ $tindakan->pemangkin->namaTema ?? '' }}</td> --}}
                                    <td class="align-middle">{{ $tindakan->kementerian_penyelaras }}</td>
                                    <td class="align-middle">{{ $tindakan->kementerian_pelaksana }}</td>
                                    <td class="align-middle">{{ $tindakan->tempohSiap }}</td>
                                    <td class="align-middle">{{ $tindakan->kategoriSasaran }}</td>
                                    <td class="align-middle">{{ $tindakan->statusPelaksanaan2021 }}</td>
                                    <td class="align-middle">{{ $tindakan->catatan2021 }}</td>
                                    <td class="align-middle">{{ $tindakan->pencapaian2021 }}</td>
                                    <td class="align-middle">{{ $tindakan->statusPelaksanaan }}</td>
                                    <td class="align-middle">{{ $tindakan->catatan2022 }}</td>
                                    <td class="align-middle">{{ $tindakan->pencapaian2022 }}</td>


                                    <td class="align-middle" style="text-align: center">
                                        <div class="col-auto ms-auto">
                                            @if ($tindakan->lulus == 1 && $tindakan->ditolak == 0)
                                                <span class="badge bg-success">Lulus</span>
                                            @elseif ($tindakan->lulus == 0 && $tindakan->ditolak == 1)
                                                <span class="badge bg-danger">Ditolak</span>
                                            @else
                                                <span class="badge bg-info text-dark">Dalam Semakan</span>
                                            @endif
                                        </div>
                                    </td>

                                    <td class="align-middle" style="text-align: center">

                                        <div class="col-auto ms-auto">
                                            @if ($tindakan->lulus == 1 && $tindakan->ditolak == 0)
                                                <span class="badge bg-success">Disahkan</span>
                                            @elseif ($tindakan->lulus == 0 && $tindakan->ditolak == 1)
                                                <span class="badge bg-danger">Ditolak</span>
                                            @else
                                                <form action="/PPD/tindakan/lulus/{{ $tindakan->id }}" method="post">
                                                    @csrf
                                                    @method('POST')
                                                    <button type="submit" class="btn btn-success">Sahkan</button>
                                                </form>
                                                <form action="{{ route('tindakan.ditolak', $tindakan->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('POST')
                                                    <button type="submit" class="btn btn-danger">Tolak</button>
                                                </form>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [

                    {
                        extend: 'pdfHtml5',
                        title: 'Tindakan',
                        orientation: 'landscape',
                        pageSize: 'A1'
                    }, {
                        extend: 'csvHtml5',
                        title: 'Tindakan',
                        orientation: 'landscape',
                        pageSize: 'A1'
                    }, {
                        extend: 'excelHtml5',
                        title: 'Tindakan',
                        orientation: 'landscape',
                        pageSize: 'A1'
                    }
                ]


            });
        });
    </script>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
{{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"></script> --}}


<script>
    // only if pressed a non-active button
    $("button", "#toggle-lulus").click(function(event) {
        var $btn = $(event.currentTarget)

        // only if not already active
        if (!$btn.hasClass('active')) {
            // you can switch the button as soon as clicked or in AJAX callback
            changeActiveButton($btn)

            $.post('https://jsonplaceholder.typicode.com/todos/1', {
                lang: $btn.text()
            }, function(data) {
                // do whatever you want with your API callback data
            })
        }
    })

    function changeActiveButton($btn) {
        // reset active & button type on previous button
        $("button.active", "#toggle-lulus")
            .removeClass('btn-primary active')
            .addClass('btn-default')

        // set active & button type on current button
        $btn
            .removeClass('btn-default')
            .addClass('btn-primary active')
    }

    $(document).ready(function() {
        $(".myInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            $(".myTable tr").filter(function() {
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
            });
        });
    });
</script>




<!-- Resources -->
<script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>

<!-- Chart code -->
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
        // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
        var chart = root.container.children.push(am5percent.PieChart.new(root, {
            layout: root.verticalLayout
        }));


        // Create series
        // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
        var series = chart.series.push(am5percent.PieSeries.new(root, {
            valueField: "value",
            categoryField: "category"
        }));


        // Set data
        // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
        series.data.setAll([{
                value: 10,
                category: "Lulus"
            },
            {
                value: 9,
                category: "Dalam Proses"
            },
            {
                value: 6,
                category: "Tiada Tindakan"
            },
            {
                value: 5,
                category: "Sedang Dalam Kelulusan"
            },
        ]);


        // Play initial series animation
        // https://www.amcharts.com/docs/v5/concepts/animations/#Animation_of_series
        series.appear(1000, 100);

    }); // end am5.ready()
</script>



<!-- Chart code 1-->
<script>
    am5.ready(function() {

        // Create root element
        // https://www.amcharts.com/docs/v5/getting-started/#Root_element
        var root = am5.Root.new("chartdiv1");


        // Set themes
        // https://www.amcharts.com/docs/v5/concepts/themes/
        root.setThemes([
            am5themes_Animated.new(root)
        ]);


        // Create chart
        // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
        var chart = root.container.children.push(am5percent.PieChart.new(root, {
            layout: root.verticalLayout
        }));


        // Create series
        // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
        var series = chart.series.push(am5percent.PieSeries.new(root, {
            valueField: "value",
            categoryField: "category"
        }));


        // Set data
        // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
        series.data.setAll([{
                value: 10,
                category: "Lulus"
            },
            {
                value: 9,
                category: "Dalam Proses"
            },
            {
                value: 6,
                category: "Tiada Tindakan"
            },
            {
                value: 5,
                category: "Sedang Dalam Kelulusan"
            },
        ]);


        // Play initial series animation
        // https://www.amcharts.com/docs/v5/concepts/animations/#Animation_of_series
        series.appear(1000, 100);

    }); // end am5.ready()
</script>


<!-- Chart code 2-->
<script>
    am5.ready(function() {

        // Create root element
        // https://www.amcharts.com/docs/v5/getting-started/#Root_element
        var root = am5.Root.new("chartdiv2");


        // Set themes
        // https://www.amcharts.com/docs/v5/concepts/themes/
        root.setThemes([
            am5themes_Animated.new(root)
        ]);


        // Create chart
        // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/
        var chart = root.container.children.push(am5percent.PieChart.new(root, {
            layout: root.verticalLayout
        }));


        // Create series
        // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Series
        var series = chart.series.push(am5percent.PieSeries.new(root, {
            valueField: "value",
            categoryField: "category"
        }));


        // Set data
        // https://www.amcharts.com/docs/v5/charts/percent-charts/pie-chart/#Setting_data
        series.data.setAll([{
                value: 10,
                category: "Lulus"
            },
            {
                value: 9,
                category: "Dalam Proses"
            },
            {
                value: 6,
                category: "Tiada Tindakan"
            },
            {
                value: 5,
                category: "Sedang Dalam Kelulusan"
            },
        ]);


        // Play initial series animation
        // https://www.amcharts.com/docs/v5/concepts/animations/#Animation_of_series
        series.appear(1000, 100);

    }); // end am5.ready()
</script>
