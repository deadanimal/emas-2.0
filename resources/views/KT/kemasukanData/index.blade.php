@extends('base')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>PELAKSANAAN PROGRAM PEMBASMIAN
                KEMISKINAN TEGAR KELUARGA MALAYSIA
                (BMTKM)</H2>
        </div>

        <br>

        <div class="col">
            <div class="row align-items-center">
                <div class="col col-lg-8">
                    <span><b>Senarai Kemasukan Data KIR & AIR</b></span>


                    <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                        onClick="window.location.reload();">
                        <span class="fas fa-history"></span></a>
                </div>
                <div class="col-12 col-sm-auto ms-auto">
                    <input class="form-control" id="myInput" type="text" placeholder="Carian">
                </div>
            </div>
        </div>

        <br>
        <div id="tableExample2" data-list='{"valueNames":["senarai"],"page":20,"pagination":true}'>

            <div class="table-responsive scrollbar">
                <table class="table table-hover table-striped overflow-hidden testing" style="width: 100%">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">No.</th>
                            <th scope="col">Kategori</th>
                            <th colspan="1">Nama</th>
                            <th scope="col">No Kad Pengenalan</th>
                            <th colspan="1">Status</th>
                            <th scope="col">Tindakan</th>
                        </tr>
                    </thead>

                    <tbody class="list" id="myTable">
                        @foreach ($profils as $profil)
                            <tr class="align-middle senarai">
                                <td>{{ $loop->iteration }}.</td>
                                <td>{{ $profil->kategori }}</td>
                                <td>{{ $profil->nama }}</td>
                                <td>{{ $profil->no_kad_pengenalan }}</td>
                                <td>{{ $profil->status_miskin }}</td>

                                <td>
                                    <a class="btn btn-primary" style="border-radius: 38px"
                                        href="/kemasukanData/{{ $profil->id }}/edit/"><i class="fas fa-edit"></i>
                                    </a>

                                    <form action="/kemasukanData/{{ $profil->id }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" style="border-radius: 38px">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        <p id="ppd"></p>
                                    </form>

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
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
        <script src="vendors/draggable/draggable.bundle.legacy.js"></script>


        <script>
            // function myFunction(id) {


            //     let alert = "Adakah anda mahu membuang data?";
            //     if (confirm(alert) == true) {
            //         $.ajax({
            //             method: "DELETE",
            //             url: "/kemasukanData/" + id,
            //             data: {
            //                 "_token": "{{ csrf_token() }}",
            //             }
            //         });

            //         alert = "Berjaya di buang!";
            //         location.href = "/kemasukanData";

            //     } else {
            //         alert("Dibatalkan!");
            //     }
            //     document.getElementById("ppd").innerHTML = text;
            // }

            $(document).ready(function() {
                $("#myInput").on("keyup", function() {
                    var value = $(this).val().toLowerCase();
                    $("#myTable tr").filter(function() {
                        $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                    });
                });
            });
        </script>
    @endsection
