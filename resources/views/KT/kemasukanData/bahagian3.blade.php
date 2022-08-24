@extends('base')
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



        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Ooops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card mb-3">

            <div class="card-body bg-light">
                <form method="POST" action="/kemasukanData">
                    @csrf
                    <div class="row g-3">

                        <div class="col-lg-6">
                            <label class="form-label" for="jumlah_pendapatan">Jumlah Pendapatan
                                Pekerjaan Bergaji</label>
                            <input class="form-control" name="contact" type="number" />
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="jumlah_pendapatan">Jumlah Pendapatan Pekerjaan Sendiri
                                (Bukan Pertanian)</label>
                            <input class="form-control" name="contact" type="number" />
                        </div>

                        <div class="col-lg-6">
                            <label class="form-label" for="jumlah_pendapatan">Jumlah Pendapatan Pekerjaan Sendiri
                                (Pertanian/Ternakan)</label>
                            <input class="form-control" id="kategori" type="number">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="jumlah_pendapatan">Jumlah Pendapatan Pekerjaan Sendiri
                                (Perikanan)</label>
                            <input class="form-control" id="jumlah" type="number">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="jumlah_pendapatan">Jumlah Keluaran Sendiri Yang
                                Dikeluarkan</label>
                            <input class="form-control" id="statusMiskin" type="number">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="jumlah_pendapatan">Jumlah Pendapatan Lain
                                Diperolehi</label>
                            <input class="form-control" id="statusMiskin" type="number">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="pendapatan_harta">Pendapatan Daripada Harta
                                (Faedah, Dividen & Sewa Daripada Tanah Pertanian)</label>
                            <input class="form-control" id="pendapatan_harta" type="number">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="kiriman_isi_rumah">Kiriman Isi Rumah Lain
                                (Dalam Dan Luar Negeri)</label>
                            <input class="form-control" id="kiriman_isi_rumah" type="number">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="nafkah">Nafkah</label>
                            <input class="form-control" id="nafkah" type="number">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="biasiswa">Biasiswa Dan Dermasiswa</label>
                            <input class="form-control" id="biasiswa" type="number">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="pencen">Pencen</label>
                            <input class="form-control" id="pencen" type="number">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="hadiah">Hadiah Berupa Wang Tunai Atau
                                Mata Benda</label>
                            <input class="form-control" id="hadiah" type="number">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="pembayaran">Pembayaran Lain Berkala
                                Yang Diterima</label>
                            <input class="form-control" id="pembayaran" type="number">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="jumlah_bantuan">Jumlah Bantuan (Bulan Semasa)</label>
                            <input class="form-control" id="jumlah_bantuan" type="number">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="jumlah_impak_bantuan">Jumlah Impak Bantuan</label>
                            <input class="form-control" id="jumlah_impak_bantuan" type="number">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="jumlah_pendapatan_kasar">Jumlah Pendapatan Kasar</label>
                            <input class="form-control" id="jumlah_pendapatan_kasar" type="number">
                        </div>




                        <div class="col" style="text-align: center">
                            <button class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                                type="submit" value="Save"
                                onclick="return confirm('Adakah anda mahu mengubah data ini?')"><span
                                    class="fas fa-save"></span>&nbsp;Simpan
                            </button>
                            <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                                href="/kemasukanData/bahagian4">&nbsp;Seterusnya
                                <span class="far fa-arrow-alt-circle-right"></span>
                            </a>
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
