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

            <form action="{{ route('markah.store') }}" method="POST">
                @csrf

                <div class="col" style="text-align: right">
                    <button class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                        type="submit">&nbsp;Simpan Kemas Kini Markah
                    </button>
                </div>

                <br><br>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="pemangkin_id">Tema</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="pemangkin_id">
                            <option value=""></option>

                            @foreach ($listTema as $listTema)
                                <option value="{{ $listTema->id }}">{{ $listTema->keteranganTema }}</option>
                            @endforeach

                        </select>
                    </div>

                    <label class="col-sm-2 col-form-label" for="bab_id">Bab</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="bab_id">
                            <option value=""></option>

                            @foreach ($listBab as $listBab)
                                <option value="{{ $listBab->id }}">{{ $listBab->keteranganBab }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="bidang_id">Bidang Keutamaan</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="bidang_id">
                            <option value=""></option>

                            @foreach ($listBidang as $listBidang)
                                <option value="{{ $listBidang->id }}">{{ $listBidang->keteranganBidang }}</option>
                            @endforeach

                        </select>
                    </div>

                    <label class="col-sm-2 col-form-label" for="outcome_id">Outcome Nasional</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="outcome_id">
                            <option value=""></option>

                            @foreach ($list as $list)
                                <option value="{{ $list->id }}">{{ $list->keteranganOutcome }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>


                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="namaKpi">Nama KPI Nasional</label>

                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="namaKpi" type="text" />
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
                        {{-- @if ($peratusanPencapaian == '100')
                            <span class="badge bg-success text white">
                                {{ $peratusanPencapaian ?? '' }}
                            </span>
                        @else
                            <span class="badge bg-primary text white">
                                {{ $peratusanPencapaian ?? '' }}
                            </span>
                        @endif --}}


                    </div>

                    {{-- if peratus pencapaian <50%, display red color,
                    else if peratus pencapaian == 50% and 79.99, display yellow,
                    else display hijau --}}



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
                        <input class="form-control" name="pencapaian" type="text" />
                    </div>

                    <label class="col-sm-2 col-form-label" for="sasaran">Sasaran</label>

                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="sasaran" type="text" />
                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="hadVarian">Had Varian</label>

                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="hadVarian" type="text" />
                    </div>

                    <label class="col-sm-2 col-form-label" for="hadToleransi">Had Toleransi</label>

                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="hadToleransi" type="text" />
                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="kekerapan">Kekerapan</label>

                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="kekerapan" type="text" />
                    </div>

                    <label class="col-sm-2 col-form-label" for="wajaran">Wajaran</label>

                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="wajaran" type="text" />
                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="peratusPencapaian">Peratus Pencapaian</label>

                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="peratusPencapaian" type="text" />
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
                    <label class="col-sm-2 col-form-label" for="peratusPencapaianAsas">Peratus Pencapaian Tahun Asas</label>

                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="peratusPencapaianAsas" type="text" />
                    </div>

                    <label class="col-sm-2 col-form-label" for="sumberData">Sumber Data</label>

                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="sumberData" type="text" />
                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="sasaran2021">Sasaran 2021</label>

                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="sasaran2021" type="text" />
                    </div>

                    <label class="col-sm-2 col-form-label" for="sumberPengesahan">Sumber Pengesahan</label>

                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="sumberPengesahan" type="text" />
                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="sasaran2022">Sasaran 2022</label>

                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="sasaran2022" type="text" />
                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="sasaran2023">Sasaran 2023</label>

                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="sasaran2023" type="text" />
                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="sasaran2024">Sasaran 2024</label>

                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="sasaran2024" type="text" />
                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="sasaran2025">Sasaran 2025</label>

                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="sasaran2025" type="text" />
                    </div>

                </div>

                <input class="form-control" name="user_id" type="hidden" value="{{ $user->id }}" />

            </form>
        </div>

    </div>


@endsection
