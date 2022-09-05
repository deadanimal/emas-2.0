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
                    <span><b>Tambah Kampung
                        </b></span>
                </div>
            </div>
        </div>

        <hr style="width:100%;text-align:center;">
        <form action="{{ route('kampung.store') }}" method="post">
            @csrf
            <div class="row g-3" style="width: 100%">
                <div class="col-6">
                    <select class="form-select" id="negeri">
                        <option selected disabled hidden>NEGERI</option>
                        @foreach ($negeri as $n)
                            <option value="{{ $n->id }}">{{ $n->name }}</option>
                        @endforeach

                    </select>
                </div>
                <div class="col-6">
                    <select class="form-select" id="daerah">
                        <option selected disabled hidden>DAERAH</option>
                        <option disabled>Sila Pilih Negeri</option>
                    </select>
                </div>
            </div>

            <br>

            <div class="card mb-3">

                <div class="card-body bg-light">
                    <div class="row g-3">
                        <div class="col-lg-12">
                            <label class="form-label" for="namaKampung">Nama Kampung</label>
                            <input class="form-control" id="namaKampung" type="text">
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label" for="alamat">Alamat Kampung</label>
                            <input class="form-control" id="alamat" type="text">
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label" for="maklumat">Maklumat Kampung</label>
                            <input class="form-control" id="maklumat" type="text">
                        </div>
                        {{-- <div class="col-lg-12">
                            <label class="form-label" for="nama">Gambar Kampung</label>
                            <input class="form-control" id="nama" type="text">
                        </div> --}}

                        <div class="col" style="text-align: center">
                            <button class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                                type="submit" value="Save"
                                onclick="return confirm('Adakah anda mahu mengubah data ini?')"><span
                                    class="fas fa-save"></span>&nbsp;Tambah Kampung
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
            var daerah = @json($daerah->toArray());
            $("#daerah").html('');
            daerah.forEach(d => {
                if (d.negeri_id == negeri_id) {
                    $("#daerah").append(`
                         <option value="` + d.id + `">` + d.name + `</option>
                    `);
                }
            });
        });
    </script>
@endsection
