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
            <form action="/national/{{ $national->id }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="thrust_id">Thrust</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="thrust_id">
                            @foreach ($list as $list)
                                <option @selected($national->thrust_id == $list->id) value="{{ $list->id }}">{{ $list->namaThrust }}
                                </option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="namaNational">National Initiative</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="namaNational"
                            value="{{ $national->namaNational }}" />

                    </div>
                </div>



                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="year">Year</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="year">
                            <option @selected($national->year == '2017') value="2017">2017</option>
                            <option @selected($national->year == '2018') value="2018">2018</option>
                            <option @selected($national->year == '2019') value="2019">2019</option>
                            <option @selected($national->year == '2020') value="2020">2020</option>
                            <option @selected($national->year == '2021') value="2021">2021</option>
                            <option @selected($national->year == '2022') value="2022">2022</option>
                            <option @selected($national->year == '2023') value="2023">2023</option>
                            <option @selected($national->year == '2024') value="2024">2024</option>
                            <option @selected($national->year == '2025') value="2025">2025</option>


                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="quarter">Quarter</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="quarter">
                            <option @selected($national->quarter == 'Q1') value="Q1">Q1</option>
                            <option @selected($national->quarter == 'Q2') value="Q2">Q2</option>
                            <option @selected($national->quarter == 'Q3') value="Q3">Q3</option>
                            <option @selected($national->quarter == 'Q4') value="Q4">Q4</option>

                        </select>
                    </div>
                </div>



                <br><br>

                <div class="mb-3">
                    <label class="form-label" for="keteranganNational"><b>Description</b></label>
                    <textarea class="form-control" name="keteranganNational" rows="5">{{ $national->keteranganNational }}</textarea>
                </div>

                <div class="row">
                    <div class="col">
                        <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3"
                            href="/national">
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
