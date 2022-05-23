@extends('base')
@section('content')
    <div class="container">
        <br>

        <div class="mb-4 text-center">
            <H2>PELAN PELAKSANAAN DASAR</H2>
        </div>

        <br>

        <span><b>Bab</b></span>
        <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white" href="/bab/create">
            <span class="fas fa-plus-circle"></span>&nbsp;Tambah
        </a>

        <hr style="width:100%;text-align:center;">

        <select class="form-select searchBab" style="width:30%" aria-label="Default select example">
            <option selected disabled hidden>PILIH TEMA/PEMANGKIN DASAR</option>
            <option value="1">TEMA</option>
            <option value="2">PEMANGKIN DASAR</option>
        </select>

        <div class="table-responsive scrollbar">
            <table class="table table-hover table-striped overflow-hidden">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody id="tablebody">
                    @foreach ($bab as $bab)
                        <tr class="align-middle">
                            <td class="text-nowrap">
                                <div class="d-flex align-items-center" data-bs-toggle="modal" data-bs-target="#error-modal-{{ $bab->id }}">
                                    <div class="ms-2"><b>{{ $bab->namaBab }}</b></div>
                                </div>
                            </td>

                            <div class="modal fade" id="error-modal-{{ $bab->id }}" tabindex="-1" role="dialog" aria-hidden="true">
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
                                                        <label class="col-form-label">Bab:</label>
                                                        <label class="form-control" disabled="disabled">{{ $bab->namaBab }}</label>

                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label">No Bab:</label>
                                                        <label class="form-control" disabled="disabled">{{ $bab->noBab }}</label>

                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label">Keterangan:</label>
                                                        <label class="form-control" disabled="disabled">{{ $bab->keteranganBab }}</label>
                                                    </div>
                                                </form>
                                                <br>
                                            </div>

                                        </div>

                                    </div>
                                </div>
                            </div>

                            <td align="right">
                                <div>
                                    {{-- <form action="{{ route('bab.destroy', $bab->id) }}" method="POST"> --}}

                                    <a class="btn btn-primary" style="border-radius: 38px"
                                        href="{{ route('bab.edit', $bab->id) }}"><i class="fas fa-edit"></i>
                                    </a>
                                    {{-- @csrf
                                        @method('DELETE') --}}

                                    <button type="submit" onclick="myFunction({{ $bab->id }})" class="btn btn-danger"
                                        style="border-radius: 38px">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <p id="ppd"></p>


                                    {{-- </form> --}}
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>



    </div>

    <script>
        $('.searchBab').change(function(e) {
            let val = this.value;
            console.log(val);
            var bab = @json($bab->toArray());
            //tema
            $("#tablebody").html('');
            if (val == 1) {
                bab.forEach(e => {
                    if (e.pemangkin_id == 1) {
                        $("#tablebody").append(`
                <tr class="align-middle">
                        <td class="text-nowrap">
                            <div class="d-flex align-items-center">
                                <div class="ms-2"><b>` + e.keteranganBab + `</b></div>
                            </div>
                        </td>

                        <td align="right">
                            <div>
                                <form action="/bab/` + e.id + `" method="POST">

                                    <a class="btn btn-primary" style="border-radius: 38px"
                                        href="/bab/` + e.id + `"><i
                                            class="fas fa-edit"></i>
                                    </a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" onclick="myFunction()" class="btn btn-danger"
                                        style="border-radius: 38px">
                                        <i class="fas fa-trash"></i>
                                    </button>

                                </form>
                            </div>
                        </td>
                    </tr>
                `);
                    }
                });
            }

            if (val == 2) {
                bab.forEach(e => {
                    if (e.pemangkin_id == 2) {
                        $("#tablebody").append(`
                <tr class="align-middle">
                        <td class="text-nowrap">
                            <div class="d-flex align-items-center">
                                <div class="ms-2"><b>` + e.keteranganBab + `</b></div>
                            </div>
                        </td>

                        <td align="right">
                            <div>
                                <form action="/bab/` + e.id + `" method="POST">

                                    <a class="btn btn-primary" style="border-radius: 38px"
                                        href="/bab/` + e.id + `"><i
                                            class="fas fa-edit"></i>
                                    </a>

                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" onclick="myFunction()" class="btn btn-danger"
                                        style="border-radius: 38px">
                                        <i class="fas fa-trash"></i>
                                    </button>

                                </form>
                            </div>
                        </td>
                    </tr>
                `);
                    }
                });
            }

        });

        function myFunction(id) {


            let alert = "Adakah anda mahu membuang data?";
            if (confirm(alert) == true) {
                $.ajax({
                    method: "DELETE",
                    url: "/bab/" + id,
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
