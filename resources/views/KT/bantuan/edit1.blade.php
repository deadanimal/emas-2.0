@extends('base-kt')
@section('content')
    <div class="container">

        <div class="mb-4 text-center">
            <H2>PELAKSANAAN PROGRAM PEMBASMIAN
                KEMISKINAN TEGAR KELUARGA MALAYSIA
                (BMTKM)</H2>
        </div>

        <div class="col">
            <div class="row align-items-center">
                <div class="col col-lg-8">
                    <span><b>Kemaskini Ketua Kampung
                        </b></span>
                </div>
            </div>
        </div>

        <hr style="width:100%;text-align:center;">
        <form action="/KT/ketuaKampung/{{ $ketuaKampung->id }}" method="POST">
            @csrf
            @method('PUT')
            <div class="row g-3" style="width: 100%">
                <div class="col">
                    <select class="form-select" id="negeri" name="negeri_id">
                        <option selected disabled hidden value="null">NEGERI</option>
                        @foreach ($negeris as $negeri)
                            <option value="{{ $negeri->id }}">{{ $negeri->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col">
                    <select class="form-select" id="daerah" name="daerah_id">
                        <option selected disabled hidden value="null">DAERAH</option>
                        <option disabled>Sila Pilih Negeri</option>
                    </select>
                </div>

                <div class="col">

                    <select class="form-select" id="kampung" name="kampung_id">
                        <option selected disabled hidden value="null">KAMPUNG</option>
                        <option disabled>Sila Pilih Daerah</option>
                    </select>
                </div>
            </div>

            <br>

            <div class="card mb-3">
                <div class="card-body bg-light">

                    <div class="row g-3">

                        <div class="col-lg-12">
                            <label class="form-label" for="name">Nama Ketua Kampung</label>
                            <input class="form-control" name="name" type="text" value="{{ $ketuaKampung->name }}">
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label" for="no_pejabat">No. Tel Pejabat</label>
                            <input class="form-control" name="no_pejabat" type="number"
                                value="{{ $ketuaKampung->no_pejabat }}" />
                        </div>

                        <div class="col-lg-6">
                            <label class="form-label" for="tahun_mula">Tahun Mula Berkhidmat</label>
                            <input class="form-control" nama="tahun_mula" type="number"
                                value="{{ $ketuaKampung->tahun_mula }}">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="tahun_akhir">Tahun Taman Berkhidmat</label>
                            <input class="form-control" name="tahun_akhir" type="number"
                                value="{{ $ketuaKampung->tahun_akhir }}">
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label" for="no_kp">No Kad Pengenalan</label>
                            <input class="form-control" name="no_kp" type="number" value="{{ $ketuaKampung->no_kp }}">
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label" for="no_telefon">No.Tel Bimbit</label>
                            <input class="form-control" name="no_telefon" type="number"
                                value="{{ $ketuaKampung->no_telefon }}">
                        </div>

                        <div class="col" style="text-align: center">
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
    </div>



    <script>
        $("#negeri").change(function() {
            var negeri_id = $(this).val();
            var daerahs = @json($daerahs->toArray());
            $("#daerah").html('');
            daerahs.forEach(daerah => {
                if (daerah.negeri_id == negeri_id) {
                    $("#daerah").append(`
                        <option value="` + daerah.id + `">` + daerah.name + `</option>
                    `);
                }
            });
        });
        $("#daerah").change(function() {
            var daerah_id = $(this).val();
            var kampungs = @json($kampungs->toArray());
            $("#kampung").html('');
            kampungs.forEach(kampung => {
                if (kampung.daerah_id == daerah_id) {
                    $("#kampung").append(`
                        <option value="` + kampung.id + `">` + kampung.name + `</option>
                    `);
                }
            });
        });
    </script>
@stop
</div>
