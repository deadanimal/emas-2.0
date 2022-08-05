@extends('base')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>DATA ENTRY</H2>
        </div>

        <br>
        <br>

        <div class="form-floating;">
            <form action="{{ route('program.store') }}" method="POST">
                @csrf


                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="initiative_id">Initiative</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="initiative_id">
                            <option selected disabled hidden>PLEASE CHOOSE</option>

                            @foreach ($initiatives as $initiative)
                                <option value="{{ $initiative->id }}">{{ $initiative->namaInitiative }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="namaProgram">Program Name</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="namaProgram" />

                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="programLead">Program Lead</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="programLead" />

                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="leadAgency">Lead Agency/Kementerian</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="leadAgency" />

                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="programTarget">Program Target</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="programTarget" />

                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="progress">Progress Program</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="progress" />

                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="cost">Project Cost</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="cost" />

                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="source">Source Funding</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="source" />

                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="totalDisbursed">Total Disbursed Amount</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="totalDisbursed" />

                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="totalAmount">Total Amount Spending</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="totalAmount" />

                    </div>
                </div>


                <br>
                <br>



                <div class="row">
                    <div class="col">
                        <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3"
                            href="/program">
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
