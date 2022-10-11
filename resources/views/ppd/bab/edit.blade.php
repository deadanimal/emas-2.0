@extends('base')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>KEMAS KINI DATA</H2>
        </div>


        <br>
        <br>


        <div class="form-floating;">
            <form action="/PPD/bab/{{ $bab->id }}" method="POST">
                @csrf
                @method('PUT')


                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="fokus_id">Fokus Utama</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="fokus_id" id="pilih1">

                            @foreach ($fokuss as $fokus)
                                <option @selected($bab->fokus_id == $fokus->id) value="{{ $fokus->id }}">{{ $fokus->namaFokus }}
                                </option>
                            @endforeach

                        </select>
                    </div>

                    <label class="col-sm-2 col-form-label" for="name">Bahagian Penyelaras</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="name">

                            {{-- @foreach ($fokuss as $fokus)
                                <option @selected($bab->fokus_id == $fokus->id) value="{{ $fokus->id }}">{{ $fokus->namaFokus }}
                                </option>
                            @endforeach --}}

                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="pemangkin_id">Tema/Pemangkin Dasar</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="pemangkin_id" id="pilih2">

                            @foreach ($temas as $list)
                                <option @selected($bab->pemangkin_id == $list->id) value="{{ $list->id }}">{{ $list->namaTema }}
                                </option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="namaBab">Nama Bab</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="namaBab" value="{{ $bab->namaBab }}" />
                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="noBab">No Bab</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="noBab">
                            <option @selected($bab->noBab == '1') value="1">1</option>
                            <option @selected($bab->noBab == '2') value="2">2</option>
                            <option @selected($bab->noBab == '3') value="3">3</option>
                            <option @selected($bab->noBab == '4') value="4">4</option>
                            <option @selected($bab->noBab == '5') value="5">5</option>
                            <option @selected($bab->noBab == '6') value="6">6</option>
                            <option @selected($bab->noBab == '7') value="7">7</option>
                            <option @selected($bab->noBab == '8') value="8">8</option>
                            <option @selected($bab->noBab == '9') value="9">9</option>
                            <option @selected($bab->noBab == '10') value="10">10</option>
                            <option @selected($bab->noBab == '11') value="11">11</option>
                            <option @selected($bab->noBab == '12') value="12">12</option>
                        </select>

                        {{-- <select class="form-control" name="noBab" >
                            <option {{ $bab->noBab == "1" ?'selected':'' }} value="1">1</option>
                            <option {{ $bab->noBab == "2" ?'selected':'' }} value="2">2</option>
                            <option {{ $bab->noBab == "3" ?'selected':'' }} value="3">3</option>
                            <option {{ $bab->noBab == "4" ?'selected':'' }} value="4">4</option>
                            <option {{ $bab->noBab == "5" ?'selected':'' }} value="5">5</option>
                            <option {{ $bab->noBab == "6" ?'selected':'' }} value="6">6</option>
                            <option {{ $bab->noBab == "7" ?'selected':'' }} value="7">7</option>
                            <option {{ $bab->noBab == "8" ?'selected':'' }} value="8">8</option>
                            <option {{ $bab->noBab == "9" ?'selected':'' }} value="9">9</option>
                            <option {{ $bab->noBab == "10" ?'selected':'' }} value="10">10</option>
                            <option {{ $bab->noBab == "11" ?'selected':'' }} value="11">11</option>
                            <option {{ $bab->noBab == "12" ?'selected':'' }} value="12">12</option>
                        </select> --}}

                    </div>
                </div>

                <br>
                <br>


                <div class="mb-3">
                    <label class="form-label" for="keteranganBab"><b>Keterangan Bab</b></label>
                    <textarea class="form-control" name="keteranganBab" rows="5">{{ $bab->keteranganBab }}</textarea>
                </div>

                <div class="row">
                    <div class="col">
                        <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3"
                            href="/PPD/bab">
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
            var temas = @json($temas->toArray());
            $("#pilih2").html(``);
            temas.forEach(tema => {
                if (tema.fokus_id == fokus_id) {
                    $("#pilih2").append(`
                        <option value="` + tema.id + `">` + tema.namaTema + `</option>
                    `);
                }
            });
        });
    </script>
@endsection
