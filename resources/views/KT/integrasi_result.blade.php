@extends('base-kt')
@section('content')
    <div class="container">
        <div class="mb-4 text-center">
            <H2>INTEGRASI SISTEM
            </H2>
        </div>

        <br>

        <div class="col">
            <div class="row align-items-center">
                <div class="col col-lg-8">
                    {{$response}}
                </div>
            </div>
        </div>

    </div>
@endsection
