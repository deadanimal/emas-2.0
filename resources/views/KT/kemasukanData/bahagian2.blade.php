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
                <form method="POST" action="/kemasukanData">
                    @csrf
                    <div class="row g-3">

                        <div class="col-lg-12">
                            <label class="form-label" for="keterangan">Hubungan Dengan KIR</label>
                            <select class="form-control" name="keterangan">
                                <option selected disabled hidden>SILA PILIH</option>
                                <option value="1">Isteri/Suami</option>
                                <option value="2">Anak</option>
                                <option value="3">Ibu/Bapa (Sendiri)/Mertua/ Tiri)</option>
                                <option value="4">Abang/Kakak/Adik</option>
                                <option value="5">Cucu</option>
                                <option value="6">Datuk/Nenek</option>
                                <option value="7">Bapa/ Ibu saudara</option>
                                <option value="8">Anak Saudara</option>
                                <option value="9">Lain-lain</option>

                            </select>
                        </div>

                        <div class="col-lg-6">
                            <label class="form-label" for="tahun_kelahiran">Tahun Kelahiran</label>
                            <input class="form-control" name="tahun_kelahiran" type="number" />
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="tarikh_lahir">Tarikh Lahir</label>
                            <input class="form-control" name="tarikh_lahir" type="date" />
                        </div>

                        <div class="col-lg-6">
                            <label class="form-label" for="umur">Umur</label>
                            <input class="form-control" id="umur" type="text" placeholder="Tahun (genap)">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="jantina">Jantina</label>
                            <select class="form-control" name="jantina">
                                <option selected disabled hidden>SILA PILIH</option>
                                <option value="1">Lelaki</option>
                                <option value="2">Perempuan</option>

                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="kumpulan_etnik">Kumpulan Etnik</label>
                            <select class="form-control" name="kumpulan_etnik">
                                <option selected disabled hidden>SILA PILIH</option>
                                <option value="1">Melayu</option>
                                <option value="2">Cina</option>
                                <option value="3">India</option>
                                <option value="4">Orang Asli</option>
                                <option value="5">Lain lain</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="kewarganegaraan">Kewarganegaraan</label>
                            <select class="form-control" name="kewarganegaraan">
                                <option selected disabled hidden>SILA PILIH</option>
                                <option value="1">Malaysia</option>
                                <option value="2">Lain-lain</option>

                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="agama">Agama</label>
                            <select class="form-control" name="agama">
                                <option selected disabled hidden>SILA PILIH</option>
                                <option value="1">Islam</option>
                                <option value="2">Kristian</option>
                                <option value="3">Buddha</option>
                                <option value="4">Hindu</option>
                                <option value="5">Lain lain</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="status_perkahwinan">Status Perkahwinan</label>
                            <select class="form-control" name="status_perkahwinan">
                                <option selected disabled hidden>SILA PILIH</option>
                                <option value="1">Belum Pernah Berkahwin</option>
                                <option value="2">Berkahwin</option>
                                <option value="3">Balu/ Duda</option>
                                <option value="4">Bercerai/ Berpisah</option>
                                <option value="5">Ditinggalkan</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="taraf_pendidikan">Taraf Pendidikan Tertinggi</label>
                            <select class="form-control" name="taraf_pendidikan">
                                <option selected disabled hidden>SILA PILIH</option>
                                <option value="1">Pra Sekolah</option>
                                <option value="2">Sekolah Rendah (Darjah/Tahun 1 hingga 6)</option>
                                <option value="3">Menengah Rendah</option>
                                <option value="4">Menengah Atas</option>
                                <option value="5">Vokasional/ Teknik</option>
                                <option value="6">Inst. Kemahiran/ Perdagangan</option>
                                <option value="7">Lepasan Menengah</option>
                                <option value="8">Lepasan Politeknik/ Maktab/ Kolej/ Universiti</option>
                                <option value="9">Tiada Pendidikan</option>
                                <option value="10">Lain-lain</option>

                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="kemahiran_yang_dimiliki">Kemahiran Yang Dimiliki</label>
                            <select class="form-control" name="kemahiran_yang_dimiliki">
                                <option selected disabled hidden>SILA PILIH</option>
                                <option value="1">Mekanik</option>
                                <option value="2">Automotif/Elektronik</option>
                                <option value="3">Pertukangan rumah</option>
                                <option value="4">Pertukangan perabot</option>
                                <option value="5">Pertukangan paip</option>
                                <option value="6">Membancuh simen</option>
                                <option value="7">Membuat batu-bata</option>
                                <option value="8">Kraftangan</option>
                                <option value="9">Menjahit</option>
                                <option value="10">Andaman</option>
                                <option value="11">Memasak</option>
                                <option value="12">Kimpalan</option>
                                <option value="13">Ternakan</option>
                                <option value="14">Perikanan</option>
                                <option value="15">Pertanian</option>
                                <option value="16">Lain-lain</option>
                                <option value="17">Tiada kemahiran</option>
                            </select>
                        </div>


                        <div class="col-lg-12">
                            <label class="form-label" for="status_pekerjaan_utama">Status Perkerjaan Utama</label>
                            <select class="form-control" name="status_pekerjaan_utama">
                                <option selected disabled hidden>SILA PILIH</option>
                                <option value="1">01- Bekerja Sendiri</option>
                                <option value="2">02- Pekerja Bergaji Kerajaan</option>
                                <option value="3">03- Pekerja Bergaji Swasta</option>
                                <option value="4">04- Suri Rumah</option>
                                <option value="5">05- Pesara Kerajaan</option>
                                <option value="6">06- Pesara Swasta</option>
                                <option value="7">07- Pelajar</option>
                                <option value="8">08- Masih Muda (6 tahun ke bawah)</option>
                                <option value="9">09- Lain-lain</option>
                                <option value="10">10- Tiada Pekerjaan</option>

                            </select>
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label" for="jenis_pekerjaan">Jika Menjawab Kod 1, 2 atau 3, Nyatakan Secara
                                Terperinci
                                Tugas / Jenis Perkerjaan</label>
                            <textarea class="form-control" id="jenis_pekerjaan" name="jenis_pekerjaan" cols="30" rows="2"></textarea>

                            <div class="col-lg-12">
                                <label class="form-label" for="harta">Pemilikan Harta Isi Rumah/Kelengkapan Isi Rumah
                                    (Jawapan
                                    Pelbagai):</label>

                                <select class="form-select js-choice" id="organizerMultiple" multiple="multiple"
                                    size="1" name="organizerMultiple"
                                    data-options='{"removeItemButton":true,"placeholder":true}'>
                                    <option value="">Sila Pilih...</option>
                                    <option>Basikal</option>
                                    <option>Bot</option>
                                    <option>Mesin Basuh</option>
                                    <option>Dapur Minyak Tanah</option>
                                    <option>Radio/Hi-fi</option>
                                    <option>Telefon talian tetap</option>
                                    <option>Langganan internet</option>
                                    <option>Mesin Penapis Air</option>
                                    <option>Motosikal/Skuter</option>
                                    <option>Sampan</option>
                                    <option>Peti Sejuk</option>
                                    <option>Dapur kayu/arang</option>
                                    <option>Televisyen</option>
                                    <option>Telefon Bimbit</option>
                                    <option>Siaran TV Berbayar</option>
                                    <option>Rumah</option>
                                    <option>Kereta Bermotor</option>
                                    <option>Penyaman Udara</option>
                                    <option>Dapur masak gas/elektrik</option>
                                    <option>Ketuhar gelombang mikro</option>
                                    <option>Pemain Video/VCD/DVD</option>
                                    <option>Komputer peribadi</option>
                                    <option>Tanah</option>
                                    <option>Tiada Seperti Disenaraikan</option>
                                </select>
                            </div>



                        </div>
                        <div class="col-lg-12">
                            <label class="form-label" for="penyakit">Adakah Anda Menghidap Apa-apa Penyakit Dan Mendapat
                                Rawatan Seperti Berikut
                                (Jawapan Pelbagai):</label>
                            <select class="form-select js-choice" id="organizerMultiple" multiple="multiple"
                                size="1" name="organizerMultiple"
                                data-options='{"removeItemButton":true,"placeholder":true}'>
                                <option value="">Sila Pilih...</option>
                                <option>Darah Tinggi</option>
                                <option>Kencing Manis</option>
                                <option>Lelah (Asma)</option>
                                <option>Buah Pinggang</option>
                                <option>Barah (Kanser)</option>
                                <option>Jantung</option>
                                <option>Sakit Sendi (Gout)</option>
                                <option>Celebral Palsy (Lumpuh Otak)</option>
                                <option>Strok</option>
                                <option>Gastrik</option>
                                <option>Batuk/ Tibi</option>
                                <option>Tiada Seperti Disenaraikan</option>
                            </select>

                        </div>
                        <div class="col-lg-12">
                            <label class="form-label" for="jika_ada_kecacatan">Jenis Kecacatan/Ketidakupayaan (Secara
                                Pemerhatian,
                                Jawapan Pelbagai):</label>
                            <select class="form-select js-choice" id="organizerMultiple" multiple="multiple"
                                size="1" name="organizerMultiple"
                                data-options='{"removeItemButton":true,"placeholder":true}'>
                                <option value="">Sila Pilih...</option>
                                <option>Pendengaran</option>
                                <option>Penglihatan</option>
                                <option>Pertuturan</option>
                                <option>Mental</option>
                                <option>Fizikal</option>
                                <option>Pembelajaran</option>
                                <option>OKU Terlantar</option>
                                <option>Pesakit Kronik</option>
                                <option>Tiada Kecacatan</option>
                                <option>Lain-lain</option>

                            </select>


                        </div>
                        <div class="col-lg-8">
                            <label class="form-label" for="kecacatan">Jika Ada Kecacatan, Adakah Sudah Didaftarkan Di
                                Jabatan
                                Kebajikan
                                Masyarakat Sebagai OKU?</label>
                            <select class="form-control" name="kecacatan">
                                <option selected disabled hidden>SILA PILIH</option>
                                <option value="1">Ya</option>
                                <option value="2">Tidak</option>

                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="status_produktiviti">Status Produktiviti</label>
                            <select class="form-control" name="status_produktiviti">
                                <option selected disabled hidden>SILA PILIH</option>
                                <option value="1">15-45 tahun</option>
                                <option value="2">46-60 tahun</option>
                                <option value="3">0-14 tahun</option>
                                <option value="4">61 tahun ke atas</option>
                            </select>
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label" for="kumpulan_perbenlanjaan">Simpanan/Pelaburan Yang
                                Dimiliki:</label>
                            <select class="form-select js-choice" id="organizerMultiple" multiple="multiple"
                                size="1" name="organizerMultiple"
                                data-options='{"removeItemButton":true,"placeholder":true}'>
                                <option value="">Sila Pilih...</option>
                                <option>Tabung Haji</option>
                                <option>ASB</option>
                                <option>ASN</option>
                                <option>Bank</option>
                                <option>Koperasi</option>
                                <option>Dana Negeri</option>
                                <option>Lain-lain</option>
                                <option>Tiada simpanan/Pelaburan</option>


                            </select>
                        </div>

                        <div class="col" style="text-align: center">
                            <button class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                                type="submit" value="Save"
                                onclick="return confirm('Adakah anda mahu mengubah data ini?')"><span
                                    class="fas fa-save"></span>&nbsp;Simpan
                            </button>
                            <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                                href="/kemasukanData/bahagian3">&nbsp;Seterusnya
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
