@extends('base-kt')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>PELAKSANAAN PROGRAM PEMBASMIAN KEMISKINAN TEGAR KELUARGA MALAYSIA (BMTKM)
            </H2>
        </div>

        <br>

        <div class="col">
            <div class="row align-items-center">
                <div class="col col-lg-8">
                    <span><b>Senarai KIR & AIR Mengikut Negeri</b></span>

                </div>
            </div>
        </div>


        <hr style="width:100%;text-align:center;">

        <div class="table-responsive scrollbar">
            <table class="table table-bordered overflow-hidden" style="width: 100%;hover:  false;">
                <thead class="text-center table-dark">
                    <th scope="col">Negeri</th>
                    <th scope="col">Jumlah KIR</th>
                    <th scope="col">Jumlah AIR</th>
                </thead>

                <tbody class="list">
                    @foreach ($negeris as $negeri)
                        <tr class="align-middle text-center">
                            <td>
                                {{ $negeri->name }}
                            </td>
                            <td>
                                {{ $negeri->jumlah_kir }}
                            </td>
                            <td>
                                {{ $negeri->jumlah_air }}
                            </td>
                        </tr>
                    @endforeach

                </tbody>

            </table>


        </div>
    </div>
@endsection
