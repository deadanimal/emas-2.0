@extends('base')
@section('content')
    <style>
        .hidden {
            display: none;
        }
    </style>
    <div class="container">
        <div class="mb-4 text-center">
            <H2>KEMASKINI PRESTASI KPI NASIONAL - <br>{{ $kpi->namaKpi }}
            </H2>
        </div>

        <div class="form-floating;">

            <form action="/PPD/prestasi_kpi/{{ $kpi->id }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="kpi_id" value="{{ $kpi->id }}">


                <br>

                <div class="row align-items-center">
                    <div class="col col-lg-8">
                        <span><b>Prestasi KPI Nasional - Pencapaian Semasa</b></span>


                    </div>
                    <hr>


                    {{--
                    <div class="col-sm" style="width:30%">

                        <select class="form-select search">
                            <option selected disabled hidden value="null">Tahun</option>

                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                        </select>
                    </div>

                    <div class="col-sm" style="width:30%">

                        <select class="form-select search">
                            <option selected disabled hidden value="null">Sukuan Tahun</option>

                            <option value="Q1">Q1 (JAN-MAC)</option>
                            <option value="Q2">Q2 (APR-JUN) </option>
                            <option value="Q3">Q3 (JUL-SEP)</option>
                            <option value="Q4">Q4 (OKT-DIS)</option>

                        </select>
                    </div> --}}

                    <br><br>


                    <table class="table table-bordered" id="example">
                        <thead class="table-light">
                            <tr>
                                <th class="align-middle">Tahun</th>
                                <th class="align-middle">Sukuan Tahun</th>
                                <th class="align-middle">Pencapaian</th>
                                <th class="align-middle">Peratus Pencapaian</th>
                                <th class="align-middle">Prestasi KPI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kpi_markahs as $markah)
                                <tr>
                                    <td>
                                        <input class="form-control" value="{{ $markah->tahun }}" readonly />
                                    </td>
                                    <td>
                                        <input class="form-control" value="{{ $markah->sukuan_tahun }}" readonly />
                                    </td>
                                    <td>
                                        <input class="form-control" value="{{ $markah->pencapaian }}" readonly />
                                    </td>
                                    <td>
                                        <div class="input-group">
                                            <input class="form-control" value="{{ $markah->peratus_pencapaian }}"
                                                readonly />
                                            <span class="input-group-text">%</span>

                                        </div>
                                    </td>

                                    <td id="prestasi"></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <br>
                </div>


                <div class="mb-3 row">
                    <label class="col-form-label" for="tahun">Tahun</label>
                    <div class="col-sm-10">
                        <select class="form-select" name="tahun">
                            <option selected disabled hidden value="null">Tahun</option>

                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>
                        </select>
                    </div>

                    <label class="col-form-label" for="sukuan_tahun">Sukuan Tahun</label>
                    <div class="col-sm-10">
                        <select class="form-select" name="sukuan_tahun">
                            <option selected disabled hidden value="null">Sukuan Tahun</option>
                            <option value="1">Q1 (JAN-MAC)</option>
                            <option value="2">Q2 (APR-JUN) </option>
                            <option value="3">Q3 (JUL-SEP)</option>
                            <option value="4">Q4 (OKT-DIS)</option>

                        </select>
                    </div>

                    <label class="col-form-label" for="pencapaian">Pencapaian</label>
                    <div class="col-sm-10">
                        <input type="number" name="pencapaian"class="form-control" placeholder="Pencapaian" />
                    </div>

                    <label class="col-form-label" for="peratus_pencapaian">Peratus Pencapaian</label>
                    <div class="col-sm-10">
                        <input type="number" name="peratus_pencapaian"class="form-control"
                            placeholder="Peratus Pencapaian" />
                    </div>

                </div>
                <hr><br>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="pemangkin_id">Tema</label>
                    <div class="col-sm-10">

                        @if ($kpi->pemangkin != null)
                            <input class="form-control" value="{{ $kpi->pemangkin->namaTema }}" readonly />
                            <input class="form-control" name="bidang_id" type="hidden" value="{{ $kpi->pemangkin->id }}" />
                        @else
                            <input class="form-control" value="Tema/ Pemangkin Dasar telah dipadam" readonly />
                        @endif

                    </div>
                </div>
                <div class="mb-3 row">

                    <label class="col-sm-2 col-form-label" for="bab_id">Bab</label>
                    <div class="col-sm-10">

                        @if ($kpi->bab != null)
                            <input class="form-control" value="{{ $kpi->bab->namaBab }}" readonly />
                            <input class="form-control" name="bidang_id" type="hidden" value="{{ $kpi->bab->id }}" />
                        @else
                            <input class="form-control" value="Bab telah dipadam" readonly />
                        @endif

                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="bidang_id">Bidang Keutamaan</label>
                    <div class="col-sm-10">

                        @if ($kpi->bidang != null)
                            <input class="form-control" value="{{ $kpi->bidang->namaBidang }}" readonly />
                            <input class="form-control" name="bidang_id" type="hidden" value="{{ $kpi->bidang->id }}" />
                        @else
                            <input class="form-control" value="Bidang Keutamaan telah dipadam" readonly />
                        @endif

                    </div>
                </div>
                <div class="mb-3 row">


                    <label class="col-sm-2 col-form-label" for="outcome_id">Outcome Nasional</label>
                    <div class="col-sm-10">

                        @if ($kpi->outcome != null)
                            <input class="form-control" value="{{ $kpi->outcome->namaOutcome }}" readonly />
                            <input class="form-control" name="outcome_id" type="hidden"
                                value="{{ $kpi->outcome->id }}" />
                        @else
                            <input class="form-control" value="Outcome telah dipadam" readonly />
                        @endif


                    </div>
                </div>


                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="namaKpi">Nama KPI Nasional</label>

                    <div class="col-sm-10">
                        <input class="form-control" name="namaKpi" value="{{ $kpi->namaKpi }}" readonly />
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="jenisKpi">Jenis Sasaran</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="jenisKpi" value="{{ $kpi->jenisKpi }}" readonly />

                    </div>

                    <label class="col-sm-2 col-form-label" for="unitUkuran">Unit Ukuran</label>
                    <div class="col-sm-10" style="width:30%">

                        <input name="unitUkuran" class="form-control pencapaian" value="{{ $kpi->unitUkuran }}"
                            readonly />
                    </div>

                </div>


                <div class="mb-3 row">

                    <label class="col-sm-2 col-form-label" for="hadVarian">Varians</label>

                    <div class="col-sm-10" style="width:30%">
                        <input name="hadVarian" class="form-control" value="{{ $kpi->hadVarian }}" readonly />
                    </div>

                    <label class="col-sm-2 col-form-label" for="hadToleransi">Had Toleransi</label>

                    <div class="col-sm-10" style="width:30%">
                        <input name="hadToleransi" class="form-control" value="{{ $kpi->hadToleransi }}" readonly />
                    </div>


                </div>

                <div class="mb-3 row">


                    <label class="col-sm-2 col-form-label" for="kekerapan">Kekerapan</label>

                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="kekerapan" value="{{ $kpi->kekerapan }}" readonly />
                    </div>

                    <label class="col-sm-2 col-form-label" for="wajaran">Wajaran</label>

                    <div class="col-sm-10" style="width:30%">
                        <input name="wajaran" class="form-control pencapaian" value="{{ $kpi->wajaran }}" readonly />
                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="tahunAsas">Tahun Asas</label>
                    <div class="col-sm-10" style="width:30%">
                        <input type="text"class="form-control" value="{{ $kpi->tahunAsas }}" readonly />
                    </div>

                    <label class="col-sm-2 col-form-label" for="peratusPencapaianAsas">Pencapaian Tahun
                        Asas</label>

                    <div class="col-sm-10" style="width:30%">
                        <input type="text" name="peratusPencapaianAsas" class="form-control"
                            value="{{ $kpi->peratusPencapaianAsas }}" readonly />

                    </div>

                </div>



                <div class="mb-3 row">

                    <label class="col-sm-2 col-form-label" for="sumberData">Sumber Data</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" value="{{ $kpi->sumberData }}" readonly />
                    </div>

                    <label class="col-sm-2 col-form-label" for="sasaran2021">Sasaran 2021</label>
                    <div class="col-sm-10" style="width:30%">
                        <input type="text" class="form-control" value="{{ $kpi->sasaran2021 }}" readonly />
                    </div>


                </div>

                <div class="mb-3 row">

                    <label class="col-sm-2 col-form-label" for="sumberPengesahan">Sumber Pengesahan</label>

                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="sumberPengesahan" type="text"
                            value="{{ $kpi->sumberPengesahan }}" readonly />
                    </div>

                    <label class="col-sm-2 col-form-label" for="sasaran2022">Sasaran 2022</label>
                    <div class="col-sm-10" style="width:30%">
                        <input type="text" class="form-control" value="{{ $kpi->sasaran2022 }}" readonly />
                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="sasaran2023">Sasaran 2023</label>
                    <div class="col-sm-10" style="width:30%">
                        <input type="text" class="form-control" value="{{ $kpi->sasaran2023 }}" readonly />
                    </div>

                    <label class="col-sm-2 col-form-label" for="sasaran2024">Sasaran 2024</label>


                    <div class="col-sm-10" style="width:30%">
                        <input type="text" class="form-control" value="{{ $kpi->sasaran2024 }}" readonly />
                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label">Sasaran RMKe-12 (2021-2025)</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" value="{{ $kpi->sasaranRMK }}" readonly />
                    </div>
                </div>

                <hr>




                <div class="col" style="text-align: center">
                    <button class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                        type="submit" value="Save"
                        onclick="return confirm('Adakah anda mahu menyimpan data ini?')">&nbsp;Simpan Data
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
