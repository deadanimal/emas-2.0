@extends('base')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>EXECUTIVE DASHBOARD</H2>
        </div>


        <div class="col">
            <div class="row align-items-center">
                <div class="col col-lg-8">
                    <span><b>Senarai Agensi/Bahagian/Kementerian</b></span>
                    <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                        href="/ED/bahagian/create">
                        <span class="fas fa-plus-circle"></span>&nbsp;Tambah</a>

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
                            <table class="table align-items-center mb-0 table-flush" id="example">
                                <thead>
                                    <tr>
                                        <th class="text-uppercase text-center font-weight-bolder opacity-7">No.</th>
                                        <th class="text-uppercase text-center font-weight-bolder opacity-7">Nama
                                            Agensi/Bahagian/Kementerian</th>
                                        <th class="text-uppercase text-center font-weight-bolder opacity-7">Kemaskini</th>
                                        <th class="text-uppercase text-center font-weight-bolder opacity-7">Hapus</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($permissions as $key => $permission)
                                        <tr>
                                            <td class="text-sm text-center font-weight-normal">{{ $key + 1 }}.</td>
                                            <td class="text-sm text-center font-weight-normal">
                                                {{ ucwords($permission->name) }}
                                            </td>
                                            <td class="text-sm text-center font-weight-normal">
                                                <a href="/ED/bahagian/{{ $permission->id }}/edit"
                                                    class="btn bg-gradient-info"><span class="badge bg-info text-dark"
                                                        disabled>Kemaskini</span></a>
                                            </td>
                                            <td class="text-sm text-center font-weight-normal">
                                                <a class="btn bg-gradient-danger" data-bs-toggle="modal"
                                                    style="cursor: pointer"
                                                    data-bs-target="#modaldelete-{{ $permission->id }}"><span
                                                        class="badge bg-danger text-dark" disabled>Hapus
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>

                                        <div class="modal fade" id="modaldelete-{{ $permission->id }}" tabindex="-1"
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
                                                        <form method="POST" action="/ED/bahagian/{{ $permission->id }}">
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
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection
