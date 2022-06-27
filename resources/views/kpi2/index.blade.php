@extends('base')
@section('content')

    <div class="container">
        <br>
        <div class="mb-4 text-center">
            <H2>MALAYSIA PRODUCTIVITY BLUEPRINT</H2>
        </div>

        <br>

        <span><b>KPI Information</b></span>
        @role('admin|bahagian|kementerian')
            <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white" href="/kpi2/create">
                <span class="fas fa-plus-circle"></span>&nbsp;Add</a>
        @endrole

        <hr style="width:100%;text-align:center;">

        <select class="form-select searchKategori" style="width:30%" aria-label="Default select example">
            <option selected disabled hidden>Sub Activity</option>

            @foreach ($list as $list)
                <option value="{{ $list->id }}">{{ $list->namaSub }}</option>
            @endforeach

        </select>

        <div class="table-responsive scrollbar">
            <table class="table table-hover table-striped overflow-hidden">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>

                <tbody id="tablebody">
                    @foreach ($kpis as $kpi)
                        <tr class="align-middle">
                            <td class="text-nowrap">
                                <div class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#error-modal-{{ $kpi->id }}">
                                    <div class="ms-2"><b>{{ $kpi->namaKpi }}</b></div>
                                </div>
                            </td>

                            <div class="modal fade" id="error-modal-{{ $kpi->id }}" tabindex="-1" role="dialog"
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
                                                        <label class="col-form-label" for="namaKpi">kpi-Activity Name:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $kpi->namaKpi }}</label>

                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label">kpi-Activity Information:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $kpi->keteranganKpi }}</label>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            @role('admin|bahagian|kementerian')
                                <td align="right">
                                    <div>
                                        {{-- <form action="{{ route('kpi.destroy', $k->id) }}" method="POST"> --}}

                                        <a class="btn btn-primary" style="border-radius: 38px"
                                            href="{{ route('kpi2.edit', $kpi->id) }}"><i class="fas fa-edit"></i>
                                        </a>
                                        {{-- @csrf
                                        @method('DELETE') --}}

                                        <button type="submit" onclick="myFunction({{ $kpi->id }})" class="btn btn-danger"
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



    </div>

    <script>
          $('.searchKategori').change(function(e) {
            let val = this.value;
            var kpi = @json($kpis->toArray());
            console.log(kpi);
            $("#tablebody").html('');
            kpi.forEach(e => {

                if (val == e.sub_id) {
                    $("#tablebody").append(`
                    <tr class="align-middle">
                            <td class="text-nowrap">
                                <div class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#error-modal-` + e.id + `">
                                    <div class="ms-2"><b>` + e.namaKpi + `</b></div>
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
                                                            disabled="disabled">` + e.namaKpi + `</label>

                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label">Keterangan:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">` + e.keteranganKpi + `</label>
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
                                    <form action="/kpi2/` + e.id + `" method="POST">

                                        <a class="btn btn-primary" style="border-radius: 38px"
                                            href="/kpi2/` + e.id + `"><i
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
                    url: "/kpi2/" + id,
                    data: {
                        "_token": "{{ csrf_token() }}",
                    }
                });

                alert = "Berjaya di buang!";
                location.href = "/kpi2";

            } else {
                alert("Dibatalkan!");
            }
            document.getElementById("ppd").innerHTML = text;
        }
    </script>
@endsection
