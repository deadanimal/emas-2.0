@extends('base-kt')
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

                    <span><b>Lokaliti Mengikut Negeri</b></span>

                </div>

            </div>
        </div>

        <hr style="width:100%;text-align:center;">

        <div class='tableauPlaceholder' id='viz1667881387806' style='position: relative'><noscript><a href='#'><img
                        alt='Jumlah KIR &amp; AIR mengikut Negeri '
                        src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;BM&#47;BMTKM-Lokaliti&#47;JumlahKIRAIRmengikutNegeri&#47;1_rss.png'
                        style='border: none' /></a></noscript><object class='tableauViz' style='display:none;'>
                <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
                <param name='embed_code_version' value='3' />
                <param name='path'
                    value='views&#47;BMTKM-Lokaliti&#47;JumlahKIRAIRmengikutNegeri?:language=en-GB&amp;:embed=true' />
                <param name='toolbar' value='yes' />
                <param name='static_image'
                    value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;BM&#47;BMTKM-Lokaliti&#47;JumlahKIRAIRmengikutNegeri&#47;1.png' />
                <param name='animate_transition' value='yes' />
                <param name='display_static_image' value='yes' />
                <param name='display_spinner' value='yes' />
                <param name='display_overlay' value='yes' />
                <param name='display_count' value='yes' />
                <param name='language' value='en-GB' />
            </object></div>
        <script type='text/javascript'>
            var divElement = document.getElementById('viz1667881387806');
            var vizElement = divElement.getElementsByTagName('object')[0];
            if (divElement.offsetWidth > 800) {
                vizElement.style.width = '1366px';
                vizElement.style.height = '795px';
            } else if (divElement.offsetWidth > 500) {
                vizElement.style.width = '1366px';
                vizElement.style.height = '795px';
            } else {
                vizElement.style.width = '100%';
                vizElement.style.height = '727px';
            }
            var scriptElement = document.createElement('script');
            scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
            vizElement.parentNode.insertBefore(scriptElement, vizElement);
        </script>
        <br><br>


        <table class="table table-bordered">
            <thead class="table-dark">
                <tr>
                    <th scope="col">No.</th>
                    <th colspan="1">Negeri</th>
                    <th scope="col">Jumlah KIR</th>
                    <th scope="col">Jumlah AIR</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($negeris as $negeri)
                    <tr>
                        <td>{{ $loop->iteration }}.</td>
                        <td>{{ $negeri->name }}</td>
                        <td>{{ $negeri->jumlah_kir }}</td>
                        <td>{{ $negeri->jumlah_air }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endsection
