@extends('base')
@section('content')

    <div class="container">
        <div class="mb-4 text-center">
            <H2>KEMASUKAN DATA</H2>
        </div>

        <div class="col">
            <div class="row align-items-center">
                <div class="col col-lg-8">
                    <span><b>Bahagian 2 - Maklumat</b></span>
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
                        <label class="form-label" for="nama">Hubungan Dengan KIR</label>
                        <input class="form-control" id="alamat1" name="alamat1">
                    </div>

                    <div class="col-lg-6">
                        <label class="form-label" for="tahun_kelahiran">Tahun Kelahiran</label>
                        <input class="form-control" name="tahun_kelahiran" />
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="tarikh_lahir">Tarikh Lahir</label>
                        <input class="form-control" name="tarikh_lahir" />
                    </div>

                    <div class="col-lg-6">
                        <label class="form-label" for="umur">Umur</label>
                        <input class="form-control" id="umur" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="jantina">Jantina</label>
                        <input class="form-control" id="jantina" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="kumpulan_etnik">Kumpulan Etnik</label>
                        <input class="form-control" id="kumpulan_etnik" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="kewarganegaraan">Kewarganegaraan</label>
                        <input class="form-control" id="kewarganegaraan" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="agama">Agama</label>
                        <input class="form-control" id="agama" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="status_perkahwinan">Status Perkahwinan</label>
                        <input class="form-control" id="status_perkahwinan" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="taraf_pendidikan">Taraf Pendidikan Tertinggi</label>
                        <input class="form-control" id="taraf_pendidikan" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="kemahiran_yang_dimiliki">Kemahiran Yang Dimiliki</label>
                        <input class="form-control" id="kemahiran_yang_dimiliki" type="text">
                    </div>


                    <div class="col-lg-12">
                        <label class="form-label" for="status_pekerjaan_utama">Status Perkerjaan Utama</label>
                        <input class="form-control" id="status_pekerjaan_utama" name="status_pekerjaan_utama">
                    </div>
                    <div class="col-lg-12">
                        <label class="form-label" for="jenis_pekerjaan">Jika Menjawab Kod 1, 2 atau 3, Nyatakan Secara
                            Terperinci
                            Tugas / Jenis Perkerjaan</label>
                        <textarea class="form-control" id="jenis_pekerjaan" name="jenis_pekerjaan" cols="30" rows="2"></textarea>
                    </div>
                    <div class="col-lg-12">
                        <label class="form-label" for="alamat3">Pemilikan Harta Isi Rumah/Kelengkapan Isi Rumah (Jawapan
                            Pelbagai)</label>
                        <textarea class="form-control" id="alamat2" name="alamat2" cols="30" rows="2"></textarea>
                    </div>
                    <div class="col-lg-12">
                        <label class="form-label" for="alamat3">Adakah Anda Menghidap Apa-apa Penyakit Dan Mendapat
                            Rawatan Seperti Berikut
                            (Jawapan Pelbagai)</label>
                        <textarea class="form-control" id="alamat2" name="alamat2" cols="30" rows="2"></textarea>
                    </div>
                    <div class="col-lg-12">
                        <label class="form-label" for="jika_ada_kecacatan">Jenis Kecacatan/Ketidakupayaan (Secara
                            Pemerhatian,
                            Jawapan Pelbagai)</label>
                        <textarea class="form-control" id="jika_ada_kecacatan" name="jika_ada_kecacatan" cols="30" rows="2"></textarea>
                    </div>
                    <div class="col-lg-12">
                        <label class="form-label" for="alamat3">Jika Ada Kecacatan, Adakah Sudah Didaftarkan Di Jabatan
                            Kebajikan
                            Masyarakat Sebagai OKU?</label>
                        <textarea class="form-control" id="alamat2" name="alamat2" cols="30" rows="2"></textarea>
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="status_produktiviti">Status Produktiviti</label>
                        <input class="form-control" id="status_produktiviti" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="kumpulan_perbenlanjaan">Simpanan/Pelaburan Yang Dimiliki</label>
                        <input class="form-control" id="kumpulan_perbenlanjaan" type="text">
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
