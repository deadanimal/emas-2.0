@extends('base')
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

        <div class="row g-3" style="width: 70%">
            <div class="col-sm">

                <select class="form-select search">
                    <option selected disabled hidden value="null">NEGERI</option>

                    {{-- @foreach ($fokus as $fokus)
                        <option value="{{ $fokus->id }}">{{ $fokus->namaFokus }}</option>
                    @endforeach --}}

                </select>
            </div>



            <div class="col-sm">

                <select class="form-select search">
                    <option selected disabled hidden value="null">DAERAH</option>
                    {{-- @foreach ($perkara as $perkara)
                        <option value="{{ $perkara->id }}">{{ $perkara->namaPerkara }}</option>
                    @endforeach --}}

                </select>
            </div>

            <div class="col-sm">

                <select class="form-select search">
                    <option selected disabled hidden value="null">KAMPUNG</option>

                    {{-- @foreach ($list as $list)
                        <option value="{{ $list->id }}">Bab {{ $list->noBab }}. {{ $list->namaBab }}</option>
                    @endforeach --}}

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
