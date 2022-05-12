@extends('base')
@section('content')
    <div class="container">
        <br>
        <div class="mb-4 text-center">
            <H2>PELAN PELAKSANAAN DASAR</H2>
        </div>

        <br>

        <span><b>Fokus Utama</b></span>
        <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white" href="/fokusutama/create">
            <span class="fas fa-plus-circle"></span>&nbsp;Tambah</a>



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
                                <div class="d-flex align-items-center">
                                    <div class="ms-2"><b>{{ $fokus->keteranganFokus }}</b></div>
                                </div>
                            </td>

                            <td align="right">
                                <div>
                                    {{-- <form action="{{ route('fokusutama.destroy', $fokus->id) }}" method="POST"> --}}

                                    <a class="btn btn-primary" style="border-radius: 38px"
                                        href="{{ route('fokusutama.edit', $fokus->id) }}"><i class="fas fa-edit"></i>
                                    </a>
                                    {{-- @csrf
                                        @method('DELETE') --}}

                                    <button type="submit" onclick="myFunction({{ $fokus->id }})"
                                        class="btn btn-danger" style="border-radius: 38px">
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
