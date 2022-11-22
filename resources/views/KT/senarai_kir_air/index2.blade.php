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
                    <span><b>Senarai KIR & AIR Mengikut Negeri, Daerah dan Kampung</b></span>

                </div>
            </div>
        </div>


        <hr style="width:100%;text-align:center;">

        <div class="row g-3" style="width: 100%">
            <div class="col">
                <select class="form-select search" id="negeri" name="negeri_id">
                    <option selected disabled hidden value="null">NEGERI</option>
                    @foreach ($negeris as $negeri)
                        <option value="{{ $negeri->id }}">{{ $negeri->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col">
                <select class="form-select search" id="daerah" name="daerah_id">
                    <option selected disabled hidden value="null">DAERAH</option>
                    <option disabled>Sila Pilih Negeri</option>
                </select>
            </div>

            <div class="col">
                <select class="form-select search" id="kampung" name="kampung_id">
                    <option selected disabled hidden value="null">KAMPUNG</option>
                    <option disabled>Sila Pilih Daerah</option>
                </select>
            </div>

        </div>

        <hr style="width:100%;text-align:center;">

        <div class="table-responsive scrollbar">
            <table class="table table-bordered user_datatable" id="example">
                <thead>
                    <tr>
                        <th scope="col">Negeri</th>
                        <th scope="col">Daerah</th>
                        <th scope="col">Kampung</th>
                        <th scope="col">Jumlah KIR</th>
                        <th scope="col">Jumlah AIR</th>

                    </tr>
                </thead>

                <tbody class="list" id="searchUpdateTable">
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

    <script>
        $("#negeri").change(function() {
            var negeri_id = $(this).val();
            var daerahs = @json($daerahs->toArray());

            $("#daerah").html('');
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
            $("#kampung").html('');
            kampungs.forEach(kampung => {
                if (kampung.daerah_id == daerah_id) {
                    $("#kampung").append(`
                        <option value="` + kampung.id + `">` + kampung.name + `</option>
                    `);
                }
            });
        });
    </script>


    <script>
        $(document).ready(function() {
            $('#example').DataTable({



            });
        });
    </script>
@endsection
