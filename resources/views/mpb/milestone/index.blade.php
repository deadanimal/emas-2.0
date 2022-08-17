@extends('base')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>MALAYSIA PRODUCTIVITY BLUEPRINT</H2>
        </div>

        <br>

        <span><b>Milestone by KPI Information</b></span>
        <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white" href="/milestone/create">
            <span class="fas fa-plus-circle"></span>&nbsp;Add</a>
        <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
            onClick="window.location.reload();">
            <span class="fas fa-history"></span></a>

        <hr style="width:100%;text-align:center;">

        <div class="row g-3" style="width: 60%">
            <div class="col-sm">

                <select class="form-select searchKategori" style="width:70%">
                    <option selected disabled hidden>KPI</option>

                    @foreach ($list as $list)
                        <option value="{{ $list->id }}">{{ $list->namaKpi }}</option>
                    @endforeach

                </select>
            </div>



            <div class="col-sm">

                <select class="form-select searchKategori" style="width:70%">
                    <option selected disabled hidden>YEAR</option>

                    {{-- @foreach ($list as $list)
                    <option value="{{ $list->id }}">{{ $list->namaKpi }}</option>
                    @endforeach --}}

                </select>
            </div>

            <div class="col-sm">

                <select class="form-select searchKategori" style="width:70%">
                    <option selected disabled hidden>QUARTER</option>

                    {{-- @foreach ($list as $list)
                     <option value="{{ $list->id }}">{{ $list->namaKpi }}</option>
                     @endforeach --}}

                </select>
            </div>
        </div>

        <div class="table-responsive scrollbar">
            <table class="table table-hover table-striped overflow-hidden">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>

                <tbody id="tablebody">
                    @foreach ($miles as $mile)
                        <tr class="align-middle">
                            <td class="text-nowrap">
                                <div class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#error-modal-{{ $mile->id }}">
                                    <div class="ms-2"><b>{{ $mile->namaMilestone }}</b></div>
                                </div>
                            </td>

                            <div class="modal fade" id="error-modal-{{ $mile->id }}" tabindex="-1" role="dialog"
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
                                                        <label class="col-form-label" for="namaMilestone">Milestone
                                                            Name:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $mile->namaMilestone }}</label>

                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label">Remarks:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $mile->remark }}</label>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            <td align="right">
                                <div>
                                    {{-- <form action="{{ route('mile.destroy', $k->id) }}" method="POST"> --}}

                                    <a class="btn btn-primary" style="border-radius: 38px"
                                        href="{{ route('milestone.edit', $mile->id) }}"><i class="fas fa-edit"></i>
                                    </a>
                                    {{-- @csrf
                                        @method('DELETE') --}}

                                    <button type="submit" onclick="myFunction({{ $mile->id }})" class="btn btn-danger"
                                        style="border-radius: 38px">
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



    </div>

    <script>
        $('.searchKategori').change(function(e) {
            let val = this.value;
            var mile = @json($miles->toArray());
            console.log(mile);
            $("#tablebody").html('');
            mile.forEach(e => {

                if (val == e.sub_id) {
                    $("#tablebody").append(`
                    <tr class="align-middle">
                            <td class="text-nowrap">
                                <div class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#error-modal-` + e.id + `">
                                    <div class="ms-2"><b>` + e.namaMilestone + `</b></div>
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
                                                        <label class="col-form-label">Perkara Utama:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">` + e.namaMilestone + `</label>

                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label">Remarks:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">` + e.remark + `</label>
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
                                    <form action="/milestone/` + e.id + `" method="POST">

                                        <a class="btn btn-primary" style="border-radius: 38px"
                                            href="/milestone/` + e.id + `"><i
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
                    url: "/milestone/" + id,
                    data: {
                        "_token": "{{ csrf_token() }}",
                    }
                });

                alert = "Berjaya di buang!";
                location.href = "/milestone";

            } else {
                alert("Dibatalkan!");
            }
            document.getElementById("ppd").innerHTML = text;
        }
    </script>
@endsection
