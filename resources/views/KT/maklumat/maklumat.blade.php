@extends('base-kt')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>KEMASUKAN MAKLUMAT INDIKATOR</H2>
        </div>

        <br>

        <div class="col-12">
            <div class="card-body bg-light">
                <form method="POST" action="/KT/kemasukanData-indikator">
                    @csrf


                    <div class="card-body bg-light">
                        <div class="col mb-3">
                            <label class="form-label" for="kts">Kemiskinan Tegar Sifar (1%)</label>
                            <div class="input-group" style="width: 40%">
                                <input class="form-control" type="number" name="kts" />
                                <div class="input-group-append">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <label class="form-label" for="ppg">Pengurangan Pekali Gini (0.411)</label>
                            <input class="form-control" type="number" name="ppg" style="width: 40%" />

                        </div>
                        <div class="col mb-3">
                            <label class="form-label" for="pikm">Pengurangan Insiden Kemiskinan Mutlak 4.2%
                                (8.4%)</label>
                            <div class="input-group" style="width: 40%">
                                <input class="form-control" type="number" name="pikm" />
                                <div class="input-group-append">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col" style="text-align: center">
                            <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3"
                                href="/KT/kemasukanData/index">
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

    </div>
@endsection
