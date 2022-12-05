@extends('base-md')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>MyDigital Progress Report</H2>
        </div>

        <br>

        <div class="col">
            <div class="row align-items-center">
                <div class="col col-lg-8">
                    <span><b>List of Initiative</b></span>
                    @can('MD - Admin')
                        <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                            href="/MD/initiative/create">
                            <span class="fas fa-plus-circle"></span>&nbsp;Add</a>
                    @endcan
                    <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                        onClick="window.location.reload();">
                        <span class="fas fa-history"></span></a>
                </div>

            </div>
        </div>

        <hr>
        <div class="row g-3">
            <div class="col-sm" style="width:50%">

                <select class="form-select search">
                    <option selected disabled hidden>CLUSTER</option>

                    @foreach ($cluster as $cluster)
                        <option value="{{ $cluster->id }}">{{ $cluster->namaCluster }}</option>
                    @endforeach

                </select>
            </div>

            <div class="col-sm" style="width:50%">

                <select class="form-select search">
                    <option selected disabled hidden>DOCUMENT</option>

                    <option value="DEB">DEB</option>
                    <option value="4IR">4IR</option>

                    {{-- @foreach ($initiatives as $doc)
                        <option value="{{ $doc->id }}">{{ $doc->category }}</option>
                    @endforeach --}}



                </select>
            </div>

            <div class="col-sm" style="width:50%">

                <select class="form-select search">
                    <option selected disabled hidden>LEVEL</option>

                    <option value="National">National</option>
                    <option value="Sectoral">Sectoral</option>

                    {{-- @foreach ($initiatives as $level)
                        <option value="{{ $level->id }}">{{ $level->sec_id }}</option>
                    @endforeach --}}

                </select>
            </div>

            <div class="col-sm" style="width:50%">
                <select class="form-select js-choice search" multiple="multiple" size="1" name="phase"
                    data-options='{"removeItemButton":true,"placeholder":true}'>
                    <option value="">SELECT PHASE</option>
                    <option value="1-2 (2021-2025)">1-2 (2021-2025)</option>
                    <option value="1-2 (2021-2025)">1-2 (2021-2025)</option>
                    <option value="1-3 (2021-2030)">1-3 (2021-2030)</option>
                    <option value="2 (2023-2025)">2 (2023-2025)</option>
                    <option value="2 (2023-2030)">2 (2023-2030)</option>
                    <option value="3 (2026-2030)">3 (2026-2030)</option>
                </select>
            </div>
        </div>

        <br>
        <div class="card">
            <div class="table-responsive scrollbar">
                <table class="table table-hover table-striped overflow-hidden center" id="example">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Code</th>
                            <th scope="col">Initiative</th>
                            <th scope="col">Progress Initiative % </th>
                            <th scope="col">Target Initiative</th>
                            <th scope="col">Actual Achievements </th>

                            <th scope="col">Phase </th>

                            {{-- <th scope="col">Phase 2</th>
                            <th scope="col">Phase 3</th> --}}
                            <th scope="col">Lead Agency</th>
                            @can('MD - Admin')
                                <th scope="col">Action</th>
                            @endcan


                        </tr>
                    </thead>

                    <tbody class="list myTable" id="tablebody">
                        @foreach ($initiatives as $initiative)
                            <tr class="align-middle initiative">
                                <td>
                                    <div class="d-flex align-items-center" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-{{ $initiative->id }}">
                                        <div class="ms-2"><b>{{ $loop->iteration }}</b></div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-{{ $initiative->id }}">
                                        <div class="ms-2"><b>{{ $initiative->code }}</b></div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-{{ $initiative->id }}">
                                        <div class="ms-2"><b>{{ $initiative->namaInitiative }}</b></div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-{{ $initiative->id }}">
                                        <div class="ms-2"><b>{{ $initiative->progress }}</b></div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-{{ $initiative->id }}">
                                        <div class="ms-2"><b>{{ $initiative->target }}</b></div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-{{ $initiative->id }}">
                                        <div class="ms-2"><b>{{ $initiative->achievement }}</b></div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-{{ $initiative->id }}">
                                        <div class="ms-2"><b>{{ $initiative->phase }}</b></div>
                                    </div>
                                </td>

                                {{-- <td>
                                    <div class="d-flex align-items-center" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-{{ $initiative->id }}">
                                        <div class="ms-2"><b>{{ $initiative->phase2 }}</b></div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-{{ $initiative->id }}">
                                        <div class="ms-2"><b>{{ $initiative->phase3 }}</b></div>
                                    </div>
                                </td> --}}

                                <td>
                                    <div class="d-flex align-items-center" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-{{ $initiative->id }}">
                                        <div class="ms-2"><b>{{ $initiative->leadAgency }}</b></div>
                                    </div>
                                </td>

                                <div class="modal fade" id="error-modal-{{ $initiative->id }}" tabindex="-1"
                                    role="dialog" aria-hidden="true">
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
                                                            <label class="col-form-label" for="namaInitiative">Initiative
                                                                Name:</label>
                                                            <label class="form-control"
                                                                disabled="disabled">{{ $initiative->namaInitiative }}</label>

                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="col-form-label">Target
                                                                Initiatives:</label>
                                                            <label class="form-control"
                                                                disabled="disabled">{{ $initiative->target }}</label>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label
                                                                class="col-form-label">Phase:</label>{{ $initiative->phase }}

                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="col-form-label">Lead Agency:</label>
                                                            <label class="form-control"
                                                                disabled="disabled">{{ $initiative->leadAgency }}</label>
                                                        </div>
                                                        <br>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <td>
                                    <div>
                                        @can('MD - Admin')
                                            <a class="btn btn-warning" style="border-radius: 38px" onclick="Kpi(this)"
                                                href="initiative/{{ $initiative->id }}/update/"><i
                                                    class="fas fa-pencil-alt"></i>
                                            </a>

                                            <a class="btn btn-primary" style="border-radius: 38px"
                                                href="{{ route('initiative.edit', $initiative->id) }}"><i
                                                    class="fas fa-edit"></i>
                                            </a>


                                            <button type="submit" onclick="myFunction({{ $initiative->id }})"
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


            </div><br>
        </div>



    </div>

    <script>
        $('.search').change(function(e) {
            let val = this.value;
            var iteration = 1;

            var initiative = @json($initiatives->toArray());
            $("#tablebody").html('');

            // console.log(initiative);

            initiative.forEach(e => {

                if (val == e.cluster_id) {
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
                                    <div class="ms-2"><b>` + e.code + `</b></div>
                                </div>
                            </td>

                            <td>
                                <div class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#error-modal-` + e.id + `">
                                    <div class="ms-2"><b>` + e.namaInitiative + `</b></div>
                                </div>
                            </td>

                             <td>
                                <div class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#error-modal-` + e.id + `">
                                    <div class="ms-2"><b>` + e.progress + `</b></div>
                                </div>
                            </td>

                            <td>
                                <div class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#error-modal-` + e.id + `">
                                    <div class="ms-2"><b>` + e.target + `</b></div>
                                </div>
                            </td>

                            <td>
                                <div class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#error-modal-` + e.id + `">
                                    <div class="ms-2"><b>` + e.achievement + `</b></div>
                                </div>
                            </td>

                            <td>
                                <div class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#error-modal-` + e.id + `">
                                    <div class="ms-2"><b>` + e.phase + `</b></div>
                                </div>
                            </td>

                            <td>
                                <div class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#error-modal-` + e.id + `">
                                    <div class="ms-2"><b>` + e.leadAgency + `</b></div>
                                </div>
                            </td>

                            <td>
                                <div>
                                    <form action="/MD/initiative/` + e.id + `" method="POST">

                                        <a class="btn btn-primary" style="border-radius: 38px"
                                            href="/MD/initiative/` + e.id + `"><i
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
                                                        <label class="col-form-label">Initiative Name:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">` + e.namaInitiative + `</label>

                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label">Target Initiative:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">` + e.target + `</label>
                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label">Lead Agency:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">` + e.leadAgency + `</label>
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


            let alert = "Adakah anda mahu menghapuskan data?";
            if (confirm(alert) == true) {
                $.ajax({
                    method: "DELETE",
                    url: "/MD/initiative/" + id,
                    data: {
                        "_token": "{{ csrf_token() }}",
                    }
                });

                alert = "Berjaya di buang!";
                location.href = "/MD/initiative";

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

        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection
