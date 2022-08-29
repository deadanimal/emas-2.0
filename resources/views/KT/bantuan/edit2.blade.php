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
                    <span><b>Kemaskini Ketua Kampung
                        </b></span>
                </div>
            </div>
        </div>

        <hr style="width:100%;text-align:center;">


        <div class="card mb-3">

            <div class="card-body bg-light">
                <form action="/bantuan1/{{ $kampung->id }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="col-lg-12">
                        <label class="form-label" for="nama_kampung">Nama Kampung</label>
                        <input class="form-control" name="nama_kampung" type="text" value="{{ $kampung->nama_kampung }}">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="maklumat_kampung">Maklumat Kampung</label>
                        <input class="form-control" id="maklumat_kampung" name="maklumat_kampung" type="text"
                            value="{{ $kampung->maklumat_kampung }}" />
                    </div>

                    <div class="col-lg-6">
                        <label class="form-label" for="alamat_kampung">Alamat Kampung</label>
                        <input class="form-control" id="alamat_kampung" name="alamat_kampung" type="text"
                            value="{{ $kampung->alamat_kampung }}">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="nama">Gambar Kampung</label>
                        <input class="form-control" id="nama" type="text">
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
