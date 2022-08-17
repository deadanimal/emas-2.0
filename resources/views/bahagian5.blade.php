@extends('base')
@section('content')

    <div class="container">
        <div class="mb-4 text-center">
            <H2>KEMASUKAN DATA</H2>
        </div>

        <div class="col">
            <div class="row align-items-center">
                <div class="col col-lg-8">
                    <span><b>Bahagian 5 - Kategori Bantuan</b></span>
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

                    <div class="col-lg-12">
                        <label class="form-label" for="nama">Jenis Bantuan/Kebajikan/Pinjaman/Projek/Program Yang
                            Diterima</label>
                        <input class="form-control" id="alamat1" name="alamat1">
                    </div>

                    <div class="col-lg-12">
                        <label class="form-label" for="nama">Bantuan/Kebajikan/Pinjaman/Projek/Program Yang Diterima
                            Dalam Bulan Semasa</label>
                        <input class="form-control" id="alamat1" name="alamat1">
                    </div>

                    <div class="col-lg-12">
                        <label class="form-label" for="nama">Bantuan/Kebajikan/Pinjaman/Projek/Program Yang Diterima
                            Selain Dari Tempoh Di Atas</label>
                        <input class="form-control" id="alamat1" name="alamat1">
                    </div>

                    <div class="col-lg-12">
                        <label class="form-label" for="nama">Bantuan/Kebajikan/Pinjaman/Projek/Program Yang
                            Diperlukan</label>
                        <input class="form-control" id="alamat1" name="alamat1">
                    </div>

                    <div class="col-lg-12">
                        <label class="form-label" for="nama">Kategori Bantuan</label>
                        <input class="form-control" id="alamat1" name="alamat1">
                    </div>


                    <div class="col-lg-6">
                        <label class="form-label" for="pendapatanKasar">Keperluan Asas</label>
                        <input class="form-control" name="contact" />
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="pendapatanKapita">Ekonomi</label>
                        <input class="form-control" name="contact" />
                    </div>

                    <div class="col-lg-6">
                        <label class="form-label" for="kategori">Minda Insan</label>
                        <input class="form-control" id="kategori" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="jumlah">Sosio Kebajikan</label>
                        <input class="form-control" id="jumlah" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="statusMiskin">Pelajaran</label>
                        <input class="form-control" id="statusMiskin" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="statusMiskin">Pembangunan Kawasan</label>
                        <input class="form-control" id="statusMiskin" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="negeri">Kesihatan</label>
                        <input class="form-control" id="negeri" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="daerah">Peluang Pekerjaan</label>
                        <input class="form-control" id="daerah" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="mukim">Tiada Maklumat</label>
                        <input class="form-control" id="mukim" type="text">
                    </div>

                    <div class="col-lg-6">

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
