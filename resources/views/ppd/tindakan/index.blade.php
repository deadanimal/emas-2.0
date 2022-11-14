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
                    <span><b>Tindakan</b></span>
                    @can('BPKP')
                        <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                            href="/PPD/tindakan/create">
                            <span class="fas fa-plus-circle"></span>&nbsp;Tambah
                        </a>
                    @endcan
                    <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                        onClick="window.location.reload();">
                        <span class="fas fa-history"></span></a>
                </div>

            </div>
        </div>

        <hr style="width:100%;text-align:center;">

        <div class="row g-3" style="width: 100%">
            <div class="col-sm">

                <select class="form-select search">
                    <option selected disabled hidden value="null">PILIH FOKUS UTAMA</option>

                    @foreach ($fokus as $fokus)
                        <option value="{{ $fokus->id }}">{{ $fokus->namaFokus }}</option>
                    @endforeach

                </select>
            </div>



            <div class="col-sm">

                <select class="form-select search">
                    <option selected disabled hidden value="null">PILIH PERKARA UTAMA</option>

                    @foreach ($perkara as $perkara)
                        <option value="{{ $perkara->id }}">{{ $perkara->namaPerkara }}</option>
                    @endforeach

                </select>
            </div>

            <div class="col-sm">

                <select class="form-select search">
                    <option selected disabled hidden value="null">PILIH TEMA/PEMANGKIN</option>

                    @foreach ($pemangkin as $pemangkin)
                        <option value="{{ $pemangkin->id }}">{{ $pemangkin->namaTema }}</option>
                    @endforeach

                </select>
            </div>

            <div class="col-sm">

                <select class="form-select search">
                    <option selected disabled hidden value="null">PILIH BAB</option>

                    @foreach ($bab as $bab)
                        <option value="{{ $bab->id }}">Bab {{ $bab->noBab }}. {{ $bab->namaBab }}</option>
                    @endforeach

                </select>
            </div>

            <div class="col-sm">

                <select class="form-select search">
                    <option selected disabled hidden value="null">PILIH BIDANG</option>

                    @foreach ($bidang as $bidang)
                        <option value="{{ $bidang->id }}">{{ $bidang->namaBidang }}</option>
                    @endforeach

                </select>
            </div>

            <div class="col-sm">
                <select class="form-select search">
                    <option selected disabled hidden value="null">PILIH STRATEGI</option>
                    @foreach ($strategi as $strategi)
                        <option value="{{ $strategi->id }}">{{ $strategi->namaStrategi }}</option>
                    @endforeach
                </select>

            </div>

            <div class="col-sm">
                <select class="form-select search">
                    <option selected disabled hidden value="null">PILIH INISIATIF</option>
                    @foreach ($list as $list)
                        <option value="{{ $list->id }}">{{ $list->namaInisiatif }}</option>
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
                    @foreach ($tindakans as $tindakan)
                        <tr class="align-middle">
                            <td>
                                <div class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#error-modal-{{ $tindakan->id }}">
                                    <div class="ms-2"><b>{{ $tindakan->namaTindakan }}</b></div>
                                </div>
                            </td>

                            <div class="modal fade" id="error-modal-{{ $tindakan->id }}" tabindex="-1" role="dialog"
                                aria-hidden value="null"="true">
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
                                                        <label class="col-form-label">Kementerian/Agensi
                                                            Penyelaras:</label>
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
                                    @can('BPKP')
                                        {{-- <form action="{{ route('tindakan.destroy', $tindakan->id) }}" method="POST"> --}}
                                        <a class="btn btn-warning" style="border-radius: 38px"
                                            href="/PPD/tindakan1/{{ $tindakan->id }}/edit/"><i class="fas fa-pencil-alt"></i>
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
                                    @endcan

                                </div>
                            </td>
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
                url: "/PPD/search_tindakan",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "result": result,
                },
            }).done(function(response) {
                console.log(response);
                $("#searchUpdateTable").html('');
                // $("#searchUpdateTable2").html('');

                response.forEach(el => {
                    $("#searchUpdateTable").append(`
                    <tr class="align-middle">

                        <td>

                            <div class="d-flex align-items-center" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-` + el.id + `">

                                    <div class="ms-2"><b>` + el.namaTindakan + `</b></div>
                            </div>
                        </td>
                        <td align="right">

                            <div>

                                    <a class="btn btn-warning" style="border-radius: 38px"
                                        href="/PPD/tindakan1/` + el.id + `/edit/"><i class="fas fa-pencil-alt"></i>
                                    </a>


                                    <a class="btn btn-primary" style="border-radius: 38px"
                                        href="/PPD/tindakan/` + el.id + `/edit"><i class="fas fa-edit"></i>
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


            let alert = "Adakah anda mahu membuang data?";
            if (confirm(alert) == true) {
                $.ajax({
                    method: "DELETE",
                    url: "/PPD/tindakan/" + id,
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
    <script>
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

        $('#example').dataTable({
            "language": {
                "search": "Carian:",
                "zeroRecords": "Rekod tidak dijumpai",
                "lengthMenu": "Lihat _MENU_ ",
                "info": "Paparan _START_ hingga _END_ daripada _TOTAL_ rekod",
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
