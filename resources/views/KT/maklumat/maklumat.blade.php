@extends('base-kt')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>KEMASUKAN MAKLUMAT INDIKATOR</H2>
        </div>

        <br>

        <div class="col-12 ">
            <div class="col-12">
                <form action="/KT/senarai-kir-dan-air-excel" method="POST" enctype="multipart/form-data">
                    @csrf


                    <div class="card-body bg-light">
                        <div class="col">
                            <label class="form-label" for="kts">Kemiskinan Tegar Sifar (1%)</label>
                            <div class="input-group">
                                <input class="form-control" type="text" name="kts" />
                                <div class="input-group-append">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <label class="form-label" for="ppg">Pengurangan Pekali Gini (0.411)</label>
                            <input class="form-control" type="text" name="ppg" />

                        </div>
                        <div class="col">
                            <label class="form-label" for="pikm">Pengurangan Insiden Kemiskinan Mutlak 4.2%
                                (8.4%)</label>
                            <div class="input-group">
                                <input class="form-control" type="text" name="pikm" />
                                <div class="input-group-append">
                                    <span class="input-group-text">%</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">

                        <div class="col" style="text-align: center">
                            <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3"
                                href="/MD/plan">
                                <span class="fas fa-times-circle"></span>&nbsp;Cancel
                            </a>
                            <button class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                                type="submit" value="Save"
                                onclick="return confirm('Adakah anda mahu menyimpan data ini?')"><span
                                    class="fas fa-save"></span>&nbsp;Save
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
@endsection
