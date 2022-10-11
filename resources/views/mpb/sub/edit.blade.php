@extends('base-mpb')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>UPDATE DATA</H2>
        </div>


        <br>
        <br>

        <div class="form-floating;">
            <form action="/MPB/sub/{{ $sub->id }}" method="POST">
                @csrf
                @method('PUT')


                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="key_id">Key Activity</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="key_id">
                            @foreach ($list as $list)
                                <option @selected($sub->key_id == $list->id) value="{{ $list->id }}">{{ $list->namaKey }}
                                </option>
                            @endforeach

                        </select>
                    </div>
                </div>


                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="namaSub">Sub-Key Activity</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" name="namaSub" value="{{ $sub->namaSub }}" />

                    </div>
                </div>

                <br><br>

                <div class="mb-3">
                    <label class="form-label" for="keteranganSub"><b>Sub-Key Activities</b></label>
                    <textarea class="form-control" name="keteranganSub" rows="5">{{ $sub->keteranganSub }}</textarea>
                </div>

                <div class="col" style="text-align: right">
                    <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3" href="/MPB/sub">
                        <span class="fas fa-times-circle"></span>&nbsp;Cancel
                    </a>
                    <button class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                        type="submit" value="Save" onclick="return confirm('Are you sure want to save this data?')"><span
                            class="fas fa-save"></span>&nbsp;Save
                    </button>
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
