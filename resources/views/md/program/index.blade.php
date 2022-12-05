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
                    <span><b>List of Program</b></span>
                    @can('MD - Admin')
                        <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                            href="/MD/program/create">
                            <span class="fas fa-plus-circle"></span>&nbsp;Add</a>
                    @endcan
                    <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                        onClick="window.location.reload();">
                        <span class="fas fa-history"></span></a>
                </div>

            </div>
        </div>


        <hr style="width:100%;text-align:center;">

        <select class="form-select search" style="width:30%" aria-label="Default select example">
            <option selected disabled hidden>INITIATIVE</option>

            @foreach ($initiatives as $initiative)
                <option value="{{ $initiative->id }}">{{ $initiative->namaInitiative }}</option>
            @endforeach

        </select>

        {{-- <hr style="width:100%;text-align:center;"> --}}
        <br>
        <div class="card">

            <div class="table-responsive scrollbar">
                <table class="table table-hover table-striped overflow-hidden center" id="example">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Program</th>
                            <th scope="col">Progress %</th>
                            @can('MD - Admin')
                                <th scope="col">Action</th>
                            @endcan

                        </tr>
                    </thead>

                    <tbody class="list myTable" id="tablebody">
                        @foreach ($programs as $program)
                            <tr class="align-middle program">
                                <td>
                                    <div class="d-flex align-items-center" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-{{ $program->id }}">
                                        <div class="ms-2"><b>{{ $loop->iteration }}</b></div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-{{ $program->id }}">
                                        <div class="ms-2"><b>{{ $program->namaProgram }}</b></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-{{ $program->id }}">
                                        <div class="ms-2"><b>{{ $program->progress }}</b></div>
                                    </div>
                                </td>


                                <div class="modal fade" id="error-modal-{{ $program->id }}" tabindex="-1" role="dialog"
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
                                                            <label class="col-form-label" for="namaProgram">Program
                                                                Name:</label>
                                                            <label class="form-control"
                                                                disabled="disabled">{{ $program->namaProgram }}</label>

                                                        </div>
                                                        <br>

                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                @can('MD - Admin')
                                    <td>
                                        <div>
                                            <a class="btn btn-primary" style="border-radius: 38px"
                                                href="{{ route('program.edit', $program->id) }}"><i class="fas fa-edit"></i>
                                            </a>
                                            <button type="submit" onclick="myFunction({{ $program->id }})"
                                                class="btn btn-danger" style="border-radius: 38px">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                            <p id="ppd"></p>
                                        </div>
                                    </td>
                                @endcan

                            </tr>
                        @endforeach

                    </tbody>

                </table>


            </div>


            <br>
        </div>
    </div>

    <script>
        $('.search').change(function(e) {
            let val = this.value;
            var iteration = 1;

            var program = @json($programs->toArray());
            $("#tablebody").html('');

            // console.log(strategy);

            program.forEach(e => {

                if (val == e.initiative_id) {
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
                                    <div class="ms-2"><b>` + e.namaProgram + `</b></div>
                                </div>
                            </td>


                            <td>
                                <div>
                                    <form action="/program/` + e.id + `" method="POST">

                                        <a class="btn btn-primary" style="border-radius: 38px"
                                            href="/program/` + e.id + `"><i
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
                                                        <label class="col-form-label">program Name:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">` + e.namaProgram + `</label>

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
                    url: "/MD/program/" + id,
                    data: {
                        "_token": "{{ csrf_token() }}",
                    }
                });

                alert = "Berjaya di buang!";
                location.href = "/MD/program";

            } else {
                alert("Dibatalkan!");
            }
            document.getElementById("ppd").innerHTML = text;
        }

        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection
