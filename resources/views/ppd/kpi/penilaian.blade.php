@extends('base')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>PENILAIAN PRESTASI KPI NASIONAL - <br>{{ $kpi->namaOutcome }}
            </H2>
        </div>

        <div class="form-floating;">

            <form action="/PPD/penilaian/{{ $kpi->id }}" method="POST">
                @csrf
                @method('PUT')

                <br><br>



                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="pemangkin_id">Tema</label>
                    <div class="col-sm-10" style="width:30%">

                        @if ($kpi->pemangkin != null)
                            <input class="form-control" value="{{ $kpi->pemangkin->namaTema }}" readonly />
                            <input class="form-control" name="bidang_id" type="hidden" value="{{ $kpi->pemangkin->id }}" />
                        @else
                            <input class="form-control" value="Tema/ Pemangkin Dasar telah dipadam" readonly />
                        @endif

                    </div>

                    <label class="col-sm col-form-label" for="tahun">Tahun</label>
                    <div class="col">

                        <input class="form-control" name="tahun" />


                    </div>
                </div>


                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="bab_id">Bab</label>
                    <div class="col-sm-10" style="width:30%">

                        @if ($kpi->bab != null)
                            <input class="form-control" value="{{ $kpi->bab->namaBab }}" readonly />
                            <input class="form-control" name="bidang_id" type="hidden" value="{{ $kpi->bab->id }}" />
                        @else
                            <input class="form-control" value="Bab telah dipadam" readonly />
                        @endif

                    </div>

                    <label class="col-sm col-form-label" for="suku_tahun">Sukuan Tahun</label>
                    <div class="col">
                        <select class="form-control" name="suku_tahun">
                            <option selected disabled hidden>SILA PILIH</option>
                            <option value="Q1">Q1</option>
                            <option value="Q2">Q2</option>
                            <option value="Q3">Q3</option>
                            <option value="Q4">Q4</option>
                        </select>
                    </div>
                </div>



                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="bidang_id">Bidang Keutamaan</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="bidang_id" value="{{ $kpi->bidang->namaBidang }}" disabled />

                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="outcome_id">Outcome Nasional</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="outcome_id" value="{{ $kpi->outcome->namaOutcome }}" disabled />

                    </div>
                </div>
                <hr>



                <div class="row align-items-center">


                    <table class="table table-bordered" id="example">
                        <thead class="table-light">
                            <tr>
                                <th class="align-middle">Bil</th>
                                <th class="align-middle">KPI Nasional</th>
                                <th class="align-middle">Wajaran</th>
                                <th class="align-middle">Unit Sasaran</th>
                                <th class="align-middle">Sasaran 2022</th>
                                <th class="align-middle">Sasaran RMKe-12</th>
                                <th class="align-middle">Pencapaian Semasa</th>
                                <th class="align-middle">Prestasi KPI (Skor Wajaran)</th>
                                <th class="align-middle">Peratus Pencapaian</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kpis as $kpi)
                                <tr>
                                    <td>{{ $loop->iteration }}.</td>
                                    <td>{{ $kpi->namaKpi }}</td>
                                    <td> <input class="form-control" value="{{ $kpi->wajaran }}" readonly />
                                    </td>
                                    <td> <input class="form-control" value="{{ $kpi->unitSasaran }}" readonly />
                                    </td>
                                    <td> <input class="form-control" value="{{ $kpi->sasaran2022 }}" readonly />
                                    </td>
                                    <td> <input class="form-control" value="{{ $kpi->sasaranRMK }}" readonly />
                                    </td>
                                    <td> <input class="form-control" value="{{ $kpi->pencapaianSemasa }}" readonly />
                                    </td>
                                    <td> <input class="form-control" value="{{ $kpi->prestasiKpi }}" readonly />
                                    </td>
                                    <td id="prestasi"></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>



                    <div class="col" style="text-align: center">
                        <button class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                            type="submit" value="Save"
                            onclick="return confirm('Adakah anda mahu menyimpan data ini?')">&nbsp;Kembali
                        </button>
                        <button class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                            type="submit" value="Save"
                            onclick="return confirm('Adakah anda mahu menyimpan data ini?')">&nbsp;Proses
                        </button>
                        <button class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                            type="submit" value="Save"
                            onclick="return confirm('Adakah anda mahu menyimpan data ini?')">&nbsp;Papar
                        </button>
                    </div>

            </form>

        </div>

    </div>

    <script>
        $(".pencapaian").keyup(function() {

            var checkAllInputFilled = true;
            jQuery.each($(".pencapaian"), function(key, val) {
                if (val.value == '') {
                    checkAllInputFilled = false;
                }
            });

            if (checkAllInputFilled) {

                let sasaran = $('input[name="sasaran"]').val();
                let wajaran = $('input[name="wajaran"]').val();

                let pencapaian = $('input[name="q1"]').val();
                let result = (pencapaian / sasaran) * wajaran;
                $('input[name="peratusPencapaian"]').val(result);
                $('input[name="peratusPencapaian"]').trigger('change');



                let pencapaian1 = $('input[name="q2"]').val();
                let result1 = (pencapaian1 / sasaran) * wajaran;
                $('input[name="peratusPencapaian1"]').val(result1);
                $('input[name="peratusPencapaian1"]').trigger('change');



                let pencapaian2 = $('input[name="q3"]').val();
                let result2 = (pencapaian2 / sasaran) * wajaran;
                $('input[name="q3"]').val(result2);
                $('input[name="q3"]').trigger('change');



                let pencapaian3 = $('input[name="q4"]').val();
                let result3 = (pencapaian3 / sasaran) * wajaran;
                $('input[name="q4"]').val(result3);
                $('input[name="q4"]').trigger('change');


            }
        });


        function myFunction() {

            var x = document.getElementById("mySelect").value;
            x = x.substring(0, x.length - 1)
            x = parseFloat(x)
            var prestasiColor = "yellow"

            if (x >= 80) {
                prestasiColor = "green"
                var prestasiShown = document.getElementById("prestasi");
                prestasiShown.innerHTML = "<img src='/img/green.png'></img> "

            } else if (x <= 80 && x >= 50) {
                prestasiColor = "yellow"
                var prestasiShown = document.getElementById("prestasi");
                prestasiShown.innerHTML = "<img src='/img/yellow.png'></img> "

            } else {
                prestasiColor = "red"
                var prestasiShown = document.getElementById("prestasi");
                prestasiShown.innerHTML = "<img src='/img/red.png'></img> "


            }


            prestasiShown.style.color = prestasiColor;

        }



        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [

                    {
                        extend: 'pdfHtml5',
                        title: 'Prestasi KPI Nasional',
                        orientation: 'landscape',
                        pageSize: 'A1'
                    }, {
                        extend: 'csvHtml5',
                        title: 'Prestasi KPI Nasional',
                        orientation: 'landscape',
                        pageSize: 'A1'
                    }, {
                        extend: 'excelHtml5',
                        title: 'Prestasi KPI Nasional',
                        orientation: 'landscape',
                        pageSize: 'A1'
                    }
                ]


            });
        });
    </script>
@endsection
