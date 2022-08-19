@extends('base')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>EXECUTIVE DASHBOARD</H2>
        </div>

        <div class="col">
            <div class="row align-items-center">
                <div class="col col-lg-8">
                    <span><b>Profil Pengguna</b></span>
                </div>
            </div>
        </div>

        <hr style="width:100%;text-align:center;">
        <br>

        <div class="form-floating;">
            <form action="/user/{{ $users->id }}" method="POST">
                @csrf
                @method('PUT')


                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="name">Nama:</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="name" value="{{ $users->name }}" />

                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="email">Emel:</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="email" value="{{ $users->email }}" />

                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="role">Agensi</label>
                    <div class="col-sm-10" style="width:30%">
                        <div class="form-group">

                            <select class="form-control" name="role" id="pilih1">

                                @foreach ($roles as $r)
                                    <option value="{{ $r->name }}">{{ $r->name }}
                                    </option>
                                @endforeach

                            </select>
                        </div>
                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="permission">Nama Agensi</label>
                    <div class="col-sm-10" style="width:30%">
                        <div class="form-group">

                            <select class="form-control" name="permission" id="pilih2">

                                {{-- @foreach ($permissions as $p)
                                <option value="{{ $p->name }}">{{ $p->name }}
                                </option>
                            @endforeach --}}

                            </select>
                        </div>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="created_at">Tarikh Daftar:</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="created_at" value="{{ $users->created_at }}" />

                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="">Status Akaun:</label>
                    <div class="col-sm-10" style="width:30%">
                        {{-- <input class="form-control" type="text" name="" value="{{ $users->created_at }}" /> --}}

                    </div>
                </div>

                <br>
                <br>


                <div class="row">
                    <div class="col">
                        <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3"
                            href="/user">
                            <span class="fas fa-times-circle"></span>&nbsp;Batal
                        </a>
                    </div>

                    <div class="col" style="text-align: right">
                        <button class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                            type="submit" value="Save"
                            onclick="return confirm('Adakah anda mahu menyimpan data ini?')"><span
                                class="fas fa-save"></span>&nbsp;Simpan
                        </button>
                    </div>
                </div>

                {{-- <input class="form-control" name="user_id" type="hidden" value="{{ $user->id }}" /> --}}


            </form>

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
