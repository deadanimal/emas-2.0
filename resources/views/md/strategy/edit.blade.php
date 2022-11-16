@extends('base-md')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>UPDATE DATA FOR STRATEGY</H2>
        </div>


        <br>
        <br>

        <div class="form-floating;">
            <form action="/MD/strategy/{{ $strategy->id }}" method="POST">
                @csrf
                @method('PUT')


                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="thrust_id">Thrust*</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="thrust_id" id="pilih1">
                            @foreach ($thrust as $thrust)
                                <option @selected($strategy->thrust_id == $thrust->id) value="{{ $thrust->id }}">{{ $thrust->namaThrust }}
                                </option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="category">Document*</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="category" id="pilih2">
                            <option @selected($strategy->category == 'DEB') value="DEB">DEB</option>
                            <option @selected($strategy->category == '4IR') value="4IR">4IR</option>

                        </select>
                    </div>
                </div>


                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="namaStrategy">Strategy Name*</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="namaStrategy"
                            value="{{ $strategy->namaStrategy }}" />

                    </div>
                </div>



                <br><br>

                <div class="mb-3">
                    <label class="form-label" for="desc"><b>Description</b></label>
                    <textarea class="form-control" name="desc" rows="5">{{ $strategy->desc }}</textarea>
                </div>

                <div class="row">


                    <div class="col" style="text-align: right">
                        <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3"
                            href="/MD/strategy">
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

    </div><br>

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

    <script>
        $("#pilih1").change(function() {

            var thrus_id = $(this).val();
            var categories = @json($categories->toArray());
            $("#pilih2").html(``);
            categories.forEach(cat => {
                if (cat.id == thrus_id) {
                    $("#pilih2").append(`
                        <option value="` + cat.category + `">` + cat.category + `</option>
                    `);
                }
            });
        });
    </script>
@endsection
