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
                        <input class="form-control" name="tahun_kelahiran" />
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
                    </div>
                    <div class="col-lg-12">
                        <label class="form-label" for="harta">Pemilikan Harta Isi Rumah/Kelengkapan Isi Rumah (Jawapan
                            Pelbagai):</label>

                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">

                                    </th>
                                    <th scope="col">

                                    </th>
                                    <th scope="col">

                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="2">
                                        <label for="vehicle2"> Basikal</label><br>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                        <label for="vehicle2"> Motosikal/Skuter</label><br>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                        <label for="vehicle2"> Kereta Bermotor</label><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="2">
                                        <label for="vehicle2"> Bot</label><br>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                        <label for="vehicle2"> Sampan</label><br>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                        <label for="vehicle2"> Penyaman Udara</label><br>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="vehicle3" name="vehicle3" value="3">
                                        <label for="vehicle3"> Mesin Basuh</label><br>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle3" name="vehicle3" value="11">
                                        <label for="vehicle3"> Peti Sejuk</label><br>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle3" name="vehicle3" value="11">
                                        <label for="vehicle3"> Dapur masak gas/elektrik</label><br>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="vehicle1" name="vehicle1" value="4">
                                        <label for="vehicle1"> Dapur Minyak Tanah</label><br>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle1" name="vehicle1" value="12">
                                        <label for="vehicle1"> Dapur kayu/arang</label><br>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle1" name="vehicle1" value="12">
                                        <label for="vehicle1"> Ketuhar gelombang mikro</label><br>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="5">
                                        <label for="vehicle2"> Radio/Hi-fi</label><br>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle3" name="vehicle3" value="14">
                                        <label for="vehicle2"> Televisyen</label><br>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="13">
                                        <label for="vehicle2"> Pemain Video/VCD/DVD</label><br>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="vehicle3" name="vehicle3" value="6">
                                        <label for="vehicle3"> Telefon talian tetap</label><br>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle3" name="vehicle3" value="14">
                                        <label for="vehicle3"> Telefon Bimbit</label><br>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle3" name="vehicle3" value="14">
                                        <label for="vehicle3"> Komputer peribadi</label><br>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="7">
                                        <label for="vehicle2"> Langganan internet</label><br>

                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="15">
                                        <label for="vehicle2"> Siaran TV Berbayar</label><br>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="15">
                                        <label for="vehicle2"> Tanah</label><br>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="8">
                                        <label for="vehicle2"> Mesin Penapis Air </label>
                                    </td>

                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="16">
                                        <label for="vehicle2"> Rumah</label>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="16">
                                        <label for="vehicle2"> Tiada Seperti Disenaraikan</label>
                                    </td>

                                </tr>

                            </tbody>
                        </table>



                    </div>
                    <div class="col-lg-12">
                        <label class="form-label" for="penyakit">Adakah Anda Menghidap Apa-apa Penyakit Dan Mendapat
                            Rawatan Seperti Berikut
                            (Jawapan Pelbagai):</label>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">
                                        <label> Penyakit</label>
                                    </th>
                                    <th scope="col">
                                        <label> Rawatan Klinik Kerajaan</label>
                                    </th>
                                    <th scope="col">
                                        <label> Rawatan Klinik Swasta</label>
                                    </th>
                                    <th scope="col">
                                        <label> Rawatan Hospital Kerajaan</label>
                                    </th>
                                    <th scope="col">
                                        <label> Rawatan Hospital Swasta</label>
                                    </th>
                                    <th scope="col">
                                        <label> Rawatan Secara Tradisional</label>
                                    </th>
                                    <th scope="col">
                                        <label> Tiada Rawatan</label>
                                    </th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <label for="vehicle2"> Darah Tinggi</label><br>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="vehicle2"> Kencing Manis</label><br>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="vehicle2"> Lelah (Asma)</label><br>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="vehicle2"> Buah Pinggang</label><br>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="vehicle2"> Barah (Kanser)</label><br>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="vehicle2"> Jantung</label><br>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="vehicle2"> Sakit Sendi (Gout)</label><br>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="vehicle2"> Celebral Palsy (Lumpuh Otak)</label><br>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="vehicle2"> Strok</label><br>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="vehicle2"> Gastrik</label><br>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <label for="vehicle2"> Batuk/ Tibi</label><br>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="2">
                                        <label for="vehicle2"> Lain-Lain</label><br>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="2">
                                        <label for="vehicle2"> Tiada Penyakit</label><br>
                                    </td>

                                </tr>

                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-12">
                        <label class="form-label" for="jika_ada_kecacatan">Jenis Kecacatan/Ketidakupayaan (Secara
                            Pemerhatian,
                            Jawapan Pelbagai):</label>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">

                                    </th>
                                    <th scope="col">

                                    </th>


                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="2">
                                        <label for="vehicle2"> Pedengaran</label><br>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                        <label for="vehicle2"> Pertuturan</label><br>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="vehicle3" name="vehicle3" value="3">
                                        <label for="vehicle3"> Penglihatan</label><br>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle3" name="vehicle3" value="11">
                                        <label for="vehicle3"> Mental</label><br>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="vehicle1" name="vehicle1" value="4">
                                        <label for="vehicle1"> Fizikal</label><br>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle1" name="vehicle1" value="12">
                                        <label for="vehicle1"> Pembelajaran</label><br>
                                    </td>


                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="5">
                                        <label for="vehicle2"> OKU Terlantar</label><br>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle3" name="vehicle3" value="14">
                                        <label for="vehicle2"> Lain-Lain</label><br>
                                    </td>


                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="vehicle3" name="vehicle3" value="6">
                                        <label for="vehicle3"> Pesakit Kronik</label><br>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle3" name="vehicle3" value="14">
                                        <label for="vehicle3"> Tiada Kecacatan</label><br>
                                    </td>


                                </tr>


                            </tbody>
                        </table>
                    </div>
                    <div class="col-lg-8">
                        <label class="form-label" for="kecacatan">Jika Ada Kecacatan, Adakah Sudah Didaftarkan Di Jabatan
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
                        <label class="form-label" for="kumpulan_perbenlanjaan">Simpanan/Pelaburan Yang Dimiliki:</label>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">

                                    </th>
                                    <th scope="col">

                                    </th>


                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="2">
                                        <label for="vehicle2"> Tabung Haji</label><br>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="10">
                                        <label for="vehicle2"> Amanah Saham Negeri</label><br>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="vehicle3" name="vehicle3" value="3">
                                        <label for="vehicle3"> ASB</label><br>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle3" name="vehicle3" value="11">
                                        <label for="vehicle3"> Dana Negeri</label><br>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="vehicle1" name="vehicle1" value="4">
                                        <label for="vehicle1"> ASN</label><br>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle1" name="vehicle1" value="12">
                                        <label for="vehicle1"> Lain-lain</label><br>
                                    </td>


                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="vehicle2" name="vehicle2" value="5">
                                        <label for="vehicle2"> Bank</label><br>
                                    </td>
                                    <td>
                                        <input type="checkbox" id="vehicle3" name="vehicle3" value="14">
                                        <label for="vehicle2"> Tiada simpanan/Pelaburan</label><br>
                                    </td>


                                </tr>
                                <tr>
                                    <td>
                                        <input type="checkbox" id="vehicle3" name="vehicle3" value="6">
                                        <label for="vehicle3"> Koperasi</label><br>
                                    </td>


                                </tr>


                            </tbody>
                        </table>
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
