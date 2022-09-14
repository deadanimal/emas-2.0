@extends('base')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>KEMAS KINI DATA</H2>
        </div>


        <br>
        <br>

        <div class="form-floating;">
            <form action="/tindakan/{{ $tindakan->id }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="pemangkin_id">Tema/Pemangkin Dasar</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="pemangkin_id">

                            @foreach ($pemangkin as $pemangkin)
                                <option @selected($tindakan->pemangkin_id == $pemangkin->id) value="{{ $pemangkin->id }}">{{ $pemangkin->namaTema }}
                                </option>
                            @endforeach

                        </select>
                    </div>

                    <label class="col-sm-2 col-form-label" for="fokus_id">Fokus Utama</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="fokus_id">

                            @foreach ($fokus as $fokus)
                                <option @selected($tindakan->fokus_id == $fokus->id) value="{{ $fokus->id }}">{{ $fokus->namaFokus }}
                                </option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="bab_id">Bab</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="bab_id">

                            @foreach ($bab as $bab)
                                <option @selected($tindakan->bab_id == $bab->id) value="{{ $bab->id }}">Bab {{ $bab->noBab }}.
                                    {{ $bab->namaBab }}</option>
                            @endforeach

                        </select>
                    </div>

                    <label class="col-sm-2 col-form-label" for="perkara_id">Perkara Utama</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="perkara_id">

                            @foreach ($perkara as $perkara)
                                <option @selected($tindakan->perkara_id == $perkara->id) value="{{ $perkara->id }}">{{ $perkara->namaPerkara }}
                                </option>
                            @endforeach

                        </select>
                    </div>
                </div>


                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="bidang_id">Bidang Keutamaan</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="bidang_id">

                            @foreach ($bidang as $bidang)
                                <option @selected($tindakan->bidang_id == $bidang->id) value="{{ $bidang->id }}">{{ $bidang->namaBidang }}
                                </option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="strategi_id">Strategi</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="strategi_id">

                            @foreach ($strategi as $strategi)
                                <option @selected($tindakan->strategi_id == $strategi->id) value="{{ $strategi->id }}">
                                    {{ $strategi->namaStrategi }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>



                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="insiatif_id">Inisiatif</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="insiatif_id">

                            @foreach ($list as $list)
                                <option @selected($tindakan->inisiatif_id == $list->id) value="{{ $list->id }}">
                                    {{ $list->namaInisiatif }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="namaTindakan">Nama Tindakan</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="namaTindakan"
                            value="{{ $tindakan->namaTindakan }}" />

                    </div>
                </div>

                <br>
                <br>

                <div class="mb-3">
                    <label class="form-label" for="keteranganTindakan"><b>Keterangan tindakan </b></label>
                    <textarea class="form-control" name="keteranganTindakan" rows="5">{{ $tindakan->keteranganTindakan }}</textarea>
                </div>

                <div class="row">
                    <div class="col">
                        <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3"
                            href="/tindakan">
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
