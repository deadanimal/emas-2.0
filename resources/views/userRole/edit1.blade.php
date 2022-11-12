@extends('base')
@section('content')
    <?php
    use App\Models\Rolesandpermission;
    ?>

    <div class="container">
        <div class="mb-4 text-center">
            <H2>EXECUTIVE DASHBOARD</H2>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header" style="background-color:#047FC3;">
                        <b class="text-white">{{ $permissions->name }}</b>
                    </div>
                    <div class="card-body">
                        <form action="/ED/bahagian/{{ $permissions->id }}" method="POST">
                            @method('POST')
                            @csrf
                            <div class="card-body pt-0">
                                <div class="row">
                                    <div class="row">
                                        <label for="name">Nama:</label>
                                        <div>
                                            <input class="form-control mb-3" type="text" name="name"
                                                value="{{ $permissions->name }}" />

                                        </div>
                                    </div>


                                    <div class="row">

                                        <div class="col" style="text-align: right">
                                            <a class="btn btn-falcon-default btn-sm"
                                                style="background-color: white; color:#047FC3" href="/ED/bahagian/senarai">
                                                <span class="fas fa-times-circle"></span>&nbsp;Batal
                                            </a>
                                            <button class="btn btn-falcon-default btn-sm"
                                                style="background-color: #047FC3; color:white;" type="submit"
                                                value="Save"
                                                onclick="return confirm('Adakah anda mahu menyimpan data ini?')"><span
                                                    class="fas fa-save"></span>&nbsp;Simpan
                                            </button>
                                        </div>
                                    </div>

                                </div>
                            </div><br>

                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="../../assets/js/plugins/datatables.js"></script>
    <script>
        function active(key) {
            var a = document.getElementById('switch' + key);
            var b = document.getElementById('label' + key);

            if (a.checked) {
                b.innerHTML = "Dibenarkan";
            } else {
                b.innerHTML = "Tidak dibenarkan";
            }
        }
    </script>

@stop
