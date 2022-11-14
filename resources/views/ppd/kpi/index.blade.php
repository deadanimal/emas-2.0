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
                    <span><b>KPI Nasional</b></span>
                    @can('BPKP')
                        <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                            href="/PPD/kpi/create">
                            <span class="fas fa-plus-circle"></span>&nbsp;Tambah
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
                    @foreach ($list as $list)
                        <option value="{{ $list->id }}">{{ $list->namaOutcome }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <hr>

        <div class="table-responsive scrollbar">
            <table class="table table-bordered" id="example">
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
                                    @can('BPKP')
                                        <a class="btn btn-warning" style="border-radius: 38px" onclick="Kpi(this)"
                                            href="kpi1/{{ $kpi->id }}/edit/"><i class="fas fa-pencil-alt"></i>
                                        </a>


                                        <a type="button" class="btn btn-primary" style="border-radius: 38px"
                                            href="{{ route('kpi.edit', $kpi->id) }}"><i class="fas fa-edit"></i>
                                        </a>

                                        <button type="submit" onclick="myFunction({{ $kpi->id }})" class="btn btn-danger"
                                            style="border-radius: 38px">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    @endcan
                                </div>

                            </td>



                            <div class="modal fade" id="error-modal-{{ $kpi->id }}" tabindex="-1" role="dialog"
                                aria-hidden value="null"="true">
                                <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 1100px">
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
                                                        <label class="col-form-label">Kpi:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $kpi->namaKpi }}</label>

                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label">Keterangan:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $kpi->keteranganKpi }}</label>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label">Tema:</label>
                                                        @if ($kpi->pemangkin != null)
                                                            <label class="form-control"
                                                                disabled="disabled">{{ $kpi->pemangkin->namaTema }}</label>
                                                        @else
                                                            <label>Tema telah dipadam</label>
                                                        @endif
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label">Bab:</label>
                                                        @if ($kpi->bab != null)
                                                            <label class="form-control"
                                                                disabled="disabled">{{ $kpi->bab->namaBab }}</label>
                                                        @else
                                                            <label>Bab telah dipadam</label>
                                                        @endif
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label">Bidang Keutamaan:</label>
                                                        @if ($kpi->bidang != null)
                                                            <label class="form-control"
                                                                disabled="disabled">{{ $kpi->bidang->namaBidang }}</label>
                                                        @else
                                                            <label>Bidang Keutamaan telah dipadam</label>
                                                        @endif
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label">Outcome Nasional:</label>
                                                        @if ($kpi->outcome != null)
                                                            <label class="form-control"
                                                                disabled="disabled">{{ $kpi->outcome->namaOutcome }}</label>
                                                        @else
                                                            <label>Outcome telah dipadam</label>
                                                        @endif
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label">Jenis KPI:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $kpi->jenisKpi }}</label>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label">Prestasi Kpi:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $kpi->prestasiKpi }}</label>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label">Unit:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $kpi->unitUkuran }}</label>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label">Pencapaian:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $kpi->pencapaian }}</label>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label">Sasaran:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $kpi->sasaran }}</label>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label">Had Varian:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $kpi->hadVarian }}</label>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label">Had Toleransi:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $kpi->hadToleransi }}</label>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label">Kekerapan:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $kpi->kekerapan }}</label>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label">Wajaran:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $kpi->wajaran }}</label>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label">Peratus
                                                            Pencapaian:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $kpi->peratusPencapaian }}</label>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label">Tahun Asas:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $kpi->tahunAsas }}</label>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label">Peratus Pencapaian Tahun
                                                            Asas:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $kpi->peratusPencapaianAsas }}</label>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label">Sumber Data:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $kpi->sumberData }}</label>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label">Sasaran 2021:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $kpi->sasaran2021 }}</label>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label">Sumber
                                                            Pengesahan:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $kpi->sumberPengesahan }}</label>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label">Sasaran 2022:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $kpi->sasaran2022 }}</label>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label">Sasaran 2023:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $kpi->sasaran2023 }}</label>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label">Sasaran 2024:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $kpi->sasaran2024 }}</label>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label">Sasaran 2025:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $kpi->sasaran2025 }}</label>
                                                    </div>


                                                </form>
                                                <br>

                                                {{-- <a href="javascript:window.print();">Print Page</a> --}}

                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>


    <script>
        $(".search").change(function() {
            var result = [];
            jQuery.each($(".search"), function(key, val) {
                result.push(val.value);
            });

            $.ajax({
                method: "POST",
                url: "/PPD/search_kpi",
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
                                                          ` +
                        @can('BPKP')
                            `
                                <a class="btn btn-warning" style="border-radius: 38px"
                                    href="/PPD/kpi1/` + el.id + `/edit/"><i class="fas fa-pencil-alt"></i>
                                </a>

                                <a class="btn btn-primary" style="border-radius: 38px"
                                    href="/PPD/kpi/` + el.id + `/edit"><i class="fas fa-edit"></i>
                                </a>

                                <button type="submit" onclick="myFunction({{ `+el.id+` }})" class="btn btn-danger"
                                    style="border-radius: 38px">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </div>
                                                ` +
                        @endcan
                        `
                        </td>

                    </tr>



                    `);

                });
            });


        });

        function myFunction(id) {


            let alert = "Adakah anda mahu membuang data?";
            if (confirm(alert) == true) {
                $.ajax({
                    method: "DELETE",
                    url: "/PPD/kpi/" + id,
                    data: {
                        "_token": "{{ csrf_token() }}",
                    }
                });

                alert = "Berjaya di buang!";
                location.reload();

            } else {
                alert("Dibatalkan!");
            }
            document.getElementById("ppd").innerHTML = text;
        }

        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                ]


            });
        });
    </script>
@endsection
