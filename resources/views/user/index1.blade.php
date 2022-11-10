@extends('base')
@section('content')


    <div class="container">
        <div class="mb-4 text-center">
            <h2>EXECUTIVE DASHBOARD</h2>
        </div>

        <div class="col">
            <div class="row align-items-center">
                <div class="col col-lg-8">
                    <span><b>Senarai Status Pengguna</b></span>

                    <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                        onClick="window.location.reload();">
                        <span class="fas fa-history"></span></a>
                </div>
            </div>
        </div>
        <br>

        {{-- <div id="tableExample2" data-list='{"valueNames":["user"],"page":10,"pagination":true}'>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0 table-flush" id="datatable-basic">

                                <thead>
                                    <tr>
                                        <th class="text-center font-weight-bolder opacity-7">Bil.</th>
                                        <th class="font-weight-bolder opacity-7">ID Agensi/Bahagian/Kementerian</th>
                                        <th class="text-center font-weight-bolder opacity-7">Nama
                                            Agensi/Bahagian/Kementerian</th>
                                        <th class="text-center font-weight-bolder opacity-7">Dimuat Naik Oleh</th>

                                        <th class="text-center font-weight-bolder opacity-7">Status</th>
                                        @if ($current_user != 3)
                                            <th class="text-center font-weight-bolder opacity-7">Set Semula Kata
                                                Laluan</th>
                                        @endif
                                        <th class="text-center font-weight-bolder opacity-7">Hapus</th>
                                    </tr>
                                </thead>
                                @role('PPD')
                                    <tbody class="list" id="myTable">

                                        @foreach ($user as $key => $u)
                                            <tr class="align-middle user">
                                                <td class="text-sm text-center font-weight-normal">
                                                    {{ $key + 1 }}</td>
                                                <td class="text-sm font-weight-normal">
                                                    {{ $u['name'] }}</td>
                                                <td class="text-sm text-center font-weight-normal">
                                                    {{ $u['email'] }}</td>
                                                <td class="text-sm text-center font-weight-normal">
                                                    {{ $u['name'] }}
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>

                                @endrole
                            </table>

                        </div>
                    </div>
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
        </div> --}}

        <div class="container">
            <div class="row">
                <div class="col-12 table-responsive">
                    <table class="table table-bordered user_datatable">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th width="100px">Action</th>
                            </tr>
                        </thead>
                        <tbody></tbody>
                    </table>
                </div>
            </div>

        </div>

        <script type="text/javascript">
            $(function() {
                var table = $('.user_datatable').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('users.index1') }}",
                    columns: [{
                            data: 'id',
                            name: 'id'
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'email',
                            name: 'email'
                        },
                        {
                            data: 'status',
                            name: 'status',
                            orderable: false,
                            searchable: false
                        },
                    ]
                });
            });
        </script>
        <script src="../../assets/js/plugins/datatables.js" type="text/javascript"></script>
        <script type="text/javascript">
            const dataTableBasic = new simpleDatatables.DataTable("#datatable-basic", {
                searchable: true,
                fixedHeight: true,
                sortable: true,
                perPageSelect: false,
                perPage: 20,
                labels: {
                    info: false
                }
            });
        </script>

        <script>
            $(document).ready(function() {
                $("#myInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script>
    @stop
