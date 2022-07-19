@extends('base')
@section('content')

    <div class="container">
        <br>
        <div class="mb-4 text-center">
            <H2>KEMASUKAN DATA</H2>
        </div>

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
            <div class="card-header">
                <h5 class="mb-0">Bahagian 1</h5>
            </div>
            <div class="card-body bg-light">
                <form class="row g-3">
                    <div class="col-lg-8">
                        <label class="form-label" for="nama">Nama</label>
                        <input class="form-control" id="nama" type="text">
                    </div>
                    <div class="col-lg-8">
                        <label class="form-label" for="icNo">No Kad Pengenalan</label>
                        <input class="form-control" id="icNo" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="pendapatanKasar">Jumlah Pendapatan Kasar Isi Rumah Dalam
                            Sebulan</label>
                            <input type="integer" class="number form-control" name="contact" value="RM" maxlength="13" />
                        </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="pendapatanKapita">Pendapatan Per Kapita</label>
                        <input type="integer" class="number form-control" name="contact" value="RM" maxlength="13" />
                    </div>

                    <div class="col-lg-6">
                        <label class="form-label" for="kategori">Kategori (KIR/AIR)</label>
                        <input class="form-control" id="kategori" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="jumlah">Jumlah Isi Rumah (KIR/AIR)</label>
                        <input class="form-control" id="jumlah" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="statusMiskin">Status Miskin</label>
                        <input class="form-control" id="statusMiskin" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="statusMiskin">Status Terkeluar</label>
                        <input class="form-control" id="statusMiskin" type="text">
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
                        <label class="form-label" for="longitudeX">Longitude (X)</label>
                        <input class="form-control" id="longitudeX" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="longitudeY">Longitude (Y)</label>
                        <input class="form-control" id="longitudeY" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="noPhone">No. Telefon Tetap</label>
                        <input class="form-control" id="noPhone" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="noPhone1">No. Telefon Bimbit</label>
                        <input class="form-control" id="noPhone1" type="text">
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
        $('input.number').keyup(function(){
        if (
            ($(this).val().length > 0) && ($(this).val().substr(0,3) != 'RM')
            || ($(this).val() == '')
            ){
            $(this).val('RM');
        }
    });
    </script>
@endsection
