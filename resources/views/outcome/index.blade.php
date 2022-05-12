@extends('base')
@section('content')
    <div class="container">
        <br>

        <div class="mb-4 text-center">
            <H2>PELAN PELAKSANAAN DASAR</H2>
        </div>

        <br>

        <span><b>Outcome Nasional</b></span>
        <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white" href="/outcome/create">
            <span class="fas fa-plus-circle"></span>&nbsp;Tambah
        </a>

        <hr style="width:100%;text-align:center;">

        <select class="form-select" style="width:30%" aria-label="Default select example">
            <option selected disabled hidden>PILIH BIDANG KEUTAMAAN</option>
            @foreach ($list as $list)
                <option value="{{ $list->id }}">{{ $list->keteranganBidang }}</option>
            @endforeach
        </select>

        <div class="table-responsive scrollbar">
            <table class="table table-hover table-striped overflow-hidden">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($outcome as $outcome)
                        <tr class="align-middle">
                            <td class="text-nowrap">
                                <div class="d-flex align-items-center">
                                    <div class="ms-2"><b>{{ $outcome->keteranganOutcome }}</b></div>
                                </div>
                            </td>

                            <td align="right">
                                <div>
                                    {{-- <form action="{{ route('outcome.destroy', $outcome->id) }}" method="POST"> --}}

                                    <a class="btn btn-primary" style="border-radius: 38px"
                                        href="{{ route('outcome.edit', $outcome->id) }}"><i class="fas fa-edit"></i>
                                    </a>

                                    {{-- @csrf
                                        @method('DELETE') --}}

                                    <button type="button" onclick="myFunction({{ $outcome->id }})" class="btn btn-danger"
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
        function myFunction(id) {


            let alert = "Adakah anda mahu membuang data?";
            if (confirm(alert) == true) {
                $.ajax({
                    method: "DELETE",
                    url: "/outcome/" + id,
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
