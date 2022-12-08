<!DOCTYPE html>
<html lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>eMAS | 2.0</title>


    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/favicons/favicon.ico">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicons/favicon.ico">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicons/favicon.ico">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/img/favicons/favicon.ico">
    <link rel="manifest" href="/assets/img/favicons/manifest.json">
    {{-- <link href="vendors/dropzone/dropzone.min.css" rel="stylesheet" /> --}}
    <meta name="msapplication-TileImage" content="/assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="/assets/js/config.js"></script>
    <script src="/vendors/overlayscrollbars/OverlayScrollbars.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    {{-- <script src="vendors/dropzone/dropzone.min.js"></script> --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    {{-- <script type="text/javascript" src="/assets/js/datatables.min.js"></script>
    <script type="text/javascript" src="/assets/js/datatables.js"></script> --}}
    <script src="/assets/js/flatpickr.js"></script>
    <script src="https://cdn.rawgit.com/davidshimjs/qrcodejs/gh-pages/qrcode.min.js"></script>


    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.2.0/css/datepicker.min.css"
        rel="stylesheet">


    <!-- ===============================================-->
    <!--    Stylesheets-->
    <!-- ===============================================-->
    <link href="/vendors/leaflet/leaflet.css" rel="stylesheet">
    <link href="/vendors/leaflet.markercluster/MarkerCluster.css" rel="stylesheet">
    <link href="/vendors/leaflet.markercluster/MarkerCluster.Default.css" rel="stylesheet">
    <link href="/vendors/fullcalendar/main.min.css" rel="stylesheet">
    <link href="/vendors/flatpickr/flatpickr.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&amp;display=swap"
        rel="stylesheet">
    <link href="/vendors/overlayscrollbars/OverlayScrollbars.min.css" rel="stylesheet">
    {{-- <link href="/assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl"> --}}
    <link href="/assets/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="/vendors/choices/choices.min.css" rel="stylesheet" />
    {{-- <link href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" rel="stylesheet"> --}}
    <link href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    {{-- <link href="https://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css" rel="stylesheet"> --}}
    {{-- <link href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap4.min.css" rel="stylesheet"> --}}
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script> --}}
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script> --}}
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script> --}}
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

    <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>

</head>


