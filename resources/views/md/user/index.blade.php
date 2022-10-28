@extends('base-md')
@section('content')
    <?php
    use Spatie\Permission\Models\Role;
    ?>

    <div class="container">
        <div class="mb-4 text-center">
            <h2>MyDigital</h2>
        </div>

        <div class="col">
            <div class="row align-items-center">
                <div class="col col-lg-8">
                    <span><b>List of User</b></span>
                    <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                        href="/MD/user/create">
                        <span class="fas fa-plus-circle"></span>&nbsp;Register User</a>

                    <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                        onClick="window.location.reload();">
                        <span class="fas fa-history"></span></a>
                </div>

            </div>
        </div>
        <br>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="table-responsive">
                        <table class="table table-bordered user_datatable" id="example">

                            <thead>
                                <tr>
                                    <th class="text-center font-weight-bolder opacity-7">No.</th>
                                    <th class="font-weight-bolder opacity-7">Name</th>
                                    <th class="text-center font-weight-bolder opacity-7">Email</th>
                                    <th class="text-center font-weight-bolder opacity-7">Agency</th>
                                    <th class="text-center font-weight-bolder opacity-7">Profile</th>


                                </tr>
                            </thead>
                            <tbody class="list" id="myTable">

                                @foreach ($user as $key => $u)
                                    <tr class="align-middle user">
                                        <td class="text-sm text-center font-weight-normal">
                                            {{ $key + 1 }}</td>
                                        <td class="text-sm font-weight-normal">
                                            {{ $u['name'] }}</td>
                                        <td class="text-sm text-center font-weight-normal">
                                            {{ $u['email'] }}</td>
                                        <td class="text-sm text-center font-weight-normal">
                                            {{ $u['role'] }}
                                        <td class="text-sm text-center font-weight-normal"><a
                                                class="btn btn-info text-white" href="/MD/user/{{ $u->id }}/edit"
                                                style="color:black;">
                                                Update
                                            </a>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>


        </div>

    </div>

    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                dom: 'Bfrtip',
                buttons: [
                    'copyHtml5',
                    'excelHtml5',
                    'csvHtml5',
                    'pdfHtml5'
                ]


            });
        });
    </script>
@stop
