@extends('base-tableau')
@section('content')
    <div class='tableauPlaceholder' id='viz1669953265356' style='position: relative'><noscript><a href='#'><img
                    alt='Prestasi Pelaksanaan Tindakan '
                    src='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Pr&#47;PrestasiPelaksanaanTindakan&#47;PrestasiPelaksanaanTindakan&#47;1_rss.png'
                    style='border: none' /></a></noscript><object class='tableauViz' style='display:none;'>
            <param name='host_url' value='https%3A%2F%2Fpublic.tableau.com%2F' />
            <param name='embed_code_version' value='3' />
            <param name='site_root' value='' />
            <param name='name' value='PrestasiPelaksanaanTindakan&#47;PrestasiPelaksanaanTindakan' />
            <param name='tabs' value='no' />
            <param name='toolbar' value='yes' />
            <param name='static_image'
                value='https:&#47;&#47;public.tableau.com&#47;static&#47;images&#47;Pr&#47;PrestasiPelaksanaanTindakan&#47;PrestasiPelaksanaanTindakan&#47;1.png' />
            <param name='animate_transition' value='yes' />
            <param name='display_static_image' value='yes' />
            <param name='display_spinner' value='yes' />
            <param name='display_overlay' value='yes' />
            <param name='display_count' value='yes' />
            <param name='language' value='en-GB' />
        </object></div>
    <script type='text/javascript'>
        var divElement = document.getElementById('viz1669953265356');
        var vizElement = divElement.getElementsByTagName('object')[0];
        if (divElement.offsetWidth > 800) {
            vizElement.style.width = '100%';
            vizElement.style.height = (divElement.offsetWidth * 0.75) + 'px';
        } else if (divElement.offsetWidth > 500) {
            vizElement.style.width = '100%';
            vizElement.style.height = (divElement.offsetWidth * 0.75) + 'px';
        } else {
            vizElement.style.width = '100%';
            vizElement.style.height = '2377px';
        }
        var scriptElement = document.createElement('script');
        scriptElement.src = 'https://public.tableau.com/javascripts/api/viz_v1.js';
        vizElement.parentNode.insertBefore(scriptElement, vizElement);
    </script>
@endsection
