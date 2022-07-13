@extends('base')
@section('content')

    <div class="container">
        <br>

        <div class="mb-4 text-center">
            <H2>DATA ENTRY</H2>
        </div>


        <br>

        <div class="form-floating;">
            <form action="{{ route('milestone.store') }}" method="POST">
                @csrf

                <div class="mb-4 text-center">
                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="thrust_id">Thrust</label>
                        <div class="col-sm-10" style="width:30%">
                            <select class="form-control" name="thrust_id">
                                <option selected disabled hidden>PLEASE CHOOSE</option>

                                @foreach ($thrust as $thrust)
                                    <option value="{{ $thrust->id }}">{{ $thrust->namaThrust }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="national_id">National Initiave</label>
                        <div class="col-sm-10" style="width:30%">
                            <select class="form-control" name="national_id">
                                <option selected disabled hidden>PLEASE CHOOSE</option>

                                @foreach ($nation as $nation)
                                    <option value="{{ $nation->id }}">{{ $nation->namaNational }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="key_id">Key Activities</label>
                        <div class="col-sm-10" style="width:30%">
                            <select class="form-control" name="key_id">
                                <option selected disabled hidden>PLEASE CHOOSE</option>

                                @foreach ($key as $key)
                                    <option value="{{ $key->id }}">{{ $key->namaKey }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="sub_id">Sub-Key Activities</label>
                        <div class="col-sm-10" style="width:30%">
                            <select class="form-control" name="sub_id">
                                <option selected disabled hidden>PLEASE CHOOSE</option>

                                @foreach ($sub as $sub)
                                    <option value="{{ $sub->id }}">{{ $sub->namaSub }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>



                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="kpi_id">KPI</label>
                        <div class="col-sm-10" style="width:30%">
                            <select class="form-control" name="kpi_id">
                                <option selected disabled hidden>PLEASE CHOOSE</option>

                                @foreach ($kpi as $kpi)
                                    <option value="{{ $kpi->id }}">{{ $kpi->namaKpi }}</option>
                                @endforeach

                            </select>
                        </div>
                    </div>


                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="year">Year</label>
                        <div class="col-sm-10" style="width:30%">
                            <input class="form-control" type="text" name="year" />

                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="quarter">Quarter</label>
                        <div class="col-sm-10" style="width:30%">
                            <input class="form-control" type="text" name="quarter" />

                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="namaMilestone">Milestone Name</label>
                        <div class="col-sm-10" style="width:30%">
                            <input class="form-control" type="text" name="namaMilestone" />

                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="actual_mark">Actual Mark</label>
                        <div class="col-sm-10" style="width:30%">
                            <input class="form-control" type="text" name="actual_mark" />

                        </div>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="achievement">Achievement</label>
                        <div class="col-sm-10" style="width:30%">
                            <input class="form-control" type="text" name="achievement" />

                        </div>
                    </div>
                </div>

                <br>
                <br>

                <div class="mb-3">
                    <label class="form-label" for="remark"><b>Remark:</b></label>
                    <textarea class="form-control" name="remark" rows="3"></textarea>
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
                            onclick="return confirm('Adakah anda mahu menyimpan data ini?')"><span
                                class="fas fa-save"></span>&nbsp;Save
                        </button>
                    </div>
                </div>

                <input class="form-control" name="user_id" type="hidden" value="{{ $user->id }}" />


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
