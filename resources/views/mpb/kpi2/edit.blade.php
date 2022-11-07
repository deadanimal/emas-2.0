@extends('base-mpb')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>UPDATE DATA FOR KPI INFORMATION</H2>
        </div>


        <br>
        <br>

        <div class="form-floating;">
            <form action="/MPB/kpi2/{{ $kpi2->id }}" method="POST">
                @csrf
                @method('PUT')


                <div class="mb-3 row">
                    <label class="col-form-label" for="thrust_id">Thrust*</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="thrust_id">
                            @foreach ($thrust as $thrust)
                                <option @selected($kpi2->thrust_id == $thrust->id) value="{{ $thrust->id }}">{{ $thrust->namaThrust }}
                                </option>
                            @endforeach

                        </select>
                    </div>
                </div>
                <div class="mb-3 row">


                    <label class="col-form-label" for="national_id">National Initiative*</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="national_id">
                            @foreach ($national as $national)
                                <option @selected($kpi2->national_id == $national->id) value="{{ $national->id }}">
                                    {{ $national->namaNational }}
                                </option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label" for="key_id">Key Activity*</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="key_id">
                            @foreach ($key as $key)
                                <option @selected($kpi2->key_id == $key->id) value="{{ $key->id }}">{{ $key->namaKey }}
                                </option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label" for="sub_id">Sub-Key Activity*</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="sub_id">
                            @foreach ($sub as $sub)
                                <option @selected($kpi2->sub_id == $sub->id) value="{{ $sub->id }}">{{ $sub->namaSub }}
                                </option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-sm-10">
                        <label class="col-form-label" for="namaKpi">KPI*</label>
                        <input class="form-control" type="text" name="namaKpi" value="{{ $kpi2->namaKpi }}" />
                    </div>
                </div>

                <div class="mb-3 row">
                    <div class="col-sm-10">
                        <label class="col-form-label" for="keteranganKpi">KPI Description*</label>
                        <input class="form-control" type="text" name="keteranganKpi" value="{{ $kpi2->keteranganKpi }}">
                    </div>
                </div>

                <br>

                {{-- <div class="row justify-content-center">
                    <div class="col-lg-8">

                        <div class="mb-3">
                            <label class="form-label" for="namaKpi">KPI*</label>
                            <input class="form-control" type="text" name="namaKpi" value="{{ $kpi2->namaKpi }}" />

                        </div>


                        <div class="mb-3">
                            <label class="form-label" for="keteranganKpi">KPI Information*</label>
                            <input class="form-control" name="keteranganKpi" value="{{ $kpi2->keteranganKpi }}">
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="baseline"><b>Baseline:</b></label>
                            <input class="form-control" type="text" name="baseline" value="{{ $kpi2->baseline }}" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="national"><b>Outcome:</b></label>
                            <input class="form-control" type="text" name="national" value="{{ $kpi2->national }}" />
                        </div>
                    </div>
                </div> --}}

                <br>
                <div class="col" style="text-align: right">
                    <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3"
                        href="/MPB/kpi2">
                        <span class="fas fa-times-circle"></span>&nbsp;Cancel
                    </a>
                    <button class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                        type="submit" value="Save" onclick="return confirm('Are you sure want to edit this data?')"><span
                            class="fas fa-save"></span>&nbsp;Save
                    </button>
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
