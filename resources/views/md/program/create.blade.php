@extends('base-md')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>DATA ENTRY FOR PROGRAM</H2>
        </div>

        <br>
        <br>

        <div class="form-floating;">
            <form action="{{ route('program.store') }}" method="POST">
                @csrf

                <div class="row justify-content-center">

                    <div class="col-lg-6">

                        <div class="mb-3 row">
                            <label class="col-form-label" for="initiative_id">Initiative Code</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="initiative_id">
                                    <option selected disabled hidden>PLEASE CHOOSE</option>

                                    @foreach ($initiatives as $initiative)
                                        <option value="{{ $initiative->id }}">
                                            {{ $initiative->code }} - {{ $initiative->namaInitiative }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-form-label" for="cluster_id">Cluster</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="cluster_id">
                                    <option selected disabled hidden>PLEASE CHOOSE</option>

                                    @foreach ($clusters as $cluster)
                                        <option value="{{ $cluster->id }}">
                                            {{ $cluster->namaCluster }}</option>
                                    @endforeach

                                </select>
                            </div>
                        </div>


                        <div class="mb-3 row">
                            <label class="col-form-label" for="namaProgram">Program Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="namaProgram" />

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-form-label" for="programLead">Program Lead</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="programLead" />

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-form-label" for="leadAgency">Lead Agency/Ministry</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="leadAgency" />

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-form-label" for="programTarget">Program Target</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="programTarget" />

                            </div>
                        </div>

                        {{-- <div class="mb-3 row">
                            <label class="col-form-label" for="progress">Progress Plan</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="progress" />

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-form-label" for="cost">Project Cost</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="cost" />

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-form-label" for="source">Source Funding</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="source" />

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-form-label" for="totalDisbursed">Total Disbursed Amount</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" name="totalDisbursed" />

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-form-label" for="totalAmount">Total Amount Spending</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="number" name="totalAmount" />

                            </div>
                        </div> --}}


                        <br>
                        <br>



                        <div class="row">

                            <div class="col" style="text-align: right">
                                <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3"
                                    href="/MD/program">
                                    <span class="fas fa-times-circle"></span>&nbsp;Cancel
                                </a>
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
