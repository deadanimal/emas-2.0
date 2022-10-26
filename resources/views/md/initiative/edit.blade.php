@extends('base-md')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>UPDATE DATA FOR INITIATIVE</H2>
        </div>


        <br>
        <br>

        <div class="form-floating;">
            <form action="/MD/initiative/{{ $initiative->id }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="cluster_id">Cluster*</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="cluster_id">
                            @foreach ($cluster as $cluster)
                                <option @selected($initiative->cluster_id == $cluster->id) value="{{ $cluster->id }}">
                                    {{ $cluster->namaCluster }}
                                </option>
                            @endforeach

                        </select>
                    </div>

                    <label class="col-sm-2 col-form-label" for="responsible_user">Responsible User*</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="responsible_user"
                            value="{{ $initiative->responsible_user }}" />

                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="namaInitiative">Initiative Name*</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="namaInitiative"
                            value="{{ $initiative->namaInitiative }}" />

                    </div>

                    <label class="col-sm-2 col-form-label" for="PIC">Person In Charge*</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="PIC" value="{{ $initiative->PIC }}" />

                    </div>

                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="code">Initiative Code*</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="code" value="{{ $initiative->code }}" />

                    </div>

                    <label class="col-sm-2 col-form-label" for="position">Position*</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="number" name="position" value="{{ $initiative->position }}" />

                    </div>


                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="target">Target Initiative*</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="target" value="{{ $initiative->target }}" />

                    </div>

                    <label class="col-sm-2 col-form-label" for="phoneNo">Contact Number*</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="number" name="phoneNo" value="{{ $initiative->phoneNo }}" />

                    </div>
                </div>

                {{-- <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="phase">Phase</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="phase">
                            <option @selected($initiative->phase == '1') value="1">1</option>
                            <option @selected($initiative->phase == '2') value="2">2</option>
                            <option @selected($initiative->phase == '3') value="3">3</option>
                        </select>
                    </div>
                </div> --}}

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="phase">Phase*</label>
                    <div class="col-sm-10" style="width:30%">

                        <select class="form-control" name="phase">
                            <option @selected($initiative->phase == '1') value="1">1-2 (2021-2025)</option>
                            <option @selected($initiative->phase == '2') value="2">1-2 (2021-2025)</option>
                            <option @selected($initiative->phase == '3') value="3">1-3 (2021-2030)</option>
                            <option @selected($initiative->phase == '4') value="4">2 (2023-2025)</option>
                            <option @selected($initiative->phase == '5') value="5">2 (2023-2030)</option>
                            <option @selected($initiative->phase == '6') value="6">3 (2026-2030)</option>
                        </select>
                        {{-- <div class="mb-2 col-sm-7">
                            <div class="form-check">
                                <input type="checkbox" name="phase[]" value="1"
                                    {{ $initiative->phase == 1 ? ' checked' : '' }} class="form-check-input">
                                1-2 (2021-2022)
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="phase[]" value="2"
                                    {{ $initiative->phase == 1 ? ' checked' : '' }} class="form-check-input">1-2 (2021-2025)
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="phase[]" value="2"
                                    {{ $initiative->phase == 1 ? ' checked' : '' }} class="form-check-input">1-3 (2021-2030)
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="phase[]" value="3"
                                    {{ $initiative->phase == 1 ? ' checked' : '' }} class="form-check-input">2 (2023-2025)
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="phase[]" value="3"
                                    {{ $initiative->phase == 1 ? ' checked' : '' }} class="form-check-input">2 (2023-2030)
                            </div>
                            <div class="form-check">
                                <input type="checkbox" name="phase[]" value="3"
                                    {{ $initiative->phase == 1 ? ' checked' : '' }} class="form-check-input">3 (2026-2030)
                            </div>

                        </div> --}}


                    </div>
                    <label class="col-sm-2 col-form-label" for="email">Primary Email Address*</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="email" value="{{ $initiative->email }}" />

                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="leadAgency">Lead Agency*</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="leadAgency"
                            value="{{ $initiative->leadAgency }}" />

                    </div>

                    <label class="col-sm-2 col-form-label" for="email2">Secondary Email Address*</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="email2" value="{{ $initiative->email2 }}" />
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for=""></label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" hidden />


                    </div>

                    <label class="col-sm-2 col-form-label" for="category">Document*</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="category" id="pilih2">
                            <option @selected($initiative->category == 'DEB') value="DEB">DEB</option>
                            <option @selected($initiative->category == '4IR') value="4IR">4IR</option>

                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for=""></label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" hidden />


                    </div>

                    <label class="col-sm-2 col-form-label" for="sec_id">Level*</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="sec_id">
                            <option selected disabled hidden>PLEASE CHOOSE</option>
                            <option @selected($initiative->sec_id == 'National') value="National">National</option>
                            <option @selected($initiative->sec_id == 'Sectoral') value="Sectoral">Sectoral</option>

                        </select>

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
