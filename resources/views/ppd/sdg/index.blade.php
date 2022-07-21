@extends('base')
@section('content')
    <div class="container">
        <br>

        <div class="mb-4 text-center">
            <H2>PELAN PELAKSANAAN DASAR</H2>
        </div>

        <br>

        <span><b>SDG</b></span>
        <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white" href="/sdg/create">
            <span class="fas fa-plus-circle"></span>&nbsp;Tambah
        </a>
        <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
            onClick="window.location.reload();">
            <span class="fas fa-history"></span></a>

        <hr style="width:100%;text-align:center;">

        <select class="form-select searchKategori" style="width:30%" aria-label="Default select example">
            <option selected disabled hidden>PILIH TEMA/PEMANGKIN DASAR</option>
            @foreach ($list as $list)
                <option value="{{ $list->id }}">{{ $list->namaTema }}</option>
            @endforeach
        </select>

        <div id="tableExample2" data-list='{"valueNames":["perkara"],"page":5,"pagination":true}'>
            <div class="table-responsive scrollbar">
                <table class="table table-hover table-striped overflow-hidden">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="list" id="tablebody">
                        @foreach ($sdgs as $sdg)
                            <tr class="align-middle">
                                <td class="text-nowrap">
                                    <div class="d-flex align-items-center" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-{{ $sdg->id }}">
                                        <div class="ms-2"><b>{{ $sdg->namaSdg }}</b></div>
                                    </div>
                                </td>

                                <div class="modal fade" id="error-modal-{{ $sdg->id }}" tabindex="-1" role="dialog"
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
                                                            <label class="col-form-label">SDG:</label>
                                                            <label class="form-control"
                                                                disabled="disabled">{{ $sdg->namaSdg }}</label>

                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="col-form-label">Keterangan:</label>
                                                            <label class="form-control"
                                                                disabled="disabled">{{ $sdg->keteranganSdg }}</label>
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
                                        {{-- <form action="{{ route('sdg.destroy', $sdg->id) }}" method="POST"> --}}

                                        <a class="btn btn-primary" style="border-radius: 38px"
                                            href="{{ route('sdg.edit', $sdg->id) }}"><i class="fas fa-edit"></i>
                                        </a>

                                        {{-- @csrf
                                        @method('DELETE') --}}

                                        <button type="submit" onclick="myFunction({{ $sdg->id }})"
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
            $('.searchKategori').change(function(e) {
                let val = this.value;
                var sdg = @json($sdgs->toArray());
                $("#tablebody").html('');
                sdg.forEach(e => {

                    if (val == e.pemangkin_id) {
                        $("#tablebody").append(`
                    <tr class="align-middle">
                            <td class="text-nowrap">
                                <div class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#error-modal-` + e.id + `">
                                    <div class="ms-2"><b>` + e.namaSdg + `</b></div>
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
                                                        <label class="col-form-label">SDG:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">` + e.namaSdg + `</label>

                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label">Keterangan:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">` + e.keteranganSdg + `</label>
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
                                    <form action="/sdg/` + e.id + `" method="POST">

                                        <a class="btn btn-primary" style="border-radius: 38px"
                                            href="/sdg/` + e.id + `"><i
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
                        url: "/sdg/" + id,
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
    @endsection
