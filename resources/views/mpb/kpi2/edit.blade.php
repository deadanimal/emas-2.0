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
            <form action="/kpi2/{{ $kpi2->id }}" method="POST">
                @csrf
                @method('PUT')


                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="thrust_id">Thrust</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="thrust_id">
                            @foreach ($thrust as $thrust)
                                <option @selected($kpi2->thrust_id == $thrust->id) value="{{ $thrust->id }}">{{ $thrust->namaThrust }}
                                </option>
                            @endforeach

                        </select>
                    </div>

                    <label class="col-sm-2 col-form-label" for="national_id">National Initiave</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="national_id">
                            @foreach ($national as $national)
                                <option @selected($kpi2->national_id == $national->id) value="{{ $national->id }}">{{ $national->namaNational }}
                                </option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="key_id">Key Activities</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="key_id">
                            @foreach ($key as $key)
                                <option @selected($kpi2->key_id == $key->id) value="{{ $key->id }}">{{ $key->namaKey }}
                                </option>
                            @endforeach

                        </select>
                    </div>

                    <label class="col-sm-2 col-form-label" for="sub_id">Sub-Key Activities</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="sub_id">
                            @foreach ($sub as $sub)
                                <option @selected($kpi2->sub_id == $sub->id) value="{{ $sub->id }}">{{ $sub->namaSub }}
                                </option>
                            @endforeach

                        </select>
                    </div>
                </div>


                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="namaKpi">Kpi Name</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="namaKpi" value="{{ $kpi2->namaKpi }}" />

                    </div>
                </div>

                <br><br>

                <div class="mb-3">
                    <label class="form-label" for="keteranganKpi"><b>Kpi Information</b></label>
                    <textarea class="form-control" name="keteranganKpi" rows="5">{{ $kpi2->keteranganKpi }}</textarea>
                </div>

                <div class="row">
                    <div class="col">
                        <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3"
                            href="/kpi2">
                            <span class="fas fa-times-circle"></span>&nbsp;Cancel
                        </a>
                    </div>

                    <div class="col" style="text-align: right">
                        <button class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                            type="submit" value="Save" onclick="return confirm('Are you sure you want to edit this Data?')"><span class="fas fa-save"></span>&nbsp;Save
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
