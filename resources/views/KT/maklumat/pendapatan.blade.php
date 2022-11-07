@extends('base-kt')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>KEMASUKAN DATA</H2>
        </div>

        <div class="col">
            <div class="row align-items-center">
                <div class="col col-lg-8">
                    <span><b>Bahagian 5 - Pendapatan Bulanan</b></span>
                </div>
            </div>
        </div>

        <br>

        <div class="card-body bg-light">
            <form action="/KT/senarai-kir-dan-air-excel" method="POST" enctype="multipart/form-data">
                @csrf


                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="bulan_semasa">Bulan Semasa</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="bulan_semasa">
                            <option selected disabled hidden>SILA PILIH BULAN</option>
                            <option value="Januari">Januari</option>
                            <option value="Februari">Februari</option>
                            <option value="Mac">Mac</option>
                            <option value="April">April</option>
                            <option value="Mei">Mei</option>
                            <option value="Jun">Jun</option>
                            <option value="Julai">Julai</option>
                            <option value="Ogos">Ogos</option>
                            <option value="September">September</option>
                            <option value="Oktober">Oktober</option>
                            <option value="November">November</option>
                            <option value="Disember">Disember</option>
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
                            <span class="fas fa-times-circle"></span>&nbsp;Batal
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
