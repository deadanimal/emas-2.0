@extends('base')
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
                    <span><b>Tambah Ketua Kampung
                        </b></span>
                </div>
            </div>
        </div>

        <hr class="mb-3" style="width:100%;text-align:center;">

        <x-errors-component :errors="$errors->any() ? $errors->all() : null" />


        <form action="{{ route('ketuaKampung.store') }}" method="POST">

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
                        @csrf
                        <div class="col-lg-12">
                            <label class="form-label" for="nama">Nama Ketua Kampung</label>
                            <input class="form-control" id="nama" type="text" name="name">
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label" for="no_tel_pejabat">No. Telefon Pejabat</label>
                            <input class="form-control" name="no_pejabat" type="number" />

                        </div>

                        <div class="col-lg-6">
                            <label class="form-label" for="tahun_mula_berkhidmat">Tahun Mula Berkhidmat</label>
                            <input type="text" class="form-control tahun" name="tahun_mula" autocomplete="off" required
                                readonly>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="tahun_tamat_berkhidmat">Tahun Akhir Berkhidmaat</label>
                            <input type="text" class="form-control tahun" name="tahun_akhir" autocomplete="off" required
                                readonly>
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label" for="nama">No. Kad Pengenalan</label>
                            <input class="form-control" name="no_kp" type="number">
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label" for="no_telefon">No. Telefon Bimbit</label>
                            <input class="form-control" name="no_telefon" type="number">
                        </div>
                        <div class="col mt-5" style="text-align: center">

                            <button class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                                type="submit" value="Save"
                                onclick="return confirm('Adakah anda mahu mengubah data ini?')"><span
                                    class="fas fa-save"></span>&nbsp;Tambah Ketua Kampung
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
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

@endsection
