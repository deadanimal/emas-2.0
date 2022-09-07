@extends('base')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>PELAKSANAAN PROGRAM PEMBASMIAN
                KEMISKINAN TEGAR KELUARGA MALAYSIA
                (BMTKM)</H2>
        </div>

        <div class="col">
            <div class="row align-items-center">
                <div class="col col-lg-8">

                    <span><b>Senarai Kemasukan Data KIR & AIR</b></span>

                </div>
                <div class="col-12 col-sm-auto ms-auto">
                    <input class="form-control myInput" type="text" placeholder="Search">
                </div>
            </div>
        </div>

        <hr style="width:100%;text-align:center;">

        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">No.</th>
                    <th colspan="1">Nama</th>
                    <th scope="col">No Kad Pengenalan</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Tindakan</th>


                </tr>
            </thead>
            <tbody>
                @foreach ($profils as $profil)
                    <tr>
                        <td>{{ $loop->iteration }}.</td>
                        <td>{{ $profil->nama }}</td>
                        <td>{{ $profil->no_kad_pengenalan }}</td>
                        <td>{{ $profil->kategori }}</td>
                        <td>
                            <a class="btn btn-primary" style="border-radius: 38px" href="/"><i
                                    class="fas fa-edit"></i>
                            </a>


                            <button type="submit" onclick="myFunction({{ $profil->id }})" class="btn btn-danger"
                                style="border-radius: 38px">
                                <i class="fas fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
