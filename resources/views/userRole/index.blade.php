@extends('base')
@section('content')
    <div class="container-fluid py-4">

        <div class="row">
            <div class="col-lg-6">
                <h5 class="font-weight-bolder">User Permissions</h5>
            </div>
            <div class="col-lg-6">
                <div class="column-12">
                    <a href="/userRole/create" class="btn bg-gradient-warning" type="submit" style="float: right;">Add
                        Roles</a>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header" style="background-color:#FFA500;">
                        <b class="text-white">User</b>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0 table-flush" id="datatable-basic">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-center font-weight-bolder opacity-7">No.</th>
                                        <th class="text-uppercase text-center font-weight-bolder opacity-7">Roles</th>
                                        <th class="text-uppercase text-center font-weight-bolder opacity-7">Edit</th>
                                        <th class="text-uppercase text-center font-weight-bolder opacity-7">Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($roles as $key => $role)
                                        <tr>
                                            <td class="text-sm text-center font-weight-normal">{{ $key + 1 }}.</td>
                                            <td class="text-sm text-center font-weight-normal">{{ ucwords($role->name) }}
                                            </td>
                                            <td class="text-sm text-center font-weight-normal">
                                                <a href="/userRole/{{ $role->id }}/edit"
                                                    class="btn bg-gradient-info">Kemaskini Kebenaran</a>
                                            </td>
                                            <td class="text-sm text-center font-weight-normal">
                                                <a class="btn bg-gradient-danger" data-bs-toggle="modal"
                                                    style="cursor: pointer"
                                                    data-bs-target="#modaldelete-{{ $role->id }}">
                                                    Hapus Peranan
                                                </a>
                                            </td>
                                        </tr>

                                        <div class="modal fade" id="modaldelete-{{ $role->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-body text-center">
                                                        <i class="far fa-times-circle fa-7x" style="color: #ea0606"></i>
                                                        <br>
                                                        Anda pasti untuk menghapus permohonan?
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn bg-gradient-secondary"
                                                            data-bs-dismiss="modal">Batal</button>
                                                        <form method="POST" action="user/{{ $role->id }}">
                                                            @method('DELETE')
                                                            @csrf
                                                            <button class="btn bg-gradient-danger" type="submit">Hapus
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection
