@extends('base')
@section('content')

    <div class="container">
        <div class="mb-4 text-center">
            <H2>KEMASKINI PRESTASI TINDAKAN - <br>{{ $tindakans->namaTindakan }}</H2>
        </div>

        <br>

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

            <form action="/PPD/prestasi/{{ $tindakans->id }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row align-items-center">
                    <div class="col col-lg-8">
                        <span><b>Prestasi Tindakan - Pencapaian Semasa</b></span>


                    </div>

                    <hr><br>

                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th class="align-middle">Tahun Semasa Yang Dilaporkan</th>
                                <th class="align-middle">Pilih Quarter</th>
                                <th class="align-middle">Pencapaian</th>
                                <th class="align-middle">Catatan</th>
                                <th class="align-middle">Prestasi Tindakan</th>


                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="tahun">
                                            <option @selected($tindakans->tahun2021 == '2021') value="2021">2021</option>
                                            <option @selected($tindakans->tahun2022 == '2022') value="2022">2022</option>
                                            <option @selected($tindakans->tahun2023 == '2023') value="2023">2023</option>
                                            <option @selected($tindakans->tahun2024 == '2024') value="2024">2024</option>
                                            <option @selected($tindakans->tahun2025 == '2025') value="2025">2025</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <div class="col-sm-10">
                                        <select class="form-control" name="quarter">
                                            <option @selected($tindakans->q1 == 'Q1') value="Q1">Q1 (JAN-MAC)</option>
                                            <option @selected($tindakans->q2 == 'Q2') value="Q2">Q2 (APR-JUN)</option>
                                            <option @selected($tindakans->q3 == 'Q3') value="Q3">Q3 (JUL-SEP)</option>
                                            <option @selected($tindakans->q4 == 'Q4') value="Q4">Q4 (OKT-DIS)</option>
                                        </select>
                                    </div>
                                </td>
                                <td>
                                    <input type="number" name="q1" class="form-control pencapaian" id="mySelect"
                                        onchange="myFunction()" placeholder="Pencapaian"
                                        value="{{ $tindakans->peratusPencapaian }}" />
                                </td>

                                <td>
                                    <div class="col-sm-10">
                                        <input type="text" name="catatan" class="form-control"
                                            value="{{ $tindakans->catatan }}" />

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
                                class="form-control" value="{{ $tindakans->peratusPencapaian }}" />

                        </div>


                    </div><br>
                </div>
                <hr><br>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="pemangkin_id">Tema</label>
                    <div class="col-sm-10" style="width:30%">

                        <input class="form-control" value="{{ $tindakans->pemangkin->namaTema ?? 'Tiada' }}" readonly />

                    </div>

                    <label class="col-sm-2 col-form-label" for="bab_id">Bab</label>
                    <div class="col-sm-10" style="width:30%">

                        <input class="form-control" value="{{ $tindakans->bab->namaBab ?? 'Tiada' }}" readonly />

                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="bidang_id">Bidang Utama</label>
                    <div class="col-sm-10" style="width:30%">

                        <input class="form-control" value="{{ $tindakans->bidang->namaBidang ?? 'Tiada' }}" readonly />

                    </div>

                    <label class="col-sm-2 col-form-label" for="outcome_id">Outcome Nasional</label>
                    <div class="col-sm-10" style="width:30%">

                        <input class="form-control" value="{{ $tindakans->outcome->namaOutcome ?? 'Tiada' }}" readonly />

                    </div>
                </div>




                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="namaTindakan">Tindakan</label>

                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="namaTindakan" value="{{ $tindakans->namaTindakan }}" readonly />
                    </div>


                    <label class="col-sm-2 col-form-label" for="kementerian_penyelaras">Kementerian/Agensi
                        Penyelaras</label>
                    <div class="col-sm-10" style="width:30%">

                        <input class="form-control" type="text" name="kementerian_penyelaras" readonly
                            value="{{ $tindakans->kementerian_penyelaras }}" />

                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="kementerian_pelaksana">Kementerian/Agensi
                        Pelaksana</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="kementerian_pelaksana" readonly
                            value="{{ $tindakans->kementerian_pelaksana }}" />
                    </div>

                    <label class="col-sm-2 col-form-label" for="tempohSiap">Tempoh Siap</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="tempohSiap" readonly
                            value="{{ $tindakans->tempohSiap }}" />

                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="kategoriSasaran">Kategori Sasaran</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="kategoriSasaran" readonly
                            value="{{ $tindakans->kategoriSasaran }}" />

                    </div>

                    <label class="col-sm-2 col-form-label" for="catatan2021">Catatan 2021</label>
                    <div class="col-sm-10" style="width:30%">
                        <textarea class="form-control" row="10" name="catatan2021" readonly>{{ $tindakans->catatan2021 }}</textarea>

                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="statusPelaksanaan2021">Status Pelaksanaan</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="statusPelaksanaan2021" readonly
                            value="{{ $tindakans->statusPelaksanaan2021 }}" />

                    </div>

                    <label class="col-sm-2 col-form-label" for="catatan2022">Catatan 2022</label>
                    <div class="col-sm-10" style="width:30%">
                        <textarea class="form-control" row="10" name="catatan2022" readonly>{{ $tindakans->catatan2022 }}</textarea>

                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="sasaran2021">Sasaran 2021</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="sasaran2021" value="{{ $tindakans->sasaran2021 }}" readonly />

                    </div>

                    <label class="col-sm-2 col-form-label" for="status">Status</label>

                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="status" value="{{ $tindakans->status }}" readonly />

                    </div>


                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="pencapaian2021">Pencapaian 2021</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="pencapaian2021" value="{{ $tindakans->pencapaian2021 }}"
                            readonly />

                    </div>


                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="statusPelaksanaan">Status Pelaksanaan 2022</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="statusPelaksanaan" readonly
                            value="{{ $tindakans->statusPelaksanaan }}" />

                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="pencapaian2022">Pencapaian 2022</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="pencapaian2022" value="{{ $tindakans->pencapaian2022 }}"
                            readonly readonlye />

                    </div>

                </div><br>

                <hr><br>





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
    </script>

@endsection
