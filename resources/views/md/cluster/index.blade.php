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

                    <span><b>List of Cluster</b></span>
                    <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                        href="/MD/cluster/create">
                        <span class="fas fa-plus-circle"></span>&nbsp;Add</a>
                    <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                        onClick="window.location.reload();">
                        <span class="fas fa-history"></span></a>
                </div>

            </div>
        </div>



        <hr style="width:100%;text-align:center;">

        <br>
        <div class="card">
            <div class="table-responsive scrollbar">
                <table class="table table-bordered align-middle" id="example">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Cluster</th>
                            <th scope="col">Total Initiatives <b>DEB</b> </th>
                            <th scope="col">Total Initiatives <b>4IR</b> </th>
                            <th scope="col">Cluster Secretariat</th>
                            <th scope="col">Person In Charge</th>
                            <th scope="col">Position</th>
                            <th scope="col">Contact Number</th>
                            <th scope="col">Email Address</th>
                            <th scope="col">Chairman</th>
                            <th scope="col">Action</th>

                        </tr>
                    </thead>


                    <tbody>
                        @foreach ($clusters as $cluster)
                            <tr class="align-middle cluster">
                                <td>
                                    <div class="d-flex align-items-center" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-{{ $cluster->id }}">
                                        <div class="ms-2"><b>{{ $loop->iteration }}</b></div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-{{ $cluster->id }}">
                                        <div class="ms-2"><b>{{ $cluster->namaCluster }}</b></div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-{{ $cluster->id }}">
                                        <div class="ms-2"><b>{{ $cat1 }}</b></div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-{{ $cluster->id }}">
                                        <div class="ms-2"><b>{{ $cat2 }}</b></div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-{{ $cluster->id }}">
                                        <div class="ms-2"><b>{{ $cluster->agency }}</b></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-{{ $cluster->id }}">
                                        <div class="ms-2"><b>{{ $cluster->PIC }}</b></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-{{ $cluster->id }}">
                                        <div class="ms-2"><b>{{ $cluster->position }}</b></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-{{ $cluster->id }}">
                                        <div class="ms-2"><b>{{ $cluster->phone }}</b></div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-{{ $cluster->id }}">
                                        <div class="ms-2"><b>{{ $cluster->email }}</b></div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-{{ $cluster->id }}">
                                        <div class="ms-2"><b>{{ $cluster->chairman }}</b></div>
                                    </div>
                                </td>


                                <div class="modal fade" id="error-modal-{{ $cluster->id }}" tabindex="-1" role="dialog"
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
                                                            <label class="col-form-label" for="namaCluster">Cluster
                                                                Name:</label>
                                                            <label class="form-control"
                                                                disabled="disabled">{{ $cluster->namaCluster }}</label>

                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="col-form-label">Total Initiatives by DEB &
                                                                4IR:</label>
                                                            <label class="form-control"
                                                                disabled="disabled">{{ $cluster->initiatives }}</label>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="col-form-label">Secretariat:</label>
                                                            <label class="form-control"
                                                                disabled="disabled">{{ $cluster->agency }}</label>
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
                                            href="{{ route('cluster.edit', $cluster->id) }}"><i class="fas fa-edit"></i>
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
                                    <form action="/MD/cluster/` + e.id + `" method="POST">

                                        <a class="btn btn-primary" style="border-radius: 38px"
                                            href="/MD/cluster/` + e.id + `"><i
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


            let alert = "Adakah anda mahu menghapuskan data?";
            if (confirm(alert) == true) {
                $.ajax({
                    method: "DELETE",
                    url: "/MD/cluster/" + id,
                    data: {
                        "_token": "{{ csrf_token() }}",
                    }
                });

                alert = "Berjaya di buang!";
                location.href = "/MD/cluster";

            } else {
                alert("Dibatalkan!");
            }
            document.getElementById("ppd").innerHTML = text;
        }


        // $(document).ready(function() {
        //     $('#example').DataTable();
        // });
    </script>
@endsection
