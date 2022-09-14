@extends('base')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>KEMASUKAN DATA</H2>
        </div>


        <br>
        <br>


        <div class="form-floating;">
            <form action="{{ route('kpi.store') }}" method="POST">
                @csrf


                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="pemangkin_id">Tema/Pemangkin Dasar</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="pemangkin_id">
                            <option selected disabled hidden>Sila Pilih</option>

                            @foreach ($listTema as $listTema)
                                <option value="{{ $listTema->id }}">{{ $listTema->namaTema }}</option>
                            @endforeach

                        </select>
                    </div>
                    <label class="col-sm-2 col-form-label" for="fokusutama_id">Fokus Utama</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="fokusutama_id">
                            <option selected disabled hidden>Sila Pilih</option>

                            @foreach ($fokusUtama as $fu)
                                <option value="{{ $fu->id }}">{{ $fu->namaFokus }}</option>
                            @endforeach

                        </select>
                    </div>


                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="bab_id">Bab</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="bab_id">
                            <option selected disabled hidden>Sila Pilih</option>

                            @foreach ($listBab as $listBab)
                                <option value="{{ $listBab->id }}">Bab {{ $listBab->noBab }}. {{ $listBab->namaBab }}
                                </option>
                            @endforeach

                        </select>
                    </div>

                    <label class="col-sm-2 col-form-label" for="perkarautama_id">Perkara Utama</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="perkarautama_id">
                            <option selected disabled hidden>Sila Pilih</option>

                            @foreach ($perkaraUtama as $pu)
                                <option value="{{ $pu->id }}">{{ $pu->namaPerkara }}
                                </option>
                            @endforeach

                        </select>
                    </div>


                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="bidang_id">Bidang Keutamaan</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="bidang_id">
                            <option selected disabled hidden>Sila Pilih</option>

                            @foreach ($listBidang as $listBidang)
                                <option value="{{ $listBidang->id }}">{{ $listBidang->namaBidang }}</option>
                            @endforeach

                        </select>
                    </div>
                    <label class="col-sm-2 col-form-label" for="indikator">Indikator Terpilih</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="indikator">
                            <option selected disabled hidden>SILA PILIH</option>
                            <option value="1">Ya</option>
                            <option value="2">Tidak</option>


                        </select>
                    </div>

                </div>
                <div class="mb-3 row">

                    <label class="col-sm-2 col-form-label" for="outcome_id">Outcome Nasional</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="outcome_id">
                            <option selected disabled hidden>SILA PILIH</option>

                            @foreach ($list as $list)
                                <option value="{{ $list->id }}">{{ $list->namaOutcome }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="namaKpi">Nama KPI</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="namaKpi" />

                    </div>
                </div>


                <br>
                <br>

                <div class="mb-3">
                    <label class="form-label" for="keteranganKpi"><b>Keterangan KPI Nasional</b></label>
                    <textarea class="form-control" name="keteranganKpi" rows="5"></textarea>
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
                            onclick="return confirm('Adakah anda mahu menyimpan data ini?')"><span
                                class="fas fa-save"></span>&nbsp;Simpan
                        </button>
                    </div>
                </div>


                <input class="form-control" name="user_id" type="hidden" value="{{ $user->id }}" />


            </form>

        </div>

    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oops!</strong> Input tidak mencukupi<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
