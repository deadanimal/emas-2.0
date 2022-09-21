@extends('base')
@section('content')

    <div class="container">
        <div class="mb-4 text-center">
            <H2>{{ $tindakans->namaTindakan }}</H2>
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

            <form action="/tindakan/{{ $tindakans->id }}" method="POST">
                @csrf
                @method('PUT')

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
                    <label class="col-sm-2 col-form-label" for="kementerian_pelaksana">Kementerian/Agensi Pelaksana</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="kementerian_pelaksana" readonly>
                            <option selected disabled hidden>SILA PILIH</option>
                            <option @selected($tindakans->kementerian_pelaksana == '1') value="1">1</option>
                            <option @selected($tindakans->kementerian_pelaksana == '2') value="2">2</option>
                            <option @selected($tindakans->kementerian_pelaksana == '3') value="3">3</option>
                            <option @selected($tindakans->kementerian_pelaksana == '4') value="4">4</option>
                            <option @selected($tindakans->kementerian_pelaksana == '5') value="5">5</option>

                        </select>
                    </div>

                    <label class="col-sm-2 col-form-label" for="tempohSiap">Tempoh Siap</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="tempohSiap" readonly>
                            <option selected disabled hidden>SILA PILIH</option>
                            <option @selected($tindakans->tempohSiap = '1') value="1">1</option>
                            <option @selected($tindakans->tempohSiap = '2') value="2">2</option>
                            <option @selected($tindakans->tempohSiap = '3') value="3">3</option>
                            <option @selected($tindakans->tempohSiap = '4') value="4">4</option>
                            <option @selected($tindakans->tempohSiap = '5') value="5">5</option>

                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="kategoriSasaran">Kategori Sasaran</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="kategoriSasaran" readonly>
                            <option selected disabled hidden>SILA PILIH</option>
                            <option @selected($tindakans->kategoriSasaran = 'Low Hanging Fruits') value="Low Hanging Fruits">Low Hanging Fruits – sasaran
                                dapat dicapai dengan cepat dan
                                mudah (1-2 tahun sahaja)
                            </option>
                            <option @selected($tindakans->kategoriSasaran = 'Quantifiable targets ') value="Quantifiable targets ">Quantifiable targets -
                                sasaran dapat diukur secara spesifik
                            </option>
                            <option @selected($tindakans->kategoriSasaran = 'Broad Policy') value="Broad Policy">Broad Policy – sasaran lebih luas dan
                                dicapai dalam
                                jangka masa lebih panjang
                            </option>


                        </select>
                    </div>

                    <label class="col-sm-2 col-form-label" for="catatan2021">Catatan 2021</label>
                    <div class="col-sm-10" style="width:30%">
                        <textarea class="form-control" row="10" name="catatan2021" value="{{ $tindakans->catatan2021 }}" readonly></textarea>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="statusPelaksanaan2021">Status Pelaksanaan</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="statusPelaksanaan2021" readonly>
                            <option selected disabled hidden>SILA PILIH</option>
                            <option @selected($tindakans->statusPelaksanaan2021 = 'Belum Mula') value="Belum Mula">Belum Mula</option>
                            <option @selected($tindakans->statusPelaksanaan2021 = 'Dalam Pelaksanaan') value="Dalam Pelaksanaan">Dalam Pelaksanaan</option>
                            <option @selected($tindakans->statusPelaksanaan2021 = 'Siap') value="Siap">Siap</option>
                            <option @selected($tindakans->statusPelaksanaan2021 = 'Tiada Maklumat') value="Tiada Maklumat">Tiada Maklumat</option>

                        </select>
                    </div>

                    <label class="col-sm-2 col-form-label" for="catatan2022">Catatan 2022</label>
                    <div class="col-sm-10" style="width:30%">
                        <textarea class="form-control" row="10" name="catatan2022" value="{{ $tindakans->catatan2022 }}" readonly></textarea>

                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="sasaran2021">Sasaran 2021</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="sasaran2021" value="{{ $tindakans->sasaran2021 }}" readonly/>

                    </div>

                    <label class="col-sm-2 col-form-label" for="status">Status</label>

                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="status" readonly>
                            <option selected disabled hidden>SILA PILIH</option>
                            <option @selected($tindakans->status = '1') value="1">Belum Dilaksana</option>
                            <option @selected($tindakans->status = '2') value="2">Dalam Pelaksanaan</option>
                            <option @selected($tindakans->status = '3') value="3">Tamat Pelaksanaan</option>
                        </select>
                    </div>


                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="pencapaian2021">Pencapaian 2021</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="pencapaian2021" value="{{ $tindakans->pencapaian2021 }}" readonly/>

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
                        <input class="form-control" name="pencapaian2022" value="{{ $tindakans->pencapaian2022 }}" readonlye/>

                    </div>

                </div>

                <br><br>


                <div class="row align-items-center">
                    <div class="col col-lg-8">
                        <span><b>Prestasi Tindakan - Pencapaian Semasa</b></span>


                    </div>

                </div>
                <hr><br>

                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th class="align-middle">Tahun Semasa Yang Dilaporkan</th>
                            <th class="align-middle">Q1 (JAN-MAC)</th>
                            <th class="align-middle">Q2 (APRIL-JUN)</th>
                            <th class="align-middle">Q3 (JULAI-SEPT)</th>
                            <th class="align-middle">Q4 (OKT-DIS)</th>
                            <th class="align-middle">Pencapaian</th>
                            <th class="align-middle">Prestasi Tindakan</th>


                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="col-sm-10">
                                    <select class="form-control" name="tahun">
                                        <option @selected($tindakans->tahun == '2015') value="2015">2015</option>
                                        <option @selected($tindakans->tahun == '2016') value="2016">2016</option>
                                        <option @selected($tindakans->tahun == '2017') value="2017">2017</option>
                                        <option @selected($tindakans->tahun == '2018') value="2018">2018</option>
                                        <option @selected($tindakans->tahun == '2019') value="2019">2019</option>
                                        <option @selected($tindakans->tahun == '2020') value="2020">2020</option>
                                        <option @selected($tindakans->tahun == '2021') value="2021">2021</option>
                                        <option @selected($tindakans->tahun == '2022') value="2022">2022</option>
                                        <option @selected($tindakans->tahun == '2023') value="2023">2023</option>

                                    </select>
                                </div>
                            </td>
                            <td>
                                <input type="number" name="q1" class="form-control pencapaian" id="mySelect"
                                    onchange="myFunction()" placeholder="Pencapaian"
                                    value="{{ $tindakans->peratusPencapaian }}" />
                            </td>
                            <td>
                                <input type="number" name="q2" class="form-control pencapaian" id="mySelect"
                                    onchange="myFunction()" placeholder="Pencapaian"
                                    value="{{ $tindakans->peratusPencapaian }}" />
                            </td>
                            <td>
                                <input type="number" name="q3" class="form-control pencapaian" id="mySelect"
                                    onchange="myFunction()" placeholder="Pencapaian"
                                    value="{{ $tindakans->peratusPencapaian }}" />
                            </td>
                            <td>
                                <input type="number" name="q4" class="form-control pencapaian" id="mySelect"
                                    onchange="myFunction()" placeholder="Pencapaian"
                                    value="{{ $tindakans->peratusPencapaian }}" />

                                {{-- <input type="text" name="q4" id="mySelect" onchange="myFunction()"
                                    class="percent form-control" value="{{ $tindakans->peratusPencapaian }}" /> --}}

                            </td>
                            <td>
                                <div class="col-sm-10">
                                    <input type="text" name="peratusPencapaian" id="mySelect"
                                        onchange="myFunction()" class="percent form-control"
                                        value="{{ $tindakans->peratusPencapaian }}" />

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
                            class="percent form-control" value="{{ $tindakans->peratusPencapaian }}" />

                    </div>


                </div><br>


                <div class="col" style="text-align: center">
                    <button class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                        type="submit" value="Save"
                        onclick="return confirm('Adakah anda mahu menyimpan data ini?')">&nbsp;Simpan Data
                    </button>
                </div>


            </form>
        </div>

    </div>

@endsection
