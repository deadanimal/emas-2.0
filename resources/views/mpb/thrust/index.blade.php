@extends('base')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>MALAYSIA PRODUCTIVITY BLUEPRINT</H2>
        </div>

        <br>

        <span><b>Thrust Information</b></span>
        @role('admin|kementerian')
            <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white" href="/thrust/create">
                <span class="fas fa-plus-circle"></span>&nbsp;Add</a>
        @endrole
        <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
            onClick="window.location.reload();">
            <span class="fas fa-history"></span></a>

        {{-- <hr style="width:100%;text-align:center;"> --}}

        <div class="table-responsive scrollbar">
            <table class="table table-hover table-striped overflow-hidden">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($thrust as $thru)
                        <tr class="align-middle">
                            <td class="text-nowrap">
                                <div class="d-flex align-items-center" data-bs-toggle="modal"
                                    data-bs-target="#error-modal-{{ $thru->id }}">
                                    <div class="ms-2"><b>{{ $thru->namaThrust }}</b></div>
                                </div>
                            </td>

                            <div class="modal fade" id="error-modal-{{ $thru->id }}" tabindex="-1" role="dialog"
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
                                                        <label class="col-form-label" for="namaThrust">Thrust
                                                            Information:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $thru->namaThrust }}</label>

                                                    </div>
                                                    <div class="mb-3">
                                                        <label class="col-form-label">Keterangan:</label>
                                                        <label class="form-control"
                                                            disabled="disabled">{{ $thru->keteranganThrust }}</label>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <br>
                                    </div>
                                </div>
                            </div>

                            <td align="right">
                                @role('admin|kementerian')
                                    <div>
                                        {{-- <form action="{{ route('thrust.destroy', $thru->id) }}" method="POST"> --}}

                                        <a class="btn btn-primary" style="border-radius: 38px"
                                            href="{{ route('thrust.edit', $thru->id) }}"><i class="fas fa-edit"></i>
                                        </a>
                                        {{-- @csrf
                                        @method('DELETE') --}}

                                        <button type="submit" onclick="myFunction({{ $thru->id }})" class="btn btn-danger"
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
                    url: "/thrust/" + id,
                    data: {
                        "_token": "{{ csrf_token() }}",
                    }
                });

                alert = "Berjaya di buang!";
                location.href = "/thrust";

            } else {
                alert("Dibatalkan!");
            }
            document.getElementById("ppd").innerHTML = text;
        }
    </script>
@endsection
