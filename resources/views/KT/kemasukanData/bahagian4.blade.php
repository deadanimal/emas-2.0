@extends('base-kt')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>KEMASUKAN DATA</H2>
        </div>

        <div class="col">
            <div class="row align-items-center">
                <div class="col col-lg-8">
                    <span><b>Bahagian 4 - Perbelanjaan Dan Pembayaran Oleh Isi Rumah</b></span>
                </div>
            </div>
        </div>

        <hr style="width:100%;text-align:center;">



        <x-errors-component :errors="$errors->any() ? $errors->all() : null" />


        <div class="card mb-3">

            <div class="card-body bg-light">
                <div class="card-header" style="text-align: center">
                    <b>Anggaran Perbelanjaan Isi Rumah</b>
                </div><br>
                <form method="POST" action="/KT/kemasukanData-bahagian4">
                    @csrf
                    <div class="row g-3">


                        <div class="col-lg-6">
                            <b>Kumpulan Perbelanjaan</b>
                        </div>

                        <div class="col-lg-6">

                        </div>
                        <div class="col-lg-6">
                            <label class="form-label">Minum Alkohol Dan Tembakau</label>

                            <div class="input-group">
                                <span class="input-group-text" id="rm1">RM</span>
                                <input class="form-control kiraJumlah" type="number" value="0" aria-describedby="rm1">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label">Pakaian Dan Kasut</label>
                            <div class="input-group">
                                <span class="input-group-text" id="rm2">RM</span>
                                <input class="form-control kiraJumlah" type="number" value="0" aria-describedby="rm2">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label">Perumahan, Air, Elektrik, Gas Dan
                                Bahan Api Lain</label>
                            <div class="input-group">
                                <span class="input-group-text" id="rm3">RM</span>
                                <input class="form-control kiraJumlah" type="number" value="0" aria-describedby="rm3">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label">Hiasan, Perkakas Dan Penyelenggaraan
                                Isi Rumah</label>
                            <div class="input-group">
                                <span class="input-group-text" id="rm4">RM</span>
                                <input class="form-control kiraJumlah" type="number" value="0" aria-describedby="rm4">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label">Minum Alkohol Dan Tembakau</label>
                            <div class="input-group">
                                <span class="input-group-text" id="rm5">RM</span>
                                <input class="form-control kiraJumlah" type="number" value="0" aria-describedby="rm5">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label">Kesihatan</label>
                            <div class="input-group">
                                <span class="input-group-text" id="rm6">RM</span>
                                <input class="form-control kiraJumlah" type="number" value="0" aria-describedby="rm6">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label">Pengangkutan</label>
                            <div class="input-group">
                                <span class="input-group-text" id="rm7">RM</span>
                                <input class="form-control kiraJumlah" type="number" value="0" aria-describedby="rm7">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label">Komunikasi</label>
                            <div class="input-group">
                                <span class="input-group-text" id="rm8">RM</span>
                                <input class="form-control kiraJumlah" type="number" value="0" aria-describedby="rm8">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label">Pencen</label>
                            <div class="input-group">
                                <span class="input-group-text" id="rm9">RM</span>
                                <input class="form-control kiraJumlah" type="number" value="0" aria-describedby="rm9">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label">Perkhnamematan Rekreasi Dan Kebudayaan</label>
                            <div class="input-group">
                                <span class="input-group-text" id="rm10">RM</span>
                                <input class="form-control kiraJumlah" type="number" value="0"
                                    aria-describedby="rm10">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label">Pendnameikan</label>
                            <div class="input-group">
                                <span class="input-group-text" id="rm11">RM</span>
                                <input class="form-control kiraJumlah" type="number" value="0"
                                    aria-describedby="rm11">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label">Restoran Dan Hotel</label>
                            <div class="input-group">
                                <span class="input-group-text" id="rm12">RM</span>
                                <input class="form-control kiraJumlah" type="number" value="0"
                                    aria-describedby="rm12">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label">Pelbagai Barang Dan Perbelanjaan Kewangan</label>
                            <div class="input-group">
                                <span class="input-group-text" id="rm13">RM</span>
                                <input class="form-control kiraJumlah" type="number" value="0"
                                    aria-describedby="rm13">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label">Jumlah Perbelanjaan</label>
                            <div class="input-group">
                                <span class="input-group-text" id="rm">RM</span>
                                <input class="form-control" id="result" type="number" value="0"
                                    aria-describedby="rm" disabled>
                                <input type="hidden" name="result" id="resultHide" value="0">
                            </div>
                        </div>
                        <input type="hidden" name="profil_id" value="{{ $profil->id }}">

                        <div class="col" style="text-align: center">
                            <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3"
                                href="/kemasukanData/bahagian3">
                                <span class="fas fa-step-backward"></span>&nbsp;Kembali
                            </a>
                            <button class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                                type="submit" value="Save"
                                onclick="return confirm('Adakah anda mahu mengubah data ini?')"><span
                                    class="fas fa-save"></span>&nbsp;Simpan
                            </button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        $(".kiraJumlah").keyup(function() {
            let jumlah = 0;
            jQuery.each($(".kiraJumlah"), function(key, val) {
                jumlah += parseInt(val.value);
            });
            $("#result").val(jumlah);
            $("#resultHide").val(jumlah);
        });
        $('input.number').keyup(function() {
            if (
                ($(this).val().length > 0) && ($(this).val().substr(0, 3) != 'RM') ||
                ($(this).val() == '')
            ) {
                $(this).val('RM');
            }
        });
    </script>
@endsection
