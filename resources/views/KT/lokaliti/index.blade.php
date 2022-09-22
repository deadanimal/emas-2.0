@extends('base')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>PELAKSANAAN PROGRAM PEMBASMIAN
                KEMISKINAN TEGAR KELUARGA MALAYSIA
                (BMTKM)</H2>
        </div>

        <div class="col">
            <div class="row align-items-center">
                <div class="col col-lg-8">

                    <span><b>Lokaliti Mengikut Negeri</b></span>

                </div>

            </div>
        </div>

        <hr style="width:100%;text-align:center;">

        <img class="img-fluid rounded" src="/img/KTMap.png" alt="" />

        <br><br>


        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">No.</th>
                    <th colspan="1">Negeri</th>
                    <th scope="col">Jumlah KIR</th>
                    <th scope="col">Jumlah AIR</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($negeris as $negeri)
                    <tr>
                        <td>{{ $loop->iteration }}.</td>
                        <td>{{ $negeri->name }}</td>
                        <td>{{ $negeri->jumlah_kir }}</td>
                        <td>{{ $negeri->jumlah_air }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection
