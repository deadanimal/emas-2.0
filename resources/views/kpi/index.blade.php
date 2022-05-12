@extends('base')
@section('content')
    <div class="container">
        <br>

        <div class="mb-4 text-center">
            <H2>PELAN PELAKSANAAN DASAR</H2>
        </div>

        <br>

        <span><b>KPI Nasional</b></span>
        <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white" href="/kpi/create">
            <span class="fas fa-plus-circle"></span>&nbsp;Tambah
        </a>

        <hr style="width:100%;text-align:center;">

        <div class="row">
            <div class="col">
                <select class="form-select" style="width:70%" aria-label="Default select example">
                    <option selected disabled hidden>PILIH OUTCOME NASIONAL</option>
                    @foreach ($list as $list)
                        <option value="{{ $list->id }}">{{ $list->keteranganOutcome }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col" style="text-align: right">
                <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                    href="/markah/create">
                    &nbsp;Kemas Kini Markah
                </a>
            </div>

        </div>


        <div class="table-responsive scrollbar">
            <table class="table table-hover table-striped overflow-hidden">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kpi as $kpi)
                        <tr class="align-middle">
                            <td class="text-nowrap">
                                <div class="d-flex align-items-center">
                                    <div class="ms-2"><b>{{ $kpi->keteranganKpi }}</b></div>
                                </div>
                            </td>

                            <td align="right">
                                <div>
                                    {{-- <form action="{{ route('kpi.destroy', $kpi->id) }}" method="POST"> --}}

                                    <a class="btn btn-primary" style="border-radius: 38px"
                                        href="{{ route('kpi.edit', $kpi->id) }}"><i class="fas fa-edit"></i>
                                    </a>

                                    {{-- @csrf
                                        @method('DELETE') --}}

                                    <button type="submit" onclick="myFunction({{ $kpi->id }})" class="btn btn-danger"
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
                    url: "/kpi/" + id,
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
