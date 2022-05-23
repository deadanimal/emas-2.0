@extends('base')
@section('content')
    <div class="container">
        <br>
        <div class="mb-4 text-center">
            <H2>KEMASUKAN DATA</H2>
        </div>


        <br>
        <br>

        {{-- <div class="mb-3 row" >
            <label class="col-sm-2 col-form-label" for="fokus_id">Fokus Utama</label>
            <div class="col-sm-10" style="width:30%">
                <input class="form-control" name="fokus_id" placeholder="Sila Pilih"/>
            </div>
        </div> --}}



        <div class="form-floating;">
            <form action="{{ route('bidang.store') }}" method="POST">
                @csrf


                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="bab_id">Bab</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="bab_id">
                            <option value="">SILA PILIH</option>

                            @foreach ($list as $list)
                                <option value="{{ $list->id }}">{{ $list->keteranganBab }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="namaBidang" >Nama Bidang Keutamaan</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="namaBidang"/>

                    </div>
                </div>


                <br>
                <br>

                <div class="mb-3">
                    <label class="form-label" for="keteranganBidang"><b>Keterangan Bidang Keutamaan</b></label>
                    <textarea class="form-control" name="keteranganBidang" rows="5"></textarea>
                </div>

                <div class="row">
                    <div class="col">
                        <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3"
                            href="/bidang">
                            <span class="fas fa-times-circle"></span>&nbsp;Batal
                        </a>
                    </div>

                    <div class="col" style="text-align: right">
                        <button class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                            type="submit" value="Save" onclick="return confirm('Adakah anda mahu menyimpan data ini?')"><span class="fas fa-save"></span>&nbsp;Simpan
                        </button>
                    </div>
                </div>

                <input class="form-control" name="user_id" type="hidden" value="{{ $user->id }}" />


            </form>

        </div>

    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oops!</strong> Input tidak mencukupi<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
