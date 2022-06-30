@extends('base')
@section('content')
    <div class="container">
        <br>
        <div class="mb-4 text-center">
            <H2>KEMASUKAN DATA</H2>
        </div>


        <br>
        <br>

        {{-- <div class="mb-3 row" >
            <label class="col-sm-2 col-form-label" for="fokus_id">Fokus Utama</label>
            <div class="col-sm-10" style="width:30%">
                <input class="form-control" name="fokus_id" placeholder="Sila Pilih"/>
            </div>
        </div> --}}



        <div class="form-floating;">
            <form action="{{ route('tindakan.store') }}" method="POST">
                @csrf

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="fokus_id">Fokus Utama</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="fokus_id">
                            <option selected disabled hidden>SILA PILIH</option>

                            @foreach ($fokus as $fokus)
                                <option value="{{ $fokus->id }}">{{ $fokus->namaFokus }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="perkara_id">Perkara Utama</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="perkara_id">
                            <option selected disabled hidden>SILA PILIH</option>

                            @foreach ($perkara as $perkara)
                                <option value="{{ $perkara->id }}">{{ $perkara->namaPerkara }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="pemangkin_id">Tema/Pemangkin Dasar</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="pemangkin_id">
                            <option selected disabled hidden>SILA PILIH</option>

                            @foreach ($pemangkin as $pemangkin)
                                <option value="{{ $pemangkin->id }}">{{ $pemangkin->namaTema }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="bab_id">Bab</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="bab_id">
                            <option selected disabled hidden>SILA PILIH</option>

                            @foreach ($bab as $bab)
                                <option value="{{ $bab->id }}">Bab {{ $bab->noBab }}. {{ $bab->namaBab }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="bidang_id">Bidang Keutamaan</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="bidang_id">
                            <option selected disabled hidden>SILA PILIH</option>

                            @foreach ($bidang as $bidang)
                                <option value="{{ $bidang->id }}">{{ $bidang->namaBidang }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>


                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="strategi_id">Strategi</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="strategi_id">
                            <option selected disabled hidden>SILA PILIH</option>

                            @foreach ($strategi as $strategi)
                                <option value="{{ $strategi->id }}">{{ $strategi->namaStrategi }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>


                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="inisiatif_id">Inisiatif</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="inisiatif_id">
                            <option selected disabled hidden>SILA PILIH</option>

                            @foreach ($list as $list)
                                <option value="{{ $list->id }}">{{ $list->namaInisiatif }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="mb-3 row">

                    <label class="col-sm-2 col-form-label" for="namaTindakan">Nama Tindakan</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="namaTindakan" />

                    </div>
                </div>

                {{-- <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="kementerian_penyelaras">Kementerian/Agensi Penyelaras</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="kementerian_penyelaras"/>

                    </div>

                    <label class="col-sm-2 col-form-label" for="kementerian_pelaksana">Kementerian/Agensi Pelaksana</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="kementerian_pelaksana" />

                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="tempohSiap">Tempoh Siap</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="tempohSiap"/>

                    </div>

                    <label class="col-sm-2 col-form-label" for="kategoriSasaran">Kategori Sasaran</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="kategoriSasaran" />

                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="statusPelaksanaan">Status Pelaksanaan 2022</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="statusPelaksanaan"/>

                    </div>

                    <label class="col-sm-2 col-form-label" for="catatan2022">Catatan 2022</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="catatan2022" />

                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="sasaran2022">Sasaran 2022</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="sasaran2022"/>

                    </div>

                    <label class="col-sm-2 col-form-label" for="pencapaian2022">Pencapaian 2022</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="pencapaian2022" />

                    </div>
                </div> --}}


                <br>
                <br>

                <div class="mb-3">
                    <label class="form-label" for="keteranganTindakan"><b>Keterangan Tindakan</b></label>
                    <textarea class="form-control" name="keteranganTindakan" rows="5"></textarea>
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
