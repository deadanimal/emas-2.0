@extends('base')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>PELAN PELAKSANAAN DASAR</H2>
        </div>

        <br>

        <div class="col">
            <div class="row align-items-center">
                <div class="col col-lg-8">
                    <span><b>Prestasi KPI Nasional</b></span>

                    <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                        onClick="window.location.reload();">
                        <span class="fas fa-history"></span>
                    </a>
                </div>

            </div>

            <hr style="width:100%;text-align:center;"><br>

            <div class="row g-3">
                <div class="col-sm" style="width:50%">

                    <select class="form-select search">
                        <option selected disabled hidden value="null">PILIH FOKUS UTAMA</option>

                        @foreach ($fokusUtama as $fu)
                            <option value="{{ $fu->id }}">{{ $fu->namaFokus }}</option>
                        @endforeach

                    </select>
                </div>



                <div class="col-sm" style="width:50%">

                    <select class="form-select search">
                        <option selected disabled hidden value="null">PILIH PERKARA UTAMA</option>

                        @foreach ($perkaraUtama as $pu)
                            <option value="{{ $pu->id }}">{{ $pu->namaPerkara }}</option>
                        @endforeach

                    </select>
                </div>

                <div class="col-sm" style="width:50%">

                    <select class="form-select search">
                        <option selected disabled hidden value="null">PILIH TEMA/PEMANGKIN</option>

                        @foreach ($temaPemangkin as $tp)
                            <option value="{{ $tp->id }}">{{ $tp->namaTema }}</option>
                        @endforeach

                    </select>
                </div>

                <div class="col-sm" style="width:50%">

                    <select class="form-select search">
                        <option selected disabled hidden value="null">PILIH BAB</option>

                        @foreach ($bab as $b)
                            <option value="{{ $b->id }}">Bab {{ $b->noBab }}. {{ $b->namaBab }}</option>
                        @endforeach

                    </select>
                </div>

                <div class="col-sm" style="width:50%">

                    <select class="form-select search">
                        <option selected disabled hidden value="null">PILIH BIDANG</option>

                        @foreach ($bidang as $b)
                            <option value="{{ $b->id }}">{{ $b->namaBidang }}</option>
                        @endforeach

                    </select>
                </div>

                <div class="col-sm" style="width:50%">

                    <select class="form-select search">
                        <option selected disabled hidden value="null">PILIH OUTCOME NASIONAL</option>
                        @foreach ($outcomes as $list)
                            <option value="{{ $list->id }}">{{ $list->namaOutcome }}</option>
                        @endforeach
                    </select>
                </div>
            </div><br>
            <hr style="width:100%;text-align:center;"><br>


            <div class="table-responsive scrollbar">
                <table class="table table-bordered user_datatable" id="example">
                    <thead>
                        <tr>
                            <th scope="col"></th>
                            <th scope="col"></th>
                        </tr>
                    </thead>
                    <tbody class="list myTable" id="searchUpdateTable">
                        @foreach ($kpis as $kpi)
                            <tr class="align-middle">
                                <td id="searchUpdateTable">
                                    <div class="d-flex align-items-center" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-{{ $kpi->id }}">

                                        <div class="ms-2"><b>{{ $kpi->namaKpi }}</b></div>
                                    </div>
                                </td>



                                <td class="align-right" id="searchUpdateTable2">
                                    <div>
                                        <a class="btn btn-success" style="border-radius: 38px" onclick="Kpi(this)"
                                            href="/prestasi_kpi/{{ $kpi->id }}/edit/"><i
                                                class="fas fa-arrow-alt-circle-right"></i>
                                        </a>

                                    </div>

                                </td>




                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </div>

    <script>
        $(function() {
            $("#pilih1").change(function() {
                if ($(this).val() == "3") {
                    $("#pilih2").show();
                } else {
                    $("#pilih2").hide();
                }
            });
        });

        $(".search").change(function() {
            var result = [];
            jQuery.each($(".search"), function(key, val) {
                result.push(val.value);
            });

            $.ajax({
                method: "POST",
                url: "/search_kpi",
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

                                <div class="ms-2"><b>` + el.namaKpi + `</b></div>
                            </div>
                        </td>

                        <td align="right">

                        <div>
                                <a class="btn btn-success" style="border-radius: 38px"
                                    href="/kpi1/` + el.id + `/edit/"><i class="fas fa-arrow-alt-circle-right"></i>
                                </a>

                                <a class="btn btn-primary" style="border-radius: 38px"
                                    href="/kpi/` + el.id + `/edit"><i class="fas fa-edit"></i>
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

        $(document).ready(function() {
            $('#example').DataTable();
        });

        $('#example').dataTable({
            "language": {
                "search": "Carian:",
                "zeroRecords": "Rekod tidak dijumpai",
                "lengthMenu": "Lihat _MENU_ ",
                "info": "Menunjukkan _START_ dari _END_ daripada _TOTAL_",
                "infoEmpty": "Menunjukkan 0 dari 0 daripada 0",
                "paginate": {
                    "first": "Pertama",
                    "last": "Terakhir",
                    "next": "Seterusnya",
                    "previous": "Sebelumnya"
                },

            }

        });
    </script>
@endsection
