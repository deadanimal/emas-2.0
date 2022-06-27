@extends('base')
@section('content')
    <div class="container">
        <br>

        <div class="mb-4 text-center">
            <H2>PELAN PELAKSANAAN DASAR</H2>
        </div>

        <br>

        <span><b>KPI Nasional</b></span>
        <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white" href="/kpi/create">
            <span class="fas fa-plus-circle"></span>&nbsp;Tambah
        </a>

        <hr style="width:100%;text-align:center;">

        {{-- <div class="row">
            <div class="col">
                <select class="form-select searchKategori" style="width:30%" aria-label="Default select example">
                    <option selected disabled hidden>PILIH OUTCOME NASIONAL</option>
                    @foreach ($list as $list)
                        <option value="{{ $list->id }}">{{ $list->namaOutcome }}</option>
                    @endforeach
                </select>
            </div>

        </div> --}}

        <div class="row g-3">
            <div class="col-sm" style="width:50%">

                <select class="form-select searchBab" >
                    <option selected disabled hidden>PILIH FOKUS UTAMA</option>

                    {{-- @foreach ($list as $list)
                        <option value="{{ $list->id }}">Bab {{ $list->noBab }}. {{ $list->namaBab }}</option>
                    @endforeach --}}

                </select>
            </div>



            <div class="col-sm" style="width:50%">

                <select class="form-select searchKategori" >
                    <option selected disabled hidden>PILIH PERKARA UTAMA</option>

                    {{-- @foreach ($list as $list)
                    <option value="{{ $list->id }}">{{ $list->namaKpi }}</option>
                    @endforeach --}}

                </select>
            </div>

            <div class="col-sm" style="width:50%">

                <select class="form-select searchBab" >
                    <option selected disabled hidden>PILIH TEMA/PEMANGKIN</option>

                    {{-- @foreach ($list as $list)
                        <option value="{{ $list->id }}">Bab {{ $list->noBab }}. {{ $list->namaBab }}</option>
                    @endforeach --}}

                </select>
            </div>

            <div class="col-sm" style="width:50%">

                <select class="form-select searchBab" >
                    <option selected disabled hidden>PILIH BAB</option>

                    {{-- @foreach ($list as $list)
                        <option value="{{ $list->id }}">Bab {{ $list->noBab }}. {{ $list->namaBab }}</option>
                    @endforeach --}}

                </select>
            </div>

            <div class="col-sm" style="width:50%">

                <select class="form-select searchBab" >
                    <option selected disabled hidden>PILIH BIDANG</option>

                    {{-- @foreach ($list as $list)
                        <option value="{{ $list->id }}">Bab {{ $list->noBab }}. {{ $list->namaBab }}</option>
                    @endforeach --}}

                </select>
            </div>

            <div class="col-sm" style="width:50%">

                <select class="form-select searchKategori" >
                        <option selected disabled hidden>PILIH OUTCOME NASIONAL</option>
                        @foreach ($list as $list)
                            <option value="{{ $list->id }}">{{ $list->namaOutcome }}</option>
                        @endforeach
                    </select>
            </div>
        </div>


        <div class="table-responsive scrollbar">
            <table class="table table-hover table-striped overflow-hidden">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody id="tablebody">
                    @foreach ($kpis as $kpi)
                        <tr class="align-middle">
                            <td class="text-nowrap">
                                <div class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#error-modal-{{ $kpi->id }}">

                                    <div class="ms-2"><b>{{ $kpi->namaKpi }}</b></div>
                                </div>
                            </td>

                            <div class="modal fade" id="error-modal-{{ $kpi->id }}" tabindex="-1" role="dialog"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
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
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $kpi->pemangkin->namaTema }}</label>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label">Bab:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $kpi->bab->namaBab }}</label>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label">Bidang Keutamaan:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $kpi->bidang->namaBidang }}</label>
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
                                                        <label class="col-form-label">Bab:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $kpi->bab->namaBab }}</label>
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
                                                        <label class="col-form-label">Peratus Pencapaian:</label>
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
                                                        <label class="col-form-label">Sumber Pengesahan:</label>
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
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <td align="right">
                                <div>
                                    {{-- <form action="{{ route('kpi.destroy', $kpi->id) }}" method="POST"> --}}



                                    <a class="btn btn-warning" style="border-radius: 38px"
                                        href="/kpi1/{{ $kpi->id }}/edit/"><i class="fas fa-pencil-alt"></i>
                                    </a>

                                    <a class="btn btn-primary" style="border-radius: 38px"
                                        href="{{ route('kpi.edit', $kpi->id) }}"><i class="fas fa-edit"></i>
                                    </a>

                                    {{-- @csrf
                                        @method('DELETE') --}}

                                    <button type="submit" onclick="myFunction({{ $kpi->id }})"
                                        class="btn btn-danger" style="border-radius: 38px">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <p id="ppd"></p>

                                    {{-- </form> --}}
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>



    </div>

    <script>
        $('.searchKategori').change(function(e) {
            let val = this.value;
            var kpi = @json($kpis->toArray());
            // console.log(kpi);
            $("#tablebody").html('');
            kpi.forEach(e => {

                if (val == e.outcome_id) {
                    $("#tablebody").append(`
                    <tr class="align-middle">
                            <td class="text-nowrap">
                                <div class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#error-modal-` + e.id + `">
                                    <div class="ms-2"><b>` + e.namaKpi + `</b></div>
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
                                                        <label class="col-form-label">Kpi:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">` + e.namaKpi + `</label>

                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label">Keterangan:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">` + e.keteranganKpi + `</label>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="modal-footer">

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <td align="right">
                                <div>
                                    <form action="/kpi/` + e.id + `" method="POST">

                                        <a class="btn btn-warning" style="border-radius: 38px"
                                        href="/kpi1/` + e.id + `/edit/"><i class="fas fa-pencil-alt"></i>
                                        </a>

                                        <a class="btn btn-primary" style="border-radius: 38px"
                                            href="/kpi/` + e.id + `"><i
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
                    url: "/kpi/" + id,
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
    </script>
@endsection
