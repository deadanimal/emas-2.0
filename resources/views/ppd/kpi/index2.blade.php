@extends('base')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>PELAN PELAKSANAAN DASAR</H2>
        </div>

        <br>

        <div class="col">
            <div class="row align-items-center">
                <div class="col col-lg-8">
                    <span><b>KPI Nasional</b></span>

                    <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                        onClick="window.location.reload();">
                        <span class="fas fa-history"></span>
                    </a>
                </div>

            </div>

            <hr style="width:100%;text-align:center;"><br>



            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="tahun">Pilih Tahun Berkaitan</label>
                <div class="col-sm-10" style="width:30%">
                    <select class="form-control" name="tahun" id="pilih1">
                        <option selected disabled hidden>PLEASE CHOOSE</option>
                        <option value="Q1">Q1 (JAN-MAC)</option>
                        <option value="Q2">Q2 (APR-JUN)</option>
                        <option value="Q3">Q3 (JUL-SEP)</option>
                        <option value="Q4">Q4 (OKT-DIS)</option>
                    </select>

                </div>
            </div>

            <div class="mb-3 row" id="pilih2">
                <label class="col-sm-2 col-form-label" for="namaThrust">Masukkan Pencapaian</label>
                <div class="col-sm-10" style="width:30%">
                    <input class="form-control" type="text" name="namaThrust" />

                </div>
            </div>

        </div>
    </div>

    <script>
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
@endsection
