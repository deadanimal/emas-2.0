@extends('base')
@section('content')

    <div class="container">
        <br>
        <div class="mb-4 text-center">
            <H2>{{ $tindakans->namaTindakan }}</H2>
        </div>

        <br>

        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Oops!</strong> Input yang dimasuk kan adalah salah<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <div class="form-floating;">

            <form action="/tindakan/{{ $tindakans->id }}" method="POST">
                @csrf
                @method('PUT')



                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="namaTindakan">Tindakan</label>

                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="namaTindakan" value="{{ $tindakans->namaTindakan }}"
                            readonly />
                    </div>

                    
                    <label class="col-sm-2 col-form-label" for="kementerian_penyelaras">Kementerian/Agensi
                        Penyelaras</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="kementerian_penyelaras">
                            <option selected disabled hidden>SILA PILIH</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>

                        </select>

                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="kementerian_penyelaras">Kementerian/Agensi
                        Penyelaras</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="kementerian_penyelaras">
                            <option selected disabled hidden>SILA PILIH</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>

                        </select>

                    </div>

                    <label class="col-sm-2 col-form-label" for="kementerian_pelaksana">Kementerian/Agensi Pelaksana</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="kementerian_pelaksana">
                            <option selected disabled hidden>SILA PILIH</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>

                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="tempohSiap">Tempoh Siap</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="tempohSiap">
                            <option selected disabled hidden>SILA PILIH</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>

                        </select>
                    </div>

                    <label class="col-sm-2 col-form-label" for="kategoriSasaran">Kategori Sasaran</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="kategoriSasaran">
                            <option selected disabled hidden>SILA PILIH</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>

                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="statusPelaksanaan">Status Pelaksanaan 2022</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="statusPelaksanaan">
                            <option selected disabled hidden>SILA PILIH</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>

                        </select>
                    </div>

                    <label class="col-sm-2 col-form-label" for="catatan2022">Catatan 2022</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="catatan2022" />

                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="sasaran2022">Sasaran 2022</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" name="sasaran2022" />

                    </div>

                    <label class="col-sm-2 col-form-label" for="pencapaian2022">Pencapaian 2022</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="pencapaian2022" />

                    </div>
                </div>

                <br><br>

                <div class="col" style="text-align: center">
                    <button class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                        type="submit" value="Save"
                        onclick="return confirm('Adakah anda mahu menyimpan data ini?')">&nbsp;Simpan Data
                    </button>
                </div>


            </form>
        </div>

    </div>

@endsection
