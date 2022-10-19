@extends('base-mpb')
@section('content')
    @can('Approver')
        <div class="container">
            <div class="mb-4 text-center">
                <H2>ASSIGN THRUST</H2>
            </div>





            <div class="table-responsive scrollbar">
                <table class="table table-bordered user_datatable" id="example">
                    <thead>
                        <tr>
                            <th scope="col">Name</th>

                            <th scope="col">Action</th>
                        </tr>
                    </thead>

                    <tbody class="list" id="myTable">
                        @foreach ($users as $user)
                            <tr class="align-middle user">
                                <td>
                                    <div class="d-flex align-items-center" data-bs-toggle="modal"
                                        data-bs-target="#error-modal-{{ $user->id }}">

                                        <div class="ms-2"><b>{{ $user->name }}</b></div>
                                    </div>
                                </td>



                                <td align="right">
                                    <div>
                                        <a class="btn btn-primary" style="border-radius: 38px"
                                            href="/MPB/mpb/{{ $user->id }}/edit"><i class="fas fa-edit"></i>
                                        </a>


                                    </div>
                                </td>

                            </tr>
                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>
    @endcan


    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endsection
