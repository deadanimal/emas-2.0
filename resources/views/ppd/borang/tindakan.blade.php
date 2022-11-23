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
    <h1><u>Tindakan</u></h1>
    <div class="p1 ">
        <h3>{{ $tindakan->namaTindakan }}</h3>
    </div><br>


    <body class="content">
        {{-- dynamic --}}
        <div class="p-4 pb-0">
            <div class="mb-3">
                <label class="col-form-label"><b>Tindakan:</b></label>
                {{ $tindakan->namaTindakan }}
            </div><br>

            <div class="mb-3">
                <label class="col-form-label"><b>Keterangan:</b></label>
                {{ $tindakan->keteranganTindakan }}
            </div><br>

            <div class="mb-3">
                <label class="col-form-label"><b>Kementerian/Agensi
                        Penyelaras:</b></label>
                {{ $tindakan->kementerian_penyelaras }}
            </div><br>

            <div class="mb-3">
                <label class="col-form-label"><b>Kementerian/Agensi Pelaksana
                        :</b></label>
                {{ $tindakan->kementerian_pelaksana }}
            </div><br>

            <div class="mb-3">
                <label class="col-form-label"><b>Tempoh Siap:</b></label>
                {{ $tindakan->tempohSiap }}
            </div><br>

            <div class="mb-3">
                <label class="col-form-label"><b>Kategori Sasaran
                        :</b></label>
                {{ $tindakan->kategoriSasaran }}
            </div><br>

            <div class="mb-3">
                <label class="col-form-label"><b>Status Pelaksanaan 2022
                        :</b></label>
                {{ $tindakan->statusPelaksanaan }}
            </div><br>

            <div class="mb-3">
                <label class="col-form-label"><b>Catatan 2022
                        :</b></label>
                {{ $tindakan->catatan2022 }}
            </div><br>

            <div class="mb-3">
                <label class="col-form-label"><b>Sasaran 2022
                        :</b></label>
                {{ $tindakan->sasaran2022 }}
            </div><br>

            <div class="mb-3">
                <label class="col-form-label"><b>Pencapaian 2022
                        :</b></label>
                {{ $tindakan->pencapaian2022 }}
            </div><br>
            <br>
        </div>


    </body>

</div>