<body>
    <style>
        .form-control {
            border-color: #76bbe9;
        }

        .emas-dg {
            color: #76bbe9;
        }

        .emas-bg-dg {
            background-color: #76bbe9;
            /* z-index: 99; */
            /* overflow: hidden */
            position: relative;
            color: #07385E;

        }

        .footerContent {
            background-color: #76bbe9;
            color: #07385E;


        }

        .emas-g {
            color: #76bbe9;
        }

        .emas-bg-g {
            background-color: #e8efeb;
        }

        .nav-link-emas {
            color: #0F5E31;
        }

        .nav-link-emas.active {
            background-color: #047FC3;
            color: white;
        }

        .nav-link.active {
            background-color: #76bbe9;
            color: white;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #fff;
            background-color: #76bbe9;
        }

        .nav-link {
            display: block;
            padding: 0.5rem 1rem;
            /* color: #009640; */
            -webkit-transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out;
            -o-transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out;
        }

        .nav-link:hover,
        .nav-link:focus {
            color: #fff;
            background-color: #047FC3;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-primary,
        .tox .tox-menu__footer .tox-button:last-child,
        .tox .tox-dialog__footer .tox-button:last-child {
            color: #fff;
            background-color: #009640;
            border-color: #009640;
            -webkit-box-shadow: inset 0 1px 0 rgb(255 255 255 / 15%), 0 1px 1px rgb(0 0 0 / 8%);
            box-shadow: inset 0 1px 0 rgb(255 255 255 / 15%), 0 1px 1px rgb(0 0 0 / 8%);
        }

        .btn-primary:hover,
        .tox .tox-menu__footer .tox-button:hover:last-child,
        .tox .tox-dialog__footer .tox-button:hover:last-child {
            color: #fff;
            background-color: #0F5E31;
            border-color: #0F5E31;
        }

        .btn-check:focus+.btn-primary,
        .tox .tox-menu__footer .btn-check:focus+.tox-button:last-child,
        .tox .tox-dialog__footer .btn-check:focus+.tox-button:last-child,
        .btn-primary:focus,
        .tox .tox-menu__footer .tox-button:focus:last-child,
        .tox .tox-dialog__footer .tox-button:focus:last-child {
            color: #fff;
            /* background-color: #009640;
            border-color: #009640; */
            -webkit-box-shadow: inset 0 1px 0 rgb(255 255 255 / 15%), 0 1px 1px rgb(0 0 0 / 8%), 0 0 0 0 rgb(76 143 233 / 50%);
            box-shadow: inset 0 1px 0 rgb(255 255 255 / 15%), 0 1px 1px rgb(0 0 0 / 8%), 0 0 0 0 rgb(76 143 233 / 50%);
        }

        .btn-outline-primary {
            color: #009640;
            /* border-color: #009640; */
        }

        .btn-outline-primary:hover {
            color: #fff;
            background-color: #047FC3;
            border-color: #76bbe9;
        }

        .nav-link-side {
            /* display: block; */
            padding: 0.5rem 1rem;
            color: #fff;
            -webkit-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
            -o-transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out, border-color 0.15s ease-in-out;
        }

        @media (prefers-reduced-motion: reduce) {
            .nav-link-side {
                -webkit-transition: none;
                -o-transition: none;
                transition: none;
            }
        }

        .nav-link-side:hover,
        .nav-link-side:focus {
            color: #fff;
            background-color: #047FC3;
            text-decoration: none;
            border-radius: 5px;
        }

        .nav-link-side.disabled {
            color: #748194;
            pointer-events: none;
            cursor: default;
        }

        li {
            display: list-item;
            /* color: #009640; */
            text-align: -webkit-match-parent;
        }

        .page-item.active .page-link {
            z-index: 3;
            color: var(--falcon-pagination-active-color);
            /* background-color: #009640;
            border-color: #009640; */
        }

        .dropdown-indicator:after {
            content: "";
            display: block;
            position: absolute;
            right: 5 px;
            height: 0.4 rem;
            width: 0.4 rem;
            border-right: 1 px solid white;
            border-bottom: 1 px solid white;
            top: 50%;
            -webkit-transform: translateY(-50%) rotate(45deg);
            -ms-transform: translateY(-50%) rotate(45deg);
            transform: translateY(-50%) rotate(45deg);
            -webkit-transition: all .2s ease-in-out;
            -o-transition: all .2s ease-in-out;
            transition: all .2s ease-in-out;
            -webkit-transform-origin: center;
            -ms-transform-origin: center;
            transform-origin: center;
            -webkit-transition-property: border-color, -webkit-transform;
            transition-property: border-color, -webkit-transform;
            -o-transition-property: transform, border-color;
            transition-property: transform, border-color;
            transition-property: transform, border-color, -webkit-transform;
        }





        @media (min-width: 1440px) {
            .navbar-vertical.navbar-expand-xl {
                max-width: 250px;
                top: 0;
                height: 100%;
                margin: 0;
            }


            .navbar-vertical.navbar-expand-xl .navbar-collapse {
                width: 100%;
                height: 95%;
                background: #ffffff;
            }

            .navbar-vertical.navbar-expand-xl .navbar-vertical-content {
                width: 100%;
                height: auto;
                padding: 0.5rem 0 0 0;
            }

            .navbar-vertical {
                position: absolute;
                background: #ffffff;
                max-width: 350px;
                overflow: auto;
                margin: 0;


            }





            .content1 {
                background-color: white
            }

            .modal-content-bg {
                background-color: white
            }

            .navbar-vertical .navbar-collapse .navbar-vertical-content {
                padding: 0 1rem;
                -webkit-box-orient: vertical;
                -webkit-box-direction: normal;
                -ms-flex-direction: column;
                flex-direction: column;
                max-height: 100%;
            }
        }

        @media only screen and (max-width: 600px) {
            .emas-m {
                margin-left: 0px;
                position: absolute;

            }

            .navbar-vertical {
                position: absolute;
                /* background: #009640; */
                max-width: 100%;
            }

            .navbar-vertical.navbar-expand-xl {
                max-width: 100%;
                top: 40px;
                height: auto;
                margin: 0;

            }

            .navbar-vertical.navbar-expand-xl .navbar-collapse {
                width: 100%;
                height: auto;
                /* background: #009640; */
            }

            .navbar-vertical.navbar-expand-xl .navbar-vertical-content {
                width: 100%;
                height: auto;
                padding: 0.5rem 0 0 0;
            }

            .navbar-vertical {
                position: absolute;
                /* background: #009640; */
                max-width: 100%;
            }

            .navbar-vertical-content {
                /* background: #009640; */
                width: 100%;
            }



        }
    </style>
    <?php
    use Illuminate\Support\Facades\Auth;
    ?>


    <!-- ===============================================-->
    <!--    Main Content-->
    <!-- ===============================================-->

    <img src="/img/banner.png" alt="banner" width="100%">


    <main class="main" id="top">
        <div class="container-fluid px-0" data-layout="container" style="overflow: hidden">
            <script>
                var isFluid = JSON.parse(localStorage.getItem('isFluid'));
                if (isFluid) {
                    var container = document.querySelector('[data-layout]');
                    container.classList.remove('container');
                    container.classList.add('container-fluid');
                }
            </script>

            @if (Request::is('mpb'))
            @else
                @include('layouts.emas-side-bar')
            @endif



            <div class="content content1">


                @if (Request::is('mpb'))
                @else
                    <button class="btn navbar-toggler-humburger-icon navbar-toggler me-1 me-sm-3 navbar-vertical-toggle"
                        type="button" data-bs-toggle="collapse" data-bs-target="#navbarVerticalCollapse"
                        aria-controls="navbarVerticalCollapse" aria-expanded="false" aria-label="Toggle Navigation">
                        <span class="fas fa-angle-right">
                            <span class="fas fa-angle-left"></span>
                        </span>
                    </button>
                @endif


                <div class="row" style="background: white;">

                    <div class="col-12">
                        @yield('content')
                    </div>



                </div>
            </div>
        </div>


        <footer class="emas-bg-dg">
            <div class="row">
                <div class="col">
                    <div class="text-center">
                        Copyright ©️ <b>UNIT PERANCANG EKONOMI</b>
                    </div>
                </div>
            </div>
        </footer>

        {{-- <img src="/img/footer.png" alt="footer" width="100%"> --}}


    </main>
    <!-- ===============================================-->
    <!--    End of Main Content-->
    <!-- ===============================================-->

    <!-- ===============================================-->
    <!--    JavaScripts-->
    <!-- ===============================================-->



    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script> --}}

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"
        integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $(".tahun").datepicker({
            format: "yyyy",
            viewMode: "years",
            minViewMode: "years",
            autoclose: true
        });
    </script>
    <script src="/vendors/popper/popper.min.js"></script>
    <script src="/vendors/bootstrap/bootstrap.min.js"></script>
    <script src="/vendors/anchorjs/anchor.min.js"></script>
    <script src="/vendors/is/is.min.js"></script>
    <script src="/vendors/chart/chart.min.js"></script>
    <script src="/vendors/leaflet/leaflet.js"></script>
    <script src="/vendors/leaflet.markercluster/leaflet.markercluster.js"></script>
    <script src="/vendors/leaflet.tilelayer.colorfilter/leaflet-tilelayer-colorfilter.min.js"></script>
    <script src="/vendors/countup/countUp.umd.js"></script>
    <script src="/vendors/echarts/echarts.min.js"></script>
    <script src="/vendors/progressbar/progressbar.min.js"></script>
    <script src="/vendors/fullcalendar/main.min.js"></script>
    <script src="/assets/js/flatpickr.js"></script>
    <script src="/vendors/dayjs/dayjs.min.js"></script>
    <script src="/vendors/fontawesome/all.min.js"></script>
    <script src="/vendors/lodash/lodash.min.js"></script>
    <script src="/vendors/list.js/list.min.js"></script>
    <script src="/assets/js/theme.js"></script>
    <script src="/vendors/choices/choices.min.js"></script>


</body>

</html>
