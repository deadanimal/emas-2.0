@extends('base-md')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>DISPLAY INFORMATION OF THRUST</H2>
        </div>

        <div class="card mx-ncard my-ncard shadow-none">
            <div class="card-body">
                <div class="table-responsive scrollbar">
                    <table class="table mb-0" style="width: 400%" value="null" id="example">
                        <thead class="text-black bg-200">
                            <tr>
                                <th class="align-middle" rowspan=2>No.</th>
                                <th class="align-middle" rowspan=2>Thrust</th>
                                <th class="align-middle" rowspan=2>National Initiative </th>
                                <th class="align-middle" rowspan=2>Key Activities</th>
                                <th class="align-middle" rowspan=2>Sub-Key Activities</th>
                                <th class="align-middle" rowspan=2>KPI</th>
                                <th class="align-middle" colspan=2>Milestone </th>
                                <th class="align-middle" rowspan=2>Actual Mark (%)</th>
                                <th class="align-middle" rowspan=2>Target Mark (%)</th>
                                <th class="align-middle" rowspan=2>Achievement (%)</th>
                                <th class="align-middle" rowspan=2>Remark </th>

                            </tr>
                        </thead>


                        <tbody class="list myTable" id="searchUpdateTable">
                            @foreach ($thrusts as $thrust)
                                <tr class="thrust">
                                    <td class="align-middle">{{ $loop->iteration }}.</td>
                                    <td class="align-middle">{{ $thrust->namaThrust }}</td>
                                    <td class="align-middle">{{ $thrust->national->namaNational ?? '' }}</td>
                                    <td class="align-middle">{{ $thrust->key->namaKey ?? '' }}</td>
                                    <td class="align-middle">{{ $thrust->sub->namaSub ?? '' }}</td>
                                    <td class="align-middle">{{ $thrust->namaKpi }}</td>


                                    <td>
                                        <table style="width: 30%;">
                                            <tr>
                                                <td class="align-middle">Q1</td>
                                                <td class="align-middle">Q2 </td>
                                                <td class="align-middle">Q3</td>
                                                <td class="align-middle">Q4</td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <input type="number" name="q1" id="mySelect"
                                                        onchange="myFunction()" value="{{ $thrust->q1 }}" />
                                                </td>
                                                <td>
                                                    <input type="number" name="q1" id="mySelect"
                                                        onchange="myFunction()" value="{{ $thrust->q1 }}" />
                                                </td>
                                                <td>
                                                    <input type="number" name="q1" id="mySelect"
                                                        onchange="myFunction()" value="{{ $thrust->q1 }}" />
                                                </td>
                                                <td>
                                                    <input type="number" name="q1" id="mySelect"
                                                        onchange="myFunction()" value="{{ $thrust->q1 }}" />
                                                </td>
                                            </tr>

                                        </table>
                                    </td>
                                    <td class="align-middle">{{ $thrust->actualMark }}</td>
                                    <td class="align-middle">{{ $thrust->targetMark }}</td>
                                    <td class="align-middle">{{ $thrust->achievement }}</td>
                                    <td class="align-middle">{{ $thrust->remark }}</td>



                                    <td class="align-middle">
                                        <div class="col-auto ms-auto">
                                            @if ($thrust->lulus == 1 && $thrust->ditolak == 0)
                                                <span class="btn btn-primary" disabled>Lulus</span>
                                            @elseif ($thrust->lulus == 0 && $thrust->ditolak == 1)
                                                <span class="btn btn-danger" disabled>Ditolak</span>
                                            @else
                                                <form action="/thrust/lulus/{{ $thrust->id }}" method="post">
                                                    @csrf
                                                    @method('POST')
                                                    <button type="submit" class="btn btn-success">Lulus</button>
                                                </form>
                                                <form action="/thrust/ditolak/{{ $thrust->id }}" method="post">
                                                    @csrf
                                                    @method('POST')
                                                    <button type="submit" class="btn btn-danger">Tolak</button>
                                                </form>
                                            @endif
                                        </div>
                                    </td>
                                    <td class="align-middle">
                                        <div class="col-auto ms-auto">
                                            @if ($thrust->lulus == 1 && $thrust->ditolak == 0)
                                                <span class="btn btn-primary" disabled>Lulus</span>
                                            @elseif ($thrust->lulus == 0 && $thrust->ditolak == 1)
                                                <span class="btn btn-danger" disabled>Ditolak</span>
                                            @else
                                                <span class="btn btn-info" disabled>Dalam Semakan</span>
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
    </script>
@endsection
