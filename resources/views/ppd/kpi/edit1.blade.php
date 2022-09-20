@extends('base')
@section('content')

    <div class="container">
        <div class="mb-4 text-center">
            <H2>PELAN PELAKSANAAN DASAR</H2>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Oops!</strong> Input yang dimasuk kan adalah salah<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif




        <div class="form-floating;">

            <form action="/kpi/{{ $kpi->id }}" method="POST">
                @csrf
                @method('PUT')

                <div class="col" style="text-align: right">
                    <button class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                        type="submit" value="Save"
                        onclick="return confirm('Adakah anda mahu menyimpan data ini?')">&nbsp;Simpan Kemas Kini Markah
                    </button>
                </div>

                <br><br>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="pemangkin_id">Tema</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" value="{{ $kpi->pemangkin->namaTema }}" readonly />
                        <input class="form-control" name="pemangkin_id" type="hidden" value="{{ $kpi->pemangkin->id }}" />


                    </div>

                    <label class="col-sm-2 col-form-label" for="bab_id">Bab</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" value="{{ $kpi->bab->namaBab }}" readonly />
                        <input class="form-control" name="bab_id" type="hidden" value="{{ $kpi->bab->id }}" />


                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="bidang_id">Bidang Keutamaan</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" value="{{ $kpi->bidang->namaBidang }}" readonly />
                        <input class="form-control" name="bidang_id" type="hidden" value="{{ $kpi->bidang->id }}" />



                    </div>

                    <label class="col-sm-2 col-form-label" for="outcome_id">Outcome Nasional</label>
                    <div class="col-sm-10" style="width:30%">

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

                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="namaKpi" value="{{ $kpi->namaKpi }}" readonly />
                    </div>

                    <label class="col-sm-2 col-form-label" for="jenisKpi">Jenis KPI</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="jenisKpi">
                            <option value="Minimum">Minimum</option>
                            <option value="Maximum">Maximum</option>

                        </select>
                    </div>
                </div>


                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="prestasiKpi">Prestasi KPI</label>

                    <div class="col-sm-10" style="width:30%">

                        <p id="prestasi">

                        </p>

                    </div>

                    <label class="col-sm-2 col-form-label" for="unitUkuran">Unit</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="unitUkuran">
                            <option value="%">%</option>
                            <option value="RM">RM</option>
                            <option value="Bilangan">Bilangan</option>
                            <option value="Indeks">Indeks</option>
                            <option value="Kedudukan">Kedudukan</option>
                        </select>
                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="pencapaian">Pencapaian</label>

                    <div class="col-sm-10" style="width:30%">
                        <input type="number" name="pencapaian" class="percent form-control pencapaian"
                            value="{{ $kpi->pencapaian }}" />
                    </div>

                    <label class="col-sm-2 col-form-label" for="sasaran">Sasaran</label>
                    <div class="col-sm-10" style="width:30%">
                        <input type="number" name="sasaran" class="percent form-control pencapaian"
                            value="{{ $kpi->sasaran }}" />
                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="hadVarian">Varian</label>

                    <div class="col-sm-10" style="width:30%">
                        <input type="number" name="hadVarian" class="percent form-control"
                            value="{{ $kpi->hadVarian }}" />
                    </div>

                    <label class="col-sm-2 col-form-label" for="hadToleransi">Had Toleransi</label>

                    <div class="col-sm-10" style="width:30%">
                        <input type="number" name="hadToleransi" class="percent form-control"
                            value="{{ $kpi->hadToleransi }}" />
                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="kekerapan">Kekerapan</label>

                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="kekerapan" type="number" value="{{ $kpi->kekerapan }}" />
                    </div>

                    <label class="col-sm-2 col-form-label" for="wajaran">Wajaran</label>

                    <div class="col-sm-10" style="width:30%">
                        <input type="number" name="wajaran" class="percent form-control pencapaian"
                            value="{{ $kpi->wajaran }}" />
                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="peratusPencapaian">Peratus Pencapaian</label>

                    <div class="col-sm-10" style="width:30%">
                        <input type="text" name="peratusPencapaian" id="mySelect" onchange="myFunction()"
                            class="percent form-control" value="{{ $kpi->peratusPencapaian }}" readonly />

                    </div>

                    <label class="col-sm-2 col-form-label" for="tahunAsas">Tahun Asas</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="tahunAsas">
                            <option @selected($kpi->tahunAsas = '2010') value="2010">2010</option>
                            <option @selected($kpi->tahunAsas = '2011') value="2011">2011</option>
                            <option @selected($kpi->tahunAsas = '2012') value="2012">2012</option>
                            <option @selected($kpi->tahunAsas = '2013') value="2013">2013</option>
                            <option @selected($kpi->tahunAsas = '2014') value="2014">2014</option>
                            <option @selected($kpi->tahunAsas = '2015') value="2015">2015</option>
                            <option @selected($kpi->tahunAsas = '2016') value="2016">2016</option>
                            <option @selected($kpi->tahunAsas = '2017') value="2017">2017</option>
                            <option @selected($kpi->tahunAsas = '2018') value="2018">2018</option>
                            <option @selected($kpi->tahunAsas = '2019') value="2019">2019</option>
                            <option @selected($kpi->tahunAsas = '2020') value="2020">2020</option>

                        </select>
                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="peratusPencapaianAsas">Peratus Pencapaian Tahun
                        Asas</label>

                    <div class="col-sm-10" style="width:30%">
                        <input type="text" name="peratusPencapaianAsas" type="text" class="percent form-control"
                            value="{{ $kpi->peratusPencapaianAsas }}" />

                    </div>

                    <label class="col-sm-2 col-form-label" for="sumberData">Sumber Data</label>

                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="sumberData" type="text" value="{{ $kpi->sumberData }}" />
                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="sasaran2021">Sasaran 2021</label>

                    <div class="col-sm-10" style="width:30%">
                        <input type="text" name="sasaran2021" type="text" class="percent form-control"
                            value="{{ $kpi->sasaran2021 }}" />
                    </div>

                    <label class="col-sm-2 col-form-label" for="sumberPengesahan">Sumber Pengesahan</label>

                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="sumberPengesahan" type="text"
                            value="{{ $kpi->sumberPengesahan }}" />
                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="sasaran2022">Sasaran 2022</label>

                    <div class="col-sm-10" style="width:30%">
                        <input type="text" name="sasaran2022" type="text" class="percent form-control"
                            value="{{ $kpi->sasaran2022 }}" />
                    </div>

                    <label class="col-sm-2 col-form-label" for="status">Status</label>

                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="status">
                            <option selected disabled hidden>SILA PILIH</option>
                            <option @selected($kpi->status == '1') value="1">Belum Mencapai Sasaran</option>
                            <option @selected($kpi->status == '2') value="2">Tidak Mencapai Sasaran</option>
                            <option @selected($kpi->status == '3') value="2">Mencapai Sasaran</option>
                        </select>
                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="sasaran2023">Sasaran 2023</label>

                    <div class="col-sm-10" style="width:30%">
                        <input type="text" name="sasaran2023" type="text" class="percent form-control"
                            value="{{ $kpi->sasaran2023 }}" />
                    </div>

                    <label class="col-sm-2 col-form-label" for="status">Pilih Tahun Berkaitan</label>

                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="tahun" id="pilih1">
                            <option selected disabled hidden>SILA PILIH TAHUN</option>
                            <option value="Q1">Q1 (JAN-MAC)</option>
                            <option value="Q2">Q2 (APR-JUN)</option>
                            <option value="Q3">Q3 (JUL-SEP)</option>
                            <option value="Q4">Q4 (OKT-DIS)</option>
                        </select>

                    </div>



                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="sasaran2024">Sasaran 2024</label>

                    <div class="col-sm-10" style="width:30%">
                        <input type="text" name="sasaran2024" type="text" class="percent form-control"
                            value="{{ $kpi->sasaran2024 }}" />
                    </div>

                    <label class="col-sm-2 col-form-label" for=""></label>
                    <div class="col-sm-10" style="width:30%" id="pilih2">
                        <input class="form-control" type="text" name="namaThrust" />

                    </div>

                </div>

        </div>

        <div class="mb-3 row">
            <label class="col-sm-2 col-form-label" for="sasaran2025">Sasaran 2025</label>

            <div class="col-sm-10" style="width:30%">
                <input type="text" name="sasaran2025" type="text" class="percent form-control"
                    value="{{ $kpi->sasaran2025 }}" />
            </div>

        </div>



        {{-- <input class="form-control" name="user_id" type="hidden" value="{{ $user->id }}" /> --}}

        </form>
    </div>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


    <script>
        $(".pencapaian").keyup(function() {

            var checkAllInputFilled = true;
            jQuery.each($(".pencapaian"), function(key, val) {
                if (val.value == '') {
                    checkAllInputFilled = false;
                }
            });

            if (checkAllInputFilled) {
                let pencapaian = $('input[name="pencapaian"]').val();
                let sasaran = $('input[name="sasaran"]').val();
                let wajaran = $('input[name="wajaran"]').val();

                let result = (pencapaian / sasaran) * wajaran;
                $('input[name="peratusPencapaian"]').val(result);
                $('input[name="peratusPencapaian"]').trigger('change');

            }
        });

        // $(".percent").keyup(function(e) {
        //     let int = e.target.value.slice(0, e.target.value.length - 1);

        //     if (int.includes('%')) {
        //         e.target.value = '%';
        //     } else if (int.length >= 3 && int.length <= 4 && !int.includes('.')) {
        //         e.target.value = int.slice(0, 2) + '.' + int.slice(2, 3) + '%';
        //         e.target.setSelectionRange(4, 4);
        //     } else if (int.length >= 5 & int.length <= 6) {
        //         let whole = int.slice(0, 2);
        //         let fraction = int.slice(3, 5);
        //         e.target.value = whole + '.' + fraction + '%';
        //     } else {
        //         e.target.value = int + '%';
        //         e.target.setSelectionRange(e.target.value.length - 1, e.target.value.length - 1);
        //     }
        // });

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


            // var prestasiShown = document.getElementById("prestasi");
            // prestasiShown.innerHTML = "<img src='/img/red.png'></img> " + x;


            // prestasiShown.innerHTML = "<img src='/img/red.png'></img> " + x + "%";
            prestasiShown.style.color = prestasiColor;

        }

        $(function() {
            $("#pilih1").change(function() {
                if ($(this).val() == "3") {
                    $("#pilih2").show();
                } else {
                    $("#pilih2").hide();
                }
            });
        });
    </script>
    </div>



@endsection
