@extends('base')
@section('content')
    <div class="container">

        <div class="mb-4 text-center">
            <H2>EXECUTIVE DASHBOARD</H2>
        </div>

        <div class="col">
            <br>
            <div class="row align-items-center">
                <div class="col col-lg-8">
                    <span><b>Muat Naik Pengguna Secara Pukal</b></span>

                </div>
                {{-- <div class="col-12 col-sm-auto ms-auto">
                    <input class="form-control" id="myInput" type="text" placeholder="Carian">
                </div> --}}
            </div>
        </div>

        <hr style="width:100%;text-align:center;">


        <div class="col-12 ">
            <div class="col-12">
                <form method="POST" action="/user">
                    @csrf


                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="document">Upload File</label>
                        <div class="col-sm-10" style="width:30%">
                            <input class="form-control" name="document" type="file">

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
    @stop
</div>
