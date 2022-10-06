@extends('base-kt')
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
                    <span><b>Senarai KIR & AIR Mengikut Negeri, Daerah Dan Kampung</b></span>

                </div>
            </div>

        </div>


        <hr style="width:100%;text-align:center;">


        <div class="container">
            <div class="row">
                <div class="col-12 table-responsive">
                    <table class="table table-bordered user_datatable" id="example">
                        <thead>
                            <tr>
                                <th>Negeri</th>
                                <th>Daerah</th>
                                <th>Kampung</th>
                                <th>Jumlah Kir</th>
                                <th>Jumlah Air</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($negeris as $negeri)
                                @foreach ($negeri->daerah as $d)
                                    @foreach ($d->kampung as $k)
                                        <tr class="align-middle fokus">
                                            <td>
                                                {{ $negeri->name }}
                                            </td>
                                            <td>
                                                {{ $d->name }}
                                            </td>
                                            <td>
                                                {{ $k->name }}
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
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
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
