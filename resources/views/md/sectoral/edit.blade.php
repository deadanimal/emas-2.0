@extends('base-md')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>UPDATE DATA FOR SECTORAL</H2>
        </div>


        <br>
        <br>

        <div class="form-floating;">
            <form action="/MD/sectoral/{{ $sectoral->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row justify-content-center">
                    <div class="col-lg-6">

                        <div class="mb-3 row">
                            <label class="col-form-label" for="intiative_id">Initiative Code</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="intiative_id">
                                    @foreach ($initiatives as $initiative)
                                        <option @selected($sectoral->intiative_id == $initiative->id) value="{{ $initiative->id }}">
                                            {{ $initiative->code }} - {{ $initiative->namaInitiative }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-form-label" for="cluster_id">Cluster</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="cluster_id">
                                    @foreach ($cluster as $cluster)
                                        <option @selected($sectoral->cluster_id == $cluster->id) value="{{ $cluster->id }}">
                                            {{ $cluster->code }} - {{ $cluster->namaCluster }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-form-label" for="namasectoral">sectoral Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="namasectoral"
                                    value="{{ $sectoral->namasectoral }}" />

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-form-label" for="sectoralLead">sectoral Lead</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="sectoralLead"
                                    value="{{ $sectoral->sectoralLead }}" />

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-form-label" for="leadAgency">Lead Agency/Ministry</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="leadAgency"
                                    value="{{ $sectoral->leadAgency }}" />

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-form-label" for="sectoralTarget">sectoral Target</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="sectoralTarget"
                                    value="{{ $sectoral->sectoralTarget }}" />

                            </div>
                        </div>
                        <br><br>

                        <div class="row">


                            <div class="col" style="text-align: right">
                                <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3"
                                    href="/MD/sectoral">
                                    <span class="fas fa-times-circle"></span>&nbsp;Cancel
                                </a>

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
