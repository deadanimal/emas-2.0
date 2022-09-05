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
                    <span><b>Kemaskini Bantuan
                        </b></span>
                </div>
            </div>
        </div>

        <hr style="width:100%;text-align:center;">


        <div class="card mb-3">

            <div class="card-body bg-light">
                <form action="{{ route('bantuan.update', $bantuan->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <label class="form-label" for="nama_bantuan">Nama Bantuan</label>
                            <input class="form-control" name="nama_bantuan" type="text"
                                value="{{ $bantuan->nama_bantuan }}">
                        </div>
                        <div class="col-lg-6 mb-3">
                            <label>Negeri</label>
                            <select name="negeri_id" class="form-select" id="negeri">
                                @foreach ($negeri as $n)
                                    <option @selected($bantuan->negeri_id == $n->id) value="{{ $n->id }}">
                                        {{ $n->name }}
                                    </option>
                                @endforeach
                            </select>

                        </div>

                        <div class="col-lg-6 mb-3">
                            <label>Daerah</label>
                            <select name="daerah_id" class="form-select" id="daerah">
                                @foreach ($daerah as $n)
                                    @if ($n->negeri_id == $bantuan->negeri_id)
                                        <option @selected($bantuan->daerah_id == $n->id) value="{{ $n->id }}">
                                            {{ $n->name }}
                                        </option>
                                    @endif
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label" for="nama_kampung">Nama Kampung</label>
                            <input class="form-control" name="nama_kampung" value="{{ $bantuan->nama_kampung }}">
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label" for="kementerian">Kementerian Yang
                                Bertanggungjawab</label>
                            <input class="form-control" name="kementerian" value="{{ $bantuan->kementerian }}">
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label" for="agensi">Agensi Yang
                                Ditugaskan</label>
                            <input class="form-control" name="agensi" value="{{ $bantuan->agensi }}">
                        </div>
                        <div class="col-lg-12 mb-3">
                            <label class="form-label" for="sektor">Sektor</label>
                            <input class="form-control" name="sektor" value="{{ $bantuan->sektor }}">
                        </div>
                        <div class="col text-center">
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



        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript">
            $(function() {
                $("#pilih1").change(function() {
                    if ($(this).val() == "3") {
                        $("#pilih2").show();
                    } else {
                        $("#pilih2").hide();
                    }
                });
            });
        </script>
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
