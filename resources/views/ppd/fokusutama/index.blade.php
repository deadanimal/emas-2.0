@extends('base')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>PELAN PELAKSANAAN DASAR</H2>
        </div>

        <br>


        <div class="col">
            <div class="row align-items-center">
                <div class="col col-lg-8">
                    <span><b>Fokus Utama</b></span>
                    @can('PPD - Admin')
                        <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                            href="/PPD/fokusutama/create">
                            <span class="fas fa-plus-circle"></span>&nbsp;Tambah</a>

                    @endcan

                    


                    <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                        onClick="window.location.reload();">
                        <span class="fas fa-history"></span></a>
                </div>

            </div>
        </div>


        <hr style="width:100%;text-align:center;">



        <div class="table-responsive scrollbar">
            <table class="table table-bordered user_datatable" id="example">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>

                <tbody class="list" id="myTable">
                    @foreach ($fokusutama as $fokus)
                        <tr class="align-middle fokus">
                            <td>
                                <div class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#error-modal-{{ $fokus->id }}">

                                    <div class="ms-2"><b>{{ $fokus->namaFokus }}</b></div>
                                </div>
                            </td>

                            <div class="modal fade" id="error-modal-{{ $fokus->id }}" tabindex="-1" role="dialog"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
                                    <div class="modal-content position-relative">
                                        <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                                            <button
                                                class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                                data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body p-0">

                                            <div class="p-4 pb-0">
                                                <form>
                                                    <div class="mb-3">
                                                        <label class="col-form-label" for="namaFokus">Fokus
                                                            Utama:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $fokus->namaFokus }}</label>

                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label">Keterangan:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $fokus->keteranganFokus }}</label>
                                                    </div>
                                                    <br>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <td align="right">
                                <div>
                                    @can('BPKP')
                                        <a class="btn btn-primary" style="border-radius: 38px"
                                            href="{{ route('fokusutama.edit', $fokus->id) }}"><i class="fas fa-edit"></i>
                                        </a>

                                        <button type="submit" onclick="myFunction({{ $fokus->id }})" class="btn btn-danger"
                                            style="border-radius: 38px">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        <p id="ppd"></p>
                                    @endcan


                                </div>
                            </td>

                        </tr>
                    @endforeach

                </tbody>

            </table>

        </div>

        <script>
            function myFunction(id) {


                let alert = "Adakah anda mahu membuang data?";
                if (confirm(alert) == true) {
                    $.ajax({
                        method: "DELETE",
                        url: "/PPD/fokusutama/" + id,
                        data: {
                            "_token": "{{ csrf_token() }}",
                        }
                    });

                    alert = "Berjaya di buang!";
                    location.href = "/PPD/fokusutama";

                } else {
                    alert("Dibatalkan!");
                }
                document.getElementById("ppd").innerHTML = text;
            }

            $(document).ready(function() {
                $('#example').DataTable();
            });
            $('#example').dataTable({
                "language": {
                    "search": "Carian:",
                    "zeroRecords": "Rekod tidak dijumpai",
                    "lengthMenu": "Lihat _MENU_ ",
                    "info": "Menunjukkan _START_ dari _END_ daripada _TOTAL_",
                    "infoEmpty": "Menunjukkan 0 dari 0 daripada 0",
                    "paginate": {
                        "first": "Pertama",
                        "last": "Terakhir",
                        "next": "Seterusnya",
                        "previous": "Sebelumnya"
                    },

                }


            });
        </script>
    @endsection
