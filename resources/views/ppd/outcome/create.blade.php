@extends('base')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>KEMASUKAN DATA</H2>
        </div>


        <br>
        <br>

        {{-- <div class="mb-3 row" >
            <label class="col-sm-2 col-form-label" for="fokus_id">Fokus Utama</label>
            <div class="col-sm-10">
                <input class="form-control" name="fokus_id" placeholder="Sila Pilih"/>
            </div>
        </div> --}}



        <div class="form-floating;">
            <form action="{{ route('outcome.store') }}" method="POST">
                @csrf
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="fokus_id">Fokus Utama*</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="fokus_id">
                            <option selected disabled hidden>SILA PILIH</option>

                            @foreach ($fokus as $fokus)
                                <option value="{{ $fokus->id }}">{{ $fokus->namaFokus }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="perkara_id">Perkara Utama*</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="perkara_id" id="pilih2">

                            @foreach ($perkaras as $perkara)
                                <option @selected($perkara->perkara_id == $perkara->id) value="{{ $perkara->id }}">
                                    {{ $perkara->namaPerkara }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>


                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="pemangkin_id">Tema/Pemangkin Dasar*</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="pemangkin_id">
                            <option selected disabled hidden>SILA PILIH</option>

                            @foreach ($pemangkin as $pemangkin)
                                <option value="{{ $pemangkin->id }}">{{ $pemangkin->namaTema }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="bidang_id">Bidang Keutamaan*</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="bidang_id">
                            <option selected disabled hidden>SILA PILIH</option>

                            @foreach ($bidangs as $bidang)
                                <option value="{{ $bidang->id }}">{{ $bidang->namaBidang }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>


                <div class="mb-3 row">

                    <label class="col-sm-2 col-form-label" for="namaOutcome">Nama Outcome Nasional*</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="namaOutcome" />

                    </div>
                </div>


                <br>
                <br>

                <div class="mb-3">
                    <label class="form-label" for="keteranganOutcome"><b>Keterangan Outcome Nasional</b></label>
                    <textarea class="form-control" name="keteranganOutcome" rows="5"></textarea>
                </div>

                <div class="row">
                    <div class="col">
                        <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3"
                            href="/PPD/outcome">
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
