@extends('base')
@section('content')
    <div class="container">
        <br>
        <div class="mb-4 text-center">
            <H2>UPDATE DATA</H2>
        </div>


        <br>
        <br>

        <div class="form-floating;">
            <form action="MPB/thrust/{{ $thrust->id }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="namaThrust">Thrust</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="namaThrust" value="{{ $thrust->namaThrust }}" />

                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="user">User</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="user" value="{{ $thrust->user }}" />

                    </div>
                </div>


                <br><br>

                <div class="mb-3">
                    <label class="form-label" for="keteranganThrust"><b>Thrust Information</b></label>
                    <textarea class="form-control" name="keteranganThrust" rows="5">{{ $thrust->keteranganThrust }}</textarea>
                </div>

                <div class="row">
                    <div class="col">
                        <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3"
                            href="MPB/thrust">
                            <span class="fas fa-times-circle"></span>&nbsp;Cancel
                        </a>
                    </div>

                    <div class="col" style="text-align: right">
                        <button class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                            type="submit" value="Save"
                            onclick="return confirm('Are you sure you want to edit this Data?')"><span
                                class="fas fa-save"></span>&nbsp;Save
                        </button>
                    </div>
                </div>

            </form>

        </div>

    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ooops!</strong> Input tidak mencukupi<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
