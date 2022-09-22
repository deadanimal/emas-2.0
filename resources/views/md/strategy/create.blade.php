@extends('base-md')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>DATA ENTRY</H2>
        </div>

        <br>
        <br>

        <div class="form-floating;">
            <form action="{{ route('strategy.store') }}" method="POST">
                @csrf

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="namaStrategy">Strategy Name</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="namaStrategy" />

                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="thrus_id">Thrust</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="thrus_id" id="pilih1">
                            <option selected disabled hidden>PLEASE CHOOSE</option>

                            @foreach ($thrusts as $thrust)
                                <option value="{{ $thrust->id }}">{{ $thrust->namaThrust }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="">Category</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="category" id="pilih2">
                            <option selected disabled hidden>PLEASE CHOOSE</option>
                            <option value="DEB">DEB</option>
                            <option value="4IR">4IR</option>
                        </select>

                    </div>
                </div>


                <br>
                <br>

                <div class="mb-3">
                    <label class="form-label" for="desc"><b>Description:</b></label>
                    <textarea class="form-control" name="desc" rows="5"></textarea>
                </div>



                <div class="row">
                    <div class="col">
                        <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3"
                            href="/strategy">
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

    <script>
        $("#pilih1").change(function() {

            var thrus_id = $(this).val();
            var thrusts = @json($thrusts->toArray());
            $("#pilih2").html(``);
            thrusts.forEach(thrust => {
                console.log(thrusts);
                if (thrust.thrus_id == thrus_id) {
                    $("#pilih2").append(`
                        <option value="` + thrust.id + `">` + thrust.category + `</option>
                    `);
                }
            });
        });
    </script>
@endsection
