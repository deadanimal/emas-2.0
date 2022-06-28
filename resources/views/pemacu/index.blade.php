@extends('base')
@section('content')
    <div class="container">
        <br>

        <div class="mb-4 text-center">
            <H2>PELAN PELAKSANAAN DASAR</H2>
        </div>

        <br>

        <span><b>Pemacu Perubahan</b></span>
        <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white" href="/pemacu/create">
            <span class="fas fa-plus-circle"></span>&nbsp;Tambah
        </a>

        <hr style="width:100%;text-align:center;">


        <div class="row g-3" style="width: 70%">
            <div class="col-sm">

                <select class="form-select search">
                    <option selected disabled hidden value="null">PILIH FOKUS UTAMA</option>

                    @foreach ($fokus as $fokus)
                        <option value="{{ $fokus->id }}">{{ $fokus->namaFokus }}</option>
                    @endforeach

                </select>
            </div>



            <div class="col-sm">

                <select class="form-select search">
                    <option selected disabled hidden value="null">PILIH PERKARA UTAMA</option>

                    @foreach ($perkara as $perkara)
                    <option value="{{ $perkara->id }}">{{ $perkara->namaPerkara }}</option>
                    @endforeach

                </select>
            </div>

            <div class="col-sm">

                <select class="form-select search">
                    <option selected disabled hidden value="null">PILIH BAB</option>

                    @foreach ($list as $list)
                        <option value="{{ $list->id }}">Bab {{ $list->noBab }}. {{ $list->namaBab }}</option>
                    @endforeach

                </select>
            </div>
        </div>




        <div class="table-responsive scrollbar">
            <table class="table table-hover table-striped overflow-hidden" value="null">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody id="searchUpdateTable">
                    @foreach ($pemacus as $pemacu)
                        <tr class="align-middle">
                            <td>
                                <div class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#error-modal-{{ $pemacu->id }}">
                                    <div class="ms-2"><b>{{ $pemacu->namaPemacu }}</b></div>
                                </div>
                            </td>

                            <div class="modal fade" id="error-modal-{{ $pemacu->id }}" tabindex="-1" role="dialog"
                                aria-hidden="true" value="null"="true">
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
                                                        <label class="col-form-label">Pemacu Perubahan:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $pemacu->namaPemacu }}</label>

                                                    </div>

                                                    <div class="mb-3">
                                                        <label class="col-form-label">Keterangan:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $pemacu->keteranganBab }}</label>
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
                                    {{-- <form action="{{ route('pemacu.destroy', $pemacu->id) }}" method="POST"> --}}

                                    <a class="btn btn-primary" style="border-radius: 38px"
                                        href="{{ route('pemacu.edit', $pemacu->id) }}"><i class="fas fa-edit"></i>
                                    </a>

                                    {{-- @csrf
                                        @method('DELETE') --}}
                                    <button type="submit" onclick="myFunction({{ $pemacu->id }})" class="btn btn-danger"
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
 $(".search").change(function() {
            var result = [];
            jQuery.each($(".search"), function(key, val) {
                result.push(val.value);
            });

            $.ajax({
                method: "POST",
                url: "/search_pemacu",
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
                                        href="/pemacu/` + el.id + `/edit"><i class="fas fa-edit"></i>
                                    </a>

                                    <button type="submit" onclick="myFunction({{ `+el.id+` }})" class="btn btn-danger"
                                        style="border-radius: 38px">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                </div>
                        </td>

                    </tr>

                    `);

                    // $("#searchUpdateTable2").append(`
                //     <div>

                //         <a class="btn btn-primary" style="border-radius: 38px"
                //             href="/pemacu/` + el.id + `/edit"><i class="fas fa-edit"></i>
                //         </a>

                //         <button type="submit" onclick="myFunction({{ `+el.id+` }})" class="btn btn-danger"
                //             style="border-radius: 38px">
                //             <i class="fas fa-trash"></i>
                //         </button>
                //     </div>
                // `);
                });
            });


        });

        function myFunction(id) {


            let alert = "Adakah anda mahu membuang data?";
            if (confirm(alert) == true) {
                $.ajax({
                    method: "DELETE",
                    url: "/pemacu/" + id,
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
