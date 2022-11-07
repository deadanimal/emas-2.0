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
                    <span><b>Senarai KIR & AIR Mengikut Negeri, Daerah Dan Kampung</b></span>

                </div>
            </div>

        </div>


        <hr style="width:100%;text-align:center;">


        {{-- <div class="row g-3" style="width: 100%">
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
        </div> --}}

        <div class="row g-3" style="width: 100%">
            <div class="col-sm">
                <select class="form-select search">
                    <option selected disabled hidden value="null">NEGERI</option>
                    @foreach ($negeris as $negeri)
                        <option value="{{ $negeri->id }}">{{ $negeri->name }}</option>
                    @endforeach
                </select>
            </div>



            <div class="col-sm">

                <select class="form-select search">
                    <option selected disabled hidden value="null">DAERAH</option>
                    <option disabled value="null">Sila Pilih Negeri</option>
                </select>
            </div>

            <div class="col-sm">

                <select class="form-select search">
                    <option selected disabled hidden value="null">KAMPUNG</option>
                    <option disabled value="null">Sila Pilih Daerah</option>
                </select>
            </div>
        </div>



        <hr style="width:100%;text-align:center;">


        <div class="container">
            <div class="row">
                <div class="col-12 table-responsive">
                    <table class="table table-bordered user_datatable" id="example">
                        <thead>
                            <tr>
                                <th>Negeri</th>
                                <th>Daerah</th>
                                <th>Kampung</th>
                                <th>Jumlah Kir</th>
                                <th>Jumlah Air</th>
                            </tr>
                        </thead>
                        <tbody class="list myTable" id="searchUpdateTable">
                            @foreach ($negeris as $negeri)
                                @foreach ($negeri->daerah as $d)
                                    @foreach ($d->kampung as $k)
                                        <tr class="align-middle fokus">
                                            <td>
                                                {{ $negeri->name }}
                                            </td>
                                            <td>
                                                {{ $d->name }}
                                            </td>
                                            <td>
                                                {{ $k->name }}
                                            </td>
                                            <td>
                                                {{ $d->jumlah_kir }}
                                            </td>
                                            <td>
                                                {{ $d->jumlah_air }}
                                            </td>
                                        </tr>
                                    @endforeach
                                @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

    <script>
        $(".search").change(function() {
            var result = [];
            jQuery.each($(".search"), function(key, val) {
                result.push(val.value);
            });

            $.ajax({
                method: "POST",
                url: "/KT/search_senarai",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "result": result,
                },
            }).done(function(response) {
                console.log(response);
                $("#searchUpdateTable").html('');
                // $("#searchUpdateTable2").html('');

                response.forEach(el => {
                    $("#searchUpdateTable").append(`
                    <tr class="align-middle">
                        <td>

                            <div class="d-flex align-items-center" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-` + el.id + `">

                                    <div class="ms-2"><b>` + el.namaPemacu + `</b></div>
                            </div>
                        </td>
                        <td align="right">

                            <div>

                                    <a class="btn btn-primary" style="border-radius: 38px"
                                        href="/PPD/pemacu/` + el.id + `/edit"><i class="fas fa-edit"></i>
                                    </a>

                                    <button type="submit" onclick="myFunction({{ `+el.id+` }})" class="btn btn-danger"
                                        style="border-radius: 38px">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                        </td>

                    </tr>

                    `);


                });
            });


        });
    </script>

    {{-- <script>
        $("#negeri").change(function() {
            var negeri_id = $(this).val();
            var daerahs = @json($daerahs->toArray());
            console.log($daerahs);

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
    </script> --}}
    <script>
        $(document).ready(function() {
            // Setup - add a text input to each footer cell
            $('#example thead tr')
                .clone(true)
                .addClass('filters')
                .appendTo('#example thead');

            var table = $('#example').DataTable({
                orderCellsTop: true,
                fixedHeader: true,
                initComplete: function() {
                    var api = this.api();

                    // For each column
                    api
                        .columns()
                        .eq(0)
                        .each(function(colIdx) {
                            // Set the header cell to contain the input element
                            var cell = $('.filters th').eq(
                                $(api.column(colIdx).header()).index()
                            );
                            var title = $(cell).text();
                            $(cell).html('<input type="text" placeholder="' + title + '" />');

                            // On every keypress in this input
                            $(
                                    'input',
                                    $('.filters th').eq($(api.column(colIdx).header()).index())
                                )
                                .off('keyup change')
                                .on('change', function(e) {
                                    // Get the search value
                                    $(this).attr('title', $(this).val());
                                    var regexr =
                                        '({search})'; //$(this).parents('th').find('select').val();

                                    var cursorPosition = this.selectionStart;
                                    // Search the column for that value
                                    api
                                        .column(colIdx)
                                        .search(
                                            this.value != '' ?
                                            regexr.replace('{search}', '(((' + this.value +
                                                ')))') :
                                            '',
                                            this.value != '',
                                            this.value == ''
                                        )
                                        .draw();
                                })
                                .on('keyup', function(e) {
                                    e.stopPropagation();

                                    $(this).trigger('change');
                                    $(this)
                                        .focus()[0]
                                        .setSelectionRange(cursorPosition, cursorPosition);
                                });
                        });
                },
            });
        });
    </script>
@endsection
