@extends('base')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>PELAKSANAAN PROGRAM PEMBASMIAN KEMISKINAN TEGAR KELUARGA MALAYSIA (BMTKM)
            </H2>
        </div>

        <br>

        <div class="col">
            <div class="row align-items-center">
                <div class="col col-lg-8">
                    <span><b>Senarai KIR & AIR Mengikut Negeri dan Daerah</b></span>

                </div>
            </div>
        </div>


        <hr style="width:100%;text-align:center;">

        <div class="table-responsive scrollbar">
            <table class="table table-bordered user_datatable" id="example">
                <thead>
                    <tr>
                        <th scope="col">Negeri</th>
                        <th scope="col">Daerah</th>

                        <th scope="col">Jumlah KIR</th>
                        <th scope="col">Jumlah AIR</th>

                    </tr>
                </thead>

                <tbody class="list" id="myTable">
                    @foreach ($negeris as $negeri)
                        @foreach ($negeri->daerah as $d)
                            <tr class="align-middle">
                                <td>
                                    {{ $negeri->name }}
                                </td>
                                <td>
                                    {{ $d->name }}
                                </td>
                                <td>
                                    {{ $d->jumlah_kir }}
                                </td>
                                <td>
                                    {{ $d->jumlah_air }}
                                </td>
                            </tr>
                        @endforeach
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
