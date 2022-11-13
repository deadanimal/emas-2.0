@extends('base-md')
@section('content')

    <style>
        .column {
            float: left;
            width: 30%;
            /* padding: 10px; */
            height: 300;
        }
    </style>

    <div class="container">
        <div class="mb-4 text-center">
            <H2>ACTUAL ACHIEVEMENT UPDATE</H2>
        </div>


        <br>
        <br>

        <div class="form-floating;">
            <form action="/MD/update/{{ $initiative->id }}" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="initiative_id" value="{{ $initiative->id }}">


                <div class="row">
                    <div class="column">
                        <table class="table table-bordered" style="width: 30%">
                            <thead style="background-color:#FFE5B4;">
                                <tr>
                                    <th scope="col">
                                        Target Initiative 1</th>
                                    <th scope="col">Actual Achievement 1</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($initiative_update as $update)
                                    <tr>
                                        <td> <input class="form-control" value="{{ $update->target_1 }}" />
                                        </td>
                                        <td> <input class="form-control" value="{{ $update->actual_achievement_1 }}" /></td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                    </div>

                    <div class="column">

                        <table class="table table-bordered" style="width: 30%">
                            <thead style="background-color:#ADD8E6;">
                                <tr>
                                    <th scope="col">Target Initiative 2</th>
                                    <th scope="col">Actual Achievement 2</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> <input type="number" name="target_2" for="target_2" class="form-control" /></td>
                                    <td> <input type="number" name="actual_achievement_2" for="actual_achievement_2"
                                            class="form-control" /></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="column">


                        <table class="table table-bordered" style="width: 30%">
                            <thead style="background-color:#00FF00;">
                                <tr>
                                    <th scope="col">Target Initiative 3</th>
                                    <th scope="col">Actual Achievement 3</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td> <input type="number" name="target_3" for="target_3" class="form-control" /></td>
                                    <td> <input type="number" name="actual_achievement_3" for="actual_achievement_3"
                                            class="form-control" /></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>


                <div class="mb-3 row">
                    <label class="col-form-label" for="">Target</label>
                    <div class="col-sm-10" style="width: 30%">
                        <select class="form-select" name="">
                            <option selected disabled hidden value="null">Target</option>

                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>

                        </select>
                    </div>

                    <div class="col-sm-10" style="width: 30%">
                        <input type="number" class="form-control" name="target_1">
                    </div>

                    <label class="col-form-label" for="">Actual Achievement</label>
                    <div class="col-sm-10" style="width: 30%">
                        <select class="form-select" name="">
                            <option selected disabled hidden value="null">Actual Achievement</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>


                        </select>
                    </div>

                    <div class="col-sm-10" style="width: 30%">
                        <input type="number" class="form-control" name="actual_achievement_1">
                    </div>


                </div>

                <hr><br>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="cluster_id">Cluster*</label>
                    <div class="col-sm-10" style="width:30%">


                        @if ($initiative->cluster != null)
                            <input class="form-control" value="{{ $initiative->cluster->namaCluster }}" readonly />
                            <input class="form-control" name="cluster_id" type="hidden"
                                value="{{ $initiative->cluster->namaCluster }}" />
                        @else
                            <input class="form-control" value="Files deleted" readonly />
                        @endif


                    </div>

                    <label class="col-sm-2 col-form-label" for="responsible_user">Responsible User*</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="responsible_user"
                            value="{{ $initiative->responsible_user }}" readonly />

                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="namaInitiative">Initiative Name*</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="namaInitiative"
                            value="{{ $initiative->namaInitiative }}" readonly />

                    </div>

                    <label class="col-sm-2 col-form-label" for="PIC">Person In Charge*</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="PIC" value="{{ $initiative->PIC }}"
                            readonly />

                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="code">Initiative Code*</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="code" value="{{ $initiative->code }}"
                            readonly />

                    </div>

                    <label class="col-sm-2 col-form-label" for="position">Position*</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="position" value="{{ $initiative->position }}"
                            readonly />

                    </div>


                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="target">Target Initiative*</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="target" value="{{ $initiative->target }}"
                            readonly />

                    </div>

                    <label class="col-sm-2 col-form-label" for="phoneNo">Contact Number*</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="number" name="phoneNo" value="{{ $initiative->phoneNo }}"
                            readonly />

                    </div>
                </div>



                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="phase">Phase*</label>
                    <div class="col-sm-10" style="width:30%">

                        <input class="form-control" type="text" name="phase" value="{{ $initiative->phase }}"
                            readonly />

                    </div>
                    <label class="col-sm-2 col-form-label" for="email">Primary Email Address*</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="email" value="{{ $initiative->email }}"
                            readonly />

                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="leadAgency">Lead Agency*</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="leadAgency"
                            value="{{ $initiative->leadAgency }}" readonly />

                    </div>

                    <label class="col-sm-2 col-form-label" for="email2">Secondary Email Address*</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="email2" value="{{ $initiative->email2 }}"
                            readonly />
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for=""></label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" hidden />


                    </div>

                    <label class="col-sm-2 col-form-label" for="category">Document*</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="category" value="{{ $initiative->category }}"
                            readonly />
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for=""></label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" hidden readonly />


                    </div>

                    <label class="col-sm-2 col-form-label" for="sec_id">Level*</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="sec_id" value="{{ $initiative->sec_id }}"
                            readonly />

                    </div>
                </div>

                <br><br>


                <div class="row">

                    <div class="col" style="text-align: right">
                        <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3"
                            href="/MD/initiative">
                            <span class="fas fa-times-circle"></span>&nbsp;Cancel
                        </a>
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
