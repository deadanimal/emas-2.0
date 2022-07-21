@extends('base')
@section('content')
    <div class="container">
        <br>
        <div class="mb-4 text-center">
            <H2>PELAN PELAKSANAAN DASAR</H2>
        </div>

        <br>

        <span><b>Fokus Utama</b></span>
        <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white" href="/fokusutama/create">
            <span class="fas fa-plus-circle"></span>&nbsp;Tambah</a>

        <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
            onClick="window.location.reload();">
            <span class="fas fa-hand-middle-finger"></span></a>

        {{-- <hr style="width:100%;text-align:center;"> --}}
    </div>


    <div id="tableExample2" data-list='{"valueNames":["fokus"],"page":5,"pagination":true}'>

        <div class="table-responsive scrollbar">
            <table class="table table-hover table-striped overflow-hidden testing" style="width: 100%">
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

                            @role('admin|bahagian|kementerian')
                                <td align="right">
                                    <div>
                                        {{-- <form action="{{ route('fokusutama.destroy', $fokus->id) }}" method="POST"> --}}

                                        <a class="btn btn-primary" style="border-radius: 38px"
                                            href="{{ route('fokusutama.edit', $fokus->id) }}"><i class="fas fa-edit"></i>
                                        </a>
                                        {{-- @csrf
                                        @method('DELETE') --}}

                                        <button type="submit" onclick="myFunction({{ $fokus->id }})" class="btn btn-danger"
                                            style="border-radius: 38px">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        <p id="ppd"></p>

                                        {{-- </form> --}}
                                    </div>
                                </td>
                            @endrole
                        </tr>
                    @endforeach

                </tbody>

            </table>


        </div>

        <div class="d-flex justify-content-center mt-3">
            <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous"
                data-list-pagination="prev"><span class="fas fa-chevron-left"></span>
            </button>
            <ul class="pagination mb-0"></ul>
            <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next"
                data-list-pagination="next"><span class="fas fa-chevron-right"> </span>
            </button>
            <input class="form-control" id="myInput" type="text" style="width:30%" placeholder="Search..">

        </div>



        {{-- @foreach ($fokusutama as $fokus)
            <div class="row">
                <div class="col-lg-6">
                    <div class="kanban-items-container border bg-white dark__bg-1000 rounded-2 py-3 mb-3"
                        style="max-height: none;">
                        <div class="card mb-3 kanban-item shadow-sm dark__bg-1100">
                            <div class="card-body">
                                {{ $fokus->namaFokus }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach --}}




        {{-- </div> --}}

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="vendors/draggable/draggable.bundle.legacy.js"></script>


        <script>
            function myFunction(id) {


                let alert = "Adakah anda mahu membuang data?";
                if (confirm(alert) == true) {
                    $.ajax({
                        method: "DELETE",
                        url: "/fokusutama/" + id,
                        data: {
                            "_token": "{{ csrf_token() }}",
                        }
                    });

                    alert = "Berjaya di buang!";
                    location.href = "/fokusutama";

                } else {
                    alert("Dibatalkan!");
                }
                document.getElementById("ppd").innerHTML = text;
            }

            $(document).ready(function() {
                $("#myInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });


            // $('.testing'.dataTable({
            //     "columns":[
            //         {
            //             "word-wrap": "break-word"
            //         },
            //         null
            //     ]
            // }));
        </script>
    @endsection
