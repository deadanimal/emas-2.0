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

                    <a class="navbar-brand" href="/dashboard">
                        <div class="d-flex justify-content-center">
                            <img src="/img/logompb.png" alt="logo">
                        </div>
                    </a>
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

                </li>
                <br>

                <li class="nav-item1 mx-3 mx-md-0">


                    <a class="nav-link dropdown-indicator" href="#tableauPPD" role="button" data-bs-toggle="collapse"
                        aria-expanded="true" aria-controls="tableauPPD" style="background-color: #C4D4ED">
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
                                    <div class="d-flex align-items-center"><span class="nav-link-text1 ps-1">Ringkasan
                                            Eksekutif


                                        </span>
                                    </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn1 {{ Request::is('PPD/dashboard_eksekutif', 'PPD/dashboard_eksekutif/*') ? 'active' : '' }}"
                                    href="/PPD/dashboard_eksekutif">
                                    <div class="d-flex align-items-center"><span class="nav-link-text1 ps-1">Dashboard
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

                <li class="nav-item1 mx-3 mx-md-0">


                    <a class="nav-link {{ Request::is('MPB/displayThrust', 'MPB/displayThrust/*') ? 'active' : '' }}"
                        href="/MPB/displayThrust" role="button">

                        <div class="d-flex align-items-center">
                            <div class="col-2">
                                <span class="nav-link-icon">
                                    <span class="far fa-folder"></span>
                                </span>
                            </div>
                            <div class="col text-center">
                                <span class="nav-link-text ps-1">
                                    List of Approval
                                </span>
                            </div>
                            <div class="col-2">

                            </div>
                        </div>
                    </a>


                    <a class="nav-link btn1" href="/MPB/dashboard" role="button">

                        <div class="d-flex align-items-center">
                            <div class="col-2">
                                <span class="nav-link-icon">
                                    <span class="fas fa-th"></span>
                                </span>
                            </div>
                            <div class="col text-center">
                                <span class="nav-link-text ps-1">Dashboard

                                </span>
                            </div>
                            <div class="col-2">

                            </div>
                        </div>
                    </a>

                </li>


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
