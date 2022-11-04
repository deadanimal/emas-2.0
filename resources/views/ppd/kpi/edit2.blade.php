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


                <br>

                <div class="row align-items-center">
                    <div class="col col-lg-8">
                        <span><b>Prestasi KPI Nasional - Pencapaian Semasa</b></span>


                    </div>
                    <hr>


                    <div class="col-sm" style="width:30%">

                        <select class="form-select search">
                            <option selected disabled hidden value="null">Tahun</option>

                            {{-- @foreach ($fokusUtama as $fu)
                                    <option value="{{ $fu->id }}">{{ $fu->namaFokus }}</option>
                                @endforeach --}}

                        </select>
                    </div>

                    <div class="col-sm" style="width:30%">

                        <select class="form-select search">
                            <option selected disabled hidden value="null">Sukuan Tahun</option>

                            {{-- @foreach ($perkaraUtama as $pu)
                                    <option value="{{ $pu->id }}">{{ $pu->namaPerkara }}</option>
                                @endforeach --}}

                        </select>
                    </div>

                    <br><br>


                    <table class="table table-bordered" id="example">
                        <thead class="table-light">
                            <tr>
                                <th class="align-middle">Pencapaian</th>
                                <th class="align-middle">Peratus Pencapaian</th>
                                <th class="align-middle">Prestasi KPI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <input type="number" name="pencapaian" for="pencapaian" class="form-control pencapaian"
                                        id="mySelect" onchange="myFunction()" placeholder="Pencapaian"
                                        value="{{ $kpi->pencapaian }}" />
                                </td>
                                <td>
                                    <input type="number" name="peratusPencapaian" for="peratusPencapaian"
                                        class="form-control pencapaian" id="mySelect" onchange="myFunction()"
                                        placeholder="Peratus Pencapaian" value="{{ $kpi->peratusPencapaian }}" />
                                </td>

                                <td id="prestasi"></td>
                            </tr>
                        </tbody>
                    </table>

                    <br>



                    {{--
                    <div class="mb-3 row">

                        <label class="col-sm-2 col-form-label" for="peratusPencapaian">Peratus Pencapaian</label>

                        <div class="col-sm-10" style="width:30%">
                            <input type="text" name="peratusPencapaian" id="mySelect" onchange="myFunction()"
                                class="form-control" value="{{ $kpi->peratusPencapaian }}" />

                        </div>


                    </div><br> --}}
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

                        <input type="number" name="unitUkuran" class="form-control pencapaian"
                            value="{{ $kpi->unitUkuran }}" readonly />
                    </div>

                </div>


                <div class="mb-3 row">

                    <label class="col-sm-2 col-form-label" for="sasaran">Sasaran</label>
                    <div class="col-sm-10" style="width:30%">
                        <input type="number" name="sasaran" class="form-control pencapaian"
                            value="{{ $kpi->sasaran }}" readonly />
                    </div>

                    <label class="col-sm-2 col-form-label" for="hadVarian">Varians</label>

                    <div class="col-sm-10" style="width:30%">
                        <input type="number" name="hadVarian" class="form-control" value="{{ $kpi->hadVarian }}"
                            readonly />
                    </div>


                </div>

                <div class="mb-3 row">

                    <label class="col-sm-2 col-form-label" for="hadToleransi">Had Toleransi</label>

                    <div class="col-sm-10" style="width:30%">
                        <input type="number" name="hadToleransi" class="form-control" value="{{ $kpi->hadToleransi }}"
                            readonly />
                    </div>

                    <label class="col-sm-2 col-form-label" for="kekerapan">Kekerapan</label>

                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="kekerapan" type="number" value="{{ $kpi->kekerapan }}"
                            readonly />
                    </div>
                </div>

                <div class="mb-3 row">


                    <label class="col-sm-2 col-form-label" for="wajaran">Wajaran</label>

                    <div class="col-sm-10" style="width:30%">
                        <input type="number" name="wajaran" class="form-control pencapaian"
                            value="{{ $kpi->wajaran }}" readonly />
                    </div>

                    <label class="col-sm-2 col-form-label" for="tahunAsas">Tahun Asas</label>
                    <div class="col-sm-10" style="width:30%">
                        <input type="text" name="tahunAsas" type="text" class="form-control"
                            value="{{ $kpi->tahunAsas }}" readonly />
                    </div>


                </div>



                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="peratusPencapaianAsas">Pencapaian Tahun
                        Asas</label>

                    <div class="col-sm-10" style="width:30%">
                        <input type="text" name="peratusPencapaianAsas" type="text" class="form-control"
                            value="{{ $kpi->peratusPencapaianAsas }}" readonly />

                    </div>

                    <label class="col-sm-2 col-form-label" for="sumberData">Sumber Data</label>

                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="sumberData" type="text" value="{{ $kpi->sumberData }}"
                            readonly />
                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="sasaran2021">Sasaran 2021</label>

                    <div class="col-sm-10" style="width:30%">
                        <input type="text" name="sasaran2021" type="text" class="form-control"
                            value="{{ $kpi->sasaran2021 }}" readonly />
                    </div>

                    <label class="col-sm-2 col-form-label" for="sumberPengesahan">Sumber Pengesahan</label>

                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="sumberPengesahan" type="text"
                            value="{{ $kpi->sumberPengesahan }}" readonly />
                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="sasaran2022">Sasaran 2022</label>

                    <div class="col-sm-10" style="width:30%">
                        <input type="text" name="sasaran2022" type="text" class="form-control"
                            value="{{ $kpi->sasaran2022 }}" readonly />
                    </div>

                    <label class="col-sm-2 col-form-label" for="status">Status</label>

                    <div class="col-sm-10" style="width:30%">
                        <input type="text" name="status" type="text" class="form-control"
                            value="{{ $kpi->status }}" readonly />
                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="sasaran2023">Sasaran 2023</label>

                    <div class="col-sm-10" style="width:30%">
                        <input type="text" name="sasaran2023" type="text" class="form-control"
                            value="{{ $kpi->sasaran2023 }}" readonly />
                    </div>




                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="sasaran2024">Sasaran 2024</label>


                    <div class="col-sm-10" style="width:30%">
                        <input type="text" name="sasaran2024" type="text" class="form-control"
                            value="{{ $kpi->sasaran2024 }}" readonly />
                    </div>



                </div><br>
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
