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
                    <span><b>Tambah Bantuan
                        </b></span>
                </div>
            </div>
        </div>

        <hr style="width:100%;text-align:center;">

        <form action="{{ route('bantuan.store') }}" method="post">
            @csrf
            <div class="card mb-3">
                <div class="card-body bg-light">
                    <div class="row">
                        <div class="col-lg-12 mb-3">

                            <label class="form-label" for="nama_bantuan">Nama Bantuan</label>
                            <input class="form-control" name="nama_bantuan" type="text">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label class="form-label" for="negeri">Negeri</label>
                            <select name="negeri_id" class="form-select" id="negeri">
                                <option selected disabled hidden value="">Sila Pilih</option>
                                @foreach ($negeri as $n)
                                    <option value="{{ $n->id }}">{{ $n->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label class="form-label" for="daerah">Daerah</label>
                            <select name="daerah_id" class="form-select" id="daerah">
                                <option selected disabled hidden value="">Sila Pilih Negeri</option>
                            </select>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label" for="nama_kampung">Nama Kampung</label>
                            <input class="form-control" name="nama_kampung">
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label" for="kementerian">Kementerian Yang
                                Bertanggungjawab</label>
                            <input class="form-control" name="kementerian">
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label" for="agensi">Agensi Yang
                                Ditugaskan</label>
                            <input class="form-control" name="agensi">
                        </div>
                        <div class="col-lg-12 mb-5">
                            <label class="form-label" for="sektor">Sektor</label>
                            <input class="form-control" name="sektor">
                        </div>
                        <div class="col" style="text-align: center">
                            <button class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                                type="submit" value="Save"
                                onclick="return confirm('Adakah anda mahu mengubah data ini?')"><span
                                    class="fas fa-save"></span>&nbsp;Simpan
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
            $("#daerah").html(``);
            var negeris = @json($negeri->toArray());

            negeris.forEach(e => {
                if (negeri_id == e.id) {
                    e.daerah.forEach(el => {
                        $("#daerah").append(`
                            <option value="` + el.id + `">` + el.name + `</option>
                        `)
                    });
                }
            });
        });
    </script>
@endsection
