@extends('base')
@section('content')
    <div class="container">
        <br>

        <div class="mb-4 text-center">
            <H2>PELAN PELAKSANAAN DASAR</H2>
        </div>

        <br>

        <span><b>Tindakan</b></span>
        <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white" href="/tindakan/create">
            <span class="fas fa-plus-circle"></span>&nbsp;Tambah
        </a>

        <hr style="width:100%;text-align:center;">

        <div class="row g-3" style="width: 100%">
            <div class="col-sm">

                <select class="form-select searchBab">
                    <option selected disabled hidden>PILIH FOKUS UTAMA</option>

                    {{-- @foreach ($list as $list)
                        <option value="{{ $list->id }}">Bab {{ $list->noBab }}. {{ $list->namaBab }}</option>
                    @endforeach --}}

                </select>
            </div>



            <div class="col-sm">

                <select class="form-select searchKategori">
                    <option selected disabled hidden>PILIH PERKARA UTAMA</option>

                    {{-- @foreach ($list as $list)
                    <option value="{{ $list->id }}">{{ $list->namaKpi }}</option>
                    @endforeach --}}

                </select>
            </div>

            <div class="col-sm">

                <select class="form-select searchBab">
                    <option selected disabled hidden>PILIH TEMA/PEMANGKIN</option>

                    {{-- @foreach ($list as $list)
                        <option value="{{ $list->id }}">Bab {{ $list->noBab }}. {{ $list->namaBab }}</option>
                    @endforeach --}}

                </select>
            </div>

            <div class="col-sm">

                <select class="form-select searchBab">
                    <option selected disabled hidden>PILIH BAB</option>

                    {{-- @foreach ($list as $list)
                        <option value="{{ $list->id }}">Bab {{ $list->noBab }}. {{ $list->namaBab }}</option>
                    @endforeach --}}

                </select>
            </div>

            <div class="col-sm">

                <select class="form-select searchBab">
                    <option selected disabled hidden>PILIH BIDANG</option>

                    {{-- @foreach ($list as $list)
                        <option value="{{ $list->id }}">Bab {{ $list->noBab }}. {{ $list->namaBab }}</option>
                    @endforeach --}}

                </select>
            </div>

            <div class="col-sm">
                <select class="form-select searchKategori">
                    <option selected disabled hidden>PILIH STRATEGI</option>
                    {{-- @foreach ($list as $list)
                        <option value="{{ $list->id }}">{{ $list->namaStrategi }}</option>
                    @endforeach --}}
                </select>

            </div>

            <div class="col-sm">
                <select class="form-select searchKategori">
                    <option selected disabled hidden>PILIH INISIATIF</option>
                    @foreach ($list as $list)
                        <option value="{{ $list->id }}">{{ $list->namaInisiatif }}</option>
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
                    @foreach ($tindakans as $tindakan)
                        <tr class="align-middle">
                            <td class="text-nowrap">
                                <div class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#error-modal-{{ $tindakan->id }}">
                                    <div class="ms-2"><b>{{ $tindakan->namaTindakan }}</b></div>
                                </div>
                            </td>

                            <div class="modal fade" id="error-modal-{{ $tindakan->id }}" tabindex="-1" role="dialog"
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
                                                        <label class="col-form-label">Tindakan:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $tindakan->namaTindakan }}</label>

                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label">Keterangan:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $tindakan->keteranganTindakan }}</label>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label">Kementerian/Agensi Penyelaras:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $tindakan->kementerian_penyelaras }}</label>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label">Kementerian/Agensi Pelaksana
                                                            :</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $tindakan->kementerian_pelaksana }}</label>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label">Tempoh Siap:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $tindakan->tempohSiap }}</label>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label">Kategori Sasaran
                                                            :</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $tindakan->kategoriSasaran }}</label>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label">Status Pelaksanaan 2022
                                                            :</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $tindakan->statusPelaksanaan }}</label>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label">Catatan 2022
                                                            :</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $tindakan->catatan2022 }}</label>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label">Sasaran 2022
                                                            :</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $tindakan->sasaran2022 }}</label>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label">Pencapaian 2022
                                                            :</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $tindakan->pencapaian2022 }}</label>
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
                                    {{-- <form action="{{ route('tindakan.destroy', $tindakan->id) }}" method="POST"> --}}
                                    <a class="btn btn-warning" style="border-radius: 38px"
                                        href="/tindakan1/{{ $tindakan->id }}/edit/"><i class="fas fa-pencil-alt"></i>
                                    </a>

                                    <a class="btn btn-primary" style="border-radius: 38px"
                                        href="{{ route('tindakan.edit', $tindakan->id) }}"><i class="fas fa-edit"></i>
                                    </a>

                                    {{-- @csrf
                                        @method('DELETE') --}}
                                    <button type="submit" onclick="myFunction({{ $tindakan->id }})"
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
            var tindakan = @json($tindakans->toArray());
            $("#tablebody").html('');
            tindakan.forEach(e => {

                if (val == e.inisiatif_id) {
                    $("#tablebody").append(`
                    <tr class="align-middle">
                            <td class="text-nowrap">
                                <div class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#error-modal-` + e.id + `">
                                    <div class="ms-2"><b>` + e.namaTindakan + `</b></div>
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
                                                        <label class="col-form-label">Tindakan:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">` + e.namaTindakan + `</label>

                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label">Keterangan:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">` + e.keteranganTindakan + `</label>
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
                                    <form action="/tindakan/` + e.id + `" method="POST">

                                        <a class="btn btn-warning" style="border-radius: 38px"
                                        href="/tindakan1/` + e.id + `/edit/"><i class="fas fa-pencil-alt"></i>
                                        </a>

                                        <a class="btn btn-primary" style="border-radius: 38px"
                                            href="/tindakan/` + e.id + `"><i
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
                    url: "/tindakan/" + id,
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
