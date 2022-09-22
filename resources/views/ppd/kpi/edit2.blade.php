@extends('base')
@section('content')
    <style>
        .hidden {
            display: none;
        }
    </style>
    <div class="container">
        <div class="mb-4 text-center">
            <H2>KEMASKINI PRESTASI KPI NASIONAL</H2>
        </div>

        <div class="form-floating;">

            <form action="/kpi/{{ $kpi->id }}" method="POST">
                @csrf
                @method('PUT')


                <br>

                <div class="row align-items-center">
                    <div class="col col-lg-8">
                        <span><b>Prestasi KPI Nasional - Pencapaian Semasa</b></span>


                    </div>

                    <hr><br>

                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th class="align-middle">Tahun Semasa Yang Dilaporkan</th>
                                <th class="align-middle">Q1 (JAN-MAC)</th>
                                <th class="align-middle">Q2 (APRIL-JUN)</th>
                                <th class="align-middle">Q3 (JULAI-SEPT)</th>
                                <th class="align-middle">Q4 (OKT-DIS)</th>
                                <th class="align-middle">Pencapaian</th>
                                <th class="align-middle">Prestasi KPI</th>


                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="tahun">
                                            <option @selected($kpi->tahun == '2015') value="2015">2015</option>
                                            <option @selected($kpi->tahun == '2016') value="2016">2016</option>
                                            <option @selected($kpi->tahun == '2017') value="2017">2017</option>
                                            <option @selected($kpi->tahun == '2018') value="2018">2018</option>
                                            <option @selected($kpi->tahun == '2019') value="2019">2019</option>
                                            <option @selected($kpi->tahun == '2020') value="2020">2020</option>
                                            <option @selected($kpi->tahun == '2021') value="2021">2021</option>
                                            <option @selected($kpi->tahun == '2022') value="2022">2022</option>
                                            <option @selected($kpi->tahun == '2023') value="2023">2023</option>

                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <input type="number" name="q1" class="form-control pencapaian" id="mySelect"
                                        onchange="myFunction()" placeholder="Pencapaian"
                                        value="{{ $kpi->peratusPencapaian }}" />
                                </td>
                                <td>
                                    <input type="number" name="q2" class="form-control pencapaian" id="mySelect"
                                        onchange="myFunction()" placeholder="Pencapaian"
                                        value="{{ $kpi->peratusPencapaian }}" />
                                </td>
                                <td>
                                    <input type="number" name="q3" class="form-control pencapaian" id="mySelect"
                                        onchange="myFunction()" placeholder="Pencapaian"
                                        value="{{ $kpi->peratusPencapaian }}" />
                                </td>
                                <td>
                                    <input type="number" name="q4" class="form-control pencapaian" id="mySelect"
                                        onchange="myFunction()" placeholder="Pencapaian"
                                        value="{{ $kpi->peratusPencapaian }}" />

                                    {{-- <input type="text" name="q4" id="mySelect" onchange="myFunction()"
                                    class="percent form-control" value="{{ $kpi->peratusPencapaian }}" /> --}}

                                </td>
                                <td>
                                    <div class="col-sm-10">
                                        <input type="text" name="peratusPencapaian" id="mySelect"
                                            onchange="myFunction()" class="percent form-control"
                                            value="{{ $kpi->peratusPencapaian }}" readonly />

                                    </div>
                                </td>
                                <td id="prestasi"></td>
                            </tr>

                        </tbody>
                    </table>

                    <br>




                    <div class="mb-3 row">

                        <label class="col-sm-2 col-form-label" for="peratusPencapaian">Peratus Pencapaian</label>

                        <div class="col-sm-10" style="width:30%">
                            <input type="text" name="peratusPencapaian" id="mySelect" onchange="myFunction()"
                                class="percent form-control" value="{{ $kpi->peratusPencapaian }}" />

                        </div>


                    </div><br>
                </div>
                <hr><br>

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

                    <label class="col-sm-2 col-form-label" for="bab_id">Bab</label>
                    <div class="col-sm-10" style="width:30%">

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
                    <div class="col-sm-10" style="width:30%">

                        @if ($kpi->bidang != null)
                            <input class="form-control" value="{{ $kpi->bidang->namaBidang }}" readonly />
                            <input class="form-control" name="bidang_id" type="hidden"
                                value="{{ $kpi->bidang->id }}" />
                        @else
                            <input class="form-control" value="Bidang Keutamaan telah dipadam" readonly />
                        @endif

                    </div>

                    <label class="col-sm-2 col-form-label" for="outcome_id">Outcome Nasional</label>
                    <div class="col-sm-10" style="width:30%">

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

                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="namaKpi" value="{{ $kpi->namaKpi }}" readonly />
                    </div>

                    <label class="col-sm-2 col-form-label" for="jenisKpi">Jenis Sasaran</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="jenisKpi" readonly>
                            <option @selected($kpi->jenisKpi == 'Minimum') value="Minimum">Minimum</option>
                            <option @selected($kpi->jenisKpi == 'Maximum') value="Maximum">Maximum</option>

                        </select>
                    </div>
                </div>


                <div class="mb-3 row">


                    <label class="col-sm-2 col-form-label" for="unitUkuran">Unit Ukuran</label>
                    <div class="col-sm-10" style="width:30%">

                        <select class="form-control" name="unitUkuran" readonly>
                            <option @selected($kpi->unitUkuran == '%') value="%">%</option>
                            <option @selected($kpi->unitUkuran == 'RM') value="RM">RM</option>
                            <option @selected($kpi->unitUkuran == 'Bilangan') value="Bilangan">Bilangan</option>
                            <option @selected($kpi->unitUkuran == 'Indeks') value="Indeks">Indeks</option>
                            <option @selected($kpi->unitUkuran == 'Kedudukan') value="Kedudukan">Kedudukan</option>

                        </select>
                    </div>

                </div>

                <div class="mb-3 row">

                    <label class="col-sm-2 col-form-label" for="sasaran">Sasaran</label>
                    <div class="col-sm-10" style="width:30%">
                        <input type="number" name="sasaran" class="percent form-control pencapaian"
                            value="{{ $kpi->sasaran }}" readonly />
                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="hadVarian">Varians</label>

                    <div class="col-sm-10" style="width:30%">
                        <input type="number" name="hadVarian" class="percent form-control"
                            value="{{ $kpi->hadVarian }}" readonly />
                    </div>

                    <label class="col-sm-2 col-form-label" for="hadToleransi">Had Toleransi</label>

                    <div class="col-sm-10" style="width:30%">
                        <input type="number" name="hadToleransi" class="percent form-control"
                            value="{{ $kpi->hadToleransi }}" readonly />
                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="kekerapan">Kekerapan</label>

                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="kekerapan" type="number" value="{{ $kpi->kekerapan }}"
                            readonly />
                    </div>

                    <label class="col-sm-2 col-form-label" for="wajaran">Wajaran</label>

                    <div class="col-sm-10" style="width:30%">
                        <input type="number" name="wajaran" class="percent form-control pencapaian"
                            value="{{ $kpi->wajaran }}" readonly />
                    </div>

                </div>

                <div class="mb-3 row">

                    <label class="col-sm-2 col-form-label" for="tahunAsas">Tahun Asas</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="tahunAsas" readonly>
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
                        <input type="text" name="sasaran2021" type="text" class="percent form-control"
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
                        <input type="text" name="sasaran2022" type="text" class="percent form-control"
                            value="{{ $kpi->sasaran2022 }}" readonly />
                    </div>

                    <label class="col-sm-2 col-form-label" for="status">Status</label>

                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="status" readonly>
                            <option selected disabled hidden>SILA PILIH STATUS</option>
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
                            value="{{ $kpi->sasaran2023 }}" readonly />
                    </div>




                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="sasaran2024">Sasaran 2024</label>


                    <div class="col-sm-10" style="width:30%">
                        <input type="text" name="sasaran2024" type="text" class="percent form-control"
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
        // window.addEventListener('load', () => {
        //     document.querySelector('#selector').addEventListener('change', yesnoCheck)
        //     yesnoCheck({
        //         target: document.querySelector('#selector')
        //     })
        // })

        // function yesnoCheck(e) {
        //     document.querySelectorAll('#q1, #q2, #q3, #q4').forEach(el => el.classList.add('hidden'));
        //     let targ = e.target.querySelector('option:checked').dataset.targ;
        //     document.querySelector(targ).classList.remove('hidden');
        // }

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
    </script>
@endsection
