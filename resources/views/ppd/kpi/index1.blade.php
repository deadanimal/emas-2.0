@extends('base')
@section('content')

    <div class="container">
        <div class="mb-4 text-center">
            <H2>PELAN PELAKSANAAN DASAR</H2>
        </div>
        <br>

        @can('BPKP')
            <div class="mb-3 row">
                <div class="row align-items-center">
                    <label class="col-sm-2 col-form-label" for="tema_id">Tema/Pemangkin Dasar</label>
                    <div class="col-sm-10" style="width:40%">
                        <select class="form-control search" name="tema_id">
                            <option selected disabled hidden value="null">Sila Pilih</option>

                            @foreach ($tema as $tema)
                                <option value="{{ $tema->id }}">{{ $tema->namaTema }}</option>
                            @endforeach

                        </select>
                    </div>
                    <label class="col-sm-2 col-form-label" for="bab_id">Sukuan Tahun</label>
                    <div class="col-sm-10" style="width:20%">
                        <input class="form-control" type="text" placeholder="Tulis Tahun">
                    </div>
                </div>
            </div>

            <div class="mb-3 row">
                <div class="row align-items-center">
                    <label class="col-sm-2 col-form-label" for="bab_id">Bab</label>
                    <div class="col-sm-10" style="width:40%">
                        <select class="form-control search" name="bab_id">
                            <option selected disabled hidden value="null">Sila Pilih</option>

                            @foreach ($bab as $bab)
                                <option value="{{ $bab->id }}">{{ $bab->namaBab }}</option>
                            @endforeach

                        </select>
                    </div>
                    <label class="col-sm-2 col-form-label" for="bab_id">Tahun</label>
                    <div class="col-sm-10" style="width:20%">
                        <input class="form-control myInput" type="text" placeholder="Tulis Tahun">
                    </div>
                </div>
            </div>


            <div class="mb-3 row">
                <div class="row align-items-center">
                    <label class="col-sm-2 col-form-label" for="bidang_id">Bidang Keutamaan</label>
                    <div class="col-sm-10" style="width:40%">
                        <select class="form-control search" name="bidang_id">
                            <option selected disabled hidden value="null">Sila Pilih</option>

                            @foreach ($bidang as $bidang)
                                <option value="{{ $bidang->id }}">{{ $bidang->namaBidang }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>
            </div>

            <div class="mb-3 row">
                <div class="row align-items-center">
                    <label class="col-sm-2 col-form-label" for="bidang_id">Status KPI</label>
                    <div class="col-sm-10" style="width:40%">
                        <select class="form-control" name="bidang_id">
                            <option selected disabled hidden>Sila Pilih</option>

                            {{-- @foreach ($listBidang as $listBidang)
                        <option value="{{ $listBidang->id }}">{{ $listBidang->namaBidang }}</option>
                    @endforeach --}}

                        </select>
                    </div>
                </div>
            </div>

            <div class="mb-3 row">
                <div class="row align-items-center">
                    <label class="col-sm-2 col-form-label" for="bidang_id">Kementerian/Bahagian </label>
                    <div class="col-sm-10" style="width:40%">
                        <select class="form-control" name="bidang_id">
                            <option selected disabled hidden>Sila Pilih</option>

                            {{-- @foreach ($listBidang as $listBidang)
                        <option value="{{ $listBidang->id }}">{{ $listBidang->namaBidang }}</option>
                    @endforeach --}}

                        </select>
                    </div>
                </div>
            </div>
        @endcan


        <div id="tableExample2" data-list='{"valueNames":["kpi"],"page":6,"pagination":true}'>
            <div class="card mx-ncard my-ncard shadow-none">
                <div class="card-body">
                    <div class="table-responsive scrollbar">
                        <table class="table mb-0" style="width: 400%" value="null">
                            <thead class="text-black bg-200">
                                <tr>
                                    @can('BPKP')
                                        <th class="align-middle">User</th>
                                    @endcan
                                    <th class="align-middle">KPI Nasional</th>
                                    <th class="align-middle">Tema </th>
                                    <th class="align-middle">Jenis KPI</th>
                                    <th class="align-middle">Prestasi KPI</th>
                                    <th class="align-middle">Unit</th>
                                    <th class="align-middle">Pencapaian </th>
                                    <th class="align-middle">Sasaran</th>
                                    <th class="align-middle">Had Varian</th>
                                    <th class="align-middle">Had Toleransi</th>
                                    <th class="align-middle">Kekerapan </th>
                                    <th class="align-middle">Wajaran (%)</th>
                                    <th class="align-middle">Peratus Pencapaian (%)</th>
                                    <th class="align-middle">Tahun Asas</th>
                                    <th class="align-middle">Peratus Pencapaian Tahun Asas (%) </th>
                                    <th class="align-middle">Sasaran 2021</th>
                                    <th class="align-middle">Sasaran 2022</th>
                                    <th class="align-middle">Sasaran 2023</th>
                                    <th class="align-middle">Sasaran 2024</th>
                                    <th class="align-middle">Sasaran 2025</th>
                                    <th class="align-middle">Sumber Data</th>
                                    <th class="align-middle">Sumber Pengesahan</th>
                                    @can('KementerianPPD', 'BahagianPPD', 'AgensiPPD')
                                        <th class="align-middle">Status</th>
                                    @endcan
                                    @can('BPKP')
                                        <th class="align-middle">Tindakan</th>
                                    @endcan
                                </tr>
                            </thead>
                            <tbody class="list myTable" id="searchUpdateTable">
                                @foreach ($kpis as $kpi)
                                    <tr class="kpi">
                                        @can('BPKP')
                                            <td class="align-middle">{{ $loop->iteration }}. {{ $kpi->user->name }}</td>
                                        @endcan
                                        <td class="align-middle">{{ $kpi->namaKpi }}</td>
                                        <td class="align-middle">{{ $kpi->pemangkin->namaTema ?? '' }}</td>
                                        <td class="align-middle">{{ $kpi->jenisKpi }}</td>
                                        <td class="align-middle">{{ $kpi->prestasiKpi }}</td>
                                        <td class="align-middle">{{ $kpi->unitUkuran }}</td>
                                        <td class="align-middle">{{ $kpi->pencapaian }}</td>
                                        <td class="align-middle">{{ $kpi->sasaran }}</td>
                                        <td class="align-middle">{{ $kpi->hadVarian }}</td>
                                        <td class="align-middle">{{ $kpi->hadToleransi }}</td>
                                        <td class="align-middle">{{ $kpi->kekerapan }}</td>
                                        <td class="align-middle">{{ $kpi->wajaran }}</td>
                                        <td class="align-middle">{{ $kpi->peratusPencapaian }}</td>
                                        <td class="align-middle">{{ $kpi->tahunAsas }}</td>
                                        <td class="align-middle">{{ $kpi->peratusPencapaianAsas }}</td>
                                        <td class="align-middle">{{ $kpi->sasaran2021 }}</td>
                                        <td class="align-middle">{{ $kpi->sasaran2022 }}</td>
                                        <td class="align-middle">{{ $kpi->sasaran2023 }}</td>
                                        <td class="align-middle">{{ $kpi->sasaran2024 }}</td>
                                        <td class="align-middle">{{ $kpi->sasaran2025 }}</td>
                                        <td class="align-middle">{{ $kpi->sumberData }}</td>
                                        <td class="align-middle">{{ $kpi->sumberPengesahan }}</td>
                                        @can('BPKP')
                                            <td class="align-middle">
                                                <div class="col-auto ms-auto">
                                                    @if ($kpi->lulus == 1 && $kpi->ditolak == 0)
                                                        <span class="btn btn-primary" disabled>Lulus</span>
                                                    @elseif ($kpi->lulus == 0 && $kpi->ditolak == 1)
                                                        <span class="btn btn-danger" disabled>Ditolak</span>
                                                    @else
                                                        <form action="/kpi/lulus/{{ $kpi->id }}" method="post">
                                                            @csrf
                                                            @method('POST')
                                                            <button type="submit" class="btn btn-success">Lulus</button>
                                                        </form>
                                                        <form action="{{ route('kpi.ditolak', $kpi->id) }}" method="post">
                                                            @csrf
                                                            @method('POST')
                                                            <button type="submit" class="btn btn-danger">Tolak</button>
                                                        </form>
                                                    @endif
                                                </div>
                                            </td>
                                        @else
                                            <td class="align-middle">
                                                <div class="col-auto ms-auto">
                                                    @if ($kpi->lulus == 1 && $kpi->ditolak == 0)
                                                        <span class="btn btn-primary" disabled>Lulus</span>
                                                    @elseif ($kpi->lulus == 0 && $kpi->ditolak == 1)
                                                        <span class="btn btn-danger" disabled>Ditolak</span>
                                                    @else
                                                        <span class="btn btn-info" disabled>Dalam Semakan</span>
                                                    @endif
                                                </div>
                                            </td>
                                        @endcan
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
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

@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
    integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
</script>
{{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"></script> --}}


<script>
    $(".search").change(function() {
        var result = [];
        var iteration = 1;

        jQuery.each($(".search"), function(key, val) {
            result.push(val.value);
        });

        $.ajax({
            method: "POST",
            url: "/search_kpi1",
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
                            <tr>
                                    <td class="align-middle">` + iteration++ + `. ` + el.namaKpi + `</td>

                                    <td class="align-middle"> ` + el.namaKpi + `</td>
                                    <td class="align-middle">{{ $kpi->pemangkin->namaTema ?? '' }}</td>
                                    <td class="align-middle">` + el.jenisKpi + `</td>
                                    <td class="align-middle">` + el.prestasiKpi + `</td>
                                    <td class="align-middle">` + el.unitUkuran + `</td>
                                    <td class="align-middle">` + el.pencapaian + `</td>
                                    <td class="align-middle">` + el.sasaran + `</td>
                                    <td class="align-middle">` + el.hadVarian + `</td>
                                    <td class="align-middle">` + el.hadToleransi + `</td>
                                    <td class="align-middle">` + el.kekerapan + `</td>
                                    <td class="align-middle">` + el.wajaran + `</td>
                                    <td class="align-middle">` + el.peratusPencapaian + `</td>
                                    <td class="align-middle">` + el.tahunAsas + `</td>
                                    <td class="align-middle">` + el.peratusPencapaianAsas + `</td>
                                    <td class="align-middle">` + el.sasaran2021 + `</td>
                                    <td class="align-middle">` + el.sasaran2022 + `</td>
                                    <td class="align-middle">` + el.sasaran2023 + `</td>
                                    <td class="align-middle">` + el.sasaran2024 + `</td>
                                    <td class="align-middle">` + el.sasaran2025 + `</td>
                                    <td class="align-middle">` + el.sumberData + `</td>
                                    <td class="align-middle">` + el.sumberPengesahan + `</td>
                            </tr>

                    `);

                // $("#searchUpdateTable2").append(`
                //     <div>

                //         <a class="btn btn-primary" style="border-radius: 38px"
                //             href="/kpi1/` + el.id + `/edit"><i class="fas fa-edit"></i>
                //         </a>

                //         <button type="submit" onclick="myFunction({{ `+el.id+` }})" class="btn btn-danger"
                //             style="border-radius: 38px">
                //             <i class="fas fa-trash"></i>
                //         </button>
                //     </div>
                // `);
            });
        });


    });

    // only if pressed a non-active button
    $("button", "#toggle-lulus").click(function(event) {
        var $btn = $(event.currentTarget)

        // only if not already active
        if (!$btn.hasClass('active')) {
            // you can switch the button as soon as clicked or in AJAX callback
            changeActiveButton($btn)

            $.post('https://jsonplaceholder.typicode.com/todos/1', {
                lang: $btn.text()
            }, function(data) {
                // do whatever you want with your API callback data
            })
        }
    })

    function changeActiveButton($btn) {
        // reset active & button type on previous button
        $("button.active", "#toggle-lulus")
            .removeClass('btn-primary active')
            .addClass('btn-default')

        // set active & button type on current button
        $btn
            .removeClass('btn-default')
            .addClass('btn-primary active')
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
