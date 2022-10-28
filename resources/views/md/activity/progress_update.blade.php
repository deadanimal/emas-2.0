@extends('base-md')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>PROGRESS UPDATE</H2>
        </div>

        <div class="form-floating;">
            <form action="/MD/activity/{{ $activity->id }}/progress" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <table class="table table-bordered" id="example">
                    <thead class="table-light">
                        <tr>
                            <th class="align-middle">Year</th>
                            <th class="align-middle">Month</th>
                            <th class="align-middle">Output (Progress)</th>
                            <th class="align-middle">Weightage (Progress)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                            <td>
                                <input type="number" name="year" for="year" class="form-control" id="mySelect"
                                    onchange="myFunction()" placeholder="Year" value="{{ $activity->year }}" />
                            </td>
                            <td>
                                <input type="number" name="month" for="month" class="form-control" id="mySelect"
                                    onchange="myFunction()" placeholder="Month" value="{{ $activity->month }}" />
                            </td>
                            <td>
                                <input type="number" name="output_update" for="output_update" class="form-control output"
                                    id="mySelect" onchange="myFunction()" placeholder="Output"
                                    value="{{ $activity->output_update }}" />
                            </td>
                            <td>
                                <div class="input-group">
                                    <span class="input-group-text" id="progress">%</span>
                                    <input class="form-control" onchange="myFunction()" for="weightage_progress"
                                        name="weightage_progress" type="number" aria-describedby="progress">
                                </div>
                            </td>
                        </tr>

                    </tbody>
                </table>


                <div class="mb-3 row">
                    <label class="col-form-label" for="additionalOutput">Additional Output Information</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="additionalOutput" />

                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label" for="remarks">User Remarks</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="remarks" />

                    </div>
                </div><br>
                <hr>

                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="mb-3 row">
                            <label class="col-form-label" for="cluster_id">Cluster</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="cluster_id" disabled>
                                    @foreach ($clusters as $cluster)
                                        <option @selected($activity->cluster_id == $cluster->id) value="{{ $cluster->id }}">
                                            {{ $cluster->namaCluster }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">

                            <label class="col-form-label" for="initiative_id">Initiative Code</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="initiative_id" disabled>
                                    @foreach ($initiatives as $initiative)
                                        <option @selected($activity->initiative_id == $initiative->id) value="{{ $initiative->id }}">
                                            {{ $initiative->namaInitiative }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>

                        </div>

                        <div class="mb-3 row">

                            <label class="col-form-label" for="program_id">Program</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="program_id" disabled>
                                    @foreach ($programs as $program)
                                        <option @selected($activity->program_id == $program->id) value="{{ $program->id }}">
                                            {{ $program->namaProgram }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>

                        </div>

                        <div class="mb-3 row">

                            <label class="col-form-label" for="plan_id">Plan</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="plan_id" disabled>
                                    @foreach ($plans as $plan)
                                        <option @selected($activity->plan_id == $plan->id) value="{{ $plan->id }}">
                                            {{ $plan->namaPlan }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>

                        </div><br>
                        <hr>

                        <div class="mb-3 row">
                            <label class="col-form-label" for="namaActivity">Activity Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="namaActivity"
                                    value="{{ $activity->namaActivity }}" />

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-form-label" for="startDate">Start Date</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="startDate"
                                    value="{{ $activity->startDate }}" />

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-form-label" for="endDate">End Date</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="endDate"
                                    value="{{ $activity->endDate }}" />

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-form-label" for="unit">Unit</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="unit">
                                    <option selected disabled hidden>PLEASE CHOOSE</option>
                                    <option @selected($activity->unit == '%') value="%">%
                                    </option>
                                    <option @selected($activity->unit == 'Number') value="Number">Number
                                    </option>
                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-form-label" for="output">Output Target</label>
                            <div class="col-sm-10">
                                <input class="form-control output" type="number" name="output"
                                    value="{{ $activity->output }}" />

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-form-label" for="weightage">Weightage</label>
                            <div class="col-sm-10">
                                <input class="form-control output" type="number" name="weightage"
                                    value="{{ $activity->weightage }}" />

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-form-label" for="PIC">Person In Charge</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="PIC"
                                    value="{{ $activity->PIC }}" />

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-form-label" for="email">Primary Email Address</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="email"
                                    value="{{ $activity->email }}" />

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-form-label" for="document">Attachment Document</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" name="document"
                                    value="{{ $activity->document }}" />

                            </div>
                        </div>



                        <br><br>
                        <div class="col" style="text-align: right">
                            <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3"
                                href="/MD/activity">
                                <span class="fas fa-times-circle"></span>&nbsp;Cancel
                            </a>
                            <button class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                                type="submit" value="Save"
                                onclick="return confirm('Are you sure you want to edit this Data?')"><span
                                    class="fas fa-save"></span>&nbsp;Save
                            </button>
                        </div>
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

    <script>
        $(".output").keyup(function() {

            var checkAllInputFilled = true;
            jQuery.each($(".output"), function(key, val) {
                if (val.value == '') {
                    checkAllInputFilled = false;
                }
            });

            if (checkAllInputFilled) {
                let num1 = $('input[name="output"]').val();
                let num2 = $('input[name="weightage"]').val();
                let num3 = $('input[name="weightage_progress"]').val();
                let num4 = $('input[name="output_progress"]').val();


                let result = [(num4 / num1) * num2];

                $('input[name="weightage_progress"]').val(result);
                $('input[name="weightage_progress"]').trigger('change');

            }
        });
    </script>
@endsection
