@extends('base')
@section('content')

    <div class="container">
        <div class="mb-4 text-center">
            <h2>EXECUTIVE DASHBOARD</h2>
        </div>

        <div class="col">
            <div class="row align-items-center">
                <div class="col col-lg-8">
                    <span><b>Senarai Pengguna</b></span>
                    <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                        href="/user/create">
                        <span class="fas fa-plus-circle"></span>&nbsp;Daftar Pengguna</a>

                    <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                        onClick="window.location.reload();">
                        <span class="fas fa-history"></span></a>
                </div>
                <div class="col-12 col-sm-auto ms-auto">
                    <input class="form-control" id="myInput" type="text" placeholder="Carian">
                </div>
            </div>
        </div>
        <br>

        <div id="tableExample2" data-list='{"valueNames":["user"],"page":5,"pagination":true}'>
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

                                        <th class="text-center font-weight-bolder opacity-7">Profil</th>
                                        {{-- @if ($current_user != 3)
                                        <th class="text-center font-weight-bolder opacity-7">Set Semula Kata
                                            Laluan</th>
                                    @endif --}}
                                        <th class="text-center font-weight-bolder opacity-7">Hapus</th>
                                    </tr>
                                </thead>
                                @role('PPD')
                                    <tbody class="list" id="myTable">

                                        @foreach ($user as $key => $u)
                                            <tr class="align-middle user">
                                                <td class="text-sm text-center font-weight-normal">
                                                    {{ $key + 1 }}</td>
                                                <td class="text-sm font-weight-normal" style="text-transform: uppercase">
                                                    {{ $u['name'] }}</td>
                                                <td class="text-sm text-center font-weight-normal">
                                                    {{ $u['email'] }}</td>
                                                <td class="text-sm text-center font-weight-normal">
                                                    {{ $u['name'] }}
                                                    {{-- <td class="text-sm text-center font-weight-normal">
                                                    {{ $u['role'] }}
                                                </td> --}}
                                                <td class="text-sm text-center font-weight-normal"><a
                                                        class="btn btn-info text-white" href="/user/{{ $u->id }}/edit"
                                                        style="color:black;">
                                                        Kemaskini
                                                    </a>
                                                </td>
                                                <td class="text-sm text-center font-weight-normal">
                                                    <a data-bs-toggle="modal" style="cursor: pointer"
                                                        data-bs-target="#modaldelete-{{ $u->id }}">
                                                        <i class="far fa-trash-alt"></i>
                                                    </a>
                                                </td>

                                                <div class="modal fade" id="modaldelete-{{ $u->id }}" tabindex="-1"
                                                    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-body text-center">
                                                                <i class="far fa-times-circle fa-7x" style="color: #ea0606"></i>
                                                                <br>
                                                                Anda pasti untuk menghapus pengguna?
                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn bg-gradient-secondary"
                                                                    data-bs-dismiss="modal">Batal</button>
                                                                <form method="POST" action="/user/{{ $u->id }}">
                                                                    @method('DELETE')
                                                                    @csrf

                                                                    <button class="btn bg-gradient-danger"
                                                                        style="cursor: pointer" type="submit"> Hapus</button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
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
        </div>

    </div>

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
