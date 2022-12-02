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
                    <span><b>List of Plan</b></span>
                    @can('MD - Admin')
                        <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                            href="/MD/plan/create">
                            <span class="fas fa-plus-circle"></span>&nbsp;Add</a>
                    @endcan
                    <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                        onClick="window.location.reload();">
                        <span class="fas fa-history"></span></a>
                </div>

            </div>
        </div>

        <hr style="width:100%;text-align:center;">
        <div class="card">
            <div class="table-responsive scrollbar">
                <table class="table table-bordered user_datatable" id="example">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Plan</th>
                            <th scope="col">Progress Plan %</th>
                            @can('MD - Admin')
                                <th scope="col">Action</th>
                            @endcan
                        </tr>
                    </thead>

                    <tbody class="list myTable" id="searchUpdateTable">
                        @foreach ($plans as $plan)
                            <tr class="align-middle plan">
                                <td>
                                    <div class="d-flex align-items-center" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-{{ $plan->id }}">
                                        <div class="ms-2"><b>{{ $loop->iteration }}</b></div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-{{ $plan->id }}">
                                        <div class="ms-2"><b>{{ $plan->namaPlan }}</b></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-{{ $plan->id }}">
                                        <div class="ms-2"><b>{{ $plan->progress }}</b></div>
                                    </div>
                                </td>



                                <div class="modal fade" id="error-modal-{{ $plan->id }}" tabindex="-1" role="dialog"
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
                                                            <label class="col-form-label" for="namaPlan">Plan
                                                                Name:</label>
                                                            <label class="form-control"
                                                                disabled="disabled">{{ $plan->namaPlan }}</label>

                                                        </div>
                                                    </form>
                                                </div>
                                            </div><br>

                                        </div>
                                    </div>
                                </div>

                                <td>
                                    <div>
                                        @can('MD - Admin')
                                            <a class="btn btn-primary" style="border-radius: 38px"
                                                href="{{ route('plan.edit', $plan->id) }}"><i class="fas fa-edit"></i>
                                            </a>


                                            <button type="submit" onclick="myFunction({{ $plan->id }})"
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
        function myFunction(id) {


            let alert = "Adakah anda mahu membuang data?";
            if (confirm(alert) == true) {
                $.ajax({
                    method: "DELETE",
                    url: "/MD/plan/" + id,
                    data: {
                        "_token": "{{ csrf_token() }}",
                    }
                });

                alert = "Berjaya di buang!";
                location.href = "/MD/plan";

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
