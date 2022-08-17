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
                <form class="row g-3">
                    <div class="col-lg-6">
                        <label class="form-label" for="pendapatanKasar">Jumlah Pendapatan
                            Pekerjaan Bergaji</label>
                        <input class="form-control" name="contact" />
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="pendapatanKapita">Jumlah Pendapatan Pekerjaan Sendiri
                            (Bukan Pertanian)</label>
                        <input class="form-control" name="contact" />
                    </div>

                    <div class="col-lg-6">
                        <label class="form-label" for="kategori">Jumlah Pendapatan Pekerjaan Sendiri
                            (Pertanian/Ternakan)</label>
                        <input class="form-control" id="kategori" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="jumlah">Jumlah Pendapatan Pekerjaan Sendiri
                            (Perikanan)</label>
                        <input class="form-control" id="jumlah" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="statusMiskin">Jumlah Keluaran Sendiri Yang
                            Dikeluarkan</label>
                        <input class="form-control" id="statusMiskin" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="statusMiskin">Jumlah Pendapatan Lain
                            Diperolehi</label>
                        <input class="form-control" id="statusMiskin" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="negeri">Pendapatan Daripada Harta
                            (Faedah, Dividen & Sewa Daripada Tanah Pertanian)</label>
                        <input class="form-control" id="negeri" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="daerah">Kiriman Isi Rumah Lain
                            (Dalam Dan Luar Negeri)</label>
                        <input class="form-control" id="daerah" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="mukim">Nafkah</label>
                        <input class="form-control" id="mukim" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="parlimen">Biasiswa Dan Dermasiswa</label>
                        <input class="form-control" id="parlimen" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="statusMiskin">Pencen</label>
                        <input class="form-control" id="statusMiskin" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="statusMiskin">Hadiah Berupa Wang Tunai Atau
                            Mata Benda</label>
                        <input class="form-control" id="statusMiskin" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="negeri">Pembayaran Lain Berkala
                            Yang Diterima</label>
                        <input class="form-control" id="negeri" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="daerah">Jumlah Bantuan (Bulan Semasa)</label>
                        <input class="form-control" id="daerah" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="mukim">Jumlah Impak Bantuan</label>
                        <input class="form-control" id="mukim" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="parlimen">Jumlah Pendapatan Kasar</label>
                        <input class="form-control" id="parlimen" type="text">
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
