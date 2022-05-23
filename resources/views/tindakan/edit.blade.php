@extends('base')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>KEMAS KINI DATA</H2>
        </div>


        <br>
        <br>



        <div class="form-floating;">
            <form action="/tindakan/{{ $tindakan->id }}" method="POST">
                @csrf
                @method('PUT')


                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="insiatif_id">Inisiatif</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="insiatif_id">
                            <option value="">SILA PILIH</option>

                            @foreach ($list as $list)
                                <option value="{{ $list->id }}">{{ $list->keteranganInisiatif }}</option>
                            @endforeach

                        </select>
                    </div>
                </div>

                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="namaTindakan" >Nama Tindakan</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="namaTindakan" value="{{ $tindakan->namaTindakan }}"/>

                    </div>
                </div>

                <br>
                <br>

                <div class="mb-3">
                    <label class="form-label" for="keteranganTindakan"><b>Keterangan tindakan </b></label>
                    <textarea class="form-control" name="keteranganTindakan" rows="5">{{ $tindakan->keteranganTindakan }}</textarea>
                </div>

                <div class="row">
                    <div class="col">
                        <a class="btn btn-falcon-default btn-sm" style="background-color: white; color:#047FC3" href="/tindakan">
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
