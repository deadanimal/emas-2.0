@extends('base')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>MyDigital</H2>
        </div>

        <br>
        <div class="col">
            <div class="row align-items-center">
                <div class="col col-lg-8">

                    <span><b>List of Cluster</b></span>
                    <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                        href="/cluster/create">
                        <span class="fas fa-plus-circle"></span>&nbsp;Add</a>
                    <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                        onClick="window.location.reload();">
                        <span class="fas fa-history"></span></a>
                </div>
                <div class="col-12 col-sm-auto ms-auto">
                    <input class="form-control myInput" type="text" placeholder="Search">
                </div>
            </div>
        </div>



        <hr style="width:100%;text-align:center;">

        {{-- <select class="form-select search" style="width:30%" aria-label="Default select example">
            <option selected disabled hidden>STRATEGY</option>

            @foreach ($strategies as $strategies)
                <option value="{{ $strategies->id }}">{{ $strategies->namaStrategy }}</option>
            @endforeach

        </select> --}}

        {{-- <hr style="width:100%;text-align:center;"> --}}
        <br>
        <div class="card">
            <div id="tableExample2" data-list='{"valueNames":["cluster"],"page":5,"pagination":true}'>
                <div class="table-responsive scrollbar">
                    <table class="table table-hover table-striped overflow-hidden center">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Cluster</th>
                                <th scope="col">National/Sectoral Initiaves</th>
                                <th scope="col">Lead Ministry/Agency</th>
                                <th scope="col">Action</th>

                            </tr>
                        </thead>


                        <tbody class="list myTable" id="searchUpdateTable">
                            @foreach ($clusters as $cluster)
                                <tr class="align-middle cluster">
                                    <td class="text-nowrap">
                                        <div class="d-flex align-items-center" data-bs-toggle="modal"
                                            data-bs-target="#error-modal-{{ $cluster->id }}">
                                            <div class="ms-2"><b>{{ $loop->iteration }}</b></div>
                                        </div>
                                    </td>

                                    <td class="text-nowrap">
                                        <div class="d-flex align-items-center" data-bs-toggle="modal"
                                            data-bs-target="#error-modal-{{ $cluster->id }}">
                                            <div class="ms-2"><b>{{ $cluster->namaCluster }}</b></div>
                                        </div>
                                    </td>

                                    <td class="text-nowrap">
                                        <div class="d-flex align-items-center" data-bs-toggle="modal"
                                            data-bs-target="#error-modal-{{ $cluster->id }}">
                                            <div class="ms-2"><b>{{ $cluster->initiatives }}</b></div>
                                        </div>
                                    </td>

                                    <td class="text-nowrap">
                                        <div class="d-flex align-items-center" data-bs-toggle="modal"
                                            data-bs-target="#error-modal-{{ $cluster->id }}">
                                            <div class="ms-2"><b>{{ $cluster->agency }}</b></div>
                                        </div>
                                    </td>


                                    <div class="modal fade" id="error-modal-{{ $cluster->id }}" tabindex="-1"
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
                                                                <label class="col-form-label" for="namaStrategy">Strategy
                                                                    Name:</label>
                                                                <label class="form-control"
                                                                    disabled="disabled">{{ $cluster->namaCluster }}</label>

                                                            </div>

                                                            <div class="mb-3">
                                                                <label class="col-form-label">National/Sectoral
                                                                    Initiatives:</label>
                                                                <label class="form-control"
                                                                    disabled="disabled">{{ $cluster->initiatives }}</label>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label class="col-form-label">Lead Ministry/Agency:</label>
                                                                <label class="form-control"
                                                                    disabled="disabled">{{ $cluster->agency }}</label>
                                                            </div>

                                                        </form>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

                                    <td class="text-nowrap">
                                        <div>

                                            <a class="btn btn-primary" style="border-radius: 38px"
                                                href="{{ route('cluster.edit', $cluster->id) }}"><i
                                                    class="fas fa-edit"></i>
                                            </a>


                                            <button type="submit" onclick="myFunction({{ $cluster->id }})"
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

                <div class="d-flex justify-content-center mt-3">
                    <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous"
                        data-list-pagination="prev"><span class="fas fa-chevron-left"></span>
                    </button>
                    <ul class="pagination mb-0"></ul>
                    <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next"
                        data-list-pagination="next"><span class="fas fa-chevron-right"> </span>
                    </button>

                </div>
            </div><br>

        </div>



    </div>

    <script>
        $('.search').change(function(e) {
            let val = this.value;
            var iteration = 1;

            var cluster = @json($clusters->toArray());
            $("#tablebody").html('');

            console.log(cluster);

            cluster.forEach(e => {

                if (val == e.strategy_id) {
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
                                    <div class="ms-2"><b>` + e.namaCluster + `</b></div>
                                </div>
                            </td>


                            <td>
                                <div>
                                    <form action="/cluster/` + e.id + `" method="POST">

                                        <a class="btn btn-primary" style="border-radius: 38px"
                                            href="/cluster/` + e.id + `"><i
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
                                                        <label class="col-form-label">Cluster Name:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">` + e.namaCluster + `</label>

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
                    url: "/cluster/" + id,
                    data: {
                        "_token": "{{ csrf_token() }}",
                    }
                });

                alert = "Berjaya di buang!";
                location.href = "/cluster";

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
