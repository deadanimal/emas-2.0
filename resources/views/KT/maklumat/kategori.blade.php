@extends('base-kt')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>KEMASUKAN DATA</H2>
        </div>

        <div class="col">
            <div class="row align-items-center">
                <div class="col col-lg-8">
                    <span><b>Bahagian 5 - Kategori Bulanan</b></span>
                </div>
            </div>
        </div>

        <br>

        <div class="card-body bg-light">
            <form action="/KT/senarai-kir-dan-air-excel" method="POST" enctype="multipart/form-data">
                @csrf


                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="projek1">Projek 1 | Jumlah Peruntukan (RM)</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="projek1">
                            <option selected disabled hidden>SILA PILIH JENIS BANTUAN</option>
                            <option value="Januari">Januari</option>

                        </select>
                    </div>
                    <label class="col-sm-2 col-form-label" for=""></label>
                    <div class="col-sm-10" style="width:30%">
                        <div class="input-group">
                            <span class="input-group-text"><b>RM</b></span>
                            <input class="form-control" type="number" name="jumlah_bulan_semasa">
                        </div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="projek2">Projek 2 | Jumlah Peruntukan (RM)</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="projek2">
                            <option selected disabled hidden>SILA PILIH JENIS BANTUAN</option>
                            <option value="Januari">Januari</option>

                        </select>
                    </div>
                    <label class="col-sm-2 col-form-label" for=""></label>
                    <div class="col-sm-10" style="width:30%">
                        <div class="input-group">
                            <span class="input-group-text"><b>RM</b></span>
                            <input class="form-control" type="number" name="jumlah_bulan_semasa">
                        </div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="projek3">Projek 3 | Jumlah Peruntukan (RM)</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="projek3">
                            <option selected disabled hidden>SILA PILIH JENIS BANTUAN</option>
                            <option value="Januari">Januari</option>

                        </select>
                    </div>
                    <label class="col-sm-2 col-form-label" for=""></label>
                    <div class="col-sm-10" style="width:30%">
                        <div class="input-group">
                            <span class="input-group-text"><b>RM</b></span>
                            <input class="form-control" type="number" name="jumlah_bulan_semasa">
                        </div>
                    </div>
                </div><br>

                <div class="row">
                    <div class="col" style="text-align: center">

                        <button class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                            href="/KT/maklumat/indikator">
                            <span class="fas fa-plus-square"></span>&nbsp;Tambah
                            </a>
                    </div>
                </div><br><br><br>

                <div class="row">
                    <div class="col" style="text-align: center">
                        <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3"
                            href="/KT/maklumat/indikator">
                            <span class="fas fa-times-circle"></span>&nbsp;Kembali
                        </a>
                        <button class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                            type="submit" value="Save"
                            onclick="return confirm('Adakah anda mahu menyimpan data ini?')"><span
                                class="fas fa-save"></span>&nbsp;Simpan
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
