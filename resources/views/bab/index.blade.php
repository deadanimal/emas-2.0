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
                                <div class="d-flex align-items-center">
                                    <div class="ms-2"><b>{{ $bab->keteranganBab }}</b></div>
                                </div>
                            </td>

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
