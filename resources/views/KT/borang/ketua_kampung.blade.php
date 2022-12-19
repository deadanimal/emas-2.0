<!DOCTYPE html>
<html>
<title>BMTKM - Ketua Kampung</title>


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
                <b>Nama Ketua Kampung:</b>
                {{ $ketuaKampung->name }}

            </div><br>

            <br>

            <body>

                <table>
                    <tr>

                        <th> <b>No. Telefon Pejabat:</b>
                        </th>
                        <th> <b>Tahun Mula Berkhidmat:</b>
                        </th>
                        <th> <b>Tahun Akhir Berkhidmat:</b>
                        </th>
                        <th> <b>No. Kad Pengenalan:</b>
                        </th>
                        <th> <b>No. Telefon Bimbit:</b>
                        </th>

                    </tr>
                    <tr>
                        <td style="text-align: center"> {{ $ketuaKampung->no_pejabat }}
                        </td>
                        <td style="text-align: center"> {{ $ketuaKampung->tahun_mula }}
                        </td>
                        <td style="text-align: center"> {{ $ketuaKampung->tahun_akhir }}
                        </td>
                        <td style="text-align: center"> {{ $ketuaKampung->no_kp }}
                        </td>
                        <td style="text-align: center"> {{ $ketuaKampung->no_telefon }}
                        </td>

                    </tr>

                </table>

            </body>

        </div>


    </body>






</div>
