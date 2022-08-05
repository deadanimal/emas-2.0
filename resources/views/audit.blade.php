@extends('base')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>EXECUTIVE DASHBOARD</H2>
        </div>

        <br>

        <div class="col">
            <div class="row align-items-center">
                <div class="col col-lg-8">
                    <span><b>Laporan Audit Trail</b></span>


                    <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                        onClick="window.location.reload();">
                        <span class="fas fa-history"></span></a>
                </div>
                <div class="col-12 col-sm-auto ms-auto">
                    <input class="form-control" id="myInput" type="text" placeholder="Carian">
                </div>
            </div>
        </div>
        <br>
        <div id="tableExample2" data-list='{"valueNames":["audit"],"page":10,"pagination":true}'>
            <div class="table-responsive scrollbar">

                <table class="table table-bordered">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">Tarikh</th>
                            <th scope="col">Aktiviti</th>
                        </tr>
                    </thead>
                    <tbody class="list" id="myTable">
                        @foreach ($audits as $audit)
                            <tr class="audit">
                                <td>{{ $audit->updated_at }}</td>

                                @if ($audit->auditable_type == 'App\Models\Fokusutama')
                                    <td>{{ $audit->user->name }} {{ $audit->event }} Fokus Utama.
                                    </td>
                                @elseif($audit->auditable_type == 'App\Models\Pemangkindasar')
                                    <td>{{ $audit->user->name }} {{ $audit->event }} Tema/Pemangkin Dasar.
                                    </td>
                                @elseif($audit->auditable_type == 'App\Models\Perkarautama')
                                    <td>{{ $audit->user->name }} {{ $audit->event }} Perkara Utama.
                                    </td>
                                @elseif($audit->auditable_type == 'App\Models\Bab')
                                    <td>{{ $audit->user->name }} {{ $audit->event }} Bab.
                                    </td>
                                @elseif($audit->auditable_type == 'App\Models\Pemacu')
                                    <td>{{ $audit->user->name }} {{ $audit->event }} Pemacu Perubahan.
                                    </td>
                                @elseif($audit->auditable_type == 'App\Models\Bidang')
                                    <td>{{ $audit->user->name }} {{ $audit->event }} Pemacu Perubahan.
                                    </td>
                                @elseif($audit->auditable_type == 'App\Models\Outcome')
                                    <td>{{ $audit->user->name }} {{ $audit->event }} Outcome Nasional.
                                    </td>
                                @elseif($audit->auditable_type == 'App\Models\Kpi')
                                    <td>{{ $audit->user->name }} {{ $audit->event }} Kpi Nasional.
                                    </td>
                                @elseif($audit->auditable_type == 'App\Models\Strategi')
                                    <td>{{ $audit->user->name }} {{ $audit->event }} Strategi.
                                    </td>
                                @elseif($audit->auditable_type == 'App\Models\Inisiatif')
                                    <td>{{ $audit->user->name }} {{ $audit->event }} Inisiatif.
                                    </td>
                                @elseif($audit->auditable_type == 'App\Models\Tindakan')
                                    <td>{{ $audit->user->name }} {{ $audit->event }} Tindakan.
                                    </td>
                                @elseif($audit->auditable_type == 'App\Models\Sdg')
                                    <td>{{ $audit->user->name }} {{ $audit->event }} Sdg.
                                    </td>
                                @elseif($audit->auditable_type == 'App\Models\Thrust')
                                    <td>{{ $audit->user->name }} {{ $audit->event }} Thrust.
                                    </td>
                                @elseif($audit->auditable_type == 'App\Models\National')
                                    <td>{{ $audit->user->name }} {{ $audit->event }} National Initiave.
                                    </td>
                                @elseif($audit->auditable_type == 'App\Models\Key')
                                    <td>{{ $audit->user->name }} {{ $audit->event }} Key Activities.
                                    </td>
                                @elseif($audit->auditable_type == 'App\Models\Sub')
                                    <td>{{ $audit->user->name }} {{ $audit->event }} Sub-Key Activities.
                                    </td>
                                @elseif($audit->auditable_type == 'App\Models\Kpi2')
                                    <td>{{ $audit->user->name }} {{ $audit->event }} KPI.
                                    </td>
                                @elseif($audit->auditable_type == 'App\Models\Milestone')
                                    <td>{{ $audit->user->name }} {{ $audit->event }} Milestone.
                                    </td>
                                @else
                                    <td>{{ $audit->user->name }} {{ $audit->event }} yang
                                        lain.
                                    </td>
                                @endif
                                {{-- <td>{{ $audit->user->name }} {{ $audit->event }}
                        </td> --}}
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
            <div class="d-flex justify-content-center mt-3">
                <button class="btn btn-sm btn-falcon-default me-1" type="button" title="Previous"
                    data-list-pagination="prev"><span class="fas fa-chevron-left"></span>
                </button>
                <ul class="pagination mb-0"></ul>
                <button class="btn btn-sm btn-falcon-default ms-1" type="button" title="Next"
                    data-list-pagination="next"><span class="fas fa-chevron-right"> </span>
                </button>

            </div>
        </div>


    </div>

    <script>
        $(document).ready(function() {
            $("#myInput").on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#myTable tr").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
@endsection
