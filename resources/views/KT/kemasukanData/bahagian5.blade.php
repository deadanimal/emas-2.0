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

        <x-errors-component :errors="$errors->any() ? $errors->all() : null" />


        <div class="card mb-3">

            <div class="card-body bg-light">
                <form method="POST" action="/kemasukanData-bahagian5">
                    @csrf
                    <div class="row g-3">

                        <input type="hidden" name="profil_id" value="{{ $profil->id }}">
                        <div class="col-lg-12">
                            <label class="form-label" for="nama">Jenis Bantuan/Kebajikan/Pinjaman/Projek/Program Yang
                                Diterima</label>
                            <select class="form-select" name="program_yang_diterima">
                                <option selected disabled hidden>SILA PILIH</option>
                                @foreach ($bantuans as $bantuan)
                                    <option value="{{ $bantuan->id }}">{{ $bantuan->nama_bantuan }}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="col-lg-12">
                            <label class="form-label" for="nama">Bantuan/Kebajikan/Pinjaman/Projek/Program Yang Diterima
                                Dalam Bulan Semasa</label>
                            <select class="form-select" name="bulan_semasa">
                                <option selected disabled hidden>SILA PILIH</option>

                                @foreach ($bantuans as $bantuan)
                                    <option value="{{ $bantuan->nama_bantuan }}">{{ $bantuan->nama_bantuan }}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="col-lg-12">
                            <label class="form-label" for="nama">Bantuan/Kebajikan/Pinjaman/Projek/Program Yang Diterima
                                Selain Dari Tempoh Di Atas</label>
                            <select class="form-select" name="selain">
                                <option selected disabled hidden>SILA PILIH</option>

                                @foreach ($bantuans as $bantuan)
                                    <option value="{{ $bantuan->nama_bantuan }}">{{ $bantuan->nama_bantuan }}</option>
                                @endforeach

                            </select>
                        </div>

                        <div class="col-lg-12">
                            <label class="form-label" for="nama">Bantuan/Kebajikan/Pinjaman/Projek/Program Yang
                                Diperlukan</label>
                            <select class="form-control" name="diperlukan">
                                <option selected disabled hidden>SILA PILIH</option>
                                <option value="Keperluan Asas">Keperluan Asas</option>
                                <option value="Ekonomi">Ekonomi</option>
                                <option value="Minda Insan">Minda Insan</option>
                                <option value="Sosio Kebajikan">Sosio Kebajikan</option>
                                <option value="Pelajaran">Pelajaran</option>
                                <option value="Pembangunan Kawasan">Pembangunan Kawasan</option>
                                <option value="Kesihatan">Kesihatan</option>
                                <option value="Peluang Pekerjaan">Peluang Pekerjaan</option>
                                <option value="Tiada Maklumat">Tiada Maklumat</option>
                            </select>
                        </div>


                        <div class="col" style="text-align: center">
                            <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3"
                                href="/kemasukanData/bahagian4">
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
