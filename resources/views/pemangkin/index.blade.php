@extends('base')
@section('content')
    <div class="container">
        <br>
        <div class="mb-4 text-center">
            <H2>PELAN PELAKSANAAN DASAR</H2>
        </div>

        <br>

        <span><b>Tema/Pemangkin Dasar</b></span>
        @role('admin|bahagian|kementerian')
            <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white" href="/pemangkin/create">
                <span class="fas fa-plus-circle"></span>&nbsp;Tambah
            </a>
        @endrole

        <hr style="width:100%;text-align:center;">

        <select class="form-select searchKategori" style="width:30%" aria-label="Default select example">
            <option selected disabled hidden>PILIH KATEGORI</option>
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
                    @foreach ($pemangkindasar as $pemangkin)
                        <tr class="align-middle">
                            <td class="text-nowrap">
                                <div class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#error-modal-{{ $pemangkin->id }}">
                                    <div class="ms-2"><b>{{ $pemangkin->namaTema }}</b></div>
                                </div>
                            </td>

                            <div class="modal fade" id="error-modal-{{ $pemangkin->id }}" tabindex="-1" role="dialog"
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
                                                        <label class="col-form-label">Nama Tema/Pemangkin:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $pemangkin->namaTema }}</label>

                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label">Keterangan:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $pemangkin->keteranganTema }}</label>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="modal-footer">

                                        </div>
                                    </div>
                                </div>
                            </div>

                            @role('admin|bahagian|kementerian')
                                <td align="right">
                                    <div>
                                        {{-- <form action="{{ route('pemangkin.destroy', $pemangkin->id) }}" method="POST"> --}}

                                        <a class="btn btn-primary" style="border-radius: 38px"
                                            href="{{ route('pemangkin.edit', $pemangkin->id) }}"><i
                                                class="fas fa-edit"></i>
                                        </a>

                                        {{-- @csrf --}}
                                        {{-- @method('DELETE') --}}

                                        <button type="button" onclick="myFunction({{ $pemangkin->id }})"
                                            class="btn btn-danger" style="border-radius: 38px">
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
        $('.searchKategori').change(function(e) {
            let val = this.value;
            console.log(val);
            var pemangkin = @json($pemangkindasar->toArray());
            //tema
            $("#tablebody").html('');
            if (val == 1) {
                pemangkin.forEach(e => {
                    if (e.kategori_id == 1) {
                        $("#tablebody").append(`
                <tr class="align-middle">
                        <td class="text-nowrap">
                            <div class="d-flex align-items-center">
                                <div class="ms-2"><b>` + e.namaTema + `</b></div>
                            </div>
                        </td>

                        <td align="right">
                            <div>
                                <form action="/pemangkin/` + e.id + `" method="POST">

                                    <a class="btn btn-primary" style="border-radius: 38px"
                                        href="/pemangkin/` + e.id + `"><i
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
                pemangkin.forEach(e => {
                    if (e.kategori_id == 2) {
                        $("#tablebody").append(`
                <tr class="align-middle">
                        <td class="text-nowrap">
                            <div class="d-flex align-items-center">
                                <div class="ms-2"><b>` + e.namaTema + `</b></div>
                            </div>
                        </td>

                        <td align="right">
                            <div>
                                <form action="/pemangkin/` + e.id + `" method="POST">

                                    <a class="btn btn-primary" style="border-radius: 38px"
                                        href="/pemangkin/` + e.id + `"><i
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
                    url: "/pemangkin/" + id,
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

            // e.preventDefault();
            // console.log(e);
            // let text = confirm("Adakah anda mahu membuang data?");
            // if (text) {
            //     alert("Berjaya di buang!");
            // } else {
            //     alert("Dibatalkan!");
            // }
            // document.getElementById("ppd").innerHTML = text;
        }
    </script>
@endsection
