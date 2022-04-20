@extends('base')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>PELAN PELAKSANAAN DASAR</H2>
        </div>

        <br>

        <span><b>KPI Nasional</b></span>
        <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white" href="/kpi/create">
            <span class="fas fa-plus-circle"></span>&nbsp;Tambah
        </a>

        <hr style="width:100%;text-align:center;">

        <div class="row">
            <div class="col">
                <select class="form-select" style="width:70%" aria-label="Default select example">
                    <option selected="">PILIH OUTCOME NASIONAL</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
            <div class="col" style="text-align: right">
                <a class="btn btn-falcon-default btn-sm" style="background-color: #047FC3; color:white" href="/kpi/create">
                    &nbsp;Kemas Kini Markah
                </a>
            </div>

        </div>


        <div class="table-responsive scrollbar">
            <table class="table table-hover table-striped overflow-hidden">
                <thead>
                    <tr>
                        <th scope="col"></th>
                        <th scope="col"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($kpi as $kpi)
                        <tr class="align-middle">
                            <td class="text-nowrap">
                                <div class="d-flex align-items-center">
                                    <div class="ms-2"><b>{{ $kpi->keteranganKpi }}</b></div>
                                </div>
                            </td>

                            <td align="right">
                                <div>
                                    <form action="{{ route('kpi.destroy', $kpi->id) }}" method="POST">

                                        <a class="btn btn-primary" style="border-radius: 38px"
                                            href="{{ route('kpi.edit', $kpi->id) }}"><i class="fas fa-edit"></i>
                                        </a>

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn btn-danger" style="border-radius: 38px">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>



    </div>
@endsection
