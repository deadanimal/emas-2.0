@extends('base')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>PELAKSANAAN PROGRAM PEMBASMIAN
                KEMISKINAN TEGAR KELUARGA MALAYSIA
                (BMTKM)</H2>
        </div>

        <br>

        <div class="col">
            <div class="row align-items-center">
                <div class="col col-lg-8">
                    <span><b>Senarai Jenis Bantuan Yang Disediakan</b></span>
                    <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                        href="/bantuan/create">
                        <span class="fas fa-plus-circle"></span>&nbsp;Tambah
                    </a>

                    <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                        onClick="window.location.reload();">
                        <span class="fas fa-history"></span></a>
                </div>
                <div class="col-12 col-sm-auto ms-auto">
                    <input class="form-control myInput" type="text" placeholder="Carian">
                </div>
            </div>
        </div>

        <hr style="width:100%;text-align:center;">

        <div id="tableExample2" data-list='{"valueNames":["bantuan"],"page":5,"pagination":true}'>

            <div class="table-responsive scrollbar">
                <table class="table table-hover table-striped overflow-hidden testing" style="width: 100%">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Nama Bantuan</th>
                            <th scope="col">Kementerian</th>
                            <th scope="col">Agensi</th>
                            <th scope="col">Sektor</th>
                            <th scope="col">Tindakan</th>

                        </tr>
                    </thead>

                    <tbody class="list" id="myTable">
                        @foreach ($bantuans as $bantuan)
                            <tr class="align-middle bantuan">
                                <td>
                                    {{ $loop->iteration }}
                                </td>
                                <td>
                                    <div class="d-flex align-items-center" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-{{ $bantuan->id }}">
                                        <div class="ms-2"><b>{{ $bantuan->nama_bantuan }}</b></div>
                                    </div>
                                </td>
                                <td>
                                    {{ $bantuan->kementerian }}
                                </td>
                                <td>
                                    {{ $bantuan->agensi }}
                                </td>
                                <td>
                                    {{ $bantuan->sektor }}
                                </td>

                                <div class="modal fade" id="error-modal-{{ $bantuan->id }}" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document"
                                        style="max-width: 500px">
                                        <div class="modal-content position-relative">
                                            <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                                                <button
                                                    class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body p-0">

                                                <div class="p-4 pb-0">
                                                    <form>
                                                        <div class="mb-3">
                                                            <label class="col-form-label" for="namaBantuan">bantuan
                                                                Utama:</label>
                                                            <label class="form-control"
                                                                disabled="disabled">{{ $bantuan->namaBantuan }}</label>

                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="col-form-label">Keterangan:</label>
                                                            <label class="form-control"
                                                                disabled="disabled">{{ $bantuan->keteranganbantuan }}</label>
                                                        </div>
                                                        <br>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <td>
                                    <div>
                                        {{-- <form action="{{ route('bantuan.destroy', $bantuan->id) }}" method="POST"> --}}

                                        <a class="btn btn-primary" style="border-radius: 38px"
                                            href="{{ route('bantuan.edit', $bantuan->id) }}"><i class="fas fa-edit"></i>
                                        </a>
                                        {{-- @csrf
                                        @method('DELETE') --}}

                                        <button type="submit" onclick="myFunction({{ $bantuan->id }})"
                                            class="btn btn-danger" style="border-radius: 38px">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        <p id="ppd"></p>

                                        {{-- </form> --}}
                                    </div>
                                </td>

                            </tr>
                        @endforeach

                    </tbody>

                </table>


            </div>

            <div class="d-flex justify-content-center mt-3">
                <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous"
                    data-list-pagination="prev"><span class="fas fa-chevron-left"></span>
                </button>
                <ul class="pagination mb-0"></ul>
                <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next"
                    data-list-pagination="next"><span class="fas fa-chevron-right"> </span>
                </button>
            </div>
        </div>

    </div>
@endsection
