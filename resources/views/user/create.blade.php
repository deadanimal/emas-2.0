@extends('base')
@section('content')
    <div class="container">

        <div class="mb-4 text-center">
            <H2>Daftar Pengguna</H2>
        </div>

        <div class="col-12 ">
            <div class="col-12">
                <form method="POST" action="/user">
                    @csrf
                    <div class="card mt-4" id="basic-info">
                        <div class="card-header" style="background-color:#047FC3;">
                            <h5 class="text-white">Membuat Akaun Pengguna</h5>
                        </div>
                        <br>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-6">
                                    <label for="">Nama :</label>
                                    <div class="input-group">
                                        <input class="form-control mb-3" type="text" name="name"
                                            :value="old('name')" style="text-transform: uppercase" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="">E-mel :</label>
                                    <div class="input-group">
                                        <input class="form-control mb-3" type="email" name="email"
                                            :value="old('email')" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label for="role">Peranan :</label>
                                    <div class="form-group">
                                        {{-- @role('PPD')
                                            <select class="form-control mb-3" name="role" id="pilih1" required
                                                readonly>
                                                <option value="4" selected>PPD</option>
                                            </select>
                                        @else --}}
                                        <select class="form-control mb-3" name="role" id="pilih1" required>
                                            <option value="" selected hidden>Sila pilih</option>
                                            @foreach ($role as $role)
                                                <option value="{{ $role->name }}">{{ ucfirst(trans($role->name)) }}
                                                </option>
                                            @endforeach
                                        </select>
                                        {{-- @endrole --}}
                                    </div>
                                </div>

                            </div>
                            <div class="row">

                                <div class="col-6">
                                    <label for="">Kata Laluan :</label>
                                    <div class="input-group">
                                        <input class="form-control mb-3" type="password" name="password" required
                                            minlength="8">
                                    </div>
                                </div>


                            </div>
                            <div class="col" style="text-align: right">
                                <button class="btn btn-falcon-default btn-sm"
                                    style="background-color: #047FC3; color:white;" type="submit" value="Save"
                                    onclick="return confirm('Adakah anda mahu menyimpan data ini?')"><span
                                        class="fas fa-save"></span>&nbsp;Simpan
                                </button>
                            </div>
                        </div>

                    </div>
                </form>

            </div>
        </div>



        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
        <script type="text/javascript">
            $(function() {
                $("#pilih1").change(function() {
                    if ($(this).val() == "3") {
                        $("#pilih2").show();
                    } else {
                        $("#pilih2").hide();
                    }
                });
            });
        </script>
    @stop
</div>
