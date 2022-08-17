@extends('base')
@section('content')
    <div class="container">

        <div class="mb-4 text-center">
            <H2>PELAKSANAAN PROGRAM PEMBASMIAN
                KEMISKINAN TEGAR KELUARGA MALAYSIA
                (BMTKM)</H2>
        </div>

        <div class="col">
            <div class="row align-items-center">
                <div class="col col-lg-8">
                    <span><b>Tambah Ketua Kampung
                        </b></span>
                </div>
            </div>
        </div>

        <hr style="width:100%;text-align:center;">

        <div class="row g-3" style="width: 100%">
            <div class="col-sm">

                <select class="form-select searchKategori" style="width:70%">
                    <option selected disabled hidden>NEGERI</option>

                    {{-- @foreach ($list as $list)
                        <option value="{{ $list->id }}">{{ $list->namaKpi }}</option>
                    @endforeach --}}

                </select>
            </div>



            <div class="col-sm">

                <select class="form-select searchKategori" style="width:70%">
                    <option selected disabled hidden>DAERAH</option>

                    {{-- @foreach ($list as $list)
                    <option value="{{ $list->id }}">{{ $list->namaKpi }}</option>
                    @endforeach --}}

                </select>
            </div>

            <div class="col-sm">

                <select class="form-select searchKategori" style="width:70%">
                    <option selected disabled hidden>KAMPUNG</option>

                    {{-- @foreach ($list as $list)
                     <option value="{{ $list->id }}">{{ $list->namaKpi }}</option>
                     @endforeach --}}

                </select>
            </div>
        </div>

        <br>

        <div class="card mb-3">

            <div class="card-body bg-light">
                <form class="row g-3">
                    <div class="col-lg-12">
                        <label class="form-label" for="nama">Nama Ketua Kampung</label>
                        <input class="form-control" id="nama" type="text">
                    </div>
                    <div class="col-lg-8">
                        <label class="form-label" for="no_tel_pejabat">No. Telefon Pejabat</label>
                        <input class="form-control" name="no_tel_pejabat" type="number" />
                    </div>

                    <div class="col-lg-6">
                        <label class="form-label" for="tahun_mula_berkhidmat">Tahun Mula Berkhidmat</label>
                        <input class="form-control" id="tahun_mula_berkhidmat" type="text">
                    </div>
                    <div class="col-lg-6">
                        <label class="form-label" for="tahun_tamat_berkhidmat">Tahun Akhir Berkhidmaat</label>
                        <input class="form-control" id="tahun_tamat_berkhidmat" name="tahun_tamat_berkhidmat">
                    </div>
                    <div class="col-lg-8">
                        <label class="form-label" for="nama">No. Kad Pengenalan</label>
                        <input class="form-control" id="alamat1" name="alamat1" type="number">
                    </div>
                    <div class="col-lg-8">
                        <label class="form-label" for="nama">No. Telefon Bimbit</label>
                        <input class="form-control" id="alamat1" name="alamat1" type="number">
                    </div>





                    <div class="col" style="text-align: center">
                        <button class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                            type="submit" value="Save"
                            onclick="return confirm('Adakah anda mahu mengubah data ini?')"><span
                                class="fas fa-save"></span>&nbsp;Tambah Ketua Kampung
                        </button>
                    </div>

                </form>
            </div>
        </div>



        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript">
            $(function() {
                $("#pilih1").change(function() {
                    if ($(this).val() == "3") {
                        $("#pilih2").show();
                    } else {
                        $("#pilih2").hide();
                    }
                });
            });
        </script>
    @stop
</div>
