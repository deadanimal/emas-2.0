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
                    <label class="col-sm-2 col-form-label" for="email">Email:</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="email" value="{{ $users->email }}" />

                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="role">Agensi</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="role">

                            @foreach ($roles as $role)
                                <option value="{{ $role->name }}">{{ ucfirst(trans($role->name)) }}
                                </option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="permission">Nama Agensi</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="permission">

                            @foreach ($permissions as $permission)
                                <option value="{{ $permission->name }}">{{ ucfirst(trans($permission->name)) }}
                                </option>
                            @endforeach

                        </select>
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
                            data-bs-toggle="modal" style="cursor: pointer"
                            data-bs-target="#modaldelete-{{ $users->id }}">
                            <span class="fas fa-times-circle"></span>&nbsp;PADAM AKAUN
                        </a>
                    </div>

                    <div class="modal fade" id="modaldelete-{{ $users->id }}" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-body text-center">
                                    <i class="far fa-times-circle fa-7x" style="color: #ea0606"></i>
                                    <br>
                                    Anda pasti untuk menghapus pengguna?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn bg-gradient-secondary"
                                        data-bs-dismiss="modal">Batal</button>
                                    <form method="POST" action="/user/{{ $users->id }}">
                                        @method('DELETE')
                                        @csrf

                                        <button class="btn bg-gradient-danger" style="cursor: pointer" type="submit">
                                            Hapus</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="col" style="text-align: right">
                        <button class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                            type="submit" value="Save"
                            onclick="return confirm('Adakah anda mahu mengemaskini data ini?')"><span
                                class="fas fa-save"></span>&nbsp;KEMASKINI
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
@endsection
