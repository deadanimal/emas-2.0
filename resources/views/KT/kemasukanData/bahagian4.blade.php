@extends('base')
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
                <div class="card-header" style="text-align: center">
                    <b>Anggaran Perbelanjaan Isi Rumah</b>
                </div><br>
                <form method="POST" action="/kemasukanData">
                    @csrf
                    <div class="row g-3">


                        <div class="col-lg-6">
                            <b>Kumpulan Perbelanjaan</b>
                        </div>

                        <div class="col-lg-6">

                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="kategori">Minum Alkohol Dan Tembakau</label>
                            <input class="form-control" id="kategori" type="text">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="jumlah">Pakaian Dan Kasut</label>
                            <input class="form-control" id="jumlah" type="text">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="statusMiskin">Perumahan, Air, Elektrik, Gas Dan
                                Bahan Api Lain</label>
                            <input class="form-control" id="statusMiskin" type="text">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="statusMiskin">Hiasan, Perkakas Dan Penyelenggaraan
                                Isi Rumah</label>
                            <input class="form-control" id="statusMiskin" type="text">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="negeri">Minum Alkohol Dan Tembakau</label>
                            <input class="form-control" id="negeri" type="text">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="daerah">Kesihatan</label>
                            <input class="form-control" id="daerah" type="text">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="mukim">Pengangkutan</label>
                            <input class="form-control" id="mukim" type="text">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="parlimen">Komunikasi</label>
                            <input class="form-control" id="parlimen" type="text">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="statusMiskin">Pencen</label>
                            <input class="form-control" id="statusMiskin" type="text">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="statusMiskin">Perkhidmatan Rekreasi Dan Kebudayaan</label>
                            <input class="form-control" id="statusMiskin" type="text">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="negeri">Pendidikan</label>
                            <input class="form-control" id="negeri" type="text">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="daerah">Restoran Dan Hotel</label>
                            <input class="form-control" id="daerah" type="text">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="mukim">Pelbagai Barang Dan Perbelanjaan Kewangan</label>
                            <input class="form-control" id="mukim" type="text">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="parlimen">Jumlah Perbelanjaan</label>
                            <input class="form-control" id="parlimen" type="text">
                        </div>

                        <div class="col-lg-6">
                        </div>
                        <div class="col-lg-6">

                        </div>




                        <div class="col" style="text-align: center">
                            <button class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                                type="submit" value="Save"
                                onclick="return confirm('Adakah anda mahu mengubah data ini?')"><span
                                    class="fas fa-save"></span>&nbsp;Simpan
                            </button>
                            <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                                href="/kemasukanData/bahagian5">&nbsp;Seterusnya
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
