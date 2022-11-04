@extends('base')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>KEMAS KINI DATA</H2>
        </div>


        <br>
        <br>



        <div class="form-floating;">
            <form action="/PPD/bidang/{{ $bidang->id }}" method="POST">
                @csrf
                @method('PUT')


                <div class="mb-3 row">

                    <label class="col-sm-2 col-form-label" for="fokus_id">Fokus Utama</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="fokus_id" id="pilih1">

                            @foreach ($fokuss as $fokus)
                                <option @selected($bidang->fokus_id == $fokus->id) value="{{ $fokus->id }}">{{ $fokus->namaFokus }}
                                </option>
                            @endforeach

                        </select>
                    </div>


                </div>

                <div class="mb-3 row">

                    <label class="col-sm-2 col-form-label" for="perkara_id">Perkara Utama</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="perkara_id" id="pilih2">

                            @foreach ($perkaras as $perkara)
                                <option @selected($bidang->perkara_id == $perkara->id) value="{{ $perkara->id }}">
                                    {{ $perkara->namaPerkara }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="pemangkin_id">Tema/Pemangkin Dasar</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="pemangkin_id" id="pilih3">

                            @foreach ($temas as $pemangkin)
                                <option @selected($bidang->pemangkin_id == $pemangkin->id) value="{{ $pemangkin->id }}">
                                    {{ $pemangkin->namaTema }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>


                <div class="mb-3 row">


                    <label class="col-sm-2 col-form-label" for="bab_id">Bab</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="bab_id" id="pilih4">

                            @foreach ($babs as $list)
                                <option @selected($bidang->bab_id == $list->id) value="{{ $list->id }}">Bab {{ $list->noBab }}.
                                    {{ $list->namaBab }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>



                <div class="mb-3 row">

                    <label class="col-sm-2 col-form-label" for="bahagian">Penyelaras Bidang Keutamaan</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="bahagian">
                            <option @selected($bidang->bahagian == 'EPU') value="EPU">EPU</option>
                            <option @selected($bidang->bahagian == 'JPM') value="JPM">JPM</option>

                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="noBidang">Bidang Keutamaan:</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="noBidang">
                            <option @selected($bidang->noBidang == 'A') value="A">BK A</option>
                            <option @selected($bidang->noBidang == 'B') value="B">BK B</option>
                            <option @selected($bidang->noBidang == 'C') value="C">BK C</option>
                            <option @selected($bidang->noBidang == 'D') value="D">BK D</option>
                            <option @selected($bidang->noBidang == 'E') value="E">BK E</option>
                            <option @selected($bidang->noBidang == 'F') value="F">BK F</option>

                        </select>


                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="namaBidang">Nama Bidang Keutamaan</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="namaBidang" value="{{ $bidang->namaBidang }}" />

                    </div>
                </div>

                <br>
                <br>

                <div class="mb-3">
                    <label class="form-label" for="keteranganBidang"><b>Keterangan Bidang Keutamaan</b></label>
                    <textarea class="form-control" name="keteranganBidang" rows="5">{{ $bidang->keteranganBidang }}</textarea>
                </div>

                <div class="row">
                    <div class="col">
                        <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3"
                            href="/PPD/bidang">
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

    <script>
        $("#pilih1").change(function() {

            var fokus_id = $(this).val();
            var perkaras = @json($perkaras->toArray());
            $("#pilih2").html(``);
            perkaras.forEach(perkara => {
                if (perkara.fokus_id == fokus_id) {
                    $("#pilih2").append(`
                            <option value="` + perkara.id + `">` + perkara.namaPerkara + `</option>
                        `);
                }
            });
        });

        $("#pilih2").change(function() {
            var perkara_id = $(this).val();
            var temas = @json($temas->toArray());
            $("#pilih3").html(``);
            temas.forEach(tema => {
                if (tema.perkara_id == perkara_id) {
                    $("#pilih3").append(`
                        <option value="` + tema.id + `">` + tema.namaTema + `</option>
                    `);
                }
            });
        });

        // $("#pilih3").change(function() {
        //     var tema_id = $(this).val();
        //     var babs = @json($babs->toArray());
        //     $("#pilih4").html(``);
        //     babs.forEach(bab => {
        //         if (bab.tema_id == tema_id) {
        //             $("#pilih4").append(`
    //                 <option value="` + bab.id + `">` + bab.namaBab + `</option>
    //             `);
        //         }
        //     });
        // });
    </script>
@endsection
