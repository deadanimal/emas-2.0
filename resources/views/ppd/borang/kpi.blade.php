<!DOCTYPE html>
<html>

<head>
    <style>
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

        .content {
            max-width: 900px;
            margin: auto;
        }

        .cb {
            border: 2px solid;
            padding: 50px;
            width: 600px;
            resize: both;
            overflow: auto;
        }
    </style>
</head>
<div class="card-body cb">
    {{-- h1 dynamic --}}
    <h1><u>KPI Nasional</u></h1>
    <div class="p1 ">
        <h3> {{ $kpi->namaKpi }}
        </h3>
    </div><br>


    <body class="content">
        {{-- dynamic --}}
        <div class="p-4 pb-0">


            <div class="mb-3">
                <b>Kpi Nasional:</b>
                {{ $kpi->namaKpi }}

            </div><br>

            <div class="mb-3">
                <b>Keterangan:</b>
                {{ $kpi->keteranganKpi }}
            </div><br>

            <div class="mb-3">
                <b>Tema/Pemangkin Dasar:</b>
                @if ($kpi->pemangkin != null)
                    {{ $kpi->pemangkin->namaTema }}
                @else
                    <label>Tema/Pemangkin Dasar telah dipadam</label>
                @endif
            </div><br>

            <div class="mb-3">
                <b>Bab:</b>
                @if ($kpi->bab != null)
                    {{ $kpi->bab->namaBab }}
                @else
                    <label>Bab telah dipadam</label>
                @endif
            </div><br>

            <div class="mb-3">
                <b>Bidang Keutamaan:</b>
                @if ($kpi->bidang != null)
                    {{ $kpi->bidang->namaBidang }}
                @else
                    <label>Bidang Keutamaan telah dipadam</label>
                @endif
            </div><br>

            <div class="mb-3">
                <b>Outcome Nasional:</b>
                @if ($kpi->outcome != null)
                    {{ $kpi->outcome->namaOutcome }}
                @else
                    <label>Outcome telah dipadam</label>
                @endif
            </div><br>

            <div class="mb-3">
                <b>Jenis KPI:</b>
                {{ $kpi->jenisKpi }}
            </div><br>

            <div class="mb-3">
                <b>Prestasi Kpi:</b>

                @if ($kpi->peratusPencapaian > 80)
                    <img src='/img/green.png'>
                @elseif ($kpi->peratusPencapaian <= 80 && $kpi->peratusPencapaian >= 50)
                    <img src='/img/yellow.png'>
                @elseif ($kpi->peratusPencapaian < 50)
                    <img src='/img/red.png'>
                @endif
                </label>
            </div><br>

            <div class="mb-3">
                <b>Unit:</b>
                {{ $kpi->unitUkuran }}
            </div><br>



            <div class="mb-3">
                <b>Had Varian:</b>
                {{ $kpi->hadVarian }}
            </div><br>

            <div class="mb-3">
                <b>Had Toleransi:</b>
                {{ $kpi->hadToleransi }}
            </div><br>

            <div class="mb-3">
                <b>Kekerapan:</b>
                {{ $kpi->kekerapan }}
            </div><br>

            <div class="mb-3">
                <b>Wajaran:</b>
                {{ $kpi->wajaran }}
            </div><br>


            <div class="mb-3">
                <b>Tahun Asas:</b>
                {{ $kpi->tahunAsas }}
            </div><br>

            <div class="mb-3">
                <b>Peratus Pencapaian Tahun
                    Asas:</b>
                {{ $kpi->peratusPencapaianAsas }}
            </div><br>

            <div class="mb-3">
                <b>Sumber Data:</b>
                {{ $kpi->sumberData }}
            </div><br>

            <div class="mb-3">
                <b>Sasaran 2021:</b>
                {{ $kpi->sasaran2021 }}
            </div><br>

            <div class="mb-3">
                <b>Sumber
                    Pengesahan:</b>
                {{ $kpi->sumberPengesahan }}
            </div><br>

            <div class="mb-3">
                <b>Sasaran 2022:</b>
                {{ $kpi->sasaran2022 }}
            </div><br>

            <div class="mb-3">
                <b>Sasaran 2023:</b>
                {{ $kpi->sasaran2023 }}
            </div><br>

            <div class="mb-3">
                <b>Sasaran 2024:</b>
                {{ $kpi->sasaran2024 }}
            </div><br>

            <div class="mb-3">
                <b>Sasaran 2025:</b>
                {{ $kpi->sasaran2025 }}
            </div><br>


            <br>


        </div>


    </body>

</div>
