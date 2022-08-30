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

                    <span><b>List of Thrust</b></span>
                    <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                        href="/thrus/create">
                        <span class="fas fa-plus-circle"></span>&nbsp;Add</a>

                    <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                        onClick="window.location.reload();">
                        <span class="fas fa-history"></span>
                    </a>
                </div>
                <div class="col-12 col-sm-auto ms-auto">
                    <input class="form-control myInput" type="text" placeholder="Search">
                </div>
            </div>
        </div>

        <hr style="width:100%;text-align:center;">

        <div class="card">
            <div id="tableExample2" data-list='{"valueNames":["thrus"],"page":5,"pagination":true}'>
                <div class="table-responsive scrollbar">
                    <table class="table table-hover table-striped overflow-hidden">
                        <thead>
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Thrust</th>
                                <th scope="col">Type</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>

                        <tbody class="list myTable" id="searchUpdateTable">
                            @foreach ($thrust as $thru)
                                <tr class="align-middle thrus">
                                    <td id="searchUpdateTable">
                                        <div class="d-flex align-items-center" data-bs-toggle="modal"
                                            data-bs-target="#error-modal-{{ $thru->id }}">
                                            <div class="ms-2"><b>{{ $loop->iteration }}</b></div>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="d-flex align-items-center" data-bs-toggle="modal"
                                            data-bs-target="#error-modal-{{ $thru->id }}">
                                            <div class="ms-2"><b>{{ $thru->namaThrust }}</b></div>
                                        </div>
                                    </td>

                                    <td>
                                        <div class="d-flex align-items-center" data-bs-toggle="modal"
                                            data-bs-target="#error-modal-{{ $thru->id }}">
                                            <div class="ms-2"><b>{{ $thru->category }}</b></div>
                                        </div>
                                    </td>



                                    <div class="modal fade" id="error-modal-{{ $thru->id }}" tabindex="-1"
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
                                                                <label class="col-form-label" for="namaThrust">Thrust
                                                                    Name:</label>
                                                                <label class="form-control"
                                                                    disabled="disabled">{{ $thru->namaThrust }}</label>

                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="col-form-label">Category:</label>
                                                                <label class="form-control"
                                                                    disabled="disabled">{{ $thru->category }}</label>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="col-form-label">Description:</label>
                                                                <label class="form-control"
                                                                    disabled="disabled">{{ $thru->desc }}</label>
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
                                                href="{{ route('thrus.edit', $thru->id) }}"><i class="fas fa-edit"></i>
                                            </a>


                                            <button type="submit" onclick="myFunction({{ $thru->id }})"
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
        function myFunction(id) {


            let alert = "Adakah anda mahu membuang data?";
            if (confirm(alert) == true) {
                $.ajax({
                    method: "DELETE",
                    url: "/thrus/" + id,
                    data: {
                        "_token": "{{ csrf_token() }}",
                    }
                });

                alert = "Berjaya di buang!";
                location.href = "/thrus";

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
