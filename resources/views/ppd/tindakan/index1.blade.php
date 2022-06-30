@extends('base')
@section('content')

    <div class="container">
        <br>
        <div class="mb-4 text-center">
            <H2>PELAN PELAKSANAAN DASAR</H2>
        </div>
        <br>

        @role('admin')
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="tema_id">Tema/Pemangkin Dasar</label>
                <div class="col-sm-10" style="width:40%">
                    <select class="form-control" name="tema_id">
                        <option selected disabled hidden>Sila Pilih</option>

                        @foreach ($tema as $tema)
                            <option value="{{ $tema->id }}">{{ $tema->namaTema }}</option>
                        @endforeach

                    </select>
                </div>

                <label class="col-sm-2 col-form-label" for="bab_id">Sukuan Tahun</label>
                <div class="col-sm-10" style="width:20%">
                    <select class="form-control" name="bab_id">
                        <option selected disabled hidden>Sila Pilih</option>

                        {{-- @foreach ($listBab as $listBab)
                        <option value="{{ $listBab->id }}">Bab {{ $listBab->noBab }}. {{ $listBab->namaBab }} </option>
                    @endforeach --}}

                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="bab_id">Bab</label>
                <div class="col-sm-10" style="width:40%">
                    <select class="form-control" name="bab_id">
                        <option selected disabled hidden>Sila Pilih</option>

                        @foreach ($bab as $bab)
                            <option value="{{ $bab->id }}">Bab {{ $bab->noBab }}. {{ $bab->namaBab }}</option>
                        @endforeach

                    </select>
                </div>

                <label class="col-sm-2 col-form-label" for="outcome_id">Tahun</label>
                <div class="col-sm-10" style="width:20%">
                    <select class="form-control" name="outcome_id">
                        <option selected disabled hidden>SILA PILIH</option>

                        {{-- @foreach ($list as $list)
                        <option value="{{ $list->id }}">{{ $list->namaOutcome }}</option>
                    @endforeach --}}

                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="bidang_id">Bidang Keutamaan</label>
                <div class="col-sm-10" style="width:40%">
                    <select class="form-control" name="bidang_id">
                        <option selected disabled hidden>Sila Pilih</option>

                        @foreach ($bidang as $bidang)
                            <option value="{{ $bidang->id }}">{{ $bidang->namaBidang }}</option>
                        @endforeach

                    </select>
                </div>
            </div>

            <div class="mb-3 row">
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

            <div class="mb-3 row">
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
        @endrole



        <div class="card mx-ncard my-ncard shadow-none">
            <div class="card-body">
                <div class="table-responsive scrollbar">
                    <table class="table mb-0" style="width: 400%">
                        <thead class="text-black bg-200">
                            <tr>
                                @role('admin')
                                    <th class="align-middle">User</th>
                                @endrole
                                <th class="align-middle">Tindakan</th>
                                <th class="align-middle">Jenis Tindakan </th>
                                <th class="align-middle">Prestasi Tindakan</th>
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
                                @role('bahagian')
                                    <th class="align-middle">Status</th>
                                @endrole
                                @role('admin')
                                    <th class="align-middle">Tindakan</th>
                                @endrole
                            </tr>
                        </thead>
                        <tbody id="bulk-select-body">
                            @foreach ($tindakans as $tindakan)
                                <tr>
                                    @role('admin')
                                        <td class="align-middle">{{ $loop->iteration }}. {{ $tindakan->user->name }}</td>
                                    @endrole
                                    <td class="align-middle">{{ $tindakan->namaTindakan }}</td>
                                    {{-- <td class="align-middle">{{ $tindakan->pemangkin->namaTema ?? '' }}</td> --}}
                                    <td class="align-middle">{{ $tindakan->jenisTindakan }}</td>
                                    <td class="align-middle">{{ $tindakan->prestasiTindakan }}</td>
                                    <td class="align-middle">{{ $tindakan->unitUkuran }}</td>
                                    <td class="align-middle">{{ $tindakan->pencapaian }}</td>
                                    <td class="align-middle">{{ $tindakan->sasaran }}</td>
                                    <td class="align-middle">{{ $tindakan->hadVarian }}</td>
                                    <td class="align-middle">{{ $tindakan->hadToleransi }}</td>
                                    <td class="align-middle">{{ $tindakan->kekerapan }}</td>
                                    <td class="align-middle">{{ $tindakan->wajaran }}</td>
                                    <td class="align-middle">{{ $tindakan->peratusPencapaian }}</td>
                                    <td class="align-middle">{{ $tindakan->tahunAsas }}</td>
                                    <td class="align-middle">{{ $tindakan->peratusPencapaianAsas }}</td>
                                    <td class="align-middle">{{ $tindakan->sasaran2021 }}</td>
                                    <td class="align-middle">{{ $tindakan->sasaran2022 }}</td>
                                    <td class="align-middle">{{ $tindakan->sasaran2023 }}</td>
                                    <td class="align-middle">{{ $tindakan->sasaran2024 }}</td>
                                    <td class="align-middle">{{ $tindakan->sasaran2025 }}</td>
                                    <td class="align-middle">{{ $tindakan->sumberData }}</td>
                                    <td class="align-middle">{{ $tindakan->sumberPengesahan }}</td>
                                    @role('admin')
                                        <td class="align-middle">

                                            <div class="col-auto ms-auto">
                                                @if ($tindakan->lulus == 1 && $tindakan->ditolak == 0)
                                                    <span class="btn btn-primary" disabled>Lulus</span>
                                                @elseif ($tindakan->lulus == 0 && $tindakan->ditolak == 1)
                                                    <span class="btn btn-danger" disabled>Ditolak</span>
                                                @else
                                                    <form action="/tindakan/lulus/{{ $tindakan->id }}" method="post">
                                                        @csrf
                                                        @method('POST')
                                                        <button type="submit" class="btn btn-success">Lulus</button>
                                                    </form>
                                                    <form action="{{ route('tindakan.ditolak', $tindakan->id) }}"
                                                        method="post">
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
                                                @if ($tindakan->lulus == 1 && $tindakan->ditolak == 0)
                                                    <span class="btn btn-primary" disabled>Lulus</span>
                                                @elseif ($tindakan->lulus == 0 && $tindakan->ditolak == 1)
                                                    <span class="btn btn-danger" disabled>Ditolak</span>
                                                @else
                                                    <span class="btn btn-info" disabled>Dalam Semakan</span>
                                                @endif
                                            </div>
                                        </td>
                                    @endrole
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"></script>


<script>
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
</script>
