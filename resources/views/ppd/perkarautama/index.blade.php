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
                    <span><b>Perkara Utama</b></span>
                    @can('PPD - Admin')
                        <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                            href="/PPD/perkarautama/create">
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

        <select class="form-select searchKategori" style="width:30%" aria-label="Default select example">
            <option selected disabled hidden>PILIH FOKUS UTAMA</option>

            @foreach ($list as $list)
                <option value="{{ $list->id }}">{{ $list->namaFokus }}</option>
            @endforeach

        </select>
        <hr style="width:100%;text-align:center;">

        <div class="table-responsive scrollbar">
            <table class="table table-bordered user_datatable" id="example">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"></th>
                        <th scope="col"></th>

                    </tr>
                </thead>
                <tbody class="list myTable" id="tablebody">
                    @foreach ($perkarautama as $perkara)
                        <tr class="align-middle perkara">
                            <td>
                                <div class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#error-modal-{{ $perkara->id }}">
                                    <div class="ms-2"><b>{{ $perkara->fokus->namaFokus }}</b></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#error-modal-{{ $perkara->id }}">
                                    <div class="ms-2"><b>{{ $perkara->namaPerkara }}</b></div>
                                </div>
                            </td>

                            <div class="modal fade" id="error-modal-{{ $perkara->id }}" tabindex="-1" role="dialog"
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
                                                        <label class="col-form-label">Fokus Utama:</label>
                                                        @if ($perkara->fokus)
                                                            <label class="form-control"
                                                                disabled="disabled">{{ $perkara->fokus->namaFokus }}</label>
                                                        @else
                                                            <label class="form-control" disabled="disabled">-</label>
                                                        @endif
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label">Perkara Utama:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $perkara->namaPerkara }}</label>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label">Keterangan:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $perkara->keteranganPerkaraUtama }}</label>
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
                                    @can('PPD - Admin')
                                        <a class="btn btn-primary" style="border-radius: 38px"
                                            href="{{ route('perkarautama.edit', $perkara->id) }}"><i class="fas fa-edit"></i>
                                        </a>
                                        <button type="submit" onclick="myFunction({{ $perkara->id }})" class="btn btn-danger"
                                            style="border-radius: 38px">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        <p id="ppd"></p>
                                    </div>
                                @endcan

                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>

    <script>
        $('.searchKategori').change(function(e) {
            let val = this.value;
            var perkarautama = @json($perkarautama->toArray());
            $("#tablebody").html('');

            console.log(perkarautama);

            perkarautama.forEach(e => {

                if (val == e.fokus_id) {
                    $("#tablebody").append(`
                    <tr class="align-middle">
                          <td>
                                <div class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#error-modal-` + e.id + `">
                                    <div class="ms-2"><b>` + e.fokus.namaFokus + `</b></div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#error-modal-` + e.id + `">
                                    <div class="ms-2"><b>` + e.namaPerkara + `</b></div>
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
                                                        <label class="col-form-label">Fokus Utama:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">` + e.fokus.namaFokus + `</label>

                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label">Perkara Utama:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">` + e.namaPerkara + `</label>

                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label">Keterangan:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">` + e.keteranganPerkaraUtama + `</label>
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
                                    ` + @can('PPD - Admin') `
                                    <form action="/PPD/perkarautama/` + e.id + `" method="POST">

                                        <a class="btn btn-primary" style="border-radius: 38px"
                                            href="/PPD/perkarautama/` + e.id + `"><i
                                                class="fas fa-edit"></i>
                                        </a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" onclick="myFunction()" class="btn btn-danger"
                                            style="border-radius: 38px">
                                            <i class="fas fa-trash"></i>
                                        </button>

                                    </form>
                                    ` + @endcan `
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
                    url: "/PPD/perkarautama/" + id,
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
