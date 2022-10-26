@extends('base-md')
@section('content')
    <div class="container">

        <div class="mb-4 text-center">
            <H2>MyDigital Progress Report</H2>
        </div>

        <div class="col">
            <div class="row align-items-center">
                <div class="col col-lg-8">
                    <span><b>Create New</b></span>
                </div>

            </div>
        </div>

        <hr style="width:100%;text-align:center;">


        <div class="col-12 ">
            <div class="col-12">
                <form method="POST" action="/MD/user">
                    @csrf
                    <div class="card mt-4" id="basic-info">

                        <br>
                        <div class="card-body pt-0">
                            <div class="row">
                                <div class="col-6">
                                    <label for="">ID :</label>
                                    <div class="input-group">
                                        <input class="form-control mb-3" type="text" name="name"
                                            :value="old('name')" required>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="">Email :</label>
                                    <div class="input-group">
                                        <input class="form-control mb-3" type="email" name="email"
                                            :value="old('email')" required>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label for="">Password :</label>
                                    <div class="input-group">
                                        <input class="form-control mb-3" type="password" name="password" required
                                            minlength="8">
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="">Confirm Password :</label>
                                    <div class="input-group">
                                        <input class="form-control mb-3" type="password" name="password_confirmation"
                                            required minlength="8">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <label for="role">Role :</label>
                                    <div class="form-group">

                                        <select class="form-control mb-3" name="role" id="pilih1" required>
                                            <option value="" selected hidden>Please Choose</option>
                                            @foreach ($role as $r)
                                                <option value="{{ $r->name }}">{{ $r->name }}
                                                </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <label for="">Agency :</label>
                                    <div class="input-group">

                                        <select class="form-control mb-3" name="permission" id="pilih2" required>
                                            <option selected disabled hidden>Sila pilih</option>
                                            {{-- @foreach ($role->permissions as $permission)
                                                <option value="{{ $permission->name }}">
                                                    {{ ucfirst(trans($permission->name)) }}
                                                </option>
                                            @endforeach --}}
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="row">

                                <div class="col" style="text-align: right">
                                    <button class="btn btn-falcon-default btn-sm"
                                        style="background-color: #047FC3; color:white;" type="submit" value="Save"
                                        onclick="return confirm('Adakah anda mahu menyimpan data ini?')"><span
                                            class="fas fa-save"></span>&nbsp;Save
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </form>

            </div>
        </div>


    </div>

    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script>
        $("#pilih1").change(function() {
            $("#pilih2").html('');

            var role = @json($role->toArray());

            role.forEach(role => {
                if (role.name == this.value) {
                    role.permissions.forEach(permission => {
                        $("#pilih2").append(`
                                <option value=" ` + permission.name + ` ">
                                                     ` + permission.name + `
                                </option>
                            `)
                    });

                }
            });




        })
    </script>
@endsection
