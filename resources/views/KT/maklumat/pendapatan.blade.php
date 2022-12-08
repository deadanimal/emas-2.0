@extends('base-kt')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>KEMASUKAN DATA</H2>
        </div>

        <div class="col">
            <div class="row align-items-center">
                <div class="col col-lg-8">
                    <span><b>Pendapatan Bulanan</b></span>
                </div>
            </div>
        </div>

        <hr style="width:100%;text-align:center;">

        <x-errors-component :errors="$errors->any() ? $errors->all() : null" />


        <div class="card-body bg-light">
            <form method="POST" action="/KT/kemasukanData-pendapatan">
                @csrf

                <input type="hidden" name="profil_id" value="{{ $profils->id }}">


                <table class="table table-bordered" style="text-align: center">
                    <thead class="table-light">
                        <tr>
                            <th class="align-middle"> Bulan Semasa</th>
                            <th class="align-middle">Pendapatan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pendapatan_bulanans as $bulan)
                            <tr>
                                <td> <input class="form-control" value="{{ $bulan->bulan }}" readonly />
                                </td>
                                <td>
                                    <div class="input-group">
                                        <span class="input-group-text"><b>RM</b></span>
                                        <input class="form-control" value="{{ $bulan->pendapatan }}" readonly />

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                <br>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="bulan">Bulan Semasa</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="bulan">
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
                    <label class="col-sm-2 col-form-label" for="pendapatan"></label>
                    <div class="col-sm-10" style="width:30%">
                        <div class="input-group">
                            <span class="input-group-text"><b>RM</b></span>
                            <input class="form-control" type="number" name="pendapatan">
                        </div>
                    </div>
                </div><br>

                <br><br>

                <div class="row">
                    <div class="col" style="text-align: center">
                        <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3"
                            href="/KT/kemasukanData/index">
                            <span class="fas fa-times-circle"></span>&nbsp;Batal
                        </a>
                        <button class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                            type="submit" value="Save"
                            onclick="return confirm('Adakah anda mahu menyimpan data ini?')"><span
                                class="fas fa-save"></span>&nbsp;Tambah
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
