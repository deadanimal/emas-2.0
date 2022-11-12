@extends('base')
@section('content')

    <div class="container">
        <div class="mb-4 text-center">
            <H2>EXECUTIVE DASHBOARD</H2>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card m-3">
                    <div class="card-header" style="background-color:#047FC3;">
                        <b class="text-white">Nama
                            Agensi/Bahagian/Kementerian</b>
                    </div>
                    <div class="card-body">
                        <form action="/ED/bahagian" method="POST" enctype="multipart/form-data">
                            @csrf

                            {{-- <div class="form-group">
                                <label for="DESCRIPTION" class="form-control-label">Peranan</label>
                                <input class="form-control" type="text" id="DESCRIPTION" name="DESCRIPTION">
                            </div> --}}

                            <div class="form-group">
                                <label for="" class="form-control-label">Peranan</label>

                                <select class="form-control mb-3" name="role" id="pilih1" required>
                                    <option value="" selected hidden>Sila pilih</option>
                                    @foreach ($role as $r)
                                        <option value="{{ $r->name }}">{{ $r->name }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>

                            <div class="form-group">
                                <label for="name" class="form-control-label">Nama
                                    Agensi/Bahagian/Kementerian </label>
                                <input class="form-control" type="text" id="name" name="name">
                            </div>

                            <div class="form-group mt-4 text-end">
                                <button class="btn btn-success" type="submit">Simpan</button>
                                <a href="/ED/user" class="btn btn-danger">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../../assets/js/plugins/dropzone.min.js"></script>

@stop
