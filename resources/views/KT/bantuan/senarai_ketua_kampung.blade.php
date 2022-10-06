@extends('base-kt')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>PELAKSANAAN PROGRAM PEMBASMIAN
                KEMISKINAN TEGAR KELUARGA MALAYSIA
                (BMTKM)</H2>
        </div>

        <br>

        <div class="col">
            <div class="row align-items-center">
                <div class="col col-lg-8">
                    <span><b>Senarai Nama Ketua Kampung</b></span>
                    <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                        href="{{ route('ketuaKampung.create') }}">
                        <span class="fas fa-plus-circle"></span>&nbsp;Tambah
                    </a>
                    <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                        onClick="window.location.reload();">
                        <span class="fas fa-history"></span>
                    </a>
                </div>

            </div>
        </div>

        <hr style="width:100%;text-align:center;">

        <div class="row g-3" style="width: 100%">
            <div class="col-sm">
                <select class="form-select lokaliti" id="negeri">
                    <option selected disabled hidden value="null">NEGERI</option>
                    @foreach ($negeris as $negeri)
                        <option value="{{ $negeri->id }}">{{ $negeri->name }}</option>
                    @endforeach
                </select>
            </div>



            <div class="col-sm">

                <select class="form-select lokaliti" id="daerah">
                    <option selected disabled hidden value="null">DAERAH</option>
                    <option disabled value="null">Sila Pilih Negeri</option>
                </select>
            </div>

            <div class="col-sm">

                <select class="form-select lokaliti" id="kampung">
                    <option selected disabled hidden value="null">KAMPUNG</option>
                    <option disabled value="null">Sila Pilih Daerah</option>
                </select>
            </div>
        </div>

        <hr style="width:100%;text-align:center;">



        <div class="table-responsive scrollbar">
            <table class="table table-bordered user_datatable" id="example">
                <thead>
                    <th scope="col">No.</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Tarikh Mula Khidmat</th>
                    <th scope="col">Tarikh Akhir Khidmat</th>
                    <th scope="right">Tindakan</th>
                </thead>

                <tbody class="list" id="myTable">
                    @foreach ($ketuakampungs as $kk)
                        <tr class="text-center ">
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $kk->name }}</td>
                            <td>{{ $kk->tahun_mula }}</td>
                            <td>{{ $kk->tahun_akhir }}</td>
                            <td>
                                <a class="btn btn-primary" style="border-radius: 38px" href=""><i
                                        class="fas fa-edit"></i>
                                </a>

                                <button type="submit" class="btn btn-danger" style="border-radius: 38px">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>


            </table>


        </div>


    </div>

    <script>
        $("#negeri").change(function() {
            var negeri_id = $(this).val();
            var daerahs = @json($daerahs->toArray());
            $("#daerah").html('<option selected disable hidden value="null">Sila Pilih</option>');
            daerahs.forEach(daerah => {
                if (daerah.negeri_id == negeri_id) {
                    $("#daerah").append(`
                        <option value="` + daerah.id + `">` + daerah.name + `</option>
                    `);
                }
            });
        });
        $("#daerah").change(function() {
            var daerah_id = $(this).val();
            var kampungs = @json($kampungs->toArray());
            $("#kampung").html('<option selected disable hidden value="null">Sila Pilih</option>');
            kampungs.forEach(kampung => {
                if (kampung.daerah_id == daerah_id) {
                    $("#kampung").append(`
                        <option value="` + kampung.id + `">` + kampung.name + `</option>
                    `);
                }
            });
        });
        $(".lokaliti").change(function() {
            let negeri = $("#negeri").val();
            let daerah = $("#daerah").val();
            let kampung = $("#kampung").val();
            $.ajax({
                method: "POST",
                url: "/find-by-lokaliti",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "negeri": negeri,
                    "daerah": daerah,
                    "kampung": kampung,
                },
            }).done(function(ketuaKampung) {
                $("#myTable").html('');
                ketuaKampung.forEach(kk => {
                    $("#myTable").append(`
                        <tr class="text-center ">
                            <td>1</td>
                            <td>` + kk.name + ` </td>
                            <td>` + kk.tahun_mula + `</td>
                            <td>` + kk.tahun_akhir + `</td>
                            <td>
                                <a class="btn btn-primary" style="border-radius: 38px" href=""><i
                                        class="fas fa-edit"></i>
                                </a>

                                <button type="submit" class="btn btn-danger" style="border-radius: 38px">
                                    <i class="fas fa-trash"></i>
                                </button>
                            </td>
                        </tr>
                    `);
                });
                console.log(response);
            });

        });
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                ]


            });
        });
    </script>
@endsection
