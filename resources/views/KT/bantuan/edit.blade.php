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
                <form action="/bantuan/{{ $bantuan->id }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="col-lg-12">
                        <label class="form-label" for="namaBantuan">Nama Bantuan</label>
                        <input class="form-control" name="namaBantuan" type="text" value="{{ $bantuan->namaBantuan }}">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="negeri">Negeri</label>
                        <input class="form-control" name="negeri" type="text" value="{{ $bantuan->negeri }}" />
                    </div>

                    <div class="col-lg-6">
                        <label class="form-label" for="daerah">Daerah</label>
                        <input class="form-control" nama="daerah" type="text" value="{{ $bantuan->daerah }}">
                    </div>
                    <div class="col-lg-12">
                        <label class="form-label" for="namaKampung">Nama Kampung</label>
                        <input class="form-control" name="namaKampung" value="{{ $bantuan->namaKampung }}">
                    </div>
                    <div class="col-lg-12">
                        <label class="form-label" for="kementerian">Kementerian Yang
                            Bertanggungjawab</label>
                        <input class="form-control" name="kementerian" value="{{ $bantuan->kementerian }}">
                    </div>
                    <div class="col-lg-12">
                        <label class="form-label" for="agensi">Agensi Yang
                            Ditugaskan</label>
                        <input class="form-control" name="agensi" value="{{ $bantuan->agensi }}">
                    </div>
                    <div class="col-lg-12">
                        <label class="form-label" for="sektor">Sektor</label>
                        <input class="form-control" name="sektor" value="{{ $bantuan->sektor }}">
                    </div>




                    <div class="col" style="text-align: center">
                        <button class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                            type="submit" value="Save"
                            onclick="return confirm('Adakah anda mahu mengubah data ini?')"><span
                                class="fas fa-save"></span>&nbsp;Simpan
                        </button>
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
    @stop
</div>
