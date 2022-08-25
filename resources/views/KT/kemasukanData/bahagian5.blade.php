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
                <form method="POST" action="/kemasukanData">
                    @csrf
                    <div class="row g-3">


                        <div class="col-lg-12">
                            <label class="form-label" for="nama">Jenis Bantuan/Kebajikan/Pinjaman/Projek/Program Yang
                                Diterima</label>
                            <select class="form-select">
                                <option selected disabled hidden>SILA PILIH</option>

                                {{-- @foreach ($strategies as $strategies)
                                    <option value="{{ $strategies->id }}">{{ $strategies->namaStrategy }}</option>
                                @endforeach --}}

                            </select>
                        </div>

                        <div class="col-lg-12">
                            <label class="form-label" for="nama">Bantuan/Kebajikan/Pinjaman/Projek/Program Yang Diterima
                                Dalam Bulan Semasa</label>
                            <select class="form-select">
                                <option selected disabled hidden>SILA PILIH</option>

                                {{-- @foreach ($strategies as $strategies)
                                    <option value="{{ $strategies->id }}">{{ $strategies->namaStrategy }}</option>
                                @endforeach --}}

                            </select>
                        </div>

                        <div class="col-lg-12">
                            <label class="form-label" for="nama">Bantuan/Kebajikan/Pinjaman/Projek/Program Yang Diterima
                                Selain Dari Tempoh Di Atas</label>
                            <select class="form-select">
                                <option selected disabled hidden>SILA PILIH</option>

                                {{-- @foreach ($strategies as $strategies)
                                    <option value="{{ $strategies->id }}">{{ $strategies->namaStrategy }}</option>
                                @endforeach --}}

                            </select>
                        </div>

                        <div class="col-lg-12">
                            <label class="form-label" for="nama">Bantuan/Kebajikan/Pinjaman/Projek/Program Yang
                                Diperlukan</label>
                            <select class="form-control" name="kumpulan_etnik">
                                <option selected disabled hidden>SILA PILIH</option>
                                <option value="1">Keperluan Asas</option>
                                <option value="2">Ekonomi</option>
                                <option value="3">Minda Insan</option>
                                <option value="4">Sosio Kebajikan</option>
                                <option value="5">Pelajaran</option>
                                <option value="6">Pembangunan Kawasan</option>
                                <option value="7">Kesihatan</option>
                                <option value="8">Peluang Pekerjaan</option>
                                <option value="9">Tiada Maklumat</option>
                            </select>
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
