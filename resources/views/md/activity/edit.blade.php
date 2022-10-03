@extends('base-md')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>UPDATE DATA</H2>
        </div>


        <br>


        <div class="form-floating;">
            <form action="/activity/{{ $activity->id }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row justify-content-center">
                    <div class="col-lg-6">
                        <div class="mb-3 row">
                            <label class="col-form-label" for="cluster_id">Cluster</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="cluster_id">
                                    @foreach ($clusters as $cluster)
                                        <option @selected($activity->cluster_id == $cluster->id) value="{{ $cluster->id }}">
                                            {{ $cluster->namaCluster }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">

                            <label class="col-form-label" for="initiative_id">Initiative</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="initiative_id">
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
                                <select class="form-control" name="program_id">
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
                                <select class="form-control" name="plan_id">
                                    @foreach ($plans as $plan)
                                        <option @selected($activity->plan_id == $plan->id) value="{{ $plan->id }}">
                                            {{ $plan->namaPlan }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>

                        </div>

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
                            <label class="col-form-label" for="output">Output</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" name="output"
                                    value="{{ $activity->output }}" />

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-form-label" for="weightage">Weightage</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" name="weightage"
                                    value="{{ $activity->weightage }}" />

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-form-label" for="weightage_progress">Weightage Progress</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" name="weightage_progress"
                                    value="{{ $activity->weightage_progress }}" />

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-form-label" for="output_progress">Output Progress</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" name="output_progress"
                                    value="{{ $activity->output_progress }}" />

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-form-label" for="additionalOutput">Additional Output
                                Information</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" name="additionalOutput"
                                    value="{{ $activity->additionalOutput }}" />

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-form-label" for="remarks">Remark</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="remarks"
                                    value="{{ $activity->remarks }}" />

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-form-label" for="document">Attachment Document</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="file" name="document"
                                    value="{{ $activity->document }}" />

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-form-label" for="leadAgency">Lead Agency/PIC</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="leadAgency"
                                    value="{{ $activity->leadAgency }}" />

                            </div>
                        </div>


                        <br><br>


                        <div class="row">
                            <div class="col">
                                <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3"
                                    href="/activity">
                                    <span class="fas fa-times-circle"></span>&nbsp;Cancel
                                </a>
                            </div>

                            <div class="col" style="text-align: right">
                                <button class="btn btn-falcon-default btn-sm"
                                    style="background-color: #047FC3; color:white;" type="submit" value="Save"
                                    onclick="return confirm('Are you sure you want to edit this Data?')"><span
                                        class="fas fa-save"></span>&nbsp;Save
                                </button>
                            </div>
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
@endsection
