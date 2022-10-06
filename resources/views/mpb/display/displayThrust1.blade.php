@extends('base-mpb')
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
                                <th class="align-middle">Thrust</th>
                                <th class="align-middle">National Initiative </th>
                                <th class="align-middle">Key Activities</th>
                                <th class="align-middle">Sub-Key Activities</th>
                                <th class="align-middle">KPI</th>
                                <th class="align-middle">Milestone </th>
                                <th class="align-middle">Actual Mark (%)</th>
                                <th class="align-middle">Target Mark (%)</th>
                                <th class="align-middle">Achievement (%)</th>
                                <th class="align-middle">Status</th>

                            </tr>
                        </thead>
                        {{-- <tbody class="list myTable" id="searchUpdateTable">
                            @foreach ($activities as $activity)
                                <tr class="activity">
                                    <td class="align-middle">{{ $loop->iteration }}.</td>
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
                                </tr>
                            @endforeach
                        </tbody> --}}
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
