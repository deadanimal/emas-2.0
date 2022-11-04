@extends('base-mpb')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>DATA ENTRY FOR KEY ACTIVITY</H2>
        </div>

        <br>
        <br>

        <div class="form-floating;">
            <form action="{{ route('key.store') }}" method="POST">
                @csrf

                <div class="mb-3 row">

                    <label class="col-sm-2 col-form-label" for="national_id">National Initiatives*</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="national_id">
                            <option selected disabled hidden>PLEASE CHOOSE</option>

                            @foreach ($national as $list)
                                <option value="{{ $list->id }}">{{ $list->namaNational }}</option>
                            @endforeach

                        </select>
                    </div>

                    <div class="mb-3 row">
                        <label class="col-sm-2 col-form-label" for="namaKey">Key Activity*</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" name="namaKey" />

                        </div>
                    </div>
                </div>




                <br>
                <br>

                <div class="mb-3">
                    <label class="form-label" for="keteranganKey"><b>Key Activities Information:</b></label>
                    <textarea class="form-control" name="keteranganKey" rows="5"></textarea>
                </div>



                <div class="col" style="text-align: right">
                    <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3" href="/MPB/key">
                        <span class="fas fa-times-circle"></span>&nbsp;Cancel
                    </a>
                    <button class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                        type="submit" value="Save" onclick="return confirm('Are you sure want to save this data?')"><span
                            class="fas fa-save"></span>&nbsp;Save
                    </button>
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
