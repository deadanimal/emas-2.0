@extends('base-md')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>DATA ENTRY</H2>
        </div>

        <br>
        <br>

        <div class="form-floating;">
            <form action="{{ route('cluster.store') }}" method="POST">
                @csrf

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="namaCluster">Cluster Name</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="namaCluster" />

                    </div>

                    <label class="col-sm-2 col-form-label" for="chairman">Chairman</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="chairman" />

                    </div>
                </div>



                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="agency">Secretariat</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="agency">
                            <option selected disabled hidden>PLEASE CHOOSE</option>
                            <option value="MOHR">MOHR</option>
                            <option value="KKMM">KKMM</option>
                            <option value="MOSTI">MOSTI</option>
                            <option value="MITI">MITI</option>
                            <option value="KPWKM">KPWKM</option>
                            <option value="MAMPU">MAMPU</option>
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

                    <div class="col" style="text-align: right">
                        <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3"
                            href="/MD/cluster">
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
