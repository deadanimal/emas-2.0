@extends('base-md')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>DISPLAY INFORMATION BASED ON STATUS</H2>
        </div>

        <div class="card mx-ncard my-ncard shadow-none">
            <div class="card-body">
                <div class="table-responsive scrollbar">
                    <table class="table mb-0" style="width: 400%" value="null" id="example">
                        <thead class="text-black bg-200">
                            <tr>
                                <th class="align-middle">No.</th>
                                <th class="align-middle">Cluster</th>
                                <th class="align-middle">Initiative </th>
                                <th class="align-middle">Program</th>
                                <th class="align-middle">Plan</th>
                                <th class="align-middle">Activity</th>
                                <th class="align-middle">Start Date </th>
                                <th class="align-middle">End Date</th>
                                <th class="align-middle">Output</th>
                                <th class="align-middle">Weightage</th>
                                <th class="align-middle">Weightage Progress </th>
                                <th class="align-middle">Output Progress</th>
                                <th class="align-middle">Additional Output Info</th>
                                <th class="align-middle">Remarks</th>
                                <th class="align-middle">View</th>
                                <th class="align-middle">Status</th>

                                {{-- <th class="align-middle">Action</th> --}}
                            </tr>
                        </thead>
                        <tbody class="list myTable" id="searchUpdateTable">
                            @foreach ($activities as $activity)
                                <tr class="activity">
                                    <td class="align-middle">{{ $loop->iteration }}.</td>
                                    <td class="align-middle">{{ $activity->cluster->namaCluster ?? '' }}</td>
                                    {{-- <td class="align-middle">{{ $activity->namaCluster }}</td> --}}

                                    <td class="align-middle">{{ $activity->initiative->namaInitiative ?? '' }}</td>
                                    <td class="align-middle">{{ $activity->program->namaProgram ?? '' }}</td>
                                    <td class="align-middle">{{ $activity->plan->namaPlan ?? '' }}</td>
                                    <td class="align-middle">{{ $activity->namaActivity }}</td>
                                    <td class="align-middle">{{ $activity->startDate }}</td>
                                    <td class="align-middle">{{ $activity->endDate }}</td>
                                    <td class="align-middle">{{ $activity->output }}</td>
                                    <td class="align-middle">{{ $activity->weightage }}</td>
                                    <td class="align-middle">{{ $activity->weightage_progress }}</td>
                                    <td class="align-middle">{{ $activity->output_progress }}</td>
                                    <td class="align-middle">{{ $activity->additionalOutput }}</td>
                                    <td class="align-middle">{{ $activity->remarks }}</td>
                                    <td class="align-middle">
                                        <button class="btn btn-black" type="button" data-bs-toggle="modal"
                                            data-bs-target="#error-modal-{{ $activity->id }}">Preview
                                        </button>
                                    </td>

                                    <td class="align-middle">
                                        <div class="col-auto ms-auto">
                                            @if ($activity->lulus == 1 && $activity->ditolak == 0)
                                                <span class="badge bg-success" disabled>Approved</span>
                                            @elseif ($activity->lulus == 0 && $activity->ditolak == 1)
                                                <span class="badge bg-danger" disabled>Rejected</span>
                                            @else
                                                <span class="badge bg-info text-dark" disabled>In Review</span>
                                            @endif
                                        </div>
                                    </td>

                                    {{-- <td class="align-middle">
                                        <div class="col-auto ms-auto">
                                            @if ($activity->lulus == 1 && $activity->ditolak == 0)
                                                <span class="btn btn-primary" disabled>Approved</span>
                                            @elseif ($activity->lulus == 0 && $activity->ditolak == 1)
                                                <span class="btn btn-danger" disabled>Rejected</span>
                                            @else
                                                <form action="/MD/activity/lulus/{{ $activity->id }}" method="post">
                                                    @csrf
                                                    @method('POST')
                                                    <button type="submit" class="btn btn-success">Approve</button>
                                                </form>
                                                <form action="{{ route('activity.ditolak', $activity->id) }}"
                                                    method="post">
                                                    @csrf
                                                    @method('POST')
                                                    <button type="submit" class="btn btn-danger">Reject</button>
                                                </form>
                                            @endif
                                        </div>
                                    </td> --}}

                                    <div class="modal fade" id="error-modal-{{ $activity->id }}" tabindex="-1"
                                        role="dialog" aria-hidden="true">
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

                                                        <div class="mb-3">
                                                            <label class="col-form-label">User
                                                                :</label>
                                                            <label class="form-control"
                                                                disabled="disabled">{{ $activity->user->name }}</label>

                                                        </div>

                                                        <div class="mb-3">
                                                            <label class="col-form-label">Status:</label>

                                                            @if ($activity->lulus == 1 && $activity->ditolak == 0)
                                                                <span class="badge bg-success" disabled>Approved</span>
                                                            @elseif ($activity->lulus == 0 && $activity->ditolak == 1)
                                                                <span class="badge bg-danger" disabled>Rejected</span>
                                                            @else
                                                                <span class="badge bg-info text-dark" disabled>In
                                                                    Review</span>
                                                            @endif
                                                        </div>



                                                        <form>
                                                            <div class="mb-3">
                                                                <label class="col-form-label">Cluster
                                                                    :</label>
                                                                <label class="form-control"
                                                                    disabled="disabled">{{ $activity->cluster->namaCluster ?? '' }}</label>

                                                            </div>

                                                            <div class="mb-3">
                                                                <label class="col-form-label">Initiative:</label>
                                                                <label class="form-control"
                                                                    disabled="disabled">{{ $activity->initiative->namaInitiative ?? '' }}</label>
                                                            </div>

                                                            <div class="mb-3">
                                                                <label class="col-form-label">Program :</label>
                                                                <label class="form-control"
                                                                    disabled="disabled">{{ $activity->program->namaProgram ?? '' }}</label>

                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="col-form-label">Plan :</label>
                                                                <label class="form-control"
                                                                    disabled="disabled">{{ $activity->plan->namaPlan ?? '' }}</label>

                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="col-form-label">Activity :</label>
                                                                <label class="form-control"
                                                                    disabled="disabled">{{ $activity->namaActivity }}</label>

                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="col-form-label">Remarks :</label>
                                                                <label class="form-control"
                                                                    disabled="disabled">{{ $activity->remarks }}</label>

                                                            </div>

                                                            <br>
                                                        </form>
                                                        @can('Epu MD')
                                                            <div class="mb-3">
                                                                <label class="col-form-label">Action:</label>
                                                                @if ($activity->lulus == 1 && $activity->ditolak == 0)
                                                                    <span class="btn btn-primary" disabled>Approved</span>
                                                                @elseif ($activity->lulus == 0 && $activity->ditolak == 1)
                                                                    <span class="btn btn-danger" disabled>Rejected</span>
                                                                @else
                                                                    <form action="/MD/activity/lulus/{{ $activity->id }}"
                                                                        method="post">
                                                                        @csrf
                                                                        @method('POST')
                                                                        <button type="submit"
                                                                            class="btn btn-success">Approve</button>
                                                                    </form>
                                                                    <form
                                                                        action="{{ route('activity.ditolak', $activity->id) }}"
                                                                        method="post">
                                                                        @csrf
                                                                        @method('POST')
                                                                        <button type="submit"
                                                                            class="btn btn-danger">Reject</button>
                                                                    </form>
                                                                @endif
                                                            </div>
                                                        @endcan



                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>

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
