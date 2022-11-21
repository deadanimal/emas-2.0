@extends('base')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>KEMAS KINI DATA</H2>
        </div>


        <br>
        <br>

        <div class="form-floating;">
            <form action="/PPD/sdg/{{ $sdg->id }}" method="POST">
                @csrf
                @method('PUT')

                {{-- <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="fokus_id">Fokus Utama*</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="fokus_id">

                            @foreach ($fokus as $fokus)
                                <option @selected($sdg->fokus_id == $fokus->id) value="{{ $fokus->id }}">{{ $fokus->namaFokus }}
                                </option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="mb-3 row">

                    <label class="col-sm-2 col-form-label" for="perkara_id">Perkara Utama*</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="perkara_id">

                            @foreach ($perkara as $perkara)
                                <option @selected($sdg->perkara_id == $perkara->id) value="{{ $perkara->id }}">{{ $perkara->namaPerkara }}
                                </option>
                            @endforeach

                        </select>
                    </div>
                </div> --}}

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="pemangkin_id">Tema/Pemangkin Dasar*</label>
                    <div class="col-sm-10">
                        {{-- <select class="form-control" name="pemangkin_id">

                            @foreach ($list as $list)
                                <option @selected($sdg->pemangkin_id == $list->id) value="{{ $list->id }}">{{ $list->namaTema }}
                                </option>
                            @endforeach

                        </select> --}}

                        <select class="form-select js-choice" id="pemangkin[]" multiple="multiple" size="1"
                            name="pemangkin[]" data-options='{"removeItemButton":true,"placeholder":true}'>
                            <option disabled>SILA PILIH</option>

                            @foreach ($list as $list)
                                <option value="{{ $list->id }}">{{ $list->namaTema }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>


                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="namaSdg">Nama SDG*</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="namaSdg" value="{{ $sdg->namaSdg }}" />

                    </div>
                </div>


                <br>

                <div class="mb-3">
                    <label class="form-label" for="keteranganSdg"><b>Keterangan SDG</b></label>
                    <textarea class="form-control" name="keteranganSdg" rows="5">{{ $sdg->keteranganSdg }}</textarea>
                </div>

                <div class="row">
                    <div class="col">
                        <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3"
                            href="/PPD/sdg">
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

                {{-- <input class="form-control" name="user_id" type="hidden" value="{{ $user->id }}" /> --}}


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
