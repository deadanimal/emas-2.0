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


                <div class="card mb-3">
                    <div class="card-header">
                        <h5 class="mb-0">Upload Files</h5>
                    </div>
                    <div class="card-body bg-light">
                        <form action="/ED/importUserExcel" method="POST" enctype="multipart/form-data"
                            class="dropzone dropzone-multiple p-0" id="my-awesome-dropzone" data-dropzone="data-dropzone"
                            action="#!">
                            @csrf
                            <div class="fallback">
                                <input name="userfile" type="file"
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

                            <div class="col mt-5" style="text-align: center">
                                <button class="btn btn-falcon-default btn-sm"
                                    style="background-color: #047FC3; color:white;" type="submit" value="Save"
                                    onclick="return confirm('Adakah anda mahu mengemaskini data ini?')"><span
                                        class="fas fa-save"></span>&nbsp;Upload
                                </button>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
        </div>



    </div>
@endsection
