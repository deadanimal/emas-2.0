@extends('base-mpb')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>DATA ENTRY FOR NATIONAL INITIATIVE</H2>
        </div>

        <br>
        <br>

        <div class="form-floating;">
            <form action="{{ route('national.store') }}" method="POST">
                @csrf


                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="thrust_id">Thrust*</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="thrust_id" name="thrust_id">
                            <option selected disabled hidden>PLEASE CHOOSE</option>

                            @foreach ($list as $list)
                                <option value="{{ $list->id }}">{{ $list->namaThrust }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="namaNational">National Initiative*</label>
                    <div class="col-sm-10">
                        <input class="form-control" type="text" id="namaNational" name="namaNational" />

                    </div>
                </div>


                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="year">Year*</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="year">
                            <option selected disabled hidden>PLEASE CHOOSE</option>
                            <option value="2017">2017</option>
                            <option value="2018">2018</option>
                            <option value="2019">2019</option>
                            <option value="2020">2020</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                            <option value="2025">2025</option>

                        </select>

                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="quarter">Quarter*</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="quarter">
                            <option selected disabled hidden>PLEASE CHOOSE</option>
                            <option value="Q1">Q1</option>
                            <option value="Q2">Q2</option>
                            <option value="Q3">Q3</option>
                            <option value="Q4">Q4</option>
                        </select>

                    </div>
                </div>



                <br>
                <br>

                <div class="mb-3">
                    <label class="form-label" for="keteranganNational"><b>Description:</b></label>
                    <textarea class="form-control" name="keteranganNational" rows="5"></textarea>
                </div>




                <div class="col" style="text-align: right">
                    <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3"
                        href="/MPB/national">
                        <span class="fas fa-times-circle"></span>&nbsp;Cancel
                    </a>
                    <button class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                        type="submit" value="Save" onclick="return confirm('Are you sure want to save this data?')"><span
                            class="fas fa-save"></span>&nbsp;Save
                    </button>
                </div>

                <input class="form-control" name="user_id" onchange="selectUser()" type="hidden" id="user_id"
                    value="{{ $user->id }}" />


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

    <script>
        function selectUser() {
            let select = document.getElementById('user_id');
            let namaThrust = document.getElementById('thrust_id');

            if (select.value === 'default') {
                namaThrust.value = '';
            } else {
                namaThrust.value = JSON.parse(select.value).address;
            }
        }
    </script>

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
