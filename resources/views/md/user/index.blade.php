@extends('base-md')
@section('content')
    <?php
    use Spatie\Permission\Models\Role;
    ?>

    <div class="container">
        <div class="mb-4 text-center">
            <h2>MyDigital</h2>
        </div>

        <div class="col">
            <div class="row align-items-center">
                <div class="col col-lg-8">
                    <span><b>List of User</b></span>
                    <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                        href="/MD/user/create">
                        <span class="fas fa-plus-circle"></span>&nbsp;Register User</a>

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
                                    <th class="text-center font-weight-bolder opacity-7">No.</th>
                                    <th class="font-weight-bolder opacity-7">Name</th>
                                    <th class="text-center font-weight-bolder opacity-7">Email</th>
                                    <th class="text-center font-weight-bolder opacity-7">Role</th>

                                    <th class="text-center font-weight-bolder opacity-7">Profile</th>
                                    @can('Urusetia')
                                        <th class="text-center font-weight-bolder opacity-7">Hapus</th>
                                    @endcan

                                </tr>
                            </thead>
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
                                            {{ $u['role'] }}
                                            {{-- <td class="text-sm text-center font-weight-normal">
                                                    {{ $u['role'] }}
                                                </td> --}}
                                        <td class="text-sm text-center font-weight-normal"><a
                                                class="btn btn-info text-white" href="/MD/user/{{ $u->id }}/edit"
                                                style="color:black;">
                                                Update
                                            </a>
                                        </td>
                                        @can('Urusetia')
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
                                                            Are you sure want to delete this user?
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn bg-gradient-secondary"
                                                                data-bs-dismiss="modal">Cancel</button>
                                                            <form method="POST" action="/MD/user/{{ $u->id }}">
                                                                @method('DELETE')
                                                                @csrf

                                                                <button class="btn bg-gradient-danger" style="cursor: pointer"
                                                                    type="submit"> Delete</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        @endcan

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
