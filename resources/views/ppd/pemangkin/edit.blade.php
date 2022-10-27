@extends('base')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>KEMAS KINI DATA</H2>
        </div>


        <br>
        <br>




        <div class="form-floating;">
            <form action="/PPD/pemangkin/{{ $pemangkindasar->id }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="fokus_id">Fokus Utama</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="fokus_id" id="pilih1">

                            @foreach ($fokuss as $fokus)
                                <option @selected($pemangkindasar->fokus_id == $fokus->id) value="{{ $fokus->id }}">{{ $fokus->namaFokus }}
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
                                <option @selected($pemangkindasar->perkara_id == $perkara->id) value="{{ $perkara->id }}">{{ $perkara->namaPerkara }}
                                </option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="kategori_id">Kategori</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="kategori_id">
                            <option value disabled hidden>Pilih Kategori</option>
                            <option value="1">Tema</option>
                            <option value="2">Pemangkin Dasar</option>

                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="namaTema">Nama Tema/Pemangkin</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="namaTema"
                            value="{{ $pemangkindasar->namaTema }}" />

                    </div>
                </div>

                <br>
                <br>


                <div class="mb-3">
                    <label class="form-label" for="keteranganTema"><b>Keterangan Tema/PemangkinDasar</b></label>
                    <textarea class="form-control" name="keteranganTema" rows="5">{{ $pemangkindasar->keteranganTema }}</textarea>
                </div>

                <div class="row">
                    <div class="col">
                        <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3"
                            href="/PPD/pemangkin">
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
    </script>
@endsection
