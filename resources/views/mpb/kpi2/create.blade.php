@extends('base-mpb')
@section('content')
    <div class="container">

        <div class="mb-4 text-center">
            <H2>DATA ENTRY</H2>
        </div>

        <br>
        <br>

        <div class="form-floating;">
            <form action="{{ route('kpi2.store') }}" method="POST">
                @csrf


                <div class="mb-3 row">
                    <label class="col-form-label" for="thrust_id">Thrust</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="thrust_id">
                            <option selected disabled hidden>PLEASE CHOOSE</option>

                            @foreach ($thrust as $thrust)
                                <option value="{{ $thrust->id }}">{{ $thrust->namaThrust }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label" for="national_id">National Initiative</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="national_id">
                            <option selected disabled hidden>PLEASE CHOOSE</option>

                            @foreach ($national as $national)
                                <option value="{{ $national->id }}">{{ $national->namaNational }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label" for="key_id">Key Activity</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="key_id">
                            <option selected disabled hidden>PLEASE CHOOSE</option>

                            @foreach ($key as $key)
                                <option value="{{ $key->id }}">{{ $key->namaKey }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-form-label" for="sub_id">Sub-Key Activity</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="sub_id">
                            <option selected disabled hidden>PLEASE CHOOSE</option>

                            @foreach ($sub as $sub)
                                <option value="{{ $sub->id }}">{{ $sub->namaSub }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>


                <br>

                <div class="row justify-content-center">
                    <div class="col-lg-8">

                        <div class="mb-3">
                            <label class="form-label" for="namaKpi"><b>KPI:</b></label>
                            <input class="form-control" type="text" name="namaKpi" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="keteranganKpi"><b>KPI Description:</b></label>
                            <input class="form-control" type="text" name="keteranganKpi" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="baseline"><b>Baseline:</b></label>
                            <input class="form-control" type="text" name="baseline" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label" for="outcome"><b>Outcome:</b></label>
                            <input class="form-control" type="text" name="outcome" />
                        </div>
                    </div>
                </div>
                <br>


                <div class="col" style="text-align: right">
                    <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3"
                        href="/MPB/kpi2">
                        <span class="fas fa-times-circle"></span>&nbsp;Cancel
                    </a>
                    <button class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                        type="submit" value="Save" onclick="return confirm('Are you sure want to save this data?')"><span
                            class="fas fa-save"></span>&nbsp;Save
                    </button>
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
