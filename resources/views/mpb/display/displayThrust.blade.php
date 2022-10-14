@extends('base-mpb')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            @can('Approver')
                <H2>DISPLAY INFORMATION BASED ON STATUS</H2>
            @else
                <H2>DISPLAY INFORMATION OF THRUST</H2>
            @endcan

        </div>


        <div class="card-body">
            <div class="table-responsive scrollbar">
                <table class="table mb-0" style="width: 400%" value="null" id="example">
                    <thead class="text-black bg-200">
                        <tr style="text-align: center">
                            <th class="align-middle" rowspan=2>View</th>

                            <th class="align-middle" rowspan=2>No.</th>
                            <th class="align-middle" rowspan=2>Thrust</th>
                            <th class="align-middle" rowspan=2>National Initiative </th>
                            <th class="align-middle" rowspan=2>Key Activities</th>
                            <th class="align-middle" rowspan=2>Sub-Key Activities</th>
                            <th class="align-middle" rowspan=2>KPI</th>
                            <th class="align-middle" colspan=4>Milestone </th>
                            <th class="align-middle" rowspan=2>Actual Mark (%)</th>
                            <th class="align-middle" rowspan=2>Target Mark (%)</th>
                            <th class="align-middle" rowspan=2>Achievement (%)</th>
                            <th class="align-middle" rowspan=2>User Remark </th>
                            {{-- <th class="align-middle" rowspan=2>Status </th> --}}


                        </tr>
                        <tr style="text-align: center">
                            <td>Q1</td>
                            <td>Q2 </td>
                            <td>Q3</td>
                            <td>Q4</td>
                        </tr>
                    </thead>


                    <tbody class="list myTable" id="searchUpdateTable">
                        @foreach ($miles as $thrust)
                            <tr class="thrust" style="text-align: center">
                                <td>
                                    <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-{{ $thrust->id }}">View
                                    </button>
                                </td>
                                <td class="align-middle">{{ $loop->iteration }}.
                                </td>
                                <td class="align-middle">{{ $thrust->thrust->namaThrust }}</td>
                                <td class="align-middle">{{ $thrust->national->namaNational ?? '' }}</td>
                                <td class="align-middle">{{ $thrust->key->namaKey ?? '' }}</td>
                                <td class="align-middle">{{ $thrust->sub->namaSub ?? '' }}</td>
                                <td class="align-middle">{{ $thrust->kpi->namaKpi ?? '' }}</td>
                                <td class="align-middle">{{ $thrust->quarter }}</td>
                                <td class="align-middle">{{ $thrust->q2 }}</td>
                                <td class="align-middle">{{ $thrust->q3 }}</td>
                                <td class="align-middle">{{ $thrust->q4 }}</td>
                                <td class="align-middle">{{ $thrust->actual_mark }}</td>
                                <td class="align-middle">{{ $thrust->targetMark }}</td>
                                <td class="align-middle">{{ $thrust->achievement }}</td>
                                <td class="align-middle">{{ $thrust->remark }}</td>

                                <div class="modal fade" id="error-modal-{{ $thrust->id }}" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document"
                                        style="max-width: 500px">
                                        <div class="modal-content position-relative">
                                            <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                                                <button
                                                    class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body p-0">

                                                <div class="p-4 pb-0">

                                                    @can('Approver')
                                                        <div class="mb-3">
                                                            <label class="col-form-label">User
                                                                :</label>
                                                            <label class="form-control"
                                                                disabled="disabled">{{ $thrust->user->name }}</label>
                                                            <label class="form-control"
                                                                disabled="disabled">{{ $thrust->user->email }}</label>
                                                        </div>
                                                    @endcan

                                                    <div class="mb-3">
                                                        <label class="col-form-label">Status:</label>
                                                        @if ($thrust->lulus == 1 && $thrust->ditolak == 0)
                                                            <span class="badge bg-success" disabled>Approved</span>
                                                        @elseif ($thrust->lulus == 0 && $thrust->ditolak == 1)
                                                            <span class="badge bg-danger" disabled>Rejected</span>
                                                        @else
                                                            <span class="badge bg-info text-dark" disabled>In
                                                                Progress</span>
                                                        @endif
                                                    </div>


                                                    <form>
                                                        <div class="mb-3">
                                                            <label class="col-form-label" for="namaThrust">Thrust
                                                                :</label>
                                                            <label class="form-control"
                                                                disabled="disabled">{{ $thrust->thrust->namaThrust }}</label>

                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="col-form-label">National:</label>
                                                            <label class="form-control"
                                                                disabled="disabled">{{ $thrust->national->namaNational }}</label>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="col-form-label">Achievement:</label>
                                                            <label class="form-control"
                                                                disabled="disabled">{{ $thrust->achievement }}</label>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="col-form-label">User Remark:</label>
                                                            <label class="form-control"
                                                                disabled="disabled">{{ $thrust->remark }}</label>
                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="col-form-label">Status:</label>
                                                            <label class="form-control"
                                                                disabled="disabled">{{ $thrust->status }}</label>
                                                        </div>



                                                        <br>
                                                    </form>

                                                    @can('Approver')
                                                        <div class="mb-3">
                                                            <label class="col-form-label">Approver Remark:</label>
                                                            <input class="form-control" type="text" name="approver" />

                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="col-form-label">Action:</label>
                                                            @if ($thrust->lulus == 1 && $thrust->ditolak == 0)
                                                                <span class="btn btn-primary" disabled>Approved</span>
                                                            @elseif ($thrust->lulus == 0 && $thrust->ditolak == 1)
                                                                <span class="btn btn-danger" disabled>Rejected</span>
                                                            @else
                                                                <div style="text-align: right">
                                                                    <form action="/MPB/thrust/lulus/{{ $thrust->id }}"
                                                                        method="post">
                                                                        @csrf
                                                                        @method('POST')
                                                                        <button type="submit"
                                                                            class="btn btn-success">Approve</button>
                                                                    </form>

                                                                    <form action="/MPB/thrust/ditolak/{{ $thrust->id }}"
                                                                        method="post">
                                                                        @csrf
                                                                        @method('POST')
                                                                        <button type="submit"
                                                                            class="btn btn-danger">Reject</button>
                                                                    </form>
                                                                </div>
                                                            @endif
                                                        </div>
                                                    @endcan




                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>

                                {{-- @can('Approver')
                                    <td class="align-middle">
                                        <div class="col-auto ms-auto">
                                            @if ($thrust->lulus == 1 && $thrust->ditolak == 0)
                                                <span class="btn btn-primary" disabled>Approved</span>
                                            @elseif ($thrust->lulus == 0 && $thrust->ditolak == 1)
                                                <span class="btn btn-danger" disabled>Rejected</span>
                                            @else
                                                <form action="/thrust/lulus/{{ $thrust->id }}" method="post">
                                                    @csrf
                                                    @method('POST')
                                                    <button type="submit" class="btn btn-success">Approve</button>
                                                </form>
                                                <form action="/thrust/ditolak/{{ $thrust->id }}" method="post">
                                                    @csrf
                                                    @method('POST')
                                                    <button type="submit" class="btn btn-danger">Reject</button>
                                                </form>
                                            @endif
                                        </div>
                                    </td>
                                @else
                                    <td class="align-middle">
                                        <div class="col-auto ms-auto">
                                            @if ($thrust->lulus == 1 && $thrust->ditolak == 0)
                                                <span class="btn btn-primary" disabled>Approved</span>
                                            @elseif ($thrust->lulus == 0 && $thrust->ditolak == 1)
                                                <span class="btn btn-danger" disabled>Rejected</span>
                                            @else
                                                <span class="btn btn-info" disabled>In Progress</span>
                                            @endif
                                        </div>
                                    </td>
                                @endcan --}}


                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>



    </div>

    {{-- <script>
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
    </script> --}}
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                "processing": true,
                "dom": 'lBfrtip',
                "buttons": [{
                    extend: 'collection',
                    text: 'Print Option',
                    collectionLayout: 'rcoi-dt-pdf-button-group-hack',
                    autoClose: true,
                    buttons: [{
                            extend: 'pdfHtml5',
                            text: 'PDF',
                            orientation: 'landscape',
                            title: 'Information of Thrust',
                            exportOptions: {
                                columns: ':visible',
                                orthogonal: 'print'
                            }
                        },
                        {
                            extend: 'csvHtml5',
                            text: 'CSV',
                            orientation: 'landscape',
                            title: 'Information of Thrust',
                            exportOptions: {
                                columns: ':visible',
                                orthogonal: 'print'
                            }
                        },
                        {
                            extend: 'excelHtml5',
                            text: 'Excel',
                            orientation: 'landscape',
                            title: 'Information of Thrust',
                            exportOptions: {
                                columns: ':visible',
                                orthogonal: 'print'
                            }
                        },


                    ]
                }]
            });
        });
    </script>
@endsection
