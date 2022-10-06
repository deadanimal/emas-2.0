@extends('base-kt')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>KEMASKINI DATA</H2>
        </div>

        <div class="col">
            <div class="row align-items-center">
                <div class="col col-lg-8">
                    <span><b>Bahagian 1 - Butiran</b></span>
                </div>
            </div>
        </div>

        <hr style="width:100%;text-align:center;">

        <x-errors-component :errors="$errors->any() ? $errors->all() : null" />

        <div class="card mb-3">
            <div class="card-body bg-light">

                {{-- <form method="POST" action="/kemasukanData/update">
                    @csrf --}}

                <form action="/KT/kemasukanData/{{ $profil->id }}" method="POST">
                    @csrf
                    @method('PUT')

                    <input type="hidden" value="{{ $profil->id }}">
                    <div class="row g-3">

                        <input type="hidden" name="current_bahagian" value="2" />
                        <div class="col-lg-12">
                            <label class="form-label" for="nama">Nama</label>
                            <input class="form-control" id="nama" name="nama" type="text"
                                value="{{ $profil->nama }}">
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label" for="no_kad_pengenalan">No Kad Pengenalan</label>
                            <input type="number" class="form-control" id="no_kad_pengenalan" name="no_kad_pengenalan"
                                value="{{ $profil->no_kad_pengenalan }}">
                        </div>
                        <div class="col-lg-6">

                            <label class="form-label" for="pendapatanKasar">Jumlah Pendapatan Kasar Isi Rumah Dalam
                                Sebulan</label>
                            <input class="form-control" type="number" name="jumlah_kasar_isi_rumah_sebulan"
                                value="{{ $profil->jumlah_kasar_isi_rumah_sebulan }}">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="jumlah_pendapatan_per_kapita">Pendapatan Per Kapita</label>
                            <input class="form-control" type="number" name="jumlah_pendapatan_per_kapita"
                                value="{{ $profil->pendapatan_per_kapita }}">
                        </div>

                        <div class="col-lg-6">
                            <label class="form-label" for="kategori">Kategori</label>
                            <select class="form-control" name="kategori">
                                <option @selected($profil->kategori == 'KIR') value="KIR">KIR</option>
                                <option @selected($profil->kategori == 'AIR') value="AIR">AIR</option>

                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="jumlah_isi_rumah">Jumlah Isi Rumah</label>
                            <input class="form-control" id="jumlah_isi_rumah" type="number" name="jumlah_isi_rumah"
                                value="{{ $profil->jumlah_isi_rumah }}">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="status_miskin">Status Miskin</label>
                            <input class="form-control" id="status_miskin" type="text" name="status_miskin"
                                value="{{ $profil->status_miskin }}">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="status_terkeluar">Status Terkeluar</label>
                            <select class="form-control" name="status_terkeluar">
                                <option selected disabled hidden>SILA PILIH</option>
                                <option value="1">Peningkatan Pendapatan</option>
                                <option value="2">Tidak dapat dikesan</option>
                                <option value="3">Meninggal dunia</option>
                                <option value="4">Berkahwin semula</option>
                                <option value="5">Pengesahan oleh Focus Group</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="negeri">Negeri</label>
                            {{-- <input type=text name="negeri_id" value="{{ $profil->negeri->id }}"> --}}
                            <select class="form-control" name="negeri_id">
                                {{-- <option @selected($profil->negeri_id == 'KIR') value="KIR">KIR</option>
                                <option @selected($profil->negeri_id == 'AIR') value="AIR">AIR</option> --}}
                                @foreach ($negeri as $n)
                                    <option @selected($profil->negeri_id == $n->id) value="{{ $n->id }}">{{ $n->name }}
                                    </option>
                                    {{-- <option @selected ($profil->negeri_id =='{{ $profil->negeri_id }}') value="{{$profil->negeri_id}}">{{ $negeri_id}}</option> --}}
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="daerah">Daerah</label>
                            <select class="form-control" name="daerah_id">
                                @foreach ($daerah as $d)
                                    <option @selected($profil->daerah_id == $d->id) value="{{ $d->id }}">{{ $d->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-lg-6">
                            <label class="form-label" for="mukim">Mukim</label>
                            <input class="form-control" id="mukim" type="text" name="mukim"
                                value="{{ $profil->mukim }}">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="parlimen">Parlimen</label>
                            <input class="form-control" id="parlimen" type="text" name="parlimen"
                                value="{{ $profil->parlimen }}">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="dun">Dun</label>
                            <input class="form-control" id="dun" type="text" name="dun"
                                value="{{ $profil->dun }}">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="strata">Strata</label>

                            <select class="form-control" name="strata">
                                <option @selected($profil->strata == '1') value="1">Bandar</option>
                                <option @selected($profil->strata == '2') value="2">Luar Bandar</option>

                            </select>
                        </div>


                        <div class="col-lg-6">
                            <label class="form-label" for="poskod">Poskod</label>
                            <input class="form-control" id="poskod" type="number" name="poskod"
                                value="{{ $profil->poskod }}">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="kampung">Kampung</label>
                            <input class="form-control" id="kampung" type="text" name="kampung"
                                value="{{ $profil->kampung }}">
                        </div>


                        <div class="col-lg-6">
                            <label class="form-label" for="no_telefon_tetap">No. Telefon Tetap</label>
                            <input class="form-control" id="no_telefon_tetap" type="number" name="no_telefon_tetap"
                                value="{{ $profil->no_telefon_tetap }}">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="no_telefon_bimbit">No. Telefon Bimbit</label>
                            <input class="form-control" id="no_telefon_bimbit" type="number" name="no_telefon_bimbit"
                                value="{{ $profil->no_telefon_bimbit }}">
                        </div>

                        <div class="col" style="text-align: center">
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
@endsection
