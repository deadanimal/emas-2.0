@extends('base')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>KEMAS KINI DATA</H2>
        </div>


        <br>
        <br>

        <div class="form-floating;">
            <form action="/fokusutama/{{ $fokusutama->id }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label class="form-label" for="keteranganFokus"><b>Keterangan Fokus Utama</b></label>
                    <textarea class="form-control" name="keteranganFokus" rows="5">{{ $fokusutama->keteranganFokus }}</textarea>
                </div>

                <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3" href="/fokusutama">
                    <span class="fas fa-times-circle"></span>Batal
                </a>

                <div align="right">
                    <button class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                        type="submit">Simpan
                    </button>
                </div>

            </form>

        </div>

    </div>

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
@endsection
