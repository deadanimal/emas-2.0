@extends('base')
@section('content')
    <style>
        td {
            text-align: center;
        }

        th {
            text-align: center;
        }
    </style>
    <div class="container">
        <div class="mb-4 text-center">
            <H2>PENCAPAIAN OUTCOME NASIONAL KESULURUHAN</H2>
        </div>
        <hr><br>


        <table class="table table-bordered" id="example">
            <thead class="table-light">
                <tr>
                    <th scope="col">TAHUN PENILAIAN</th>
                    <th scope="col">T1</th>
                    <th scope="col">T2</th>
                    <th scope="col">T3</th>
                    <th scope="col">PD1</th>
                    <th scope="col">PD2</th>
                    <th scope="col">PD3</th>
                    <th scope="col">PD4</th>
                    <th scope="col">PURATA PENCAPAIAN</th>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>

            </tbody>
        </table>
        <br>

        <table class="table table-bordered" id="example">
            <thead class="table-light">
                <tr>
                    <th rowspan="2">OUTCOME NASIONAL</th>
                    <th colspan="2">T1</th>
                    <th colspan="4">T2</th>
                    <th colspan="2">T3</th>
                    <th scope="col">PD1</th>
                    <th scope="col">PD2</th>
                    <th scope="col">PD3</th>
                    <th scope="col">PD4</th>

                </tr>
                <tr>
                    <td>BAB 2</td>
                    <td>BAB 3</td>
                    <td>BAB 4</td>
                    <td>BAB 5</td>
                    <td>BAB 6</td>
                    <td>BAB 7</td>
                    <td>BAB 8</td>
                    <td>BAB 9</td>
                    <td>BAB 10</td>
                    <td>BAB 11</td>
                    <td>BAB 12</td>
                    <td>BAB 13</td>

                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><b>PURATA PENCAPAIAN</b></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>



            </tbody>
        </table>

    </div>
@endsection
