@extends('base-mpb')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>UPDATE DATA FOR MILESTONE</H2>
        </div>

        <div class="form-floating;">
            <form action="/MPB/milestone/{{ $milestone->id }}" method="POST">
                @csrf
                @method('PUT')

                <div class="row justify-content-center">

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
                        <label class="col-form-label" for="baseline">Baseline</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="baseline">
                                @foreach ($baseline as $kpi)
                                    <option @selected($milestone->baseline == $kpi->id) value="{{ $kpi->baseline }}">
                                        {{ $kpi->baseline }}
                                    </option>
                                @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-form-label" for="national">Outcome</label>
                        <div class="col-sm-10">
                            <select class="form-control" name="national">
                                @foreach ($national as $kpi)
                                    <option @selected($milestone->national == $kpi->id) value="{{ $kpi->national }}">
                                        {{ $kpi->national }}
                                    </option>
                                @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="row mb-3">
                            <label class="col-form-label" for="namaMilestone">Milestone</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="namaMilestone"
                                    value="{{ $milestone->namaMilestone }}" />

                            </div>
                        </div>


                        <div class="row mb-3">
                            <label class="col-form-label" for="year">Year</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" maxlength="4" name="year"
                                    onkeypress='validate(event)' value="{{ $milestone->year }}" />

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
                            <label class="col-form-label" for="unit">Unit</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="unit" value="{{ $milestone->unit }}" />

                            </div>
                        </div>

                        <div class="row mb-3">
                            <label class="col-form-label" for="target">Target</label>
                            <div class="col-sm-10">
                                <input class="form-control target" type="number" name="target"
                                    value="{{ $milestone->target }}" />

                            </div>
                        </div>



                        <div class="row mb-3">
                            <label class="col-form-label" for="actual_mark">Actual</label>
                            <div class="col-sm-10">
                                <input class="form-control target" type="number" name="actual_mark"
                                    value="{{ $milestone->actual_mark }}" />

                            </div>
                        </div>


                        <div class="col-lg-10">
                            <label class="col-form-label" for="achievement">Achievement</label>
                            <div class="input-group">
                                {{-- <span class="input-group-text" id="rm2">%</span> --}}
                                <input class="form-control" type="number" aria-describedby="rm2"
                                    value="{{ $milestone->achievement }}" id="mySelect" readonly>
                            </div>
                        </div><br>


                        <div class="col-lg-10">
                            <label class="col-form-label" id="prestasi1">Result</label>
                            <div>

                                <div id="prestasi"></div>

                            </div>
                        </div>


                        <br><br>

                        <div class="mb-3">
                            <label class="form-label" for="remark"><b>User Remark</b></label>
                            <textarea class="form-control" name="remark" rows="5">{{ $milestone->remark }}</textarea>
                        </div>
                    </div>
                </div>

                <div class="col" style="text-align: right">
                    <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3"
                        href="/MPB/milestone">
                        <span class="fas fa-times-circle"></span>&nbsp;Cancel
                    </a>
                    <button class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                        type="submit" value="Save"
                        onclick="return confirm('Are you sure want to edit this data?')"><span
                            class="fas fa-save"></span>&nbsp;Save
                    </button>
                </div>


            </form>

        </div>

    </div>

    <script>
        $(".target").keyup(function() {


            var checkAllInputFilled = true;
            jQuery.each($(".target"), function(key, val) {
                if (val.value == '') {
                    checkAllInputFilled = false;
                }
            });

            if (checkAllInputFilled) {
                let num1 = $('input[name="actual_mark"]').val();
                let num2 = $('input[name="target"]').val();


                let result = (num1 / num2) * 100;

                $('input[name="achievement"]').val(result);
                $('input[name="achievement"]').trigger('change');

            }

            $('#mySelect').change(function() {

                // console.log('check');

                var x = document.getElementById("mySelect").value;
                x = x.substring(0, x.length - 1)
                x = parseFloat(x)
                var prestasiColor = "yellow"

                if (x >= 80) {
                    prestasiColor = "green"
                    var prestasiShown = document.getElementById("prestasi");
                    prestasiShown.innerHTML = "<img src='/img/green.png'></img> "

                } else if (x <= 80 && x >= 50) {
                    prestasiColor = "yellow"
                    var prestasiShown = document.getElementById("prestasi");
                    prestasiShown.innerHTML = "<img src='/img/yellow.png'></img> "

                } else {
                    prestasiColor = "red"
                    var prestasiShown = document.getElementById("prestasi");
                    prestasiShown.innerHTML = "<img src='/img/red.png'></img> "


                }

                // prestasiShown.style.color = prestasiColor;

            });


        });
    </script>

    <script>
        function validate(evt) {
            var theEvent = evt || window.event;

            // Handle paste
            if (theEvent.type === 'paste') {
                key = event.clipboardData.getData('text/plain');
            } else {
                // Handle key press
                var key = theEvent.keyCode || theEvent.which;
                key = String.fromCharCode(key);
            }
            var regex = /[0-9]|\./;
            if (!regex.test(key)) {
                theEvent.returnValue = false;
                if (theEvent.preventDefault) theEvent.preventDefault();
            }
        }
    </script>

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
