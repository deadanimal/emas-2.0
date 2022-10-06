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


        <div class="card mb-3">

            <div class="card-body bg-light">
                <form action="/KT/bantuan1/{{ $ketua->id }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="col-lg-12">
                        <label class="form-label" for="nama_penghulu">Nama Ketua Kampung</label>
                        <input class="form-control" name="nama_penghulu" type="text" value="{{ $ketua->nama_penghulu }}">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="no_tel_pejabat">No. Tel Pejabat</label>
                        <input class="form-control" name="no_tel_pejabat" type="number"
                            value="{{ $ketua->no_tel_pejabat }}" />
                    </div>

                    <div class="col-lg-6">
                        <label class="form-label" for="tahun_mula_berkhidmat">Tahun Mula Berkhidmat</label>
                        <input class="form-control" nama="tahun_mula_berkhidmat" type="date"
                            value="{{ $ketua->tahun_mula_berkhidmat }}">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="tahun_tamat_berkhidmat">Tahun Taman Berkhidmat</label>
                        <input class="form-control" name="tahun_tamat_berkhidmat" type="date"
                            value="{{ $ketua->tahun_tamat_berkhidmat }}">
                    </div>
                    <div class="col-lg-12">
                        <label class="form-label" for="no_kad_pengenalan">No Kad Pengenalan</label>
                        <input class="form-control" name="no_kad_pengenalan" type="number"
                            value="{{ $ketua->no_kad_pengenalan }}">
                    </div>
                    <div class="col-lg-12">
                        <label class="form-label" for="no_tel_bimbit">No.Tel Bimbit</label>
                        <input class="form-control" name="no_tel_bimbit" type="number" value="{{ $ketua->no_tel_bimbit }}">
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
