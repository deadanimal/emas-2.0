@extends('base-md')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>DATA ENTRY</H2>
        </div>

        <br>
        <br>

        <div class="form-floating;">
            <form action="{{ route('initiative.store') }}" method="POST">
                @csrf

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="cluster_id">Cluster</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="cluster_id">
                            <option selected disabled hidden>PLEASE CHOOSE</option>

                            @foreach ($cluster as $cluster)
                                <option value="{{ $cluster->id }}">{{ $cluster->namaCluster }}</option>
                            @endforeach

                        </select>
                    </div>
                    <label class="col-sm-2 col-form-label" for="namaCluster">Responsible User</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="cluster_id">
                            <option selected disabled hidden>PLEASE CHOOSE</option>

                            {{-- @foreach ($clusters as $cluster)
                                <option value="{{ $cluster->id }}">{{ $cluster->namaCluster }}</option>
                            @endforeach --}}

                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="namaInitiative">Initiatives Name</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="namaInitiative" />

                    </div>
                    <label class="col-sm-2 col-form-label" for="category">Category</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="category" id="pilih2">
                            <option selected disabled hidden>PLEASE CHOOSE</option>
                            <option value="DEB">DEB</option>
                            <option value="4IR">4IR</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="code">Initiatives Code</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="code" />

                    </div>

                    <label class="col-sm-2 col-form-label" for="national">Level</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="national">
                            <option selected disabled hidden>PLEASE CHOOSE</option>
                            <option value="National">National</option>
                            <option value="Sectoral">Sectoral</option>
                        </select>

                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="target">Target Initiatives</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="target" />

                    </div>
                </div>

                {{-- <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="phase">Phase</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="phase">
                            <option selected disabled hidden>PLEASE CHOOSE</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                        </select>
                    </div>
                </div> --}}

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="phase">Phase</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control js-choice" id="phase" multiple="multiple" size="1"
                            name="phase" data-options='{"removeItemButton":true,"placeholder":true}'>
                            <option value="">PLEASE CHOOSE</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="leadAgency">Lead Agency</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="leadAgency" />

                    </div>
                </div>


                <br>
                <br>

                {{-- <div class="mb-3">
                    <label class="form-label" for="desc"><b>Description:</b></label>
                    <textarea class="form-control" name="desc" rows="5"></textarea>
                </div> --}}



                <div class="row">
                    <div class="col">
                        <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3"
                            href="/initiative">
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
