@extends('base')
@section('content')

    <div class="container">
        <br>
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
                        <input class="form-control" name="pemangkin_id" type="hidden"
                            value="{{ $kpi->pemangkin->id }}" />


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
                            <input class="form-control" name="outcome_id" type="hidden"
                                value="{{ $kpi->outcome->id }}" />
                        @else
                            <label>Outcome telah dipadam</label>
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

                        {{-- @if ($peratusanPencapaian == '100')
                            <span class="badge bg-success text white">
                                {{ $peratusanPencapaian ?? '' }}
                            </span>
                        @else
                            <span class="badge bg-primary text white">
                                {{ $peratusanPencapaian ?? '' }}
                            </span>
                        @endif --}}

                        {{-- <body>

                            <p style="background-color:#04C367"> > 80%</p>
                            <p style="background-color:yellow">
                                < 50%-79.99%</p>
                                    <p style="background-color:red">
                                        < 50%</p>

                        </body> --}}

                    </div>





                    {{-- if peratus pencapaian <50%, display red color,
                    else if peratus pencapaian == 50% and 79.99, display yellow,
                    else display hijau --}}



                    <label class="col-sm-2 col-form-label" for="unitUkuran">Unit</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="unitUkuran">
                            <option value="%">%</option>
                            {{-- <option value="RM">RM</option> --}}
                            <option value="Bilangan">Bilangan</option>
                            {{-- <option value="Indeks">Indeks</option>
                            <option value="Kedudukan">Kedudukan</option> --}}
                        </select>
                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="pencapaian">Pencapaian</label>

                    <div class="col-sm-10" style="width:30%">
                        <input type="text" name="pencapaian" type="text" class="percent form-control" />
                    </div>

                    <label class="col-sm-2 col-form-label" for="sasaran">Sasaran</label>


                    <div class="col-sm-10" style="width:30%">
                        <input type="text" name="sasaran" type="text" class="percent form-control" />
                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="hadVarian">Had Varian</label>

                    <div class="col-sm-10" style="width:30%">
                        <input type="text" name="hadVarian" type="text" class="percent form-control" />
                    </div>

                    <label class="col-sm-2 col-form-label" for="hadToleransi">Had Toleransi</label>

                    <div class="col-sm-10" style="width:30%">
                        <input type="text" name="hadToleransi" type="text" class="percent form-control" />
                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="kekerapan">Kekerapan</label>

                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="kekerapan" type="text" />
                    </div>

                    <label class="col-sm-2 col-form-label" for="wajaran">Wajaran</label>

                    <div class="col-sm-10" style="width:30%">
                        <input type="text" name="wajaran" type="text" class="percent form-control" />
                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="peratusPencapaian">Peratus Pencapaian</label>

                    <div class="col-sm-10" style="width:30%">
                        <input type="text" name="peratusPencapaian" id="mySelect" onchange="myFunction()"
                            class="percent form-control" />

                    </div>

                    <label class="col-sm-2 col-form-label" for="tahunAsas">Tahun Asas</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="tahunAsas">
                            <option value="2019">2019</option>
                            <option value="2018">2018</option>
                            <option value="2017">2017</option>
                            <option value="2016">2016</option>
                            <option value="2015">2015</option>
                        </select>
                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="peratusPencapaianAsas">Peratus Pencapaian Tahun
                        Asas</label>

                    <div class="col-sm-10" style="width:30%">
                        <input type="text" name="peratusPencapaianAsas" type="text"
                            class="percent form-control" />

                    </div>

                    <label class="col-sm-2 col-form-label" for="sumberData">Sumber Data</label>

                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="sumberData" type="text" />
                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="sasaran2021">Sasaran 2021</label>

                    <div class="col-sm-10" style="width:30%">
                        <input type="text" name="sasaran2021" type="text" class="percent form-control" />
                    </div>

                    <label class="col-sm-2 col-form-label" for="sumberPengesahan">Sumber Pengesahan</label>

                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="sumberPengesahan" type="text" />
                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="sasaran2022">Sasaran 2022</label>

                    <div class="col-sm-10" style="width:30%">
                        <input type="text" name="sasaran2022" type="text" class="percent form-control" />
                    </div>

                    <label class="col-sm-2 col-form-label" for="status">Status</label>

                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="status">
                            <option selected disabled hidden>SILA PILIH</option>
                            <option value="1">Belum Mencapai Sasaran</option>
                            <option value="2">Tidak Mencapai Sasaran</option>
                            <option value="2">Mencapai Sasaran</option>
                        </select>
                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="sasaran2023">Sasaran 2023</label>

                    <div class="col-sm-10" style="width:30%">
                        <input type="text" name="sasaran2023" type="text" class="percent form-control" />
                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="sasaran2024">Sasaran 2024</label>

                    <div class="col-sm-10" style="width:30%">
                        <input type="text" name="sasaran2024" type="text" class="percent form-control" />
                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="sasaran2025">Sasaran 2025</label>

                    <div class="col-sm-10" style="width:30%">
                        <input type="text" name="sasaran2025" type="text" class="percent form-control" />
                    </div>

                </div>

                {{-- <input class="form-control" name="user_id" type="hidden" value="{{ $user->id }}" /> --}}

            </form>
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


        <script>
            $(".percent").keyup(function(e) {
                let int = e.target.value.slice(0, e.target.value.length - 1);

                if (int.includes('%')) {
                    e.target.value = '%';
                } else if (int.length >= 3 && int.length <= 4 && !int.includes('.')) {
                    e.target.value = int.slice(0, 2) + '.' + int.slice(2, 3) + '%';
                    e.target.setSelectionRange(4, 4);
                } else if (int.length >= 5 & int.length <= 6) {
                    let whole = int.slice(0, 2);
                    let fraction = int.slice(3, 5);
                    e.target.value = whole + '.' + fraction + '%';
                } else {
                    e.target.value = int + '%';
                    e.target.setSelectionRange(e.target.value.length - 1, e.target.value.length - 1);
                }
            })

            function myFunction() {
                var x = document.getElementById("mySelect").value;
                x = x.substring(0, x.length - 1)
                x = parseFloat(x)
                var prestasiColor = "yellow"
                if (x < 50) {
                    prestasiColor = "green"

                } else if (x < 80) {

                } else {
                    prestasiColor = "red"


                }


                var prestasiShown = document.getElementById("prestasi");
                prestasiShown.innerHTML = "<img src='/img/red.png'></img> " + x;


                // prestasiShown.innerHTML = "<img src='/img/red.png'></img> " + x + "%";
                prestasiShown.style.color = prestasiColor;

            }
        </script>
    </div>



@endsection
