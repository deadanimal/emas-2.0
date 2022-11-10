<style>
    :hover {
        color: var(--hover-color);
    }

    /* Style the buttons */
    .nav-item {
        border: none;
        outline: none;
        /* padding: 10px 16px; */
        background-color: #E7EFFD;
        color: white;
        cursor: pointer;
        /* font-size: 18px; */

    }

    .nav-link-text1 {
        color: #047FC3;
    }



    /* Style the active class, and buttons on mouse-over */
    .active,


    .nav-item:hover {
        /* background-color: #666; */
        -webkit-text-fill-color: white;
    }

    .btn1:hover {
        -webkit-text-fill-color: white;
    }
</style>
<script>
    var isFluid = JSON.parse(localStorage.getItem('isFluid'));
    if (isFluid) {
        var container = document.querySelector('[data-layout]');
        container.classList.remove('container');
        container.classList.add('container-fluid');
    }
</script>


<nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
    {{-- <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip"
        data-bs-placement="left" title="Toggle">
        <span class="fas fa-angle-right">
            <span class="fas fa-angle-left"></span>
        </span>
    </button> --}}
    <div class="collapse navbar-collapse mt-3" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar ">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <li class="nav-item1">
                    @if (Request::is('MPB/dashboard', 'MPB/overall_mpb_summary', 'MPB/performance'))
                        <a class="navbar-brand" href="/dashboard">
                            <div class="d-flex justify-content-center">
                                <img src="/img/logompb.png" alt="logo">
                            </div>
                        </a>
                    @else
                        <a class="navbar-brand" href="/dashboard">
                            <div class="d-flex justify-content-center">
                                <img src="/img/logo.png" alt="logo">
                            </div>
                        </a>
                    @endif

                    <br>

                    <a class="nav-link btn1" href="/dashboard" role="button">
                        <div class="row d-flex align-items-center ">
                            <div class="col-2">
                                <span class="nav-link-icon">
                                    <span class="fas fa-home">
                                    </span>
                                </span>
                            </div>
                            <div class="col text-center">
                                <span class="nav-link-text ps-1">Laman
                                    Utama
                                </span>

                            </div>

                            <div class="col-2">

                            </div>

                        </div>
                    </a>

                    @if (Request::is(
                        'PPD/dashboard',
                        'PPD/dashboard/*',
                        'PPD/ringkasan_ppd',
                        'PPD/ringkasan_ppd/*',
                        'PPD/rumusanTindakan',
                        'PPD/rumusanTindakan/*',
                        'PPD/ringkasan_eksekutif',
                        'PPD/ringkasan_eksekutif/*',
                        'PPD/dashboard_eksekutif',
                        'PPD/prestasi_kpi'))
                        <a class="nav-link btn1" href="/PPD/fokusutama" role="button">
                            <div class="d-flex align-items-center">
                                <div class="col-2">
                                    <span class="nav-link-icon">
                                        <span class="fas fa-tasks"></span>
                                    </span>
                                </div>
                                <div class="col text-center" style="color: #047FC3">
                                    <span class="nav-link-text ps-1">Pelan Pelaksanaan Dasar</span>
                                </div>

                                <div class="col-2">

                                </div>

                            </div>
                        </a>
                    @endif
                    @if (Request::is('MPB/dashboard', 'MPB/overall_mpb_summary', 'MPB/performance'))
                        <a class="nav-link btn1" href="/MPB/dashboardMPB" role="button">
                            <div class="d-flex align-items-center">
                                <div class="col-2">
                                    <span class="nav-link-icon">
                                        <span class="fas fa-tasks"></span>
                                    </span>
                                </div>
                                <div class="col text-center" style="color: #047FC3">
                                    <span class="nav-link-text ps-1">Malaysia Productivity Blueprint</span>
                                </div>

                                <div class="col-2">

                                </div>

                            </div>
                        </a>
                    @endif

                    @if (Request::is(
                        'MD/Tableau/main_page',
                        'MD/Tableau/cluster_level',
                        'MD/Tableau/initiative_level',
                        'MD/Tableau/sectoral_level'))
                        <a class="nav-link btn1" href="/MD/cluster" role="button">
                            <div class="d-flex align-items-center">
                                <div class="col-2">
                                    <span class="nav-link-icon">
                                        <span class="fas fa-tasks"></span>
                                    </span>
                                </div>
                                <div class="col text-center" style="color: #047FC3">
                                    <span class="nav-link-text ps-1">MyDigital</span>
                                </div>

                                <div class="col-2">

                                </div>

                            </div>
                        </a>
                    @endif

                </li>
                <br>

                @if (Request::is(
                    'PPD/dashboard',
                    'PPD/dashboard/*',
                    'PPD/ringkasan_ppd',
                    'PPD/ringkasan_ppd/*',
                    'PPD/rumusanTindakan',
                    'PPD/rumusanTindakan/*',
                    'PPD/ringkasan_eksekutif',
                    'PPD/ringkasan_eksekutif/*',
                    'PPD/dashboard_eksekutif',
                    'PPD/prestasi_kpi'))
                    <li class="nav-item1 mx-3 mx-md-0">


                        <a class="nav-link dropdown-indicator" href="#tableauPPD" role="button"
                            data-bs-toggle="collapse" aria-expanded="true" aria-controls="tableauPPD"
                            style="background-color: #C4D4ED">
                            <div class="d-flex justify-content-center" style="color: #047FC3">
                                <span class="nav-link-text1 ps-1">Senarai Dashboard</span>
                            </div>
                        </a>

                        <div class="card">
                            <ul class="nav collapse show" id="tableauPPD" style="background-color: #E7EFFD">

                                <li class="nav-item">
                                    <a class="nav-link btn1 {{ Request::is('PPD/dashboard', 'PPD/dashboard/*') ? 'active' : '' }}"
                                        href="/PPD/dashboard">
                                        <div class="d-flex align-items-center"><span class="nav-link-text1 ps-1">Ucapan
                                                RMke -12 YAB PM

                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn1 {{ Request::is('PPD/ringkasan_eksekutif', 'PPD/ringkasan_eksekutif/*') ? 'active' : '' }}"
                                        href="/PPD/ringkasan_eksekutif">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Ringkasan
                                                Eksekutif


                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn1 {{ Request::is('PPD/dashboard_eksekutif', 'PPD/dashboard_eksekutif/*') ? 'active' : '' }}"
                                        href="/PPD/dashboard_eksekutif">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Dashboard
                                                Eksekutif

                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link btn1 dropdown-indicator  {{ Request::is('PPD/rumusanPPD', 'PPD/rumusanPPD/*', 'PPD/rumusanTindakan', 'PPD/rumusanTindakan/*', 'PPD/KPISummary', 'PPD/KPISummary/*') ? 'active' : '' }}"
                                        href="#kpi1" role="button" data-bs-toggle="collapse" aria-expanded="false"
                                        aria-controls="kpi1">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text1 ps-1">Ringkasan</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->

                                    <ul class="nav collapse" id="kpi1">
                                        <li class="nav-item"><a class="nav-link btn1" href="/PPD/prestasi_kpi">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text1 btn1 ps-1">Ringkasan Prestasi KPI
                                                        Nasional</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                    </ul>
                                    <ul class="nav collapse" id="kpi1">
                                        <li class="nav-item"><a class="nav-link btn1" href="/PPD/rumusanTindakan">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text1 btn1 ps-1">Ringkasan Kemajuan
                                                        Tindakan</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                    </ul>
                                    <ul class="nav collapse" id="kpi1">
                                        <li class="nav-item"><a class="nav-link btn1" href="/PPD/ringkasan_ppd">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text1 btn1 ps-1">Ringkasan Pencapaian PPD
                                                    </span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </li><br>
                @endif

                @if (Request::is('MPB/dashboard', 'MPB/overall_mpb_summary', 'MPB/performance'))
                    <li class="nav-item1 mx-3 mx-md-0">
                        <a class="nav-link dropdown-indicator" href="#tableauPPD" role="button"
                            data-bs-toggle="collapse" aria-expanded="true" aria-controls="tableauPPD"
                            style="background-color: #C4D4ED">
                            <div class="d-flex justify-content-center" style="color: #047FC3">
                                <span class="nav-link-text1 ps-1">Dashboard</span>
                            </div>
                        </a>

                        <div class="card">
                            <ul class="nav collapse show" id="tableauPPD" style="background-color: #E7EFFD">

                                <li class="nav-item">
                                    <a class="nav-link btn1 {{ Request::is('MPB/dashboard', 'MPB/dashboard/*') ? 'active' : '' }}"
                                        href="/MPB/dashboard">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Dashboard Homepage Malaysia Productivity
                                                Blueprint

                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn1 {{ Request::is('MPB/overall_mpb_summary', 'MPB/overall_mpb_summary/*') ? 'active' : '' }}"
                                        href="/MPB/overall_mpb_summary">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Dashboard Overall MPB Summary


                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn1 {{ Request::is('MPB/performance', 'MPB/performance/*') ? 'active' : '' }}"
                                        href="/MPB/performance">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Dashboard Performance by Quarter


                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </li><br>
                @endif

                @if (Request::is(
                    'MD/Tableau/main_page',
                    'MD/Tableau/cluster_level',
                    'MD/Tableau/initiative_level',
                    'MD/Tableau/sectoral_level'))
                    <li class="nav-item1 mx-3 mx-md-0">
                        <a class="nav-link dropdown-indicator" href="#tableauPPD" role="button"
                            data-bs-toggle="collapse" aria-expanded="true" aria-controls="tableauPPD"
                            style="background-color: #C4D4ED">
                            <div class="d-flex justify-content-center" style="color: #047FC3">
                                <span class="nav-link-text1 ps-1">Dashboard</span>
                            </div>
                        </a>

                        <div class="card">
                            <ul class="nav collapse show" id="tableauPPD" style="background-color: #E7EFFD">

                                <li class="nav-item">
                                    <a class="nav-link btn1 {{ Request::is('MD/Tableau/main_page', 'MD/Tableau/main_page/*') ? 'active' : '' }}"
                                        href="/MD/Tableau/main_page">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Dashboard 1: Main Page


                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn1 {{ Request::is('MD/Tableau/cluster_level', 'MD/Tableau/cluster_level/*') ? 'active' : '' }}"
                                        href="/MD/Tableau/cluster_level">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Dashboard 2: Cluster Level



                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn1 {{ Request::is('MD/Tableau/initiative_level', 'MD/Tableau/initiative_level/*') ? 'active' : '' }}"
                                        href="/MD/Tableau/initiative_level">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Dashboard 3: Initiative Level


                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link btn1 {{ Request::is('MD/Tableau/sectoral_level', 'MD/Tableau/sectoral_level/*') ? 'active' : '' }}"
                                        href="/MD/Tableau/sectoral_level">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Dashboard 4: Sectoral Level


                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    </li><br>
                @endif
                <hr style="width:100%;text-align:center;">

                <li class="nav-item1">
                    <a class="nav-link btn1" href="/" role="button">


                        <div class="d-flex align-items-center">
                            <div class="col-2">
                                <span class="nav-link-icon">
                                    <span class="far fa-user-circle"></span>
                                </span>
                            </div>
                            <div class="col text-center">

                                <span class="nav-link-text ps-1">{{ Auth()->User()->name }}</span>
                                <br>
                                <span class="nav-link-text ps-1">{{ Auth()->User()->username }}</span>
                                <br> 
                                <span class="nav-link-text ps-1">{{ Auth()->User()->email }}</span>

                            </div>
                            <div class="col-2">

                            </div>
                        </div>
                    </a>
                </li>

                <br>


                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a class="nav-link btn1" role="button" :href="route('logout')"
                        onclick="event.preventDefault();
                    this.closest('form').submit();">

                        <div class="d-flex align-items-center">

                            <div class="col text-center">
                                <span class="fas fa-arrow-alt-circle-left"></span>
                                <span class="nav-link-text ps-1">Log Keluar
                                </span>
                            </div>
                            <div class="col-2">

                            </div>
                        </div>
                    </a>
                </form>


            </ul>
        </div>
    </div>

</nav>
