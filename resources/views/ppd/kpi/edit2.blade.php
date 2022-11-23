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
                    <div class="card-header" style="text-align: center">
                        <b><u>Paparan Data</u></b>
                    </div>

                    <br><br>


                    <table class="table table-bordered">
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
                                        @if ($markah->sukuan_tahun == '1')
                                            <input class="form-control" value="Q1" readonly>
                                        @elseif ($markah->sukuan_tahun == '2')
                                            <input class="form-control" value="Q2" readonly>
                                        @elseif ($markah->sukuan_tahun == '3')
                                            <input class="form-control" value="Q3" readonly>
                                        @else
                                            <input class="form-control" value="Q4" readonly>
                                        @endif
                                    </td>
                                    <td>
                                        <input class="form-control" value="{{ $markah->pencapaian }}" readonly />
                                    </td>
                                    <td>
                                        @if ($markah->peratus_pencapaian >= 100)
                                            <div class="input-group">
                                                <input class="form-control" value="100" readonly />
                                                <span class="input-group-text">%</span>

                                            </div>
                                        @else
                                            <div class="input-group">
                                                <input class="form-control" value="{{ $markah->peratus_pencapaian }}"
                                                    readonly />
                                                <span class="input-group-text">%</span>

                                            </div>
                                        @endif

                                    </td>

                                    <td>
                                        @if ($markah->peratus_pencapaian >= 80)
                                            <img src='/img/greens.png'>
                                        @elseif ($markah->peratus_pencapaian <= 80 && $markah->peratus_pencapaian >= 50)
                                            <img src='/img/yellows.png'>
                                        @elseif ($markah->peratus_pencapaian <= 49)
                                            <img src='/img/reds.png'>
                                        @else
                                            <img src='/img/grey.png'>
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>

                    <br>
                </div>

                <hr>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header" style="text-align: center">
                                <b><u>Kemasukan Data</u></b>
                            </div>
                            <div class="card-body">

                                <div class="mb-3 row">

                                    <label class="col-sm-2 col-form-label" for="tahun">Tahun</label>
                                    <div class="col-sm-10" style="width: 30%">
                                        <select class="form-select" name="tahun" required>
                                            <option selected disabled hidden value="null">Tahun</option>

                                            <option value="2021">2021</option>
                                            <option value="2022">2022</option>
                                            <option value="2023">2023</option>
                                            <option value="2024">2024</option>
                                            <option value="2025">2025</option>
                                        </select>
                                    </div>

                                    <label class="col-sm-2 col-form-label" for="sukuan_tahun">Sukuan Tahun</label>
                                    <div class="col-sm-10" style="width: 30%">
                                        <select class="form-select" name="sukuan_tahun" required>
                                            <option selected disabled hidden value="null">Sukuan Tahun</option>
                                            <option value="1">Q1 (JAN-MAC)</option>
                                            <option value="2">Q2 (APR-JUN) </option>
                                            <option value="3">Q3 (JUL-SEP)</option>
                                            <option value="4">Q4 (OKT-DIS)</option>

                                        </select>
                                    </div>
                                </div>

                                <div class="mb-3 row">

                                    <label class="col-sm-2 col-form-label" for="pencapaian">Pencapaian</label>
                                    <div class="col-sm-10" style="width: 30%">
                                        <input type="number" id="pencapaian" name="pencapaian" onchange="pencapaian_ubah()" class="form-control pencapaian"
                                            placeholder="Pencapaian" />
                                    </div>

                                    <label class="col-sm-2 col-form-label" for="peratus_pencapaian">Peratus
                                        Pencapaian</label>
                                    <div class="col-sm-10" style="width: 30%">
                                        <input type="number" id="peratus_pencapaian" name="peratus_pencapaian"class="form-control"
                                            placeholder="Peratus Pencapaian" readonly />
                                    </div>
                                </div>
                            </div>



                            <div class="col" style="text-align: center">
                                <button class="btn btn-falcon-default btn-sm"
                                    style="background-color: #047FC3; color:white;" type="submit" value="Save"
                                    onclick="return confirm('Adakah anda mahu menyimpan data ini?')">&nbsp;Kemas Kini
                                </button>
                            </div>
                            <br>
                        </div>

                    </div>
            </form>

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
                    <input class="form-control" name="outcome_id" type="hidden" value="{{ $kpi->outcome->id }}" />
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

                <input name="unitUkuran" class="form-control pencapaian" value="{{ $kpi->unitUkuran }}" readonly />
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
                <input type="text" class="form-control pencapaian" name="sasaran2021"
                    value="{{ $kpi->sasaran2021 }}" readonly />
            </div>


        </div>

        <div class="mb-3 row">

            <label class="col-sm-2 col-form-label" for="sumberPengesahan">Sumber Pengesahan</label>

            <div class="col-sm-10" style="width:30%">
                <input class="form-control" name="sumberPengesahan" type="text" value="{{ $kpi->sumberPengesahan }}"
                    readonly />
            </div>

            <label class="col-sm-2 col-form-label" for="sasaran2022">Sasaran 2022</label>
            <div class="col-sm-10" style="width:30%">
                <input type="text" class="form-control pencapaian" name="sasaran2022"
                    value="{{ $kpi->sasaran2022 }}" readonly />
            </div>

        </div>

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label" for="sasaran2023">Sasaran 2023</label>
            <div class="col-sm-10" style="width:30%">
                <input type="text" class="form-control pencapaian" name="sasaran2023"
                    value="{{ $kpi->sasaran2023 }}" readonly />
            </div>

            <label class="col-sm-2 col-form-label" for="sasaran2024">Sasaran 2024</label>


            <div class="col-sm-10" style="width:30%">
                <input type="text" class="form-control pencapaian" name="sasaran2024"
                    value="{{ $kpi->sasaran2024 }}" readonly />
            </div>

        </div>

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label">Sasaran RMKe-12 (2021-2025)</label>
            <div class="col-sm-10" style="width:30%">
                <input class="form-control" value="{{ $kpi->sasaranRMK }}" readonly />
            </div>
        </div>

        <hr>


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

                let sasaran = $('input[name="sasaran2022"]').val();
                let wajaran = $('input[name="wajaran"]').val();
                let pencapaian = $('input[name="pencapaian"]').val();


                let result = (pencapaian / sasaran) * wajaran;
                $('input[name="peratus_pencapaian"]').val(result);
                $('input[name="peratus_pencapaian"]').trigger('change');

            }
        });

        function pencapaian_ubah() {
            var peratus_pencapaian = document.getElementById("pencapaian").value
            if (peratus_pencapaian > 100) {
                document.getElementById("peratus_pencapaian").value = 100.00;
            } else {
                document.getElementById("peratus_pencapaian").value = peratus_pencapaian;
            }
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
