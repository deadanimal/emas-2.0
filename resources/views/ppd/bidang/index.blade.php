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
                    <span><b>Bidang Keutamaan</b></span>
                    @can('BPKP')
                        <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                            href="/PPD/bidang/create">
                            <span class="fas fa-plus-circle"></span>&nbsp;Tambah
                        </a>
                    @endcan
                    <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                        onClick="window.location.reload();">
                        <span class="fas fa-history"></span></a>
                </div>

            </div>
        </div>

        <hr style="width:100%;text-align:center;">

        <select class="form-select searchBab" style="width:30%">
            <option selected disabled hidden>PILIH BAB</option>

            @foreach ($list as $list)
                <option value="{{ $list->id }}">Bab {{ $list->noBab }}. {{ $list->namaBab }}</option>
            @endforeach

        </select>
        <hr>

        <div class="table-responsive scrollbar">
            <div class="card scrollbar-overlay" style="max-height: 50rem">
                <table class="table table-bordered user_datatable" id="example">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col"></th>
                            <th scope="col"></th>

                        </tr>
                    </thead>
                    <tbody class="list myTable" id="tablebody">
                        @foreach ($bidangs as $bidang)
                            <tr class="align-middle">
                                <td>
                                    <div class="d-flex align-items-center" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-{{ $bidang->id }}">
                                        <div class="ms-2"><b>{{ $bidang->namaBidang }}</b></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-{{ $bidang->id }}">
                                        <div class="ms-2"><b>BK {{ $bidang->noBidang }}</b></div>
                                    </div>

                                </td>

                                <div class="modal fade" id="error-modal-{{ $bidang->id }}" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document"
                                        style="max-width: 500px">
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
                                                            <label class="col-form-label">Bidang Utama:</label>
                                                            <label class="form-control"
                                                                disabled="disabled">{{ $bidang->namaBidang }}</label>

                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="col-form-label">Bidang Keutamaan:</label>
                                                            <label class="form-control" disabled="disabled">BK
                                                                {{ $bidang->noBidang }}</label>

                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="col-form-label">Keterangan:</label>
                                                            <label class="form-control"
                                                                disabled="disabled">{{ $bidang->keteranganBidang }}</label>
                                                        </div>
                                                    </form>
                                                    <br>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <td align="right">
                                    <div>
                                        @can('BPKP')
                                            <a class="btn btn-primary" style="border-radius: 38px"
                                                href="{{ route('bidang.edit', $bidang->id) }}"><i class="fas fa-edit"></i>
                                            </a>

                                            <button type="submit" onclick="myFunction({{ $bidang->id }})"
                                                class="btn btn-danger" style="border-radius: 38px">
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


        </div>

        <script>
            $('.searchBab').change(function(e) {
                let val = this.value;
                var bidangs = @json($bidangs->toArray());
                $("#tablebody").html('');

                bidangs.forEach(e => {

                    if (val == e.bab_id) {
                        $("#tablebody").append(`
                    <tr class="align-middle">
                            <td>
                                <div class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#error-modal-` + e.id + `">
                                    <div class="ms-2"><b>` + e.namaBidang + `</b></div>
                                </div>
                            </td>

                            <div class="modal fade" id="error-modal-` + e.id + `" tabindex="-1" role="dialog"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
                                    <div class="modal-content position-relative">
                                        <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                                            <button
                                                class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                                data-bs-dismiss="modal" aria-label="Close">
                                            </button>
                                        </div>
                                        <div class="modal-body p-0">

                                            <div class="p-4 pb-0">
                                                <form>
                                                    <div class="mb-3">
                                                        <label class="col-form-label">Bidang Utama:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">` + e.namaBidang + `</label>

                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label">Bidang Keutamaan:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">` + e.noBidang + `</label>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label">Keterangan:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">` + e.keteranganBidang + `</label>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="modal-footer">

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <td align="right">
                                <div>
                                    <form action="/bidang/` + e.id + `" method="POST">

                                        <a class="btn btn-primary" style="border-radius: 38px"
                                            href="/PPD/bidang/` + e.id + `"><i
                                                class="fas fa-edit"></i>
                                        </a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" onclick="myFunction()" class="btn btn-danger"
                                            style="border-radius: 38px">
                                            <i class="fas fa-trash"></i>
                                        </button>

                                    </form>
                                </div>
                            </td>
                        </tr>
                    `);

                    }
                });



            });

            function myFunction(id) {


                let alert = "Adakah anda mahu membuang data?";
                if (confirm(alert) == true) {
                    $.ajax({
                        method: "DELETE",
                        url: "PPD/bidang/" + id,
                        data: {
                            "_token": "{{ csrf_token() }}",
                        }
                    });

                    alert = "Berjaya di buang!";
                    location.reload();

                } else {
                    alert("Dibatalkan!");
                }
                document.getElementById("ppd").innerHTML = text;
            }
        </script>
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });
            $('#example').dataTable({
                "language": {
                    "search": "Carian:",
                    "zeroRecords": "Rekod tidak dijumpai",
                    "lengthMenu": "Lihat _MENU_ ",
                    "info": "Paparan _START_ hingga _END_ daripada _TOTAL_ rekod",
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
