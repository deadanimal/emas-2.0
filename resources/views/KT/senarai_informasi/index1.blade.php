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
                    <span><b>Senarai KIR & AIR Berdasarkan Program Mengikut Negeri, Daerah & Kampung</b></span>

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
                        <th scope="col">No.</th>
                        <th scope="col">Nama Penerima</th>
                        <th scope="col">Hubungan</th>
                        <th scope="col">No. Kad Pengenalan</th>
                        <th scope="col">Bantuan Yang Diterima</th>

                    </tr>
                </thead>

                {{-- <tbody class="list" id="myTable">
                        @foreach ($bantuans as $bantuan)
                            <tr class="align-middle bantuan">
                                <td>
                                    <div class="d-flex align-items-center" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-{{ $bantuan->id }}">

                                        <div class="ms-2"><b>{{ $bantuan->namaBantuan }}</b></div>
                                    </div>
                                </td>

                                <div class="modal fade" id="error-modal-{{ $bantuan->id }}" tabindex="-1" role="dialog"
                                    aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document"
                                        style="max-width: 500px">
                                        <div class="modal-content position-relative">
                                            <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                                                <button
                                                    class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                                    data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body p-0">

                                                <div class="p-4 pb-0">
                                                    <form>
                                                        <div class="mb-3">
                                                            <label class="col-form-label" for="namaBantuan">bantuan
                                                                Utama:</label>
                                                            <label class="form-control"
                                                                disabled="disabled">{{ $bantuan->namaBantuan }}</label>

                                                        </div>
                                                        <div class="mb-3">
                                                            <label class="col-form-label">Keterangan:</label>
                                                            <label class="form-control"
                                                                disabled="disabled">{{ $bantuan->keteranganbantuan }}</label>
                                                        </div>
                                                        <br>
                                                    </form>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <td align="right">
                                    <div>

                                        <a class="btn btn-primary" style="border-radius: 38px"
                                            href="{{ route('bantuan.edit', $bantuan->id) }}"><i class="fas fa-edit"></i>
                                        </a>


                                        <button type="submit" onclick="myFunction({{ $bantuan->id }})"
                                            class="btn btn-danger" style="border-radius: 38px">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        <p id="ppd"></p>

                                    </div>
                                </td>

                            </tr>
                        @endforeach

                    </tbody> --}}

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
