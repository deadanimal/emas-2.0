@extends('base-kt')
@section('content')
    <div class="container">

        <div class="mb-4 text-center">
            <H2>KEMASUKAN DATA</H2>
        </div>

        <div class="col">
            <div class="row align-items-center">
                <div class="col col-lg-8">
                    <span><b>Bahagian 6 - Muat Naik Fail Senarai KIR Dan AIR
                        </b></span>
                </div>
            </div>
        </div>

        <hr style="width:100%;text-align:center;">


        <div class="col-12 ">
            <div class="col-12">
                <form action="/KT/senarai-kir-dan-air-excel" method="POST" enctype="multipart/form-data">
                    @csrf

                    *Fail Yang Dimuat Naik Mestilah Mengikut Format Asal Yang Disediakan
                    <br><br>

                    <div class="card mb-3">

                        <div class="card-body bg-light">
                            <div class="dropzone dropzone-multiple p-0" id="my-awesome-dropzone"
                                data-dropzone="data-dropzone" action="#!">
                                <div class="fallback">
                                    <input name="profilfile" type="file"
                                        accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" />
                                </div>
                                <div class="dz-message" data-dz-message="data-dz-message"> <img class="me-2"
                                        src="../../assets/img/icons/cloud-upload.svg" width="25" alt="" />Drop
                                    your files here</div>
                                <div class="dz-preview dz-preview-multiple m-0 d-flex flex-column">
                                    <div class="d-flex media align-items-center mb-3 pb-3 border-bottom btn-reveal-trigger">

                                        <div class="flex-1 d-flex flex-between-center">
                                            <div>
                                                <h6 data-dz-name="data-dz-name"></h6>
                                                <div class="d-flex align-items-center">
                                                    <p class="mb-0 fs--1 text-400 lh-1" data-dz-size="data-dz-size"></p>
                                                    <div class="dz-progress"><span class="dz-upload"
                                                            data-dz-uploadprogress=""></span></div>
                                                </div>
                                            </div>
                                            <div class="dropdown font-sans-serif">
                                                <button
                                                    class="btn btn-link text-600 btn-sm dropdown-toggle btn-reveal dropdown-caret-none"
                                                    type="button" data-bs-toggle="dropdown" aria-haspopup="true"
                                                    aria-expanded="false"><span class="fas fa-ellipsis-h"></span></button>
                                                <div class="dropdown-menu dropdown-menu-end border py-2"><a
                                                        class="dropdown-item" href="#!"
                                                        data-dz-remove="data-dz-remove">Remove File</a></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="document">Upload File</label>
                        <div class="col-sm-10" style="width:30%">
                            <input class="form-control" name="userfile" type="file"
                                accept="application/pdf, application/vnd.ms-excel">
                        </div>
                    </div> --}}

                    <br>

                    <div class="col" style="text-align: center">
                        <button class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                            type="submit" value="Save"
                            onclick="return confirm('Adakah anda mahu mengemaskini data ini?')"><span
                                class="fas fa-save"></span>&nbsp;Muat Naik
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
