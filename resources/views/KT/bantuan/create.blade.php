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
                <form class="row g-3">
                    <div class="col-lg-12">
                        <label class="form-label" for="nama">Nama Bantuan</label>
                        <input class="form-control" id="nama" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="pendapatanKapita">Negeri</label>
                        <input class="form-control" name="contact" />
                    </div>

                    <div class="col-lg-6">
                        <label class="form-label" for="kategori">Daerah</label>
                        <input class="form-control" id="kategori" type="text">
                    </div>
                    <div class="col-lg-12">
                        <label class="form-label" for="nama">Nama Kampung</label>
                        <input class="form-control" id="alamat1" name="alamat1">
                    </div>
                    <div class="col-lg-12">
                        <label class="form-label" for="nama">Kementerian Yang
                            Bertanggungjawab</label>
                        <input class="form-control" id="alamat1" name="alamat1">
                    </div>
                    <div class="col-lg-12">
                        <label class="form-label" for="nama">Agensi Yang
                            Ditugaskan</label>
                        <input class="form-control" id="alamat1" name="alamat1">
                    </div>
                    <div class="col-lg-12">
                        <label class="form-label" for="nama">Sektor</label>
                        <input class="form-control" id="alamat1" name="alamat1">
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
