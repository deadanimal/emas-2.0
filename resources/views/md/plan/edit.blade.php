@extends('base')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>UPDATE DATA</H2>
        </div>


        <br>
        <br>

        <div class="form-floating;">
            <form action="/plan/{{ $plan->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row justify-content-center">
                    <div class="col-lg-6">

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label" for="intiative_id">Initiative</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="intiative_id">
                                    @foreach ($initiatives as $initiative)
                                        <option @selected($plan->intiative_id == $initiative->id) value="{{ $initiative->id }}">
                                            {{ $initiative->code }} - {{ $initiative->namaInitiative }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label" for="program_id">Program</label>
                            <div class="col-sm-10">
                                <select class="form-control" name="program_id">
                                    @foreach ($programs as $program)
                                        <option @selected($plan->program_id == $program->id) value="{{ $program->id }}">
                                            {{ $program->namaProgram }}
                                        </option>
                                    @endforeach

                                </select>
                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label" for="namaPlan">Plan Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="namaPlan" value="{{ $plan->namaPlan }}" />

                            </div>
                        </div>

                        <div class="mb-3 row">
                            <label class="col-sm-2 col-form-label" for="leadAgency">Lead Agency/Kementerian</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="leadAgency"
                                    value="{{ $program->leadAgency }}" />

                            </div>
                        </div>

                        <br><br>

                        <div class="row">
                            <div class="col">
                                <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3"
                                    href="/plan">
                                    <span class="fas fa-times-circle"></span>&nbsp;Cancel
                                </a>
                            </div>

                            <div class="col" style="text-align: right">
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
