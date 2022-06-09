@extends('base')
@section('content')
    {{-- <style>
        table {
            border-collapse: collapse;
            width: 400%;
            border: 1px solid #ddd;
        }

        th,
        td {
            text-align: left;
            padding: 16px;
        }

    </style> --}}

    <div class="container">
        <br>
        <div class="mb-4 text-center">
            <H2>PELAN PELAKSANAAN DASAR</H2>
        </div>

        {{-- <div class="table-responsive scrollbar">
            <table>
                <tr>
                    @can('admin')
                        <th>User</th>
                    @endcan
                    <th>KPI Nasional</th>
                    <th>Tema </th>
                    <th>Jenis KPI</th>
                    <th>Prestasi KPI</th>
                    <th>Unit</th>
                    <th>Pencapaian </th>
                    <th>Sasaran</th>
                    <th>Had Varian</th>
                    <th>Had Toleransi</th>
                    <th>Kekerapan </th>
                    <th>Wajaran (%)</th>
                    <th>Peratus Pencapaian (%)</th>
                    <th>Tahun Asas</th>
                    <th>Peratus Pencapaian Tahun Asas (%) </th>
                    <th>Sasaran 2021</th>
                    <th>Sasaran 2022</th>
                    <th>Sasaran 2023</th>
                    <th>Sasaran 2024</th>
                    <th>Sasaran 2025</th>
                    <th>Sumber Data</th>
                    <th>Sumber Pengesahan</th>

                    @can('admin')
                        <th>Tindakan</th>
                    @endcan

                </tr>
                @foreach ($kpis as $kpi)
                    <tr>
                        @can('admin')
                            <td>{{ $loop->iteration }}. {{ $kpi->user->name }}</td>
                        @endcan
                        <td>{{ $kpi->namaKpi }}</td>
                        <td>{{ $kpi->pemangkin->namaTema ?? '' }}</td>
                        <td>{{ $kpi->jenisKpi }}</td>
                        <td>{{ $kpi->prestasiKpi }}</td>
                        <td>{{ $kpi->unitUkuran }}</td>
                        <td>{{ $kpi->pencapaian }}</td>
                        <td>{{ $kpi->sasaran }}</td>
                        <td>{{ $kpi->hadVarian }}</td>
                        <td>{{ $kpi->hadToleransi }}</td>
                        <td>{{ $kpi->kekerapan }}</td>
                        <td>{{ $kpi->wajaran }}</td>
                        <td>{{ $kpi->peratusPencapaian }}</td>
                        <td>{{ $kpi->tahunAsas }}</td>
                        <td>{{ $kpi->peratusPencapaianAsas }}</td>
                        <td>{{ $kpi->sasaran2021 }}</td>
                        <td>{{ $kpi->sasaran2022 }}</td>
                        <td>{{ $kpi->sasaran2023 }}</td>
                        <td>{{ $kpi->sasaran2024 }}</td>
                        <td>{{ $kpi->sasaran2025 }}</td>
                        <td>{{ $kpi->sumberData }}</td>
                        <td>{{ $kpi->sumberPengesahan }}</td>

                    </tr>
                @endforeach

            </table>
        </div> --}}

        <div class="card mx-ncard my-ncard shadow-none">
            <div class="card-body">
                <div class="table-responsive scrollbar">
                    <table class="table mb-0" style="width: 400%">
                        <thead class="text-black bg-200">
                            <tr>
                                @role('admin')
                                    <th class="align-middle">User</th>
                                @endrole
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
                                @role('bahagian')
                                    <th class="align-middle">Status</th>
                                @endrole
                                @role('admin')
                                    <th class="align-middle">Tindakan</th>
                                @endrole
                            </tr>
                        </thead>
                        <tbody id="bulk-select-body">
                            @foreach ($kpis as $kpi)
                                <tr>
                                    @role('admin')
                                        <td class="align-middle">{{ $loop->iteration }}. {{ $kpi->user->name }}</td>
                                    @endrole
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
                                    @role('admin')
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
