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
                        <b class="text-white">Peranan</b>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('userRole.store') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- <div class="form-group">
                                <label for="GROUP_CODE" class="form-control-label">Kod Kumpulan</label>
                                <input class="form-control" type="text" id="GROUP_CODE" name="GROUP_CODE">
                                <span><em>* (Sila pastikan kod kumpulan yang diisi belum wujud di dalam sistem)</em></span>
                            </div> --}}
                            <div class="form-group">
                                <label for="DESCRIPTION" class="form-control-label">Nama Peranan</label>
                                <input class="form-control" type="text" id="DESCRIPTION" name="DESCRIPTION">
                            </div>
                            {{-- <div class="form-group">
                                <label class="form-control-label">Parent(s) Hierarchy</label>
                                <div class="input-group">
                                    <textarea class="form-control" disabled></textarea>
                                </div>
                            </div> --}}
                            <div class="form-group mt-4 text-end">
                                <button class="btn btn-success" type="submit">Simpan</button>
                                <a href="/user" class="btn btn-danger">Kembali</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="../../assets/js/plugins/dropzone.min.js"></script>

@stop
