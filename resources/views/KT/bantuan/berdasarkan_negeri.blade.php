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
                    <span><b>Senarai Jenis Bantuan Berdasarkan Negeri</b></span>

                </div>

            </div>
        </div>

        <hr style="width:100%;text-align:center;">


        <div class="table-responsive scrollbar">
            <table class="table table-bordered user_datatable" id="example">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Negeri</th>
                        <th scope="col">Nama Bantuan</th>
                        <th scope="col">Jumlah KIR</th>
                        <th scope="col">Jumlah AIR</th>
                        <th scope="col">Tindakan</th>


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
                                    <a class="btn btn-primary" style="border-radius: 38px"
                                        href="{{ route('bantuan.edit', $bantuan->id) }}"><i class="fas fa-edit"></i>
                                    </a>
                                    <button type="submit" onclick="myFunction({{ $bantuan->id }})" class="btn btn-danger"
                                        style="border-radius: 38px">
                                        <i class="fas fa-trash"></i>
                                    </button>

                                    <a class="btn btn-link " href="/KT/bantuan_negeri_cetak/{{ $bantuan->id }}"><i
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
                dom: 'Bfrtip',
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                ]


            });
        });
    </script>
@endsection
