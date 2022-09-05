@extends('base')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>UPDATE DATA</H2>
        </div>


        <br>
        <br>

        <div class="form-floating;">
            <form action="/key/{{ $key->id }}" method="POST">
                @csrf
                @method('PUT')


                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="national_id">National Initiatives</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="national_id">
                            @foreach ($national as $list)
                                <option @selected($key->national_id == $list->id) value="{{ $list->id }}">{{ $list->namaNational }}
                                </option>
                            @endforeach

                        </select>
                    </div>
                </div>


                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="namaKey">Key Activities</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="namaKey" value="{{ $key->namaKey }}" />

                    </div>
                </div>

                <br><br>

                <div class="mb-3">
                    <label class="form-label" for="keteranganKey"><b>Key Activities Information</b></label>
                    <textarea class="form-control" name="keteranganKey" rows="5">{{ $key->keteranganKey }}</textarea>
                </div>

                <div class="row">
                    <div class="col">
                        <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3"
                            href="/key">
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
