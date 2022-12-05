@extends('base')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>EXECUTIVE DASHBOARD</H2>
        </div>

        <div class="col">
            <div class="row align-items-center">
                <div class="col col-lg-8">
                    <span><b>Kemaskini Profil Pengguna</b></span>
                </div>
            </div>
        </div>

        <hr style="width:100%;text-align:center;">

        <div class="col-12">
            <div class="col-12">
                <form action="/ED/user/{{ $users->id }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="card mt-4" id="basic-info">

                        <br>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="row">
                                    <label for="name">Nama Pengguna:</label>
                                    <div>
                                        <input class="form-control mb-3" type="text" name="name"
                                            value="{{ $users->name }}" />

                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <label for="username">ID Pengguna:</label>
                                        <div>
                                            <input class="form-control mb-3" type="text" name="username"
                                                value="{{ $users->username }}" />

                                        </div>
                                    </div>

                                    <div class="col-6">
                                        <label for="email">E-mel:</label>
                                        <div>
                                            <input class="form-control mb-3" type="text" name="email"
                                                value="{{ $users->email }}" />

                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <label for="role">Dashboard:</label>
                                        <div>
                                            <div class="form-group">

                                                <select class="form-control mb-3" name="role" id="pilih1">

                                                    @foreach ($roles as $r)
                                                        <option value="{{ $r->name }}">{{ $r->name }}
                                                        </option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="permission">Peranan:</label>
                                        <div>
                                            <div class="form-group">
                                                <select class="form-select mb-3" name="permission" required>
                                                    <option selected disabled hidden value="null">Sila Pilih</option>
                                                    <option value="PPD - User">PPD - Kementerian / Agensi</option>
                                                    <option value="PPD - Penyelaras">PPD - Bahagian</option>
                                                    <option value="PPD - Admin">PPD - BPKP</option>
                                                    <option value="MPB - User">MPB - User</option>
                                                    <option value="MPB - Approver">MPB - Approver</option>
                                                    <option value="MPB - Admin">MPB - Admin</option>
                                                    <option value="KT - User">KT - Agensi</option>
                                                    <option value="KT - Penyelaras">KT - Bahagian</option>
                                                    <option value="KT - Admin">KT - Admin</option>
                                                    <option value="MD - User">MD - Kementerian / Agensi</option>
                                                    <option value="MD - Penyelaras">MD - Bahagian</option>
                                                    <option value="MD - Admin">MD - EPU</option>
                                                    <option value="ED - Admin">ED - SuperAdmin</option>
                                                    <option value="ED - User">ED - Pengurusan Atasan</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <label for="">Dalaman:</label>
                                        <div class="input-group">

                                            <select class="form-select mb-3" name="dalaman" required>
                                                <option @selected($users->dalaman == '1') value="1">Ya</option>
                                                <option @selected($users->dalaman == '0') value="0">Tidak</option>
                                            </select>
                                        </div>
                                    </div>


                                    <div class="col-6">
                                        <label for="organisasi_id">Organisasi:</label>
                                        <div>
                                            <div class="form-group">

                                                <select class="form-control mb-3" name="organisasi_id">

                                                    @foreach ($organisasi as $organ)
                                                        <option value="{{ $organ->id }}">{{ $organ->nama }}
                                                        </option>
                                                    @endforeach

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-6">
                                        <label for="status">Status:</label>
                                        <div>
                                            <select class="form-control" name="status">
                                                <option @selected($users->status == '1') value="1">Inactive</option>
                                                <option @selected($users->status == '0') value="0">Active</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">

                                    <div class="col" style="text-align: right">
                                        <a class="btn btn-falcon-default btn-sm"
                                            style="background-color: white; color:#047FC3" href="/ED/user">
                                            <span class="fas fa-times-circle"></span>&nbsp;Batal
                                        </a>
                                        <button class="btn btn-falcon-default btn-sm"
                                            style="background-color: #047FC3; color:white;" type="submit" value="Save"
                                            onclick="return confirm('Adakah anda mahu menyimpan data ini?')"><span
                                                class="fas fa-save"></span>&nbsp;Simpan
                                        </button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </form>

            </div>

        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oops!</strong> Input tidak mencukupi<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

    <script>
        $("#pilih1").change(function() {
            $("#pilih2").html('');

            var roles = @json($roles->toArray());
            // console.log(roles);
            // $("#pilih1").empty('');

            roles.forEach(roles => {
                if (roles.name == this.value) {
                    roles.permissions.forEach(permissions => {
                        $("#pilih2").append(`
                                <option value=" ` + permissions.name + ` ">
                                                     ` + permissions.name + `
                                </option>
                            `)
                    });

                }
            });




        })
    </script>
@endsection
