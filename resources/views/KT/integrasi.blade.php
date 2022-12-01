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
                    <form action="/KT/integrasi" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary" name="jenis" value="kampung">Maklumat Kampung</button>
                        <button type="submit" class="btn btn-primary" name="jenis" value="penyelaras">Maklumat penyelaras</button>
                        <button type="submit" class="btn btn-primary" name="jenis" value="penghulu_mukim">Maklumat penghulu_mukim</button>
                        <button type="submit" class="btn btn-primary" name="jenis" value="pengerusi_jawatankuasa">Maklumat pengerusi_jawatankuasa</button>
                        <button type="submit" class="btn btn-primary" name="jenis" value="dunparlimen">Maklumat dunparlimen</button>
                        <button type="submit" class="btn btn-primary" name="jenis" value="mukimdaerah">Maklumat mukimdaerah</button>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection