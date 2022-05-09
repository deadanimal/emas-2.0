@extends('base')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>KEMASUKAN DATA</H2>
        </div>




        <br>
        <br>


        <div class="form-floating;">
            <form action="{{ route('pemangkin.store') }}" method="POST">
                @csrf

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="kategori_id">Kategori</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="kategori_id">
                            <option value disabled hidden>Pilih Kategori</option>
                            <option value="1">Tema</option>
                            <option value="2">Pemangkin Dasar</option>

                        </select>
                    </div>
                </div>

                <br>
                <br>


                <div class="mb-3">
                    <label class="form-label" for="keteranganTema"><b>Keterangan Tema/Pemangkin Dasar</b></label>
                    <textarea class="form-control" name="keteranganTema" rows="5"></textarea>
                </div>

                <div class="row">
                    <div class="col">
                        <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3" href="/pemangkin">
                            <span class="fas fa-times-circle"></span>&nbsp;Batal
                        </a>
                    </div>

                    <div class="col" style="text-align: right">
                        <button class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                            type="submit"><span class="fas fa-save"></span>&nbsp;Simpan
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
