@extends('base-md')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>UPDATE DATA</H2>
        </div>


        <br>
        <br>

        <div class="form-floating;">
            <form action="/cluster/{{ $cluster->id }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="namaCluster">Cluster Name</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="namaCluster" value="{{ $cluster->namaCluster }}" />

                    </div>

                    <label class="col-sm-2 col-form-label" for="chairman">Chairman</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="chairman" />

                    </div>
                </div>




                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="agency">Secretariat </label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="agency">
                            <option @selected($cluster->agency == 'MOHR') value="MOHR">MOHR</option>
                            <option @selected($cluster->agency == 'KKMM') value="KKMM">KKMM</option>
                            <option @selected($cluster->agency == 'MOSTI') value="MOSTI">MOSTI</option>
                            <option @selected($cluster->agency == 'MITI') value="MITI">MITI</option>
                            <option @selected($cluster->agency == 'KPWKM') value="KPWKM">KPWKM</option>
                            <option @selected($cluster->agency == 'MAMPU') value="MAMPU">MAMPU</option>

                        </select>
                    </div>
                </div>

                <br><br>

                <div class="mb-3">
                    <label class="form-label" for="desc"><b>Description</b></label>
                    <textarea class="form-control" name="desc" rows="5">{{ $cluster->desc }}</textarea>
                </div>

                <div class="row">
                    <div class="col">
                        <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3"
                            href="/cluster">
                            <span class="fas fa-times-circle"></span>&nbsp;Cancel
                        </a>
                    </div>

                    <div class="col" style="text-align: right">
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
