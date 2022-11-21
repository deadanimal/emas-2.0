@extends('base')
@section('content')
    <?php
    use Spatie\Permission\Models\Role;
    ?>

    <div class="container">
        <div class="mb-4 text-center">
            <h2>EXECUTIVE DASHBOARD</h2>
        </div>

        <div class="col">
            <div class="row align-items-center">
                <div class="col col-lg-8">
                    <span><b>Senarai Pengguna</b></span>
                    <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                        href="/ED/user/create">
                        <span class="fas fa-plus-circle"></span>&nbsp;Daftar Pengguna</a>

                    <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                        onClick="window.location.reload();">
                        <span class="fas fa-history"></span></a>
                </div>

            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-bordered user_datatable" id="example">

                            <thead>
                                <tr>
                                    <th class="text-center font-weight-bolder opacity-7">Bil.</th>
                                    <th class="font-weight-bolder opacity-7">ID Agensi/Bahagian/Kementerian</th>
                                    <th class="text-center font-weight-bolder opacity-7">Nama
                                        Agensi/Bahagian/Kementerian</th>
                                    <th class="text-center font-weight-bolder opacity-7">Nama
                                        Agensi/Bahagian/Kementerian</th>
                                    <th class="text-center font-weight-bolder opacity-7">Profil</th>
                                    <th class="text-center font-weight-bolder opacity-7">Status</th>
                                    <th class="text-center font-weight-bolder opacity-7">Hapus</th>
                                </tr>
                            </thead>
                            <tbody class="list" id="myTable">

                                @foreach ($user as $key => $u)
                                    <tr class="align-middle user">
                                        <td class="text-sm text-center font-weight-normal">
                                            {{ $key + 1 }}</td>
                                        <td class="text-sm font-weight-normal">
                                            {{ $u['username'] }}</td>
                                        <td class="text-sm text-center font-weight-normal">
                                            {{ $u['name'] }}</td>


                                        <td class="text-sm text-center font-weight-normal"><a
                                                class="btn btn-info text-white" href="/ED/user/{{ $u->id }}/edit"
                                                style="color:black;">
                                                Kemaskini
                                            </a>
                                        </td>
                                        <td class="text-sm text-center font-weight-normal">
                                            @if ($u->status != '1')
                                                <span class="badge bg-success text-dark">Active</span>
                                            @else
                                                <span class="badge bg-danger text-dark">Inactive</span>
                                            @endif
                                        </td>
                                        <td class="text-sm text-center font-weight-normal">
                                            <a data-bs-toggle="modal" style="cursor: pointer"
                                                data-bs-target="#modaldelete-{{ $u->id }}">
                                                <i class="far fa-trash-alt" style="color: #ea0606"></i>
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
                                                        <form method="POST" action="/ED/user/{{ $u->id }}">
                                                            @method('DELETE')
                                                            @csrf

                                                            <button class="btn bg-gradient-danger" style="cursor: pointer"
                                                                type="submit"> Hapus</button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>

                    </div>
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
@stop
