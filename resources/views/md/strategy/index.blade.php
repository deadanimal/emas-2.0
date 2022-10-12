@extends('base-md')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>MyDigital</H2>
        </div>

        <br>
        <div class="col">
            <div class="row align-items-center">
                <div class="col col-lg-8">

                    <span><b>List of Strategy</b></span>
                    <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                        href="/MD/strategy/create">
                        <span class="fas fa-plus-circle"></span>&nbsp;Add</a>

                    <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                        onClick="window.location.reload();">
                        <span class="fas fa-history"></span></a>
                </div>

            </div>
        </div>

        <hr style="width:100%;text-align:center;">

        <select class="form-select search" style="width:30%">
            <option selected disabled hidden>THRUST</option>

            @foreach ($thru as $thrust)
                <option value="{{ $thrust->id }}">{{ $thrust->namaThrust }}</option>
            @endforeach

        </select>
        <br>
        {{-- <hr style="width:100%;text-align:center;"> --}}

        <div class="card">
            <div class="table-responsive scrollbar">
                <table class="table table-bordered user_datatable" id="example">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Strategy</th>
                            <th scope="col">Type</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>

                    <tbody class="list myTable" id="tablebody">
                        @foreach ($strategys as $strategy)
                            <tr class="align-middle strategy">
                                <td>
                                    <div class="d-flex align-items-center" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-{{ $strategy->id }}">
                                        <div class="ms-2"><b>{{ $loop->iteration }}</b></div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-{{ $strategy->id }}">
                                        <div class="ms-2"><b>{{ $strategy->namaStrategy }}</b></div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-{{ $strategy->id }}">
                                        <div class="ms-2"><b>{{ $strategy->category }}</b></div>
                                    </div>
                                </td>



                                <div class="modal fade" id="error-modal-{{ $strategy->id }}" tabindex="-1" role="dialog"
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
                                                            <label class="col-form-label"
                                                                for="namaStrategy">Strategy:</label>
                                                            <label class="form-control"
                                                                disabled="disabled">{{ $strategy->namaStrategy }}</label>

                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="col-form-label">Category:</label>
                                                            <label class="form-control"
                                                                disabled="disabled">{{ $strategy->category }}</label>
                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="col-form-label">Description:</label>
                                                            <label class="form-control"
                                                                disabled="disabled">{{ $strategy->desc }}</label>
                                                        </div>

                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                <td>
                                    <div>

                                        <a class="btn btn-primary" style="border-radius: 38px"
                                            href="{{ route('strategy.edit', $strategy->id) }}"><i class="fas fa-edit"></i>
                                        </a>


                                        <button type="submit" onclick="myFunction({{ $strategy->id }})"
                                            class="btn btn-danger" style="border-radius: 38px">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        <p id="ppd"></p>

                                    </div>
                                </td>
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

            var strategy = @json($strategys->toArray());
            $("#tablebody").html('');

            console.log(strategy);

            strategy.forEach(e => {

                if (val == e.thrus_id) {
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
                                    <div class="ms-2"><b>` + e.namaStrategy + `</b></div>
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
                                    <form action="/MD/strategy/` + e.id + `" method="POST">

                                        <a class="btn btn-primary" style="border-radius: 38px"
                                            href="/MD/strategy/` + e.id + `"><i
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
                                                        <label class="col-form-label">Strategy:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">` + e.namaStrategy + `</label>

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
                    url: "/strategy/" + id,
                    data: {
                        "_token": "{{ csrf_token() }}",
                    }
                });

                alert = "Berjaya di buang!";
                location.href = "/strategy";

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
