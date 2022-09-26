@extends('base-md')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>DISPLAY INFORMATION BASED ON PROGRAM</H2>
        </div>

        <div class="card mx-ncard my-ncard shadow-none">
            <div class="card-body">
                <div class="table-responsive scrollbar">
                    <table class="table mb-0" style="width: 400%" value="null" id="example
                    ">
                        <thead class="text-black bg-200">
                            <tr>
                                @role('SuperAdmin')
                                    <th class="align-middle">No.</th>
                                @endrole
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
                                @role('MD')
                                    <th class="align-middle">Status</th>
                                @endrole
                                @role('MD')
                                    <th class="align-middle">Tindakan</th>
                                @endrole
                            </tr>
                        </thead>
                        <tbody class="list myTable" id="searchUpdateTable">
                            @foreach ($activities as $activity)
                                <tr class="activity">
                                    @role('admin')
                                        <td class="align-middle">{{ $loop->iteration }}.</td>
                                    @endrole
                                    <td class="align-middle">{{ $activity->cluster->namaCluster ?? '' }}</td>
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

                                    @role('admin')
                                        <td class="align-middle">
                                            <div class="col-auto ms-auto">
                                                @if ($activity->lulus == 1 && $activity->ditolak == 0)
                                                    <span class="btn btn-primary" disabled>Lulus</span>
                                                @elseif ($activity->lulus == 0 && $activity->ditolak == 1)
                                                    <span class="btn btn-danger" disabled>Ditolak</span>
                                                @else
                                                    <form action="/activity/lulus/{{ $activity->id }}" method="post">
                                                        @csrf
                                                        @method('POST')
                                                        <button type="submit" class="btn btn-success">Lulus</button>
                                                    </form>
                                                    <form action="{{ route('activity.ditolak', $activity->id) }}"
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
                                                @if ($activity->lulus == 1 && $activity->ditolak == 0)
                                                    <span class="btn btn-primary" disabled>Lulus</span>
                                                @elseif ($activity->lulus == 0 && $activity->ditolak == 1)
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
