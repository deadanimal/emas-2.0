@extends('base')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>PENILAIAN PRESTASI KPI NASIONAL MENGIKUT OUTCOME NASIONAL
            </H2>
        </div>

        <div class="form-floating;">


            <div class="row align-items-center">


                <table class="table table-bordered" id="example">
                    <thead class="table-light">
                        <tr>
                            <th class="align-middle">Bil</th>
                            <th class="align-middle">KPI Nasional</th>
                            <th class="align-middle">Wajaran</th>
                            <th class="align-middle">Unit Sasaran</th>
                            <th class="align-middle">Sasaran 2022</th>
                            <th class="align-middle">Sasaran RMKe-12</th>
                            <th class="align-middle">Pencapaian Semasa</th>
                            <th class="align-middle">Prestasi KPI (Skor Wajaran)</th>
                            <th class="align-middle">Peratus Pencapaian</th>

                        </tr>
                    </thead>
                    {{-- <tbody>
                        @foreach ($kpis as $kpis)
                            <tr>
                                <td>{{ $loop->iteration }}.</td>
                                <td>{{ $kpis->namaKpi }}</td>
                                <td> <input class="form-control" value="{{ $kpis->wajaran }}" readonly />
                                </td>
                                <td> <input class="form-control" value="{{ $kpis->unitSasaran }}" readonly />
                                </td>
                                <td> <input class="form-control" value="{{ $kpis->sasaran2022 }}" readonly />
                                </td>
                                <td> <input class="form-control" value="{{ $kpis->sasaranRMK }}" readonly />
                                </td>
                                <td> <input class="form-control" value="{{ $kpis->pencapaianSemasa }}" readonly />
                                </td>
                                <td> <input class="form-control" value="{{ $kpis->wajaran }}" readonly />
                                </td>
                                <td id="prestasi"></td>
                            </tr>
                        @endforeach
                    </tbody> --}}
                    <tbody>
                        {{-- @foreach ($kpis as $kpi)
                            <tr>
                                <td>{{ $loop->iteration }}.</td>
                                <td>{{ $kpi->namaKpi }}</td>
                                <td>{{ $kpi->wajaran }}
                                </td>
                                <td>{{ $kpi->unitSasaran }}
                                </td>
                                <td>{{ $kpi->sasaran2022 }}
                                </td>
                                <td>{{ $kpi->sasaranRMK }}
                                </td>
                                <td>{{ $kpi->pencapaianSemasa }}
                                </td>
                                <td>{{ $kpi->prestasiKpi }}
                                </td>
                                <td>{{ $kpi->peratusPencapaian }}
                                </td>
                            </tr>
                        @endforeach --}}
                    </tbody>
                </table>



                <div class="col" style="text-align: center">
                    <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                        href="/PPD/penilaian/kpi">
                        <span class="fas fa-backspace"></span>&nbsp;Kembali
                    </a>

                    <button class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                        type="submit" value="Save">
                        <span class="fas fa-calculator"></span>&nbsp;Proses
                    </button>
                    <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                        href="/PPD/paparan/kpi">
                        <span class="fas fa-print"></span>&nbsp;Papar

                    </a>
                </div>


            </div>

        </div>
    @endsection
