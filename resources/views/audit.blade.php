@extends('base')
@section('content')
    <style>
        #audit {
            max-width: 100px;
            /*max-width for responsiveness*/
            float: left;
        }
    </style>
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

            </div>
        </div>

        <hr style="width:100%;text-align:center;">
        {{-- <div align="center">
            <span><b> Audit Trail: </b></span>


            <input id="myInput" size="20" type="text" />
        </div> --}}



        <br>
        <div class="table-responsive scrollbar">

            <table class="table table-bordered user_datatable" id="example">
                <thead class="table" style="text-align: center">
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
                                <td>{{ $audit->user->name }} {{ $audit->event }} PPD - Fokus Utama.
                                </td>
                            @elseif($audit->auditable_type == 'App\Models\Pemangkindasar')
                                <td>{{ $audit->user->name }} {{ $audit->event }} PPD - Tema/Pemangkin Dasar.
                                </td>
                            @elseif($audit->auditable_type == 'App\Models\Perkarautama')
                                <td>{{ $audit->user->name }} {{ $audit->event }} PPD - Perkara Utama.
                                </td>
                            @elseif($audit->auditable_type == 'App\Models\Bab')
                                <td>{{ $audit->user->name }} {{ $audit->event }} PPD - Bab.
                                </td>
                            @elseif($audit->auditable_type == 'App\Models\Pemacu')
                                <td>{{ $audit->user->name }} {{ $audit->event }} PPD - Pemacu Perubahan.
                                </td>
                            @elseif($audit->auditable_type == 'App\Models\Bidang')
                                <td>{{ $audit->user->name }} {{ $audit->event }} PPD - Bidang Keutamaan.
                                </td>
                            @elseif($audit->auditable_type == 'App\Models\Outcome')
                                <td>{{ $audit->user->name }} {{ $audit->event }} PPD - Outcome Nasional.
                                </td>
                            @elseif($audit->auditable_type == 'App\Models\Kpi')
                                <td>{{ $audit->user->name }} {{ $audit->event }} PPD - Kpi Nasional.
                                </td>
                            @elseif($audit->auditable_type == 'App\Models\Strategi')
                                <td>{{ $audit->user->name }} {{ $audit->event }} PPD - Strategi.
                                </td>
                            @elseif($audit->auditable_type == 'App\Models\Inisiatif')
                                <td>{{ $audit->user->name }} {{ $audit->event }} PPD - Inisiatif.
                                </td>
                            @elseif($audit->auditable_type == 'App\Models\Tindakan')
                                <td>{{ $audit->user->name }} {{ $audit->event }} PPD - Tindakan.
                                </td>
                            @elseif($audit->auditable_type == 'App\Models\Sdg')
                                <td>{{ $audit->user->name }} {{ $audit->event }} PPD - SDG.
                                </td>
                            @elseif($audit->auditable_type == 'App\Models\Thrust')
                                <td>{{ $audit->user->name }} {{ $audit->event }} MPB - Thrust.
                                </td>
                            @elseif($audit->auditable_type == 'App\Models\National')
                                <td>{{ $audit->user->name }} {{ $audit->event }} MPB - National Initiave.
                                </td>
                            @elseif($audit->auditable_type == 'App\Models\Key')
                                <td>{{ $audit->user->name }} {{ $audit->event }} MPB - Key Activities.
                                </td>
                            @elseif($audit->auditable_type == 'App\Models\Sub')
                                <td>{{ $audit->user->name }} {{ $audit->event }} MPB - Sub-Key Activities.
                                </td>
                            @elseif($audit->auditable_type == 'App\Models\Kpi2')
                                <td>{{ $audit->user->name }} {{ $audit->event }} MPB - KPI.
                                </td>
                            @elseif($audit->auditable_type == 'App\Models\Milestone')
                                <td>{{ $audit->user->name }} {{ $audit->event }} MPB - Milestone.
                                </td>
                            @elseif($audit->auditable_type == 'App\Models\Thrus')
                                <td>{{ $audit->user->name }} {{ $audit->event }} My Digital - Thrust.
                                </td>
                            @elseif($audit->auditable_type == 'App\Models\Strategy')
                                <td>{{ $audit->user->name }} {{ $audit->event }} My Digital - Strategy.
                                </td>
                            @elseif($audit->auditable_type == 'App\Models\Cluster')
                                <td>{{ $audit->user->name }} {{ $audit->event }} My Digital - Cluster.
                                </td>
                            @elseif($audit->auditable_type == 'App\Models\Initiative')
                                <td>{{ $audit->user->name }} {{ $audit->event }} My Digital - Initiative.
                                </td>
                            @elseif($audit->auditable_type == 'App\Models\Program')
                                <td>{{ $audit->user->name }} {{ $audit->event }} My Digital - Program.
                                </td>
                            @elseif($audit->auditable_type == 'App\Models\Plan')
                                <td>{{ $audit->user->name }} {{ $audit->event }} My Digital - Plan.
                                </td>
                            @elseif($audit->auditable_type == 'App\Models\activity')
                                <td>{{ $audit->user->name }} {{ $audit->event }} My Digital - Activity.
                                </td>
                            @elseif($audit->auditable_type == 'App\Models\Lokaliti')
                                <td>{{ $audit->user->name }} {{ $audit->event }} Kemiskinan Tegar - Lokaliti.
                                </td>
                            @elseif($audit->auditable_type == 'App\Models\User')
                                <td>
                                    <?php
                                    /*
                                    echo '<pre>';
                                    var_dump($audit->theuser);
                                    echo '</pre>';
                                    */
                                    ?>

                                    {{ $audit->user->name }} {{ $audit->event }} Executive Dashboard -
                                    Pengguna.
                                </td>
                            @elseif($audit->auditable_type == 'App\Models\KemasukanData')
                                <td>{{ $audit->user->name }} {{ $audit->event }} Kemiskinan Tegar - Kemasukan Data.
                                </td>
                            @elseif($audit->auditable_type == 'App\Models\Bantuan')
                                <td>{{ $audit->user->name }} {{ $audit->event }} Kemiskinan Tegar - Jenis Bantuan.
                                </td>
                            @elseif($audit->auditable_type == 'App\Models\Profil')
                                <td>{{ $audit->user->name }} {{ $audit->event }} Kemiskinan Tegar - Profil Kir & Air.
                                </td>
                            @elseif($audit->auditable_type == 'App\Models\Perbelanjaan')
                                <td>{{ $audit->user->name }} {{ $audit->event }} Kemiskinan Tegar - Perbelanjaan.
                                </td>
                            @elseif($audit->auditable_type == 'App\Models\Pendapatan')
                                <td>{{ $audit->user->name }} {{ $audit->event }} Kemiskinan Tegar - Pendapatan.
                                </td>
                            @else
                                <td>{{ $audit->user->name }} {{ $audit->event }} yang
                                    lain.
                                </td>
                            @endif

                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>



    </div>

    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
        $('#example').dataTable({
            "language": {
                "search": "Carian:"
            }
        });
    </script>
@endsection
