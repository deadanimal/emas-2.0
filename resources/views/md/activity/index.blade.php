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
                    <span><b>List of Activities</b></span>
                    @can('MD - Admin')
                        <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                            href="/MD/activity/create">
                            <span class="fas fa-plus-circle"></span>&nbsp;Add
                        </a>
                    @endcan

                    <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                        onClick="window.location.reload();">
                        <span class="fas fa-history"></span>
                    </a>
                </div>

            </div>
        </div>

        <hr style="width:100%;text-align:center;">

        <div class="row g-3">
            <div class="col-sm" style="width:50%">

                <select class="form-select search">
                    <option selected disabled hidden value="null">INITIATIVE</option>

                    @foreach ($initiatives as $initiative)
                        <option value="{{ $initiative->id }}">{{ $initiative->namaInitiative }}</option>
                    @endforeach

                </select>
            </div>



            <div class="col-sm" style="width:50%">

                <select class="form-select search">
                    <option selected disabled hidden value="null">PROGRAM</option>

                    @foreach ($programs as $program)
                        <option value="{{ $program->id }}">{{ $program->namaProgram }}</option>
                    @endforeach

                </select>
            </div>

            <div class="col-sm" style="width:50%">

                <select class="form-select search">
                    <option selected disabled hidden value="null">PLAN</option>

                    @foreach ($plans as $plan)
                        <option value="{{ $plan->id }}">{{ $plan->namaPlan }}</option>
                    @endforeach

                </select>
            </div>
        </div>

        <hr style="width:100%;text-align:center;">

        <div class="card">
            <div class="table-responsive scrollbar">
                <table class="table table-bordered user_datatable" id="example">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Activities</th>
                            <th scope="col">Weightage Progress (%)</th>
                            @can('MD - Admin')
                                <th scope="col">Action</th>
                            @endcan
                        </tr>
                    </thead>

                    <tbody class="list myTable" id="searchUpdateTable">
                        @foreach ($activities as $activity)
                            <tr class="align-middle">
                                <td id="searchUpdateTable">
                                    <div class="d-flex align-items-center" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-{{ $activity->id }}">
                                        <div class="ms-2"><b>{{ $loop->iteration }}</b></div>
                                    </div>
                                </td>

                                <td>
                                    <div class="d-flex align-items-center" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-{{ $activity->id }}">
                                        <div class="ms-2"><b>{{ $activity->namaActivity }}</b></div>
                                    </div>
                                </td>
                                <td>
                                    <div class="d-flex align-items-center" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-{{ $activity->id }}">
                                        <div class="ms-2"><b>{{ $activity->weightage_progress }}</b></div>
                                    </div>
                                </td>


                                <div class="modal fade" id="error-modal-{{ $activity->id }}" tabindex="-1" role="dialog"
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
                                                            <label class="col-form-label" for="namaActivity">Activities
                                                                Name:</label>
                                                            <label class="form-control"
                                                                disabled="disabled">{{ $activity->namaActivity }}</label>

                                                        </div>
                                                        <br>

                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                @can('MD - Admin')
                                    <td class="align-right">
                                        <div>
                                            <a class="btn btn-warning" style="border-radius: 38px"
                                                href="activity/{{ $activity->id }}/progress/"><i class="fas fa-plus"></i>
                                            </a>

                                            <a class="btn btn-primary" style="border-radius: 38px"
                                                href="{{ route('activity.edit', $activity->id) }}"><i class="fas fa-edit"></i>
                                            </a>


                                            <button type="submit" onclick="myFunction({{ $activity->id }})"
                                                class="btn btn-danger" style="border-radius: 38px">
                                                <i class="fas fa-trash-alt"></i>
                                            </button>
                                            <p id="ppd"></p>

                                        </div>
                                    </td>
                                @endcan

                            </tr>
                        @endforeach

                    </tbody>

                </table>
            </div><br>
        </div>

    </div>

    <script>
        $(".search").change(function() {
            var result = [];
            var iteration = 1;

            jQuery.each($(".search"), function(key, val) {
                result.push(val.value);
            });

            $.ajax({
                method: "POST",
                url: "/MD/search_activity",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "result": result,
                },
            }).done(function(response) {
                console.log(response);
                $("#searchUpdateTable").html('');

                response.forEach(el => {
                    $("#searchUpdateTable").append(`
                    <tr class="align-middle">

                        <td>
                                <div class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#error-modal-` + el.id + `">
                                    <div class="ms-2"><b>` + iteration++ + `</b></div>
                                </div>
                        </td>

                        <td>
                            <div class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#error-modal-` + el.id + `">

                                <div class="ms-2"><b>` + el.namaActivity + `</b></div>
                            </div>
                        </td>

                        <td>
                            <div class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#error-modal-` + el.id + `">

                                <div class="ms-2"><b>` + el.weightage_progress + `</b></div>
                            </div>
                        </td>

                        <td>

                            <div>

                                <a class="btn btn-primary" style="border-radius: 38px"
                                    href="/activity/` + el.id + `/edit"><i class="fas fa-edit"></i>
                                </a>

                                <button type="submit" onclick="myFunction({{ `+el.id+` }})" class="btn btn-danger"
                                    style="border-radius: 38px">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                        </td>

                    </tr>



                    `);

                });
            });


        });

        function myFunction(id) {


            let alert = "Adakah anda mahu menghapuskan data?";
            if (confirm(alert) == true) {
                $.ajax({
                    method: "DELETE",
                    url: "/MD/activity/" + id,
                    data: {
                        "_token": "{{ csrf_token() }}",
                    }
                });

                alert = "Berjaya di buang!";
                location.href = "/MD/activity";

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
