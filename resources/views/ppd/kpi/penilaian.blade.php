@extends('base')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>PENILAIAN PRESTASI KPI NASIONAL MENGIKUT OUTCOME NASIONAL
            </H2>
        </div>

        <div class="form-floating;">
            <br><br>
            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="pemangkin_id">Tema</label>
                <div class="col-sm-10" style="width:30%">
                    <select class="form-control" name="pemangkin_id">
                        <option selected disabled hidden>Sila Pilih</option>
                        {{-- @foreach ($tema as $te)
                            <option value="{{ $te->id }}">{{ $te->namaTema }}</option>
                        @endforeach --}}

                            @foreach ($temas as $tema)
                                <option value="{{ $tema->id }}">
                                    {{ $tema->namaTema }}
                                </option>
                            @endforeach

                    </select>
                </div>

                <label class="col-sm col-form-label" for="tahun">Tahun</label>
                <div class="col">
                    <select class="form-control" name="tahun">
                        <option selected disabled hidden>SILA PILIH</option>
                        <option value="2021">2021</option>
                        <option value="2022">2022</option>
                        <option value="2023">2023</option>
                        <option value="2024">2024</option>
                        <option value="2025">2025</option>
                    </select>
                </div>
            </div>


            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="bab_id">Bab</label>
                <div class="col-sm-10" style="width:30%">
                    <select class="form-control" name="bab_id">
                        <option selected disabled hidden>Sila Pilih</option>
                        @foreach ($bab as $ba)
                            <option value="{{ $ba->id }}">{{ $ba->namaBab }}</option>
                        @endforeach
                    </select>
                </div>

                <label class="col-sm col-form-label" for="suku_tahun">Sukuan Tahun</label>
                <div class="col">
                    <select class="form-control" name="suku_tahun">
                        <option selected disabled hidden>SILA PILIH</option>
                        <option value="Q1">Q1</option>
                        <option value="Q2">Q2</option>
                        <option value="Q3">Q3</option>
                        <option value="Q4">Q4</option>
                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="bidang_id">Bidang Keutamaan</label>
                <div class="col-sm-10">
                    <select class="form-control" name="bidang_id">
                        <option selected disabled hidden>Sila Pilih</option>
                        @foreach ($bidang as $bi)
                            <option value="{{ $bi->id }}">{{ $bi->namaBidang }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="mb-3 row">
                <label class="col-sm-2 col-form-label" for="outcome_id">Outcome Nasional</label>
                <div class="col-sm-10">
                    <select class="form-control" name="outcome_id">
                        <option selected disabled hidden>Sila Pilih</option>
                        @foreach ($outcome as $out)
                            <option value="{{ $out->id }}">{{ $out->namaOutcome }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <hr>



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
                        @foreach ($kpis as $kpi)
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
                        @endforeach
                    </tbody>
                </table>



                <div class="col" style="text-align: center">
                    <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                        href="/PPD/prestasi/pelaporan_prestasi_kpi">
                        <span class="fas fa-backspace"></span>&nbsp;Batal
                    </a>
      
                </div>


            </div>

        </div>
    @endsection
