@extends('base')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>KEMAS KINI DATA</H2>
        </div>


        <br>
        <br>




        <div class="form-floating;">
            <form action="/user/{{ $users->id }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="name">Nama User</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="name" value="{{ $users->name }}" />

                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="email">Email</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="email" value="{{ $users->email }}" />

                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="role">Nama User</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="role" value="{{ $users->role }}" />

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
@endsection
