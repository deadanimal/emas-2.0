@extends('base')
@section('content')


    <div class="container">
        <div class="mb-4 text-center">
            <H2>KEMAS KINI MAKLUMAT</H2>
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





        <form action="/PPD/kpi/{{ $kpi->id }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">

                <label class="col-form-label" for="pemangkin_id">Tema</label>
                <div>

                    @if ($kpi->pemangkin != null)
                        <input class="form-control" value="{{ $kpi->pemangkin->namaTema }}" readonly />
                        <input class="form-control" name="bidang_id" type="hidden" value="{{ $kpi->pemangkin->id }}" />
                    @else
                        <input class="form-control" value="Tema/ Pemangkin Dasar telah dipadam" readonly />
                    @endif

                </div>

                <label class="col-form-label" for="bab_id">Bab</label>
                <div>

                    @if ($kpi->bab != null)
                        <input class="form-control" value="{{ $kpi->bab->namaBab }}" readonly />
                        <input class="form-control" name="bidang_id" type="hidden" value="{{ $kpi->bab->id }}" />
                    @else
                        <input class="form-control" value="Bab telah dipadam" readonly />
                    @endif

                </div>
            </div>


            <div class="form-group">
                <label class="col-form-label" for="bidang_id">Bidang Keutamaan</label>
                <div>

                    @if ($kpi->bidang != null)
                        <input class="form-control" value="{{ $kpi->bidang->namaBidang }}" readonly />
                        <input class="form-control" name="bidang_id" type="hidden" value="{{ $kpi->bidang->id }}" />
                    @else
                        <input class="form-control" value="Bidang Keutamaan telah dipadam" readonly />
                    @endif



                    <label class="col-form-label" for="outcome_id">Outcome Nasional</label>
                    <div>
                        @if ($kpi->outcome != null)
                            <input class="form-control" value="{{ $kpi->outcome->namaOutcome }}" readonly />
                            <input class="form-control" name="outcome_id" type="hidden" value="{{ $kpi->outcome->id }}" />
                        @else
                            <input class="form-control" value="Outcome telah dipadam" readonly />
                        @endif

                    </div>
                </div>
            </div>


            <div class="mb-3 row">
                <label class="col-form-label" for="namaKpi">Nama KPI Nasional</label>

                <div>
                    <input class="form-control" name="namaKpi" value="{{ $kpi->namaKpi }}" readonly />
                </div>
            </div><br>

            <div class="mb-3 row ">
                <label class="col-sm-2 col-form-label" for="jenisKpi">Jenis Sasaran</label>
                <div class="col-sm-10" style="width:30%">
                    <select class="form-control" name="jenisKpi">
                        <option @selected($kpi->jenisKpi == 'Minimum') value="Minimum">Minimum</option>
                        <option @selected($kpi->jenisKpi == 'Maximum') value="Maximum">Maximum</option>

                    </select>
                </div>

                <label class="col-sm-2 col-form-label" for="kategoriSasaran">Kategori Sasaran</label>
                <div class="col-sm-10" style="width:30%">
                    <select class="form-control" name="kategoriSasaran">
                        <option selected disabled hidden>SILA PILIH SASARAN</option>
                        <option @selected($kpi->kategoriSasaran == 'Low Hanging Fruits') value="Low Hanging Fruits">Low Hanging Fruits</option>
                        <option @selected($kpi->kategoriSasaran == 'Quantifiable targets') value="Quantifiable targets">Quantifiable Targets</option>
                        <option @selected($kpi->kategoriSasaran == 'Broad Policy') value="Broad Policy">Broad Policy</option>
                    </select>
                </div>


            </div>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="unitUkuran">Unit Ukuran</label>
                <div class="col-sm-10" style="width:30%">

                    <select class="form-control" name="unitUkuran">
                        <option @selected($kpi->unitUkuran == '%') value="%">%</option>
                        <option @selected($kpi->unitUkuran == 'RM') value="RM">RM</option>
                        <option @selected($kpi->unitUkuran == 'Bilangan') value="Bilangan">Bilangan</option>
                        <option @selected($kpi->unitUkuran == 'Indeks') value="Indeks">Indeks</option>
                        <option @selected($kpi->unitUkuran == 'Kedudukan') value="Kedudukan">Kedudukan</option>

                    </select>
                </div>
                <label class="col-sm-2 col-form-label" for="kekerapan">Kekerapan</label>
                <div class="col-sm-10" style="width:30%">
                    <input class="form-control" name="kekerapan" type="number" value="{{ $kpi->kekerapan }}" />

                </div>

            </div>

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="hadVarian">Varians</label>
                <div class="col-sm-10" style="width:30%">
                    <input type="number" name="hadVarian" class="percent form-control" value="{{ $kpi->hadVarian }}" />

                </div>
                <label class="col-sm-2 col-form-label" for="wajaran">Wajaran</label>
                <div class="col-sm-10" style="width:30%">
                    <input type="number" name="wajaran" class="percent form-control" value="{{ $kpi->wajaran }}" />

                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="hadToleransi">Had Toleransi</label>
                <div class="col-sm-10" style="width:30%">

                    <input type="number" name="hadToleransi" class="percent form-control"
                        value="{{ $kpi->hadToleransi }}" />
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
                <label class="col-sm-2 col-form-label" for="peratusPencapaianAsas">Pencapaian Tahun
                    Asas</label>
                <div class="col-sm-10" style="width:30%">
                    <input type="text" name="peratusPencapaianAsas" type="text" class="percent form-control"
                        value="{{ $kpi->peratusPencapaianAsas }}" />

                </div>

                <label class="col-sm-2 col-form-label" for="sasaran2021">Sasaran 2021</label>
                <div class="col-sm-10" style="width:30%">
                    <input type="text" name="sasaran2021" type="text" class="percent form-control"
                        value="{{ $kpi->sasaran2021 }}" />
                </div>

            </div>

            <div class="mb-3 row">

                <label class="col-sm-2 col-form-label" for="sumberData">Sumber Data</label>
                <div class="col-sm-10" style="width:30%">
                    <input class="form-control" name="sumberData" type="text" value="{{ $kpi->sumberData }}" />

                </div>
                <label class="col-sm-2 col-form-label" for="sasaran2022">Sasaran 2022</label>
                <div class="col-sm-10" style="width:30%">
                    <input type="text" name="sasaran2022" type="text" class="percent form-control"
                        value="{{ $kpi->sasaran2022 }}" />
                </div>
            </div>

            <div class="mb-3 row">

                <label class="col-sm-2 col-form-label" for="sumberPengesahan">Sumber Pengesahan</label>
                <div class="col-sm-10" style="width:30%">
                    <input class="form-control" name="sumberPengesahan" type="text"
                        value="{{ $kpi->sumberPengesahan }}" />
                </div>
                <label class="col-sm-2 col-form-label" for="sasaran2023">Sasaran 2023</label>
                <div class="col-sm-10" style="width:30%">
                    <input type="text" name="sasaran2023" type="text" class="percent form-control"
                        value="{{ $kpi->sasaran2023 }}" />
                </div>

            </div>

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="sasaran2024">Sasaran 2024</label>
                <div class="col-sm-10" style="width:30%">
                    <input type="text" name="sasaran2024" type="text" class="percent form-control"
                        value="{{ $kpi->sasaran2024 }}" />
                </div>
                <label class="col-sm-2 col-form-label" for="sasaran2025">Sasaran 2025</label>
                <div class="col-sm-10" style="width:30%">
                    <input type="text" name="sasaran2025" type="text" class="percent form-control"
                        value="{{ $kpi->sasaran2025 }}" />
                </div>

            </div>

            <div class="mb-3 row">

                <label class="col-sm-2 col-form-label" for="sasaranRMK">Sasaran RMKe-12</label>
                <div class="col-sm-10" style="width:30%">
                    <input type="text" name="sasaranRMK" type="text" class="percent form-control"
                        value="{{ $kpi->sasaranRMK }}" />
                </div>
            </div>

            <br><br>

            <div class="col" style="text-align: center">
                <button class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                    type="submit" value="Save"
                    onclick="return confirm('Adakah anda mahu menyimpan data ini?')">&nbsp;Simpan Kemas Kini
                </button>
            </div>
        </form>



    </div>

    {{-- <input class="form-control" name="user_id" type="hidden" value="{{ $user->id }}" /> --}}

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
                if ($(this).val() == "1") {
                    $("#pilih2").hide();
                } else {
                    $("#pilih2").show();
                }
            });
        });
    </script>
    </div>



@endsection
