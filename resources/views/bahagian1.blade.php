@extends('base')
@section('content')

    <div class="container">
        <div class="mb-4 text-center">
            <H2>KEMASUKAN DATA</H2>
        </div>

        <div class="col">
            <div class="row align-items-center">
                <div class="col col-lg-8">
                    <span><b>Bahagian 1</b></span>
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
                    <div class="col-lg-8">
                        <label class="form-label" for="nama">Nama</label>
                        <input class="form-control" id="nama" type="text">
                    </div>
                    <div class="col-lg-8">
                        <label class="form-label" for="no_kad_pengenalan">No Kad Pengenalan</label>
                        <input class="form-control" id="no_kad_pengenalan" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="pendapatanKasar">Jumlah Pendapatan Kasar Isi Rumah Dalam
                            Sebulan</label>
                        <input type="integer" class="number form-control" name="contact" value="RM" maxlength="13" />
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="jumlah_pendapatan_per_kapita">Pendapatan Per Kapita</label>
                        <input type="integer" class="number form-control" name="contact" value="RM" maxlength="13" />
                    </div>

                    <div class="col-lg-6">
                        <label class="form-label" for="kategori">Kategori (KIR/AIR)</label>
                        <input class="form-control" id="kategori" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="jumlah_isi_rumah">Jumlah Isi Rumah (KIR/AIR)</label>
                        <input class="form-control" id="jumlah_isi_rumah" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="status_miskin">Status Miskin</label>
                        <input class="form-control" id="status_miskin" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="status_terkeluar">Status Terkeluar</label>
                        <input class="form-control" id="status_terkeluar" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="negeri">Negeri</label>
                        <input class="form-control" id="negeri" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="daerah">Daerah</label>
                        <input class="form-control" id="daerah" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="mukim">Mukim</label>
                        <input class="form-control" id="mukim" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="parlimen">Parlimen</label>
                        <input class="form-control" id="parlimen" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="dun">Dun</label>
                        <input class="form-control" id="dun" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="strata">Strata</label>
                        <input class="form-control" id="strata" type="text">
                    </div>

                    <div class="col-lg-12">
                        <label class="form-label" for="alamat1">Alamat 1</label>
                        <textarea class="form-control" id="alamat1" name="alamat1" cols="30" rows="2"></textarea>
                    </div>
                    <div class="col-lg-12">
                        <label class="form-label" for="alamat2">Alamat 2</label>
                        <textarea class="form-control" id="alamat2" name="alamat2" cols="30" rows="2"></textarea>
                    </div>
                    <div class="col-lg-12">
                        <label class="form-label" for="alamat3">Alamat 3</label>
                        <textarea class="form-control" id="alamat3" name="alamat3" cols="30" rows="2"></textarea>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="poskod">Poskod</label>
                        <input class="form-control" id="poskod" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="koordinat">Koordinat GPS</label>
                        <input class="form-control" id="koordinat" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="longtitude_gps">Longitude (X)</label>
                        <input class="form-control" id="longtitude_gps" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="latitude_gps">Longitude (Y)</label>
                        <input class="form-control" id="latitude_gps" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="no_telefon_tetap">No. Telefon Tetap</label>
                        <input class="form-control" id="no_telefon_tetap" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="no_telefon_bimbit">No. Telefon Bimbit</label>
                        <input class="form-control" id="no_telefon_bimbit" type="text">
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
