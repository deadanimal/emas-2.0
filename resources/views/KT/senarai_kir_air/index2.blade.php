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
                    <span><b>Senarai KIR & AIR Mengikut Negeri, Daerah Dan Kampung</b></span>

                </div>
            </div>

        </div>


        <hr style="width:100%;text-align:center;">


        {{-- <div class="table-responsive scrollbar">
            <table class="table table-bordered yajra-datatable">
                <thead>
                    <tr>
                        <th scope="col">Negeri</th>
                        <th scope="col">Daerah</th>
                        <th scope="col">Kampung</th>

                        <th scope="col">Jumlah KIR</th>
                        <th scope="col">Jumlah AIR</th>

                    </tr>
                </thead>

                <tbody class="list" id="myTable">
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


        </div> --}}
        <div class="container">
            <div class="row">
                <div class="col-12 table-responsive">
                    <table class="table table-bordered user_datatable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Negeri</th>
                                <th>Daerah</th>
                                <th>Kampung</th>

                                <th width="100px">Action</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <script type="text/javascript">
        $(function() {
            var table = $('.user_datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('senarai_kir_air1.senarai') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },

                    {

                        orderable: false,
                        searchable: false
                    },
                ]
            });
        });
    </script>

    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <script type="text/javascript">
        $(function() {

            var table = $('.yajra-datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('senarai_kir_air1.senarai') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'negeri',
                        name: 'negeri'
                    },
                    {
                        data: 'daerah',
                        name: 'daerah'
                    },
                    {
                        data: 'kampung',
                        name: 'kampung'
                    },
                    {
                        data: 'jumlahKir',
                        name: 'jumlahKir'
                    },
                    {
                        data: 'jumlahAir',
                        name: 'jumlahAir'
                    },
                    {

                        orderable: true,
                        searchable: true
                    },
                ]
            });

        });
    </script> --}}
@endsection
