@extends('base-md')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>DATA ENTRY FOR INITIATIVE</H2>
        </div>

        <br>
        <br>

        <div class="form-floating;">
            <form method="post" action="{{ route('initiative.store') }}" enctype="multipart/form-data">
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
                    <label class="col-sm-2 col-form-label" for="responsible_user">Responsible User</label>
                    <div class="col-sm-10" style="width:30%">

                        <button class="btn btn-primary" type="button" data-bs-toggle="modal"
                            data-bs-target="#error-modal">Add</button>
                    </div>

                    <div class="modal fade" id="error-modal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document" style="max-width: 500px">
                            <div class="modal-content position-relative">
                                <div class="position-absolute top-0 end-0 mt-2 me-2 z-index-1">
                                    <button class="btn-close btn btn-sm btn-circle d-flex flex-center transition-base"
                                        data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body p-0">
                                    <div class="rounded-top-lg py-3 ps-4 pe-6 bg-light">
                                        <h4 class="mb-1" id="modalExampleDemoLabel">Responsible User </h4>
                                    </div>
                                    <div class="p-4 pb-0">
                                        <form method="post" action="{{ route('initiative.store') }}"
                                            enctype="multipart/form-data">
                                            @csrf <div class="mb-3">
                                                <label class="col-form-label" for="recipient-name">Person in Charge:</label>
                                                <input class="form-control" id="recipient-name" type="text" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-form-label" for="recipient-name">Position:</label>
                                                <input class="form-control" id="recipient-name" type="text" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="col-form-label" for="message-text">Email 1:</label>
                                                <input class="form-control" id="recipient-name" type="text" />

                                            </div>
                                            <div class="mb-3">
                                                <label class="col-form-label" for="message-text">Email 2:</label>
                                                <input class="form-control" id="recipient-name" type="text" />

                                            </div>
                                            <div class="mb-3">
                                                <label class="col-form-label" for="message-text">Contact Number:</label>
                                                <input class="form-control" id="recipient-name" type="number" />

                                            </div>

                                        </form>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button class="btn btn-secondary" type="button" data-bs-dismiss="modal">Close</button>
                                    <button class="btn btn-primary" type="button">Save </button>
                                </div>
                            </div>
                        </div>
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
                        <input class="form-control" type="number" name="code" />

                    </div>

                    <label class="col-sm-2 col-form-label" for="sec_id">Level</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="sec_id">
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
                        {{-- <select class="form-control js-choice" id="phase" multiple="multiple" size="1"
                            name="phase[]" data-options='{"removeItemButton":true,"placeholder":true}'>
                            <option value="">PLEASE CHOOSE</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select> --}}

                        {{-- <label><input type="checkbox" name="phase[]" value="1"> 1</label>
                        <label><input type="checkbox" name="phase[]" value="2"> 2</label>
                        <label><input type="checkbox" name="phase[]" value="3"> 3</label>
                        <label><input type="checkbox" name="phase[]" value="4"> 4</label> --}}

                        {{-- <div class="form-group"><br>
                            <label><input type="checkbox" name="phase_1"> 1</label>
                            <label><input type="checkbox" name="phase_2" value="2"> 2</label>
                            <label><input type="checkbox" name="phase_3" value="3"> 3</label>
                            <label><input type="checkbox" name="phase_4" value="4"> 4</label>
                        </div>

                        $request->phase_1 --}}


                        <div class="mb-2 col-sm-7">
                            <div class="form-check">
                                <input type="checkbox" name="phase[]" value="1" class="form-check-input">
                                1
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="phase[]" value="2" class="form-check-input">2
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="phase[]" value="3" class="form-check-input">3
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="phase[]" value="3" class="form-check-input">4
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="phase[]" value="3" class="form-check-input">5
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="phase[]" value="3" class="form-check-input">6
                            </div>

                        </div>
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

                    <div class="col" style="text-align: right">
                        <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3"
                            href="/MD/initiative">
                            <span class="fas fa-times-circle"></span>&nbsp;Cancel
                        </a>
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
