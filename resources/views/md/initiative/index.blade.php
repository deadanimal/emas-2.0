@extends('base')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>MyDigital</H2>
        </div>

        <br>

        <span><b>List of Initiative</b></span>
        @role('admin|bahagian|kementerian')
            <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white" href="/initiative/create">
                <span class="fas fa-plus-circle"></span>&nbsp;Add</a>
        @endrole
        <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
            onClick="window.location.reload();">
            <span class="fas fa-history"></span></a>

        <hr style="width:100%;text-align:center;">

        <select class="form-select search" style="width:30%" aria-label="Default select example">
            <option selected disabled hidden>CLUSTER</option>

            @foreach ($cluster as $cluster)
                <option value="{{ $cluster->id }}">{{ $cluster->namaCluster }}</option>
            @endforeach

        </select>

        <hr style="width:100%;text-align:center;">


        <div class="table-responsive scrollbar">
            <table class="table table-hover table-striped overflow-hidden center">
                <thead>
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Initiative</th>
                        <th scope="col">Target Initiative</th>
                        <th scope="col">Phase 1</th>
                        <th scope="col">Phase 2</th>
                        <th scope="col">Phase 3</th>
                        <th scope="col">Lead Agency</th>
                        <th scope="col">Action</th>


                    </tr>
                </thead>

                <tbody id="tablebody">
                    @foreach ($initiatives as $initiative)
                        <tr class="align-middle">
                            <td class="text-nowrap">
                                <div class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#error-modal-{{ $initiative->id }}">
                                    <div class="ms-2"><b>{{ $loop->iteration }}</b></div>
                                </div>
                            </td>

                            <td class="text-nowrap">
                                <div class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#error-modal-{{ $initiative->id }}">
                                    <div class="ms-2"><b>{{ $initiative->namaInitiative }}</b></div>
                                </div>
                            </td>

                            <td class="text-nowrap">
                                <div class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#error-modal-{{ $initiative->id }}">
                                    <div class="ms-2"><b>{{ $initiative->target }}</b></div>
                                </div>
                            </td>

                            <td class="text-nowrap">
                                <div class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#error-modal-{{ $initiative->id }}">
                                    <div class="ms-2"><b>{{ $initiative->phase }}</b></div>
                                </div>
                            </td>

                            <td class="text-nowrap">
                                <div class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#error-modal-{{ $initiative->id }}">
                                    <div class="ms-2"><b>{{ $initiative->phase }}</b></div>
                                </div>
                            </td>

                            <td class="text-nowrap">
                                <div class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#error-modal-{{ $initiative->id }}">
                                    <div class="ms-2"><b>{{ $initiative->phase }}</b></div>
                                </div>
                            </td>

                            <td class="text-nowrap">
                                <div class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#error-modal-{{ $initiative->id }}">
                                    <div class="ms-2"><b>{{ $initiative->leadAgency }}</b></div>
                                </div>
                            </td>

                            @role('admin|bahagian|kementerian')
                                <td class="text-nowrap">
                                    <div>

                                        <a class="btn btn-primary" style="border-radius: 38px"
                                            href="{{ route('initiative.edit', $initiative->id) }}"><i class="fas fa-edit"></i>
                                        </a>


                                        <button type="submit" onclick="myFunction({{ $initiative->id }})"
                                            class="btn btn-danger" style="border-radius: 38px">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        <p id="ppd"></p>

                                    </div>
                                </td>
                            @endrole
                        </tr>
                    @endforeach

                </tbody>

            </table>

            {{-- <div class="modal fade" id="error-modal-{{ $initiative->id }}" tabindex="-1" role="dialog"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
                    <div class="modal-content position-relative">
                        <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                            <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-0">

                            <div class="p-4 pb-0">
                                <form>
                                    <div class="mb-3">
                                        <label class="col-form-label" for="namaStrategy">Strategy
                                            Name:</label>
                                        <label class="form-control"
                                            disabled="disabled">{{ $initiative->namaInitiative }}</label>

                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label">Category:</label>
                                        <label class="form-control" disabled="disabled">{{ $initiative->category }}</label>
                                    </div>
                                    <div class="mb-3">
                                        <label class="col-form-label">Description:</label>
                                        <label class="form-control" disabled="disabled">{{ $initiative->desc }}</label>
                                    </div>

                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div> --}}
        </div>





    </div>

    <script>
        $('.search').change(function(e) {
            let val = this.value;
            var iteration = 1;

            var initiative = @json($initiatives->toArray());
            $("#tablebody").html('');

            // console.log(strategy);

            initiative.forEach(e => {

                if (val == e.thrust_id) {
                    $("#tablebody").append(`
                    <tr class="align-middle">
                            <td>
                                <div class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#error-modal-` + e.id + `">
                                    <div class="ms-2"><b>` + iteration++ + `</b></div>
                                </div>
                            </td>

                            <td>
                                <div class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#error-modal-` + e.id + `">
                                    <div class="ms-2"><b>` + e.namainitiative + `</b></div>
                                </div>
                            </td>

                            <td>
                                <div class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#error-modal-` + e.id + `">
                                    <div class="ms-2"><b>` + e.category + `</b></div>
                                </div>
                            </td>


                            <td>
                                <div>
                                    <form action="/initiative/` + e.id + `" method="POST">

                                        <a class="btn btn-primary" style="border-radius: 38px"
                                            href="/initiative/` + e.id + `"><i
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
                                                        <label class="col-form-label">initiative Name:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">` + e.namainitiative + `</label>

                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label">Type:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">` + e.category + `</label>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label">Description:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">` + e.desc + `</label>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="modal-footer">

                                        </div>
                                    </div>
                                </div>
                            </div>

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
                    url: "/initiative/" + id,
                    data: {
                        "_token": "{{ csrf_token() }}",
                    }
                });

                alert = "Berjaya di buang!";
                location.href = "/initiative";

            } else {
                alert("Dibatalkan!");
            }
            document.getElementById("ppd").innerHTML = text;
        }
    </script>
@endsection
