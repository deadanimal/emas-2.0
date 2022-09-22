@extends('base')
@section('content')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <div class="container">
        <div class="mb-4 text-center">
            <H2>PELAKSANAAN PROGRAM PEMBASMIAN
                KEMISKINAN TEGAR KELUARGA MALAYSIA
                (BMTKM)</H2>
        </div>

        <br>

        <div class="col">
            <div class="row align-items-center">
                <div class="col col-lg-8">
                    <span><b>Senarai Kemasukan Data KIR & AIR</b></span>
                    <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                        href="/kemasukanData/bahagian">
                        <span class="fas fa-plus-circle"></span>&nbsp;Tambah</a>


                    <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white"
                        onClick="window.location.reload();">
                        <span class="fas fa-history"></span></a>
                </div>

            </div>
        </div>

        <br>

        <div class="table-responsive scrollbar">
            <table class="table table-bordered user_datatable" id="example">
                <thead class="table-light">
                    <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Kategori</th>
                        <th colspan="1">Nama</th>
                        <th scope="col">No Kad Pengenalan</th>
                        <th colspan="1">Status</th>
                        <th scope="col">Tindakan</th>
                    </tr>
                </thead>

                <tbody class="list" id="myTable">
                    @foreach ($profils as $profil)
                        <tr class="align-middle senarai">
                            <td>{{ $loop->iteration }}.</td>
                            <td>{{ $profil->kategori }}</td>
                            <td>{{ $profil->nama }}</td>
                            <td>{{ $profil->no_kad_pengenalan }}</td>
                            <td>{{ $profil->status_miskin }}</td>

                            <td>
                                <a class="btn btn-primary" style="border-radius: 38px"
                                    href="/kemasukanData/{{ $profil->id }}/edit/"><i class="fas fa-edit"></i>
                                </a>

                                <form action="/kemasukanData/{{ $profil->id }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger" style="border-radius: 38px">
                                        <i class="fas fa-trash"></i>
                                    </button>
                                    <p id="ppd"></p>
                                </form>

                            </td>
                        </tr>
                    @endforeach

                </tbody>

            </table>


        </div>

        {{-- <script>
            $(document).ready(function() {
                $('#example').DataTable();
            });

            $('#example').dataTable({
                "language": {
                    "search": "Carian:",
                    "zeroRecords": "Rekod tidak dijumpai",
                    "lengthMenu": "Lihat _MENU_ ",
                    "info": "Menunjukkan _START_ dari _END_ daripada _TOTAL_",
                    "infoEmpty": "Menunjukkan 0 dari 0 daripada 0",
                    "paginate": {
                        "first": "Pertama",
                        "last": "Terakhir",
                        "next": "Seterusnya",
                        "previous": "Sebelumnya"
                    },

                }
            });
        </script> --}}

        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

        <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
        <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>

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
    @endsection
