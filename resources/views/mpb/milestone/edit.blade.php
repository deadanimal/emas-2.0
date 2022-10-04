@extends('base')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>UPDATE DATA</H2>
        </div>

        <div class="form-floating;">
            <form action="/milestone/{{ $milestone->id }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row justify-content-center">
                    <div class="col-lg-6">

                        <div class="row mb-3">
                            <label class="col-form-label" for="thrust_id">Thrust</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="thrust_id">
                                    @foreach ($thrust as $thrust)
                                        <option @selected($milestone->thrust_id == $thrust->id) value="{{ $thrust->id }}">
                                            {{ $thrust->namaThrust }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-form-label" for="national_id">National Initiative</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="national_id">
                                    @foreach ($nation as $nation)
                                        <option @selected($milestone->national_id == $nation->id) value="{{ $nation->id }}">
                                            {{ $nation->namaNational }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-form-label" for="key_id">Key Activity</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="key_id">
                                    @foreach ($key as $key)
                                        <option @selected($milestone->key_id == $key->id) value="{{ $key->id }}">{{ $key->namaKey }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-form-label" for="sub_id">Sub-Key Activity</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="sub_id">
                                    @foreach ($sub as $sub)
                                        <option @selected($milestone->sub_id == $sub->id) value="{{ $sub->id }}">{{ $sub->namaSub }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-form-label" for="kpi_id">KPI</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="kpi_id">
                                    @foreach ($kpi as $kpi)
                                        <option @selected($milestone->kpi_id == $kpi->id) value="{{ $kpi->id }}">
                                            {{ $kpi->namaKpi }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-form-label" for="year">Year</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="year" value="{{ $milestone->year }}" />

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-form-label" for="quarter">Quarter</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="quarter"
                                    value="{{ $milestone->quarter }}" />

                            </div>
                        </div>


                        <div class="row mb-3">
                            <label class="col-form-label" for="namaMilestone">Milestone</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="namaMilestone"
                                    value="{{ $milestone->namaMilestone }}" />

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-form-label" for="actual_mark">Actual</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="actual_mark"
                                    value="{{ $milestone->actual_mark }}" readonly />

                            </div>
                        </div>

                        {{-- <div class="row mb-3">
                            <label class="col-form-label" for="achievement">Achievement (%)</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="achievement"
                                    value="{{ $milestone->achievement }}" />

                            </div>
                        </div> --}}

                        <div class="col-lg-10">
                            <label class="col-form-label" for="achievement">Achievement</label>
                            <div class="input-group">
                                <span class="input-group-text" id="rm2">%</span>
                                <input class="form-control" type="number" aria-describedby="rm2"
                                    value="{{ $milestone->achievement }}">
                            </div>
                        </div>

                        <br><br>

                        <div class="mb-3">
                            <label class="form-label" for="remark"><b>Remark</b></label>
                            <textarea class="form-control" name="remark" rows="5">{{ $milestone->remark }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col">
                        <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3"
                            href="/milestone">
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
