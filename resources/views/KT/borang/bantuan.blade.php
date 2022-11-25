<!DOCTYPE html>
<html>
<title>BMTKM - Jenis Bantuan</title>


<head>
    <style type="text/css">
        h1 {
            text-align: center;
        }

        .p1 {
            text-align: center;
        }

        .p2 {
            text-align: center
        }

        .div1 {
            text-align: center;
        }

        th,
        td {
            border: solid 1px #777;
            padding: 2px;
            margin: 2px;
        }
    </style>
</head>
<div class="card-body ">
    {{-- h1 dynamic --}}
    <h1>PELAKSANAAN PROGRAM PEMBASMIAN KEMISKINAN TEGAR KELUARGA MALAYSIA (BMTKM)</h1>
    <br><br>


    <body class="content">
        {{-- dynamic --}}
        <div class="p-4 pb-0">
            <div class="mb-3">
                <b>Nama Kampung:</b>
                {{ $bantuan->nama_kampung }}

            </div><br>

            <div class="mb-3">
                <b>Nama Bantuan:</b>
                {{ $bantuan->nama_bantuan }}

            </div><br>

            <body>

                <table>
                    <tr>

                        <th> <b>Kementerian yang Bertanggungjawab:</b>
                        </th>
                        <th> <b>Agensi yang Ditugaskan:</b>
                        </th>
                        <th> <b>Sektor:</b>
                        </th>

                    </tr>
                    <tr>
                        <td> {{ $bantuan->kementerian }}
                        </td>
                        <td> {{ $bantuan->agensi }}
                        </td>
                        <td> {{ $bantuan->sektor }}
                        </td>

                    </tr>

                </table>

            </body>

        </div>


    </body>






</div>
