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



        <x-errors-component :errors="$errors->any() ? $errors->all() : null" />


        <div class="card mb-3">

            <div class="card-body bg-light">
                <form method="POST" action="/kemasukanData-bahagian2">
                    @csrf
                    <div class="row g-3">
                        @isset($profil)
                            <input type="hidden" name="profil_id" value="{{ $profil->id }}">
                            @if ($profil->kategori == 'AIR')
                                <div class="col-lg-12">
                                    <label class="form-label" for="keterangan">Hubungan Dengan KIR</label>
                                    <select class="form-control" name="keterangan">
                                        <option selected disabled hidden>SILA PILIH</option>
                                        <option value="Isteri/Suami">Isteri/Suami</option>
                                        <option value="Anak">Anak</option>
                                        <option value="Ibu/Bapa (Sendiri)/Mertua/ Tiri)">Ibu/Bapa (Sendiri)/Mertua/ Tiri)
                                        </option>
                                        <option value="Abang/Kakak/Adik">Abang/Kakak/Adik</option>
                                        <option value="Cucu">Cucu</option>
                                        <option value="Datuk/Nenek">Datuk/Nenek</option>
                                        <option value="Bapa/ Ibu saudara">Bapa/ Ibu saudara</option>
                                        <option value="Anak Saudara">Anak Saudara</option>
                                        <option value="Lain-lain">Lain-lain</option>
                                    </select>
                                </div>
                            @endif
                        @endisset
                        <input type="hidden" name="current_bahagian" value="3">
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
                            <input class="form-control" id="umur" type="number" placeholder="Tahun (genap)"
                                name="umur">
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="jantina">Jantina</label>
                            <select class="form-control" name="jantina">
                                <option selected disabled hidden>SILA PILIH</option>
                                <option value="Lelaki">Lelaki</option>
                                <option value="Perempuan">Perempuan</option>

                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="kumpulan_etnik">Kumpulan Etnik</label>
                            <select class="form-control" name="kumpulan_etnik">
                                <option selected disabled hidden>SILA PILIH</option>
                                <option value="Melayu">Melayu</option>
                                <option value="Cina">Cina</option>
                                <option value="India">India</option>
                                <option value="Orang Asli">Orang Asli</option>
                                <option value="Lain lain">Lain lain</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="kewarganegaraan">Kewarganegaraan</label>
                            <select class="form-control" name="kewarganegaraan">
                                <option selected disabled hidden>SILA PILIH</option>
                                <option value="Malaysia">Malaysia</option>
                                <option value="Lain-lain">Lain-lain</option>

                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="agama">Agama</label>
                            <select class="form-control" name="agama">
                                <option selected disabled hidden>SILA PILIH</option>
                                <option value="Islam">Islam</option>
                                <option value="Kristian">Kristian</option>
                                <option value="Buddha">Buddha</option>
                                <option value="Hindu">Hindu</option>
                                <option value="Lain lain">Lain lain</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="status_perkahwinan">Status Perkahwinan</label>
                            <select class="form-control" name="status_perkahwinan">
                                <option selected disabled hidden>SILA PILIH</option>
                                <option value="Belum Pernah Berkahwin">Belum Pernah Berkahwin</option>
                                <option value="Berkahwin">Berkahwin</option>
                                <option value="Balu/ Duda">Balu/ Duda</option>
                                <option value="Bercerai/ Berpisah">Bercerai/ Berpisah</option>
                                <option value="Ditinggalkan">Ditinggalkan</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="taraf_pendidikan">Taraf Pendidikan Tertinggi</label>
                            <select class="form-control" name="taraf_pendidikan">
                                <option selected disabled hidden>SILA PILIH</option>
                                <option value="Pra Sekolah">Pra Sekolah</option>
                                <option value="Sekolah Rendah (Darjah/Tahun 1 hingga 6)">Sekolah Rendah (Darjah/Tahun 1
                                    hingga 6)</option>
                                <option value="Menengah Rendah">Menengah Rendah</option>
                                <option value="Menengah Atas">Menengah Atas</option>
                                <option value="Vokasional/ Teknik">Vokasional/ Teknik</option>
                                <option value="Inst. Kemahiran/ Perdagangan">Inst. Kemahiran/ Perdagangan</option>
                                <option value="Lepasan Menengah">Lepasan Menengah</option>
                                <option value="Lepasan Politeknik/ Maktab/ Kolej/ Universiti">Lepasan Politeknik/ Maktab/
                                    Kolej/ Universiti</option>
                                <option value="Tiada Pendidikan">Tiada Pendidikan</option>
                                <option value="Lain-lain">Lain-lain</option>

                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="kemahiran_yang_dimiliki">Kemahiran Yang Dimiliki</label>
                            <select class="form-control" name="kemahiran_yang_dimiliki">
                                <option selected disabled hidden>SILA PILIH</option>
                                <option value="Mekanik">Mekanik</option>
                                <option value="Automotif/Elektronik">Automotif/Elektronik</option>
                                <option value="Pertukangan rumah">Pertukangan rumah</option>
                                <option value="Pertukangan perabot">Pertukangan perabot</option>
                                <option value="Pertukangan paip">Pertukangan paip</option>
                                <option value="Membancuh simen">Membancuh simen</option>
                                <option value="Membuat batu-bata">Membuat batu-bata</option>
                                <option value="Kraftangan">Kraftangan</option>
                                <option value="Menjahit">Menjahit</option>
                                <option value="Andaman">Andaman</option>
                                <option value="Memasak">Memasak</option>
                                <option value="Kimpalan">Kimpalan</option>
                                <option value="Ternakan">Ternakan</option>
                                <option value="Perikanan">Perikanan</option>
                                <option value="Pertanian">Pertanian</option>
                                <option value="Lain-lain">Lain-lain</option>
                                <option value="Tiada kemahiran">Tiada kemahiran</option>
                            </select>
                        </div>


                        <div class="col-lg-12">
                            <label class="form-label" for="status_pekerjaan_utama">Status Perkerjaan Utama</label>
                            <select class="form-control" name="status_pekerjaan_utama">
                                <option selected disabled hidden>SILA PILIH</option>
                                <option value="01- Bekerja Sendiri">01- Bekerja Sendiri</option>
                                <option value="02- Pekerja Bergaji Kerajaan">02- Pekerja Bergaji Kerajaan</option>
                                <option value="03- Pekerja Bergaji Swasta">03- Pekerja Bergaji Swasta</option>
                                <option value="04- Suri Rumah">04- Suri Rumah</option>
                                <option value="05- Pesara Kerajaan">05- Pesara Kerajaan</option>
                                <option value="06- Pesara Swasta">06- Pesara Swasta</option>
                                <option value="07- Pelajar">07- Pelajar</option>
                                <option value="08- Masih Muda (6 tahun ke bawah)">08- Masih Muda (6 tahun ke bawah)
                                </option>
                                <option value="09- Lain-lain">09- Lain-lain</option>
                                <option value="10- Tiada Pekerjaan">10- Tiada Pekerjaan</option>

                            </select>
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label" for="jenis_pekerjaan">Jika Menjawab Kod 1, 2 atau 3, Nyatakan Secara
                                Terperinci
                                Tugas / Jenis Perkerjaan</label>
                            <textarea class="form-control" id="jenis_pekerjaan" name="jenis_pekerjaan" cols="30" rows="2"></textarea>

                            <div class="col-lg-12">
                                <label class="form-label" for="harta">Pemilikan Harta Isi Rumah/Kelengkapan Isi Rumah
                                    (Jawapan Pelbagai):</label>
                                <select class="form-select js-choice" id="harta" multiple="multiple" size="1"
                                    name="harta[]" data-options='{"removeItemButton":true,"placeholder":true}'>
                                    <option value="">Sila Pilih</option>
                                    <option value="Basikal">Basikal</option>
                                    <option value="Bot">Bot</option>
                                    <option value="Mesin Basuh">Mesin Basuh</option>
                                    <option value="Dapur Minyak Tanah">Dapur Minyak Tanah</option>
                                    <option value="Radio/Hi-fi">Radio/Hi-fi</option>
                                    <option value="Telefon talian tetap">Telefon talian tetap</option>
                                    <option value="Langganan internet">Langganan internet</option>
                                    <option value="Mesin Penapis Air">Mesin Penapis Air</option>
                                    <option value="Motosikal/Skuter">Motosikal/Skuter</option>
                                    <option value="Sampan">Sampan</option>
                                    <option value="Peti Sejuk">Peti Sejuk</option>
                                    <option value="Dapur kayu/arang">Dapur kayu/arang</option>
                                    <option value="Televisyen">Televisyen</option>
                                    <option value="Telefon Bimbit">Telefon Bimbit</option>
                                    <option value="Siaran TV Berbayar">Siaran TV Berbayar</option>
                                    <option value="Rumah">Rumah</option>
                                    <option value="Kereta Bermotor">Kereta Bermotor</option>
                                    <option value="Penyaman Udara">Penyaman Udara</option>
                                    <option value="Dapur masak gas/elektrik">Dapur masak gas/elektrik</option>
                                    <option value="Ketuhar gelombang mikro">Ketuhar gelombang mikro</option>
                                    <option value="Pemain Video/VCD/DVD">Pemain Video/VCD/DVD</option>
                                    <option value="Komputer peribadi">Komputer peribadi</option>
                                    <option value="Tanah">Tanah</option>
                                    <option value="Tiada Seperti Disenaraikan">Tiada Seperti Disenaraikan</option>
                                </select>
                            </div>



                        </div>
                        <div class="col-lg-12">
                            <label class="form-label" for="penyakit">Adakah Anda Menghidap Apa-apa Penyakit Dan Mendapat
                                Rawatan Seperti Berikut
                                (Jawapan Pelbagai):</label>
                            <select class="form-select js-choice" id="penyakit" multiple="multiple" size="1"
                                name="penyakit[]" data-options='{"removeItemButton":true,"placeholder":true}'>
                                <option value="">Sila Pilih</option>
                                <option value="Darah Tinggi">Darah Tinggi</option>
                                <option value="Kencing Manis">Kencing Manis</option>
                                <option value="Lelah (Asma)">Lelah (Asma)</option>
                                <option value="Buah Pinggang">Buah Pinggang</option>
                                <option value="Barah (Kanser)">Barah (Kanser)</option>
                                <option value="Jantung">Jantung</option>
                                <option value="Sakit Sendi (Gout)">Sakit Sendi (Gout)</option>
                                <option value="Celebral Palsy (Lumpuh Otak)">Celebral Palsy (Lumpuh Otak)</option>
                                <option value="Strok">Strok</option>
                                <option value="Gastrik">Gastrik</option>
                                <option value="Batuk/ Tibi">Batuk/ Tibi</option>
                                <option value="Tiada Seperti Disenaraikan">Tiada Seperti Disenaraikan</option>
                            </select>

                        </div>
                        <div class="col-lg-12">
                            <label class="form-label" for="kecacatan">Jenis Kecacatan/Ketidakupayaan (Secara
                                Pemerhatian, Jawapan Pelbagai):</label>
                            <select class="form-select js-choice" id="kecacatan" multiple="multiple" size="1"
                                name="kecacatan[]" data-options='{"removeItemButton":true,"placeholder":true}'>
                                <option value="">Sila Pilih</option>
                                <option value="Pendengaran">Pendengaran</option>
                                <option value="Penglihatan">Penglihatan</option>
                                <option value="Pertuturan">Pertuturan</option>
                                <option value="Mental">Mental</option>
                                <option value="Fizikal">Fizikal</option>
                                <option value="Pembelajaran">Pembelajaran</option>
                                <option value="OKU Terlantar">OKU Terlantar</option>
                                <option value="Pesakit Kronik">Pesakit Kronik</option>
                                <option value="Tiada Kecacatan">Tiada Kecacatan</option>
                                <option value="Lain-lain">Lain-lain</option>
                            </select>
                        </div>
                        <div class="col-lg-8">
                            <label class="form-label" for="daftar_oku">Jika Ada Kecacatan, Adakah Sudah Didaftarkan Di
                                Jabatan Kebajikan Masyarakat Sebagai OKU?</label>
                            <select class="form-control" name="daftar_oku">
                                <option selected disabled hidden>Sila Pilih</option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                            </select>
                        </div>
                        <div class="col-lg-6">
                            <label class="form-label" for="status_produktiviti">Status Produktiviti</label>
                            <select class="form-control" name="status_produktiviti">
                                <option selected disabled hidden>Sila Pilih</option>
                                <option value="15-45 tahun">15-45 tahun</option>
                                <option value="46-60 tahun">46-60 tahun</option>
                                <option value="0-14 tahun">0-14 tahun</option>
                                <option value="61 tahun ke atas">61 tahun ke atas</option>
                            </select>
                        </div>
                        <div class="col-lg-12">
                            <label class="form-label" for="kumpulan_perbenlanjaan">Simpanan/Pelaburan Yang
                                Dimiliki:</label>
                            <select class="form-select js-choice" id="kumpulan_perbenlanjaan" multiple="multiple"
                                size="1" name="kumpulan_perbenlanjaan[]"
                                data-options='{"removeItemButton":true,"placeholder":true}'>
                                <option value="">Sila Pilih</option>
                                <option value="Tabung Haji">Tabung Haji</option>
                                <option value="ASB">ASB</option>
                                <option value="ASN">ASN</option>
                                <option value="Bank">Bank</option>
                                <option value="Koperasi">Koperasi</option>
                                <option value="Dana Negeri">Dana Negeri</option>
                                <option value="Lain-lain">Lain-lain</option>
                                <option value="Tiada simpanan/Pelaburan">Tiada simpanan/Pelaburan</option>
                            </select>
                        </div>

                        <div class="col" style="text-align: center">
                            <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3"
                                href="/kemasukanData/bahagian">
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
