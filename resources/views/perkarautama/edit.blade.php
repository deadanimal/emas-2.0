@extends('base')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>KEMAS KINI DATA</H2>
        </div>


        <br>
        <br>



        <div class="form-floating;">
            <form action="/perkarautama/{{ $perkarautama->id }}" method="POST">
                @csrf
                @method('PUT')


                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="fokus_id">Fokus Utama</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="fokus_id">
                            <option value="">SILA PILIH</option>

                            @foreach ($list as $list)
                                <option value="{{ $list->id }}">{{ $list->namaFokus }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="namaPerkara">Nama Perkara Utama</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="namaPerkara" value="{{ $perkarautama->namaPerkara }}"/>

                    </div>
                </div>

                <br>
                <br>

                <div class="mb-3">
                    <label class="form-label" for="keteranganPerkaraUtama"><b>Keterangan Perkara Utama</b></label>
                    <textarea class="form-control" name="keteranganPerkaraUtama"
                        rows="5">{{ $perkarautama->keteranganPerkaraUtama }}</textarea>
                </div>
                <div class="row">
                    <div class="col">
                        <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3" href="/perkarautama">
                            <span class="fas fa-times-circle"></span>&nbsp;Batal
                        </a>
                    </div>

                    <div class="col" style="text-align: right">
                        <button class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white;"
                            type="submit" value="Save" onclick="return confirm('Adakah anda mahu mengubah data ini?')"><span class="fas fa-save"></span>&nbsp;Simpan
                        </button>
                    </div>
                </div>

            </form>

        </div>

    </div>

    <script>
        function ConfirmSave() {
            var isconfirm = window.confirm("Adakah anda mahu mengubah data?");
            if (isconfirm)
                self.location = "Save.php";
        }
    </script>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Ooops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
@endsection
