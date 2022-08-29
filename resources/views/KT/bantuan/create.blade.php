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
                    <form class="row g-3">
                        <div class="col-lg-12">
                            <label class="form-label" for="nama_bantuan">Nama Bantuan</label>
                            <input class="form-control" name="nama_bantuan" type="text">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="negeri">Negeri</label>
                            <input class="form-control" name="negeri" />
                        </div>

                        <div class="col-lg-6">
                            <label class="form-label" for="daerah">Daerah</label>
                            <input class="form-control" name="daerah" type="text">
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label" for="nama_kampung">Nama Kampung</label>
                            <input class="form-control" name="nama_kampung">
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label" for="kementerian">Kementerian Yang
                                Bertanggungjawab</label>
                            <input class="form-control" name="kementerian">
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label" for="agensi">Agensi Yang
                                Ditugaskan</label>
                            <input class="form-control" name="agensi">
                        </div>
                        <div class="col-lg-12">
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

                    </form>
                </div>
            </div>
        </form>
    </div>
@endsection
