@extends('base')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>KEMAS KINI DATA</H2>
        </div>


        <br>
        <br>



        <div class="form-floating;">
            <form action="/bidang/{{ $bidang->id }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="fokus_id">Fokus Utama</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="fokus_id">

                            @foreach ($fokus as $fokus)
                                <option @selected($bidang->fokus_id == $fokus->id) value="{{ $fokus->id }}">{{ $fokus->namaFokus }}</option>
                            @endforeach

                        </select>
                    </div>

                    <label class="col-sm-2 col-form-label" for="perkara_id">Perkara Utama</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="perkara_id">

                            @foreach ($perkara as $perkara)
                                <option @selected($bidang->perkara_id == $perkara->id) value="{{ $perkara->id }}">{{ $perkara->namaPerkara }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="pemangkin_id">Tema/Pemangkin Dasar</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="pemangkin_id">

                            @foreach ($pemangkin as $pemangkin)
                                <option @selected($bidang->pemangkin_id == $pemangkin->id) value="{{ $pemangkin->id }}">{{ $pemangkin->namaTema }}</option>
                            @endforeach

                        </select>
                    </div>

                    <label class="col-sm-2 col-form-label" for="bab_id">Bab</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="bab_id">

                            @foreach ($list as $list)
                                <option @selected($bidang->bab_id == $list->id) value="{{ $list->id }}">Bab {{ $list->noBab }}. {{ $list->namaBab }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="namaBidang">Nama Bidang Keutamaan</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="namaBidang" value="{{ $bidang->namaBidang }}" />

                    </div>
                </div>

                <div class="mb-3 row" >
                    <label class="col-sm-2 col-form-label" for="noBidang">Bidang Keutamaan:</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="noBidang" >
                            <option @selected($bidang->noBidang == "1") value="1">BK A</option>
                            <option @selected($bidang->noBidang == "2") value="2">BK B</option>
                            <option @selected($bidang->noBidang == "3") value="3">BK C</option>
                            <option @selected($bidang->noBidang == "4") value="4">BK D</option>
                            <option @selected($bidang->noBidang == "5") value="5">BK E</option>
                            <option @selected($bidang->noBidang == "6") value="6">BK F</option>

                        </select>


                    </div>
                </div>

                <br>
                <br>

                <div class="mb-3">
                    <label class="form-label" for="keteranganBidang"><b>Keterangan Bidang</b></label>
                    <textarea class="form-control" name="keteranganBidang" rows="5">{{ $bidang->keteranganBidang }}</textarea>
                </div>

                <div class="row">
                    <div class="col">
                        <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3"
                            href="/bidang">
                            <span class="fas fa-times-circle"></span>&nbsp;Batal
                        </a>
                    </div>

                    <div class="col" style="text-align: right">
                        <button class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                            type="submit" value="Save" onclick="return confirm('Adakah anda mahu mengubah data ini?')"><span class="fas fa-save"></span>&nbsp;Simpan
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
