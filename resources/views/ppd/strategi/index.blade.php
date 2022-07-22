@extends('base')
@section('content')
    <div class="container">
        <br>

        <div class="mb-4 text-center">
            <H2>PELAN PELAKSANAAN DASAR</H2>
        </div>

        <br>

        <div class="col">
            <div class="row align-items-center">
                <div class="col col-lg-8">
                    <span><b>Strategi</b></span>
                    <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                        href="/strategi/create">
                        <span class="fas fa-plus-circle"></span>&nbsp;Tambah
                    </a>
                    <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                        onClick="window.location.reload();">
                        <span class="fas fa-history"></span></a>
                </div>
                <div class="col-12 col-sm-auto ms-auto">
                    <input class="form-control myInput" type="text" placeholder="Carian">
                </div>
            </div>
        </div>


        <hr style="width:100%;text-align:center;">

        <select class="form-select searchBidang" style="width:30%" aria-label="Default select example">
            <option selected disabled hidden>PILIH BIDANG KEUTAMAAN</option>
            @foreach ($list as $list)
                <option value="{{ $list->id }}">{{ $list->namaBidang }}</option>
            @endforeach
        </select>

        <div id="tableExample2" data-list='{"valueNames":["strategi"],"page":5,"pagination":true}'>
            <div class="table-responsive scrollbar">
                <table class="table table-hover table-striped overflow-hidden">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="list myTable" id="tablebody">
                        @foreach ($strategis as $strategi)
                            <tr class="align-middle">
                                <td class="text-nowrap">
                                    <div class="d-flex align-items-center" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-{{ $strategi->id }}">
                                        <div class="ms-2"><b>{{ $strategi->namaStrategi }}</b></div>
                                    </div>
                                </td>

                                <div class="modal fade" id="error-modal-{{ $strategi->id }}" tabindex="-1" role="dialog"
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
                                                            <label class="col-form-label">Strategi:</label>
                                                            <label class="form-control"
                                                                disabled="disabled">{{ $strategi->namaStrategi }}</label>

                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="col-form-label">Keterangan:</label>
                                                            <label class="form-control"
                                                                disabled="disabled">{{ $strategi->keteranganStrategi }}</label>
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
                                        {{-- <form action="{{ route('strategi.destroy', $strategi->id) }}" method="POST"> --}}

                                        <a class="btn btn-primary" style="border-radius: 38px"
                                            href="{{ route('strategi.edit', $strategi->id) }}"><i class="fas fa-edit"></i>
                                        </a>

                                        {{-- @csrf
                                        @method('DELETE') --}}

                                        <button type="submit" onclick="myFunction({{ $strategi->id }})"
                                            class="btn btn-danger" style="border-radius: 38px">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        <p id="ppd"></p>

                                        {{-- </form> --}}
                                    </div>
                                </td>
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
            </div>


        </div>

        <script>
            $('.searchBidang').change(function(e) {
                let val = this.value;
                //console.log(this.value);

                var strategi = @json($strategis->toArray());

                $("#tablebody").html('');
                strategi.forEach(e => {
                    if (val == e.bidang_id) {
                        // console.log("jadi")
                        $("#tablebody").append(`
                    <tr class="align-middle">
                            <td class="text-nowrap">
                                <div class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#error-modal-` + e.id + `">
                                    <div class="ms-2"><b>` + e.namaStrategi + `</b></div>
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
                                                        <label class="col-form-label">Strategi:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">` + e.namaStrategi + `</label>

                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label">Keterangan:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">` + e.keteranganStrategi + `</label>
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
                                    <form action="/strategi/` + e.id + `" method="POST">

                                        <a class="btn btn-primary" style="border-radius: 38px"
                                            href="/strategi/` + e.id + `"><i
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
                        url: "/strategi/" + id,
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
                $(".myInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $(".myTable tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script>
    @endsection
