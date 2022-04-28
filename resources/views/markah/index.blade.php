@extends('base')
@section('content')
    <div class="container">
        <br>
        <div class="mb-4 text-center">
            <H2>PELAN PELAKSANAAN DASAR</H2>
        </div>

        <div class="card mx-ncard my-ncard shadow-none">
            <div class="card-body">
                <div class="table-responsive scrollbar">
                    <table class="table mb-0">
                        <thead class="text-black bg-200">
                            <tr>
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
                                <th class="align-middle">Tindakan</th>
                            </tr>
                        </thead>
                        <tbody id="bulk-select-body">
                            @foreach ($markah as $markah)
                                <tr>
                                    <td class="align-middle">{{ $markah->namaKpi }}</td>
                                    <td class="align-middle">{{ $markah->keteranganTema }}</td>
                                    <td class="align-middle">{{ $markah->jenisKpi }}</td>
                                    <td class="align-middle">{{ $markah->prestasiKpi }}</td>
                                    <td class="align-middle">{{ $markah->unitUkuran }}</td>
                                    <td class="align-middle">{{ $markah->pencapaian }}</td>
                                    <td class="align-middle">{{ $markah->sasaran }}</td>
                                    <td class="align-middle">{{ $markah->hadVarian }}</td>
                                    <td class="align-middle">{{ $markah->hadToleransi }}</td>
                                    <td class="align-middle">{{ $markah->kekerapan }}</td>
                                    <td class="align-middle">{{ $markah->wajaran }}</td>
                                    <td class="align-middle">{{ $markah->peratusPencapaian }}</td>
                                    <td class="align-middle">{{ $markah->tahunAsas }}</td>
                                    <td class="align-middle">{{ $markah->peratusPencapaianAsas }}</td>
                                    <td class="align-middle">{{ $markah->sasaran2021 }}</td>
                                    <td class="align-middle">{{ $markah->sasaran2022 }}</td>
                                    <td class="align-middle">{{ $markah->sasaran2023 }}</td>
                                    <td class="align-middle">{{ $markah->sasaran2024 }}</td>
                                    <td class="align-middle">{{ $markah->sasaran2025 }}</td>
                                    <td class="align-middle">{{ $markah->sumberData }}</td>
                                    <td class="align-middle">{{ $markah->sumberPengesahan }}</td>
                                    <td class="align-middle">
                                        <div class="col-auto ms-auto">
                                            {{-- <div class="nav nav-pills nav-pills-falcon flex-grow-1 mt-2" role="tablist">
                                                <button class="btn btn-sm" data-bs-toggle="pill"
                                                    data-bs-target="#dom-6a05ee6c-f8cc-4d6d-a6d7-81ac7af99e47" type="button"
                                                    role="tab" aria-controls="dom-6a05ee6c-f8cc-4d6d-a6d7-81ac7af99e47"
                                                    aria-selected="false"
                                                    name="lulus">Lulus</button>
                                                <button class="btn btn-sm active" data-bs-toggle="pill"
                                                    data-bs-target="#dom-e484bb89-9bfa-49ef-9a6c-5b01376ee3c8" type="button"
                                                    role="tab" aria-controls="dom-e484bb89-9bfa-49ef-9a6c-5b01376ee3c8"
                                                    aria-selected="true"
                                                    name="tolak">Tolak</button>
                                            </div> --}}

                                            @if ($markah->lulus == 1)
                                                <button class="badge badge-success badge-sm">Lulus</button>
                                            @elseif ($markah->lulus == null)
                                                <div>
                                                    <a href="{{ route('markah.lulus', $markah->id) }}">
                                                        <button type="button" class="btn btn-success">Lulus</button>
                                                    </a>
                                                </div>
                                                <div>
                                                    <a href="{{ route('markah.ditolak', $markah->id) }}">
                                                        <button type="button" class="btn btn-warning">Tolak</button>
                                                    </a>
                                                </div>
                                            @else
                                                <span class="badge badge-danger badge-sm">Ditolak</span>
                                            @endif
                                        </div>
                                    </td>

                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
