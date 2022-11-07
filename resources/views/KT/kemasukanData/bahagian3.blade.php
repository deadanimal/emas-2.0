@extends('base-kt')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>KEMASUKAN DATA</H2>
        </div>

        <div class="col">
            <div class="row align-items-center">
                <div class="col col-lg-8">
                    <span><b>Bahagian 3 - Maklumat Pendapatan</b></span>
                </div>
            </div>
        </div>

        <hr style="width:100%;text-align:center;">



        <x-errors-component :errors="$errors->any() ? $errors->all() : null" />

        <div class="card mb-3">

            <div class="card-body bg-light">
                <form method="POST" action="/KT/kemasukanData-bahagian3">
                    @csrf
                    <input type="hidden" name="current_bahagian" value="4">
                    <input type="hidden" name="profil_id" value="{{ $profil->id }}">
                    <div class="row g-3">
                        <div class="col-lg-6">
                            <label class="form-label">Jumlah Pendapatan
                                Pekerjaan Bergaji</label>
                            <div class="input-group">
                                <span class="input-group-text">RM</span>
                                <input class="form-control" type="number" value="0" name="jumlah_pendapatan[]">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label">Jumlah Pendapatan Pekerjaan Sendiri
                                (Bukan Pertanian)</label>
                            <div class="input-group">
                                <span class="input-group-text">RM</span>
                                <input class="form-control" type="number" value="0" name="jumlah_pendapatan[]">
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <label class="form-label">Jumlah Pendapatan Pekerjaan Sendiri
                                (Pertanian/Ternakan)</label>
                            <div class="input-group">
                                <span class="input-group-text">RM</span>
                                <input class="form-control" type="number" value="0" name="jumlah_pendapatan[]">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label">Jumlah Pendapatan Pekerjaan Sendiri
                                (Perikanan)</label>
                            <div class="input-group">
                                <span class="input-group-text">RM</span>
                                <input class="form-control" type="number" value="0" name="jumlah_pendapatan[]">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label">Jumlah Keluaran Sendiri Yang
                                Dikeluarkan</label>
                            <div class="input-group">
                                <span class="input-group-text">RM</span>
                                <input class="form-control" type="number" value="0" name="jumlah_keluaran">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label">Jumlah Pendapatan Lain
                                Diperolehi</label>
                            <div class="input-group">
                                <span class="input-group-text">RM</span>
                                <input class="form-control" type="number" value="0" name="jumlah_pendapatan[]">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="pendapatan_harta">Pendapatan Daripada Harta
                                (Faedah, Dividen & Sewa Daripada Tanah Pertanian)</label>
                            <div class="input-group">
                                <span class="input-group-text">RM</span>
                                <input class="form-control" type="number" value="0" name="pendapatan_harta">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="kiriman_isi_rumah">Kiriman Isi Rumah Lain
                                (Dalam Dan Luar Negeri)</label>
                            <div class="input-group">
                                <span class="input-group-text">RM</span>
                                <input class="form-control" type="number" value="0" name="kiriman_isi_rumah">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="nafkah">Nafkah</label>
                            <div class="input-group">
                                <span class="input-group-text">RM</span>
                                <input class="form-control" type="number" value="0" name="nafkah">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="biasiswa">Biasiswa Dan Dermasiswa</label>
                            <div class="input-group">
                                <span class="input-group-text">RM</span>
                                <input class="form-control" type="number" value="0" name="biasiswa">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="pencen">Pencen</label>
                            <div class="input-group">
                                <span class="input-group-text">RM</span>
                                <input class="form-control" type="number" value="0" name="pencen">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="hadiah">Hadiah Berupa Wang Tunai Atau
                                Mata Benda</label>
                            <div class="input-group">
                                <span class="input-group-text">RM</span>
                                <input class="form-control" type="number" value="0" name="hadiah">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="pembayaran">Pembayaran Lain Berkala
                                Yang Diterima</label>
                            <div class="input-group">
                                <span class="input-group-text">RM</span>
                                <input class="form-control" type="number" value="0" name="pembayaran">
                            </div>
                        </div>
                        {{-- <div class="col-lg-6">
                            <label class="form-label" for="jumlah_bantuan">Jumlah Bantuan (Bulan Semasa)</label>
                            <input class="form-control" name="jumlah_bantuan" type="number">
                        </div> --}}

                        <div class="col-lg-6">
                            <label class="form-label" for="jumlah_impak_bantuan">Jumlah Impak Bantuan</label>
                            <div class="input-group">
                                <span class="input-group-text">RM</span>
                                <input class="form-control" type="number" value="0" name="jumlah_impak_bantuan">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="jumlah_pendapatan_kasar">Jumlah Pendapatan Kasar</label>
                            <div class="input-group">
                                <span class="input-group-text">RM</span>
                                <input class="form-control" type="number" value="0"
                                    name="jumlah_pendapatan_kasar">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label"></label>
                            <input class="form-control" hidden>
                        </div>




                        <div class="col" style="text-align: center">
                            <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3"
                                href="/kemasukanData/bahagian2">
                                <span class="fas fa-step-backward"></span>&nbsp;Kembali
                            </a>
                            <button class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                                type="submit" value="Save"
                                onclick="return confirm('Adakah anda mahu mengubah data ini?')"><span
                                    class="fas fa-save"></span>&nbsp;Seterusnya
                            </button>
                        </div>

                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
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
