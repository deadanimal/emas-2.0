@extends('base')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>KEMAS KINI DATA</H2>
        </div>


        <br>
        <br>



        <div class="form-floating;">
            <form action="/kpi/{{ $kpi->id }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3 row">

                    <label class="col-sm-2 col-form-label" for="pemangkin_id">Tema/Pemangkin Dasar</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="pemangkin_id">
                            @foreach ($listTema as $listT)
                                <option @selected($kpi->pemangkin_id == $listT->id) value="{{ $listT->id }}">
                                    {{ $listT->namaTema }}
                                </option>
                            @endforeach

                        </select>
                    </div>

                    <label class="col-sm-2 col-form-label" for="fokusutama_id">Fokus Utama</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="fokusutama_id">
                            @foreach ($fokusUtama as $fu)
                                <option @selected($kpi->fokusutama_id == $fu->id) value="{{ $fu->id }}">
                                    {{ $fu->namaFokus }}
                                </option>
                            @endforeach

                        </select>
                    </div>



                </div>


                <div class="mb-3 row">


                    <label class="col-sm-2 col-form-label" for="bab_id">Bab</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="bab_id">
                            @foreach ($listBab as $listB)
                                <option @selected($kpi->bab_id == $listB->id) value="{{ $listB->id }}">Bab
                                    {{ $listB->noBab }}.
                                    {{ $listB->namaBab }}
                                </option>
                            @endforeach

                        </select>
                    </div>

                    <label class="col-sm-2 col-form-label" for="perkarautama_id">Perkara Utama</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="perkarautama_id">
                            @foreach ($perkaraUtama as $pu)
                                <option @selected($kpi->perkarautama_id == $pu->id) value="{{ $pu->id }}">
                                    {{ $pu->namaPerkara }}
                                </option>
                            @endforeach

                        </select>
                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="bidang_id">Bidang Keutamaan</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="bidang_id">
                            @foreach ($listBidang as $listBi)
                                <option @selected($kpi->bidang_id == $listBi->id) value="{{ $listBi->id }}">
                                    {{ $listBi->namaBidang }}
                                </option>
                            @endforeach

                        </select>
                    </div>

                    <label class="col-sm-2 col-form-label" for="indikator">Indikator Terpilih</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="indikator">
                            <option @selected($kpi->indikator == '1') value="1">Ya</option>
                            <option @selected($kpi->indikator == '2') value="2">Tidak</option>
                        </select>
                    </div>


                </div>
                <div class="mb-3 row">


                    <label class="col-sm-2 col-form-label" for="outcome_id">Outcome Nasional</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="outcome_id">
                            @foreach ($list as $list)
                                <option @selected($kpi->outcome_id == $list->id) value="{{ $list->id }}">
                                    {{ $list->namaOutcome }}
                                </option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="namaKpi">Nama KPI</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="namaKpi" value="{{ $kpi->namaKpi }}" />
                    </div>


                </div>


                <br>
                <br>

                <div class="mb-3">
                    <label class="form-label" for="keteranganKpi"><b>Keterangan Kpi Nasional</b></label>
                    <textarea class="form-control" name="keteranganKpi" rows="5">{{ $kpi->keteranganKpi }}</textarea>
                </div>

                <div class="row">
                    <div class="col">
                        <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3"
                            href="/kpi">
                            <span class="fas fa-times-circle"></span>&nbsp;Batal
                        </a>
                    </div>

                    <div class="col" style="text-align: right">
                        <button class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                            type="submit" value="Save"
                            onclick="return confirm('Adakah anda mahu mengubah data ini?')"><span
                                class="fas fa-save"></span>&nbsp;Simpan
                        </button>
                    </div>
                </div>

            </form>

        </div>

    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ooops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
