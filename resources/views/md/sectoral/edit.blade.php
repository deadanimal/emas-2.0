@extends('base-md')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>UPDATE DATA FOR SECTORAL</H2>
        </div>


        <br>
        <br>

        <div class="form-floating;">
            <form action="/MD/sectoral/{{ $sectoral->id }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="category">Document*</label>
                    <div class="col-sm-10" style="width:30%">
                        <select class="form-control" name="category" required>
                            <option selected disabled hidden>PLEASE CHOOSE</option>
                            <option @selected($sectoral->category == 'DEB') value="DEB">DEB</option>
                            <option @selected($sectoral->category == '4IR') value="4IR">4IR</option>

                        </select>

                    </div>
                </div>
                <div class="mb-3 row">
                    <label class="col-sm-2 col-form-label" for="namaSectoral">Sectoral*</label>
                    <div class="col-sm-10" style="width:30%">
                        <input class="form-control" type="text" name="namaSectoral" value="{{ $sectoral->namaSectoral }}"
                            required />


                    </div>
                </div>

                <br>
                <br>

                <div class="mb-3">
                    <label class="form-label" for="desc"><b>Description:</b></label>
                    <textarea class="form-control" name="desc" rows="5">{{ $sectoral->desc }}</textarea>
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
