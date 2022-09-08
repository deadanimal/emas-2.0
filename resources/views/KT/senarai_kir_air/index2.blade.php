@extends('base')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>PELAKSANAAN PROGRAM PEMBASMIAN KEMISKINAN TEGAR KELUARGA MALAYSIA (BMTKM)
            </H2>
        </div>

        <br>

        <div class="col">
            <div class="row align-items-center">
                <div class="col col-lg-8">
                    <span><b>Senarai KIR & AIR Mengikut Negeri, Daerah Dan Kampung</b></span>

                </div>
                <div class="col-12 col-sm-auto ms-auto">
                    <input class="form-control myInput" type="text" placeholder="Carian">
                </div>
            </div>

        </div>


        <hr style="width:100%;text-align:center;">

        <div id="tableExample2" data-list='{"valueNames":["fokus"],"page":10,"pagination":true}'>

            <div class="table-responsive scrollbar">
                <table class="table table-hover table-striped overflow-hidden testing" style="width: 100%">
                    <thead>
                        <tr>
                            <th scope="col">Negeri</th>
                            <th scope="col">Daerah</th>
                            <th scope="col">Kampung</th>

                            <th scope="col">Jumlah KIR</th>
                            <th scope="col">Jumlah AIR</th>

                        </tr>
                    </thead>

                    <tbody class="list" id="myTable">
                        @foreach ($negeris as $negeri)
                            @foreach ($negeri->daerah as $d)
                                @foreach ($d->kampung as $k)
                                    <tr class="align-middle fokus">
                                        <td>
                                            {{ $negeri->name }}
                                        </td>
                                        <td>
                                            {{ $d->name }}
                                        </td>
                                        <td>
                                            {{ $k->name }}
                                        </td>
                                        <td>
                                            {{ $d->jumlah_kir }}
                                        </td>
                                        <td>
                                            {{ $d->jumlah_air }}
                                        </td>
                                    </tr>
                                @endforeach
                            @endforeach
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
    </div>

    <script>
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
