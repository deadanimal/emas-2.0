@extends('base-kt')
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
                        href="/KT/bantuan/create">
                        <span class="fas fa-plus-circle"></span>&nbsp;Tambah
                    </a>

                    <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                        onClick="window.location.reload();">
                        <span class="fas fa-history"></span></a>
                </div>

            </div>
        </div>

        <hr style="width:100%;text-align:center;">


        <div class="table-responsive scrollbar">
            <table class="table table-bordered user_datatable" id="example">
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
                            <td>
                                <div>


                                    <a class="btn btn-primary" style="border-radius: 38px"
                                        href="{{ route('bantuan.edit', $bantuan->id) }}"><i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('bantuan.destroy', $bantuan->id) }}" method="post"
                                        class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit"
                                            onclick="return confirm('Adakah anda mahu menghapuskan data ini?')"
                                            class="btn btn-danger" style="border-radius: 38px">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                    <a class="btn btn-link " href="bantuan_cetak/{{ $bantuan->id }}"><i
                                            class="fas fa-print"></i>
                                    </a>
                                </div>
                            </td>

                        </tr>
                    @endforeach

                </tbody>

            </table>


        </div>


    </div>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({



            });
        });
    </script>
@endsection
