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
                    <span><b>Senarai Jenis Bantuan Berdasarkan Negeri</b></span>

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
                            <th scope="col">Negeri</th>
                            <th scope="col">Nama Bantuan</th>
                            <th scope="col">Jumlah KIR</th>
                            <th scope="col">Jumlah AIR</th>

                        </tr>
                    </thead>

                    <tbody class="list" id="myTable">
                        @foreach ($bantuans as $bantuan)
                            <tr class="align-middle bantuan">
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $bantuan->negeri->name }}</td>
                                <td>{{ $bantuan->nama_bantuan }}</td>
                                <td>{{ $bantuan->kir }}</td>
                                <td>{{ $bantuan->air }}</td>


                                <td align="right">
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
