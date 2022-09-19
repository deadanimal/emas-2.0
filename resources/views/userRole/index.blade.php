@extends('base')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>EXECUTIVE DASHBOARD</H2>
        </div>


        <div class="col">
            <div class="row align-items-center">
                <div class="col col-lg-8">
                    <span><b>Senarai Peranan</b></span>
                    <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                        href="/userRole/create">
                        <span class="fas fa-plus-circle"></span>&nbsp;Tambah Peranan</a>

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

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table align-items-center mb-0 table-flush" id="datatable-basic">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-center font-weight-bolder opacity-7">No.</th>
                                        <th class="text-uppercase text-center font-weight-bolder opacity-7">Peranan</th>
                                        <th class="text-uppercase text-center font-weight-bolder opacity-7">Kemaskini</th>
                                        <th class="text-uppercase text-center font-weight-bolder opacity-7">Hapus</th>
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
