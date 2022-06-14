@extends('base')
@section('content')
    {{-- @import "https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" --}}

    <style>
        .switch {
            position: relative;
            display: inline-block;
            width: 90px;
            height: 34px;

        }

        .switch input {
            display: none;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ca2222;
            -webkit-transition: .4s;
            transition: .4s;
            border-radius: 34px;

        }

        .slider:before {
            position: absolute;
            content: "";
            height: 26px;
            width: 26px;
            left: 4px;
            bottom: 4px;
            background-color: white;
            -webkit-transition: .4s;
            transition: .4s;
            border-radius: 50%;
        }

        input:checked+.slider {
            background-color: #2ab934;
        }

        input:focus+.slider {
            box-shadow: 0 0 1px #2196F3;
        }

        input:checked+.slider:before {
            -webkit-transform: translateX(26px);
            -ms-transform: translateX(26px);
            transform: translateX(55px);
        }

        /*------ ADDED CSS ---------*/
        .slider:after {
            content: 'TOLAK';
            color: white;
            display: block;
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 60%;
            font-size: 10px;
        }

        input:checked+.slider:after {
            content: 'LULUS';
            display: block;
            position: absolute;
            transform: translate(-50%, -50%);
            top: 50%;
            left: 40%;
            font-size: 10px;
        }

        /*--------- END --------*/
    </style>

    <div class="container">
        <br>
        <div class="mb-4 text-center">
            <H2>PELAN PELAKSANAAN DASAR</H2>
        </div>

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

                                            {{-- <label class="switch">
                                                <input type="checkbox" id="togBtn">
                                                <div class="slider round"></div>
                                            </label> --}}

                                            <div id="toggle-lulus" class="btn-group btn-toggle">
                                                <button class="btn btn-xs btn-default">Tolak</button>
                                                <button class="btn btn-xs btn-primary active">Lulus</button>
                                            </div>

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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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


