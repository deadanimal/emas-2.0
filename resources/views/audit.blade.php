@extends('base')
@section('content')
    <div class="container">
        <br>
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
                        <span class="fas fa-hand-middle-finger"></span>
                    </a>
                </div>
                <div class="col-12 col-sm-auto ms-auto">
                    <input class="form-control" id="myInput" type="text" placeholder="Carian">
                </div>
            </div>
        </div>
        <br>

        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Tarikh</th>
                    <th scope="col">Aktiviti</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($audits as $audit)
                    <tr>
                        <td>{{ $audit->updated_at }}</td>
                        @if ($audit->auditable_type == 'App\Models\Fokusutama')
                            <td>{{ $audit->user->name }} {{ $audit->event }} Fokus Utama.
                            </td>
                        @elseif($audit->auditable_type == 'App\Models\Pemangkindasar')
                            <td>{{ $audit->user->name }} {{ $audit->event }} Pemangkin Dasar.
                            </td>
                        @else
                            <td>{{ $audit->user->name }} {{ $audit->event }} Tema/Pemangkin Dasar.
                            </td>
                        @endif
                        {{-- <td>{{ $audit->user->name }} {{ $audit->event }}
                        </td> --}}
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
