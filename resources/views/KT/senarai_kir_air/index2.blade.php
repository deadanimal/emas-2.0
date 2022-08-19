@extends('base')
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
                    <span><b>Senarai KIR & AIR Mengikut Negeri, Daerah Dan Kampung</b></span>

                </div>
            </div>
        </div>


        <hr style="width:100%;text-align:center;">

        <div class="table-responsive scrollbar">
            <table class="table table-hover table-striped overflow-hidden testing" style="width: 100%">
                <thead>
                    <tr>
                        <th scope="col">Negeri</th>
                        <th scope="col">Daerah</th>
                        <th scope="col">Kampung</th>

                        <th scope="col">Jumlah KIR</th>
                        <th scope="col">Jumlah AIR</th>

                    </tr>
                </thead>

                <tbody class="list" id="myTable">
                    <tr class="align-middle">
                        <td>
                            Selangor
                        </td>
                        <td>
                            Klang
                        </td>
                        <td>
                            Kg Teras Jernang
                        </td>
                        <td>
                            131
                        </td>

                        <td>
                            213
                        </td>
                    </tr>

                </tbody>

            </table>


        </div>
    </div>
@endsection
