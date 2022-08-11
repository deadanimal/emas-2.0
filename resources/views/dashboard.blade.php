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
    <meta name="msapplication-TileImage" content="/assets/img/favicons/mstile-150x150.png">
    <meta name="theme-color" content="#ffffff">
    <script src="/assets/js/config.js"></script>
    <script src="/vendors/overlayscrollbars/OverlayScrollbars.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
    <link href="/assets/css/theme-rtl.min.css" rel="stylesheet" id="style-rtl">
    <link href="/assets/css/theme.min.css" rel="stylesheet" id="style-default">
    <link href="/assets/css/user-rtl.min.css" rel="stylesheet" id="user-style-rtl">
    <link href="/assets/css/user.min.css" rel="stylesheet" id="user-style-default">

</head>
<img src="/img/banner.png" alt="banner" width="100%">

<body>
    <style>
        .form-control {
            border-color: #009640;
        }

        .risda-dg {
            color: #0F5E31;
        }

        .risda-bg-dg {
            background-color: #76bbe9;
            color: #07385E;

        }

        .risda-g {
            color: #009640;
        }

        .risda-bg-g {
            background-color: #e8efeb;
        }

        .nav-link-risda {
            color: #0F5E31;
        }

        .nav-link-risda.active {
            background-color: #0F5E31;
            color: white;
        }

        .nav-link.active {
            background-color: #0F5E31;
            color: white;
        }

        .nav-pills .nav-link.active,
        .nav-pills .show>.nav-link {
            color: #fff;
            background-color: #0F5E31;
        }

        .nav-link {
            display: block;
            padding: 0.5rem 1rem;
            color: #009640;
            -webkit-transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out;
            -o-transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out;
        }

        .nav-link:hover,
        .nav-link:focus {
            color: #fff;
            background-color: #06558a;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-primary,
        .navbar-vertical .btn-purchase,
        .tox .tox-menu__footer .tox-button:last-child,
        .tox .tox-dialog__footer .tox-button:last-child {
            color: #fff;
            background-color: #009640;
            border-color: #009640;
            -webkit-box-shadow: inset 0 1px 0 rgb(255 255 255 / 15%), 0 1px 1px rgb(0 0 0 / 8%);
            box-shadow: inset 0 1px 0 rgb(255 255 255 / 15%), 0 1px 1px rgb(0 0 0 / 8%);
        }

        .btn-primary:hover,
        .navbar-vertical .btn-purchase:hover,
        .tox .tox-menu__footer .tox-button:hover:last-child,
        .tox .tox-dialog__footer .tox-button:hover:last-child {
            color: #fff;
            background-color: #0F5E31;
            border-color: #0F5E31;
        }

        .btn-check:focus+.btn-primary,
        .navbar-vertical .btn-check:focus+.btn-purchase,
        .tox .tox-menu__footer .btn-check:focus+.tox-button:last-child,
        .tox .tox-dialog__footer .btn-check:focus+.tox-button:last-child,
        .btn-primary:focus,
        .navbar-vertical .btn-purchase:focus,
        .tox .tox-menu__footer .tox-button:focus:last-child,
        .tox .tox-dialog__footer .tox-button:focus:last-child {
            color: #fff;
            background-color: #009640;
            border-color: #009640;
            -webkit-box-shadow: inset 0 1px 0 rgb(255 255 255 / 15%), 0 1px 1px rgb(0 0 0 / 8%), 0 0 0 0 rgb(76 143 233 / 50%);
            box-shadow: inset 0 1px 0 rgb(255 255 255 / 15%), 0 1px 1px rgb(0 0 0 / 8%), 0 0 0 0 rgb(76 143 233 / 50%);
        }

        .btn-outline-primary {
            color: #009640;
            border-color: #009640;
        }

        .btn-outline-primary:hover {
            color: #fff;
            background-color: #3679ed;
            border-color: #0F5E31;
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
            background-color: #06558a;
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
            color: #009640;
            text-align: -webkit-match-parent;
        }

        .page-item.active .page-link {
            z-index: 3;
            color: var(--falcon-pagination-active-color);
            background-color: #009640;
            border-color: #009640;
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

        @media (min-width: 601px) {
            .navbar-vertical.navbar-expand-xl {
                max-width: 350px;
                top: 0;
                height: 100%;
                margin: 0;
            }

            .navbar-vertical.navbar-expand-xl .navbar-collapse {
                width: 100%;
                height: 100%;
                background: white;
            }

            .navbar-vertical.navbar-expand-xl .navbar-vertical-content {
                width: 100%;
                height: 100%;
                padding: 0.5rem 0 0 0;
            }

            .navbar-vertical {
                position: absolute;
                background: white;
                max-width: 350px;
            }

            .navbar-vertical-content {
                background: white;
                width: 350px;
            }

            .navbar-nav {
                background: white;
                width: 350px;
            }

            .risda-m {
                margin-left: 350px;
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
            .risda-m {
                margin-left: 0px;
            }

            .navbar-vertical {
                position: absolute;
                background: #009640;
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
                background: #009640;
            }

            .navbar-vertical.navbar-expand-xl .navbar-vertical-content {
                width: 100%;
                height: auto;
                padding: 0.5rem 0 0 0;
            }

            .navbar-vertical {
                position: absolute;
                background: #009640;
                max-width: 100%;
            }

            .navbar-vertical-content {
                background: #009640;
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
    <main class="main" id="top">

        <div class="container">
            <div class="mb-4 text-center">
            </div>
            Permission =
            {{ auth()->user()->getPermissionNames() }}
            <br>
            Role =
            {{ auth()->user()->role }}

            @role('PPD|MPB|KT|ED|MD')
                <div class="row pb-3">
                    @role('PPD')
                        <div class="col-md-6 col-lg-4 text-center">
                            <a class="mb-3" href="/fokusutama">
                                <div class="px-4 pt-4">
                                    <img src="img/PPD.png" class="img-fluid card-img-hover landing-img" alt="Pelan Pelaksanaan">
                                </div>
                            </a>
                        </div>
                    @else
                        <div class="col-md-6 col-lg-4 text-center">
                            <a class="mb-3">
                                <div class="px-4 pt-4">
                                    <img src="img/PPD.png" class="img-fluid card-img-hover landing-img" alt="Pelan Pelaksanaan"
                                        style="opacity: 50%">
                                </div>
                            </a>
                        </div>
                    @endrole


                    @role('MPB')
                        <div class="col-md-6 col-lg-4 text-center">
                            <a class="mb-3" href="/mpb">
                                <div class="px-4 pt-4">
                                    <img src="img/MPB.png" class="img-fluid card-img-hover landing-img" alt="">
                                </div>
                            </a>
                        </div>
                    @else
                        <div class="col-md-6 col-lg-4 text-center">
                            <a class="mb-3">
                                <div class="px-4 pt-4">
                                    <img src="img/MPB.png" class="img-fluid card-img-hover landing-img" alt=""
                                        style="opacity: 50%">
                                </div>
                            </a>
                        </div>
                    @endrole

                    @role('KT')
                        <div class="col-md-6 col-lg-4 text-center">
                            <a class="mb-3" href="/lokaliti">
                                <div class="px-4 pt-4">
                                    <img src="img/KT.png" class="img-fluid card-img-hover landing-img" alt="">
                                </div>
                            </a>
                        </div>
                    @else
                        <div class="col-md-6 col-lg-4 text-center">
                            <a class="mb-3">
                                <div class="px-4 pt-4">
                                    <img src="img/KT.png" class="img-fluid card-img-hover landing-img" alt=""
                                        style="opacity: 50%">
                                </div>
                            </a>
                        </div>
                    @endrole


                </div>

                <div class="row pb-3">
                    <div class="col-md-6 col-lg-2 text-center">

                    </div>
                    @role('MD')
                        <div class="col-md-6 col-lg-4 text-center">
                            <a class="mb-3" href="/thrus">
                                <div class="px-4 pt-4">
                                    <img src="img/MD.png" class="img-fluid card-img-hover landing-img" alt="">
                                </div>
                            </a>
                        </div>
                    @else
                        <div class="col-md-6 col-lg-4 text-center">
                            <a class="mb-3">
                                <div class="px-4 pt-4">
                                    <img src="img/MD.png" class="img-fluid card-img-hover landing-img" alt=""
                                        style="opacity: 50%">
                                </div>
                            </a>
                        </div>
                    @endrole

                    @role('ED')
                        <div class="col-md-6 col-lg-4 text-center">
                            <a class="mb-3" href="/user">
                                <div class="px-4 pt-4">
                                    <img src="img/ED.png" class="img-fluid card-img-hover landing-img" alt="">
                                </div>
                            </a>
                        </div>
                    @else
                        <div class="col-md-6 col-lg-4 text-center">
                            <a class="mb-3">
                                <div class="px-4 pt-4">
                                    <img src="img/ED.png" class="img-fluid card-img-hover landing-img" alt=""
                                        style="opacity: 50%">
                                </div>
                            </a>
                        </div>
                    @endrole

                    <div class="col-md-6 col-lg-2 text-center">
                    </div>
                </div>
            @endrole


        </div>

        <footer class="risda-bg-dg">
            <div class="row p-">
                <div class="col">
                    <div class="text-center">
                        <b>Copyright</b> ©️ <b>UNIT PERANCANG EKONOMI</b>
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
    <script src="../../../vendors/popper/popper.min.js"></script>
    <script src="../../../vendors/bootstrap/bootstrap.min.js"></script>
    <script src="../../../vendors/anchorjs/anchor.min.js"></script>
    <script src="../../../vendors/is/is.min.js"></script>
    <script src="../../../vendors/fontawesome/all.min.js"></script>
    <script src="../../../vendors/lodash/lodash.min.js"></script>
    <script src="https://polyfill.io/v3/polyfill.min.js?features=window.scroll"></script>
    <script src="../../../vendors/list.js/list.min.js"></script>
    <script src="../../../assets/js/theme.js"></script>

</body>

</html>
