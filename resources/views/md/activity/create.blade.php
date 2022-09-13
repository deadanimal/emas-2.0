@extends('base')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>DATA ENTRY</H2>
        </div>

        <br>

        <div class="form-floating;">
            <form action="/activity" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="row justify-content-center">
                    <div class="col-lg-6">

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label" for="cluster_id">Cluster</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="cluster_id">
                                    <option selected disabled hidden>PLEASE CHOOSE</option>

                                    @foreach ($clusters as $cluster)
                                        <option value="{{ $cluster->id }}">{{ $cluster->namaCluster }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">

                            <label class="col-sm-2 col-form-label" for="initiative_id">Initiative</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="initiative_id">
                                    <option selected disabled hidden>PLEASE CHOOSE</option>

                                    @foreach ($initiatives as $initiative)
                                        <option value="{{ $initiative->id }}">{{ $initiative->code }} -
                                            {{ $initiative->namaInitiative }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label" for="program_id">Program</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="program_id">
                                    <option selected disabled hidden>PLEASE CHOOSE</option>

                                    @foreach ($programs as $program)
                                        <option value="{{ $program->id }}">{{ $program->namaProgram }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">

                            <label class="col-sm-2 col-form-label" for="plan_id">Plan</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="plan_id">
                                    <option selected disabled hidden>PLEASE CHOOSE</option>

                                    @foreach ($plans as $plan)
                                        <option value="{{ $plan->id }}">{{ $plan->namaPlan }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label" for="namaActivity">Activity Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="namaActivity" />

                            </div>

                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label" for="startDate">Start Date</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="date" name="startDate" />

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label" for="endDate">End Date</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="date" name="endDate" />

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label" for="output">Output</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="output" />

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label" for="weightage">Weightage</label>
                            <div class="col-sm-10">

                                <input class="form-control" type="text" name="weightage" />

                            </div>

                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label" for="weightage_progress">Weightage Progress</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="weightage_progress" />

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label" for="output_progress">Output Progress</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="output_progress" />

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label" for="additionalOutput">Additional Output
                                Information</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="additionalOutput" />

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label" for="remarks">Remark</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="remarks" />

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label" for="document">Attachment Document</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="document" type="file"
                                    accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel">

                            </div>
                        </div>


                        {{-- <div class="mb-3 row">

                    <input type="file" name="carImage" id="carImage"
                        class="form-control @error('image') is-invalid @enderror">

                    @error('image')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div> --}}


                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label" for="leadAgency">Lead Agency/PIC</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="leadAgency" />

                            </div>
                        </div>



                        <br>
                        <br>



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
                                    onclick="return confirm('Adakah anda mahu menyimpan data ini?')"><span
                                        class="fas fa-save"></span>&nbsp;Save
                                </button>
                            </div>
                        </div>

                        <input class="form-control" name="user_id" type="hidden" value="{{ $user->id }}" />
                    </div>
                </div>

            </form>

        </div>

    </div>

    {{-- <script>
        function ConfirmSave() {
            var isconfirm = window.confirm("Adakah anda mahu menyimpan data?");
            if (isconfirm)
                self.location = "Save.php";
        }
    </script> --}}

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Oops!</strong> Input tidak mencukupi<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
