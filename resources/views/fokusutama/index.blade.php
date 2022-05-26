@extends('base')
@section('content')

    <div class="container">
        <br>
        <div class="mb-4 text-center">
            <H2>PELAN PELAKSANAAN DASAR</H2>
        </div>

        <br>

        <span><b>Fokus Utama</b></span>
        @role('admin')
            <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white" href="/fokusutama/create">
                <span class="fas fa-plus-circle"></span>&nbsp;Tambah</a>
        @endrole

        @role('admin|bahagian|menteri')
            <table class="table">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Tindakan</th>
                </tr>
                @foreach ($role as $r)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $r->name }}</td>
                        <td></td>
                    </tr>
                @endforeach
            </table>
        @endrole
        <hr style="width:100%;text-align:center;">

        <div class="table-responsive scrollbar">
            <table class="table table-hover table-striped overflow-hidden">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($fokusutama as $fokus)
                        <tr class="align-middle">
                            <td class="text-nowrap">
                                <div class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#error-modal-{{ $fokus->id }}">
                                    <div class="ms-2"><b>{{ $fokus->namaFokus }}</b></div>
                                </div>
                            </td>

                            <div class="modal fade" id="error-modal-{{ $fokus->id }}" tabindex="-1" role="dialog"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
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
                                                        <label class="col-form-label" for="namaFokus">Fokus Utama:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $fokus->namaFokus }}</label>

                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label">Keterangan:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $fokus->keteranganFokus }}</label>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>

                            @role('admin')
                                <td align="right">
                                    <div>
                                        {{-- <form action="{{ route('fokusutama.destroy', $fokus->id) }}" method="POST"> --}}

                                        <a class="btn btn-primary" style="border-radius: 38px"
                                            href="{{ route('fokusutama.edit', $fokus->id) }}"><i class="fas fa-edit"></i>
                                        </a>
                                        {{-- @csrf
                                        @method('DELETE') --}}

                                        <button type="submit" onclick="myFunction({{ $fokus->id }})" class="btn btn-danger"
                                            style="border-radius: 38px">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                        <p id="ppd"></p>

                                        {{-- </form> --}}
                                    </div>
                                </td>
                            @endrole
                        </tr>
                    @endforeach

                </tbody>

            </table>
        </div>



    </div>

    <script>
        function myFunction(id) {


            let alert = "Adakah anda mahu membuang data?";
            if (confirm(alert) == true) {
                $.ajax({
                    method: "DELETE",
                    url: "/fokusutama/" + id,
                    data: {
                        "_token": "{{ csrf_token() }}",
                    }
                });

                alert = "Berjaya di buang!";
                location.reload();

            } else {
                alert("Dibatalkan!");
            }
            document.getElementById("ppd").innerHTML = text;
        }
    </script>
@endsection
