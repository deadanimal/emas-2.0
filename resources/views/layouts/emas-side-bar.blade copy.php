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

    /* Style the active class, and buttons on mouse-over */
    .active,


    .nav-item:hover {
        /* background-color: #666; */
        color: white;
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
    <script>
        var navbarStyle = localStorage.getItem("navbarStyle");
        if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
        }
    </script>
    <div class="d-flex justify-content-end">
        <div class="toggle-icon-wrapper">

            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip"
                data-bs-placement="left" title="" data-bs-original-title="Tutup" aria-label="Tutup">
                <span class="fas fa-angle-right">
                    <span class="fas fa-angle-left"></span>
                </span>
            </button>

            {{-- <button class="btn navbar-toggler navbar-vertical-toggle" data-bs-toggle="tooltip"
                data-bs-placement="left" title="" data-bs-original-title="Tutup" aria-label="Tutup">
                <span class="navbar-toggle-icon">
                    <span class="toggle-line"></span>
                </span>
            </button> --}}

        </div>


    </div>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar ">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <li class="nav-item1">

                    <a class="navbar-brand" href="/dashboard">
                        <div class="d-flex justify-content-center">
                            <img src="/img/logo.png" alt="logo">
                        </div>
                    </a>
                    <br>

                    <a class="nav-link " href="/dashboard" role="button" style="--hover-color: white">
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

                    <a class="nav-link" href="" role="button" style="--hover-color: white">
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

                    {{-- <a class="nav-link" href="" role="button" style="--hover-color: white">

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

                        <a class="nav-link" href="" role="button" style="--hover-color: white">

                            <div class="d-flex align-items-center">
                                <div class="col-2">
                                    <span class="nav-link-icon">
                                        <span class="fas fa-tasks"></span>
                                    </span>
                                </div>
                                <div class="col text-center" style="color: #047FC3">
                                    <span class="nav-link-text ps-1">Perlaksanaan Program
                                        Pembasmian Kemiskinan
                                        Tegar Keluarga Malaysia
                                        (BMTKM)</span>
                                </div>

                                <div class="col-2">

                                </div>

                            </div>
                        </a> --}}

                    <br>


                    <!-- parent pages-->
                    <a class="nav-link dropdown-indicator" href="#dashboard" role="button" data-bs-toggle="collapse"
                        aria-expanded="true" aria-controls="dashboard" style="background-color: #C4D4ED">
                        <div class="d-flex justify-content-center" style="color: #047FC3">
                            <span class="nav-link-text ps-1">Senarai Maklumat</span>
                        </div>
                    </a>

                    <div class="card" style="--hover-color: white">
                        <ul class="nav collapse show" id="dashboard" style="background-color: #E7EFFD">
                            <li class="nav-item"><a
                                    class="nav-link {{ Request::is('fokusutama', 'fokusutama/*') ? 'active' : '' }}"
                                    href="/fokusutama" style="color: #047FC3">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Fokus
                                            Utama</span>
                                    </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a
                                    class="nav-link {{ Request::is('perkarautama', 'perkarautama/*') ? 'active' : '' }}"
                                    href="/perkarautama" style="color: #047FC3">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Perkara
                                            Utama</span>
                                    </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a
                                    class="nav-link {{ Request::is('pemangkin', 'pemangkin/*') ? 'active' : '' }}"
                                    href="/pemangkin" style="color: #047FC3">
                                    <div class="d-flex align-items-center"><span
                                            class="nav-link-text ps-1">Tema/Pemangkin
                                            Dasar</span>
                                    </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link {{ Request::is('bab', 'bab/*') ? 'active' : '' }}"
                                    href="/bab" style="color: #047FC3">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bab</span>
                                    </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a
                                    class="nav-link {{ Request::is('pemacu', 'pemacu/*') ? 'active' : '' }}"
                                    href="/pemacu" style="color: #047FC3">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pemacu
                                            Perubahan</span>
                                    </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a
                                    class="nav-link {{ Request::is('bidang', 'bidang/*') ? 'active' : '' }}"
                                    href="/bidang" style="color: #047FC3">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bidang
                                            Keutamaan</span>
                                    </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a
                                    class="nav-link {{ Request::is('outcome', 'outcome/*') ? 'active' : '' }}"
                                    href="/outcome" style="color: #047FC3">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Outcome
                                            Nasional</span>
                                    </div>
                                </a>
                                <!-- more inner pages-->
                            </li>

                            <li class="nav-item">
                                <a class="nav-link dropdown-indicator btn1 {{ Request::is('kpi', 'kpi/*', 'kpi1', 'kpi1/*') ? 'active' : '' }}"
                                    href="#kpi" role="button" data-bs-toggle="collapse" aria-expanded="false"
                                    aria-controls="kpi" style="color: #047FC3">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-text ps-1">KPI
                                            Nasional</span>
                                    </div>
                                </a>
                                <!-- more inner pages-->
                                <ul class="nav collapse false" id="kpi">
                                    <li class="nav-item"><a class="nav-link" href="/kpi1/index1" style="color: #047FC3">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text btn1 ps-1">Senarai Markah Berdasarkan Status</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item"><a
                                    class="nav-link {{ Request::is('strategi', 'strategi/*') ? 'active' : '' }}"
                                    href="/strategi" style="color: #047FC3">
                                    <div class="d-flex align-items-center"><span
                                            class="nav-link-text ps-1">Strategi</span>
                                    </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a
                                    class="nav-link {{ Request::is('inisiatif', 'inisiatif/*') ? 'active' : '' }}"
                                    href="/inisiatif" style="color: #047FC3">
                                    <div class="d-flex align-items-center"><span
                                            class="nav-link-text ps-1">Inisiatif</span>
                                    </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a
                                    class="nav-link {{ Request::is('tindakan', 'tindakan/*', 'tindakan1', 'tindakan1/*') ? 'active' : '' }}"
                                    href="/tindakan" style="color: #047FC3">
                                    <div class="d-flex align-items-center"><span
                                            class="nav-link-text ps-1">Tindakan</span>
                                    </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a
                                    class="nav-link {{ Request::is('sdg', 'sdg/*') ? 'active' : '' }}"
                                    href="/sdg" style="color: #047FC3">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">SDG</span>
                                    </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                        </ul>
                    </div>

                    <br>

                    @role('admin')
                        <a class="nav-link dropdown-indicator" href="#dashboard" role="button"
                            data-bs-toggle="collapse" aria-expanded="true" aria-controls="dashboard"
                            style="background-color: #C4D4ED">
                            <div class="d-flex justify-content-center" style="color: #047FC3">
                                <span class="nav-link-text ps-1">Information</span>
                            </div>
                        </a>

                        <div class="card" style="--hover-color: white">
                            <ul class="nav collapse show" id="dashboard" style="background-color: #E7EFFD">
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('thrust', 'thrust/*') ? 'active' : '' }}"
                                        href="/thrust" style="color: #047FC3">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Thrust
                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('national', 'national/*') ? 'active' : '' }}"
                                        href="/national" style="color: #047FC3">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">National
                                                Initiave
                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('key', 'key/*') ? 'active' : '' }}"
                                        href="/key" style="color: #047FC3">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Key
                                                Activity
                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('sub', 'sub/*') ? 'active' : '' }}"
                                        href="/sub" style="color: #047FC3">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Sub
                                                Activity</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('kpi2', 'kpi2/*') ? 'active' : '' }}"
                                        href="/kpi2" style="color: #047FC3">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Kpi
                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('milestone', 'milestone/*') ? 'active' : '' }}"
                                        href="/milestone" style="color: #047FC3">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Milestone
                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>


                            </ul>
                        </div>

                        <br>

                        <a class="nav-link dropdown-indicator" href="#dashboard" role="button"
                            data-bs-toggle="collapse" aria-expanded="true" aria-controls="dashboard"
                            style="background-color: #C4D4ED">
                            <div class="d-flex justify-content-center" style="color: #047FC3">
                                <span class="nav-link-text ps-1">Senarai Maklumat</span>
                            </div>
                        </a>

                        <div class="card" style="--hover-color: white">
                            <ul class="nav collapse show" id="dashboard" style="background-color: #E7EFFD">
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('lokaliti', 'lokaliti/*') ? 'active' : '' }}"
                                        href="/lokaliti" style="color: #047FC3">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Lokaliti
                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>

                                <!-- parent pages-->
                                <a class="nav-link dropdown-indicator {{ Request::is('senaraiKir', 'senaraiKir/*') ? 'active' : '' }}"
                                    href="#email" role="button" data-bs-toggle="collapse" aria-expanded="false"
                                    aria-controls="email" style="color: #047FC3">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"></span><span
                                            class="nav-link-text ps-1">Senarai
                                            KIR & AIR</span>
                                    </div>
                                </a>
                                <ul class="nav collapse false" id="email">
                                    <li class="nav-item"><a class="nav-link" href="/" style="color: #047FC3">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Senarai Mengikut Negeri</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="/" style="color: #047FC3">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Senarai Mengikut Negeri dan
                                                    Daerah</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="/" style="color: #047FC3">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text ps-1">Senarai Mengikut Negeri,
                                                    Daerah Dan Kampung</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                </ul>


                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('bantuan', 'bantuan/*') ? 'active' : '' }}"
                                        href="/bantuan" style="color: #047FC3">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Jenis
                                                Bantuan

                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Request::is('senaraiInformasi', 'senaraiInformasi/*') ? 'active' : '' }}"
                                        href="/senaraiInformasi" style="color: #047FC3">
                                        <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Senarai
                                                Informasi Berdasarkan KIR & AIR
                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->

                                </li>

                            </ul>
                        </div>
                    @endrole
                </li>
                <br>

                <li class="nav-item1 mx-3 mx-md-0">
                    <!-- label-->
                    {{-- <a class="nav-link" href="/markah/create" role="button">

                        <div class="d-flex align-items-center">
                            <div class="col-2">
                                <span class="nav-link-icon">
                                    <span class="far fa-folder"></span>
                                </span>
                            </div>
                            <div class="col text-center">
                                <span class="nav-link-text ps-1">Kemasukan
                                    Data
                                </span>
                            </div>
                            <div class="col-2">

                            </div>
                        </div>
                    </a>


                    <a class="nav-link" href="/markah/" role="button">

                        <div class="d-flex align-items-center">
                            <div class="col-2">
                                <span class="nav-link-icon">
                                    <span class="far fa-folder"></span>
                                </span>
                            </div>
                            <div class="col text-center">
                                <span class="nav-link-text ps-1">Kemas Kini
                                    Data
                                </span>
                            </div>
                            <div class="col-2">

                            </div>
                        </div>
                    </a> --}}
                    <a class="nav-link" href="/" role="button" style="--hover-color: white">

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
                    <a class="nav-link" href="/" role="button">


                        <div class="d-flex align-items-center">
                            <div class="col-2">
                                <span class="nav-link-icon">
                                    <span class="far fa-user-circle"></span>
                                </span>
                            </div>
                            <div class="col text-center">

                                <span class="nav-link-text ps-1">{{ Auth()->User()->name }}</span>
                                <br>
                                <span class="nav-link-text ps-1">{{ Auth()->User()->email }}</span>

                            </div>
                            <div class="col-2">

                            </div>
                        </div>
                    </a>
                </li>
                <br>


                <li class="btn btn-falcon-default btn-sm" style="--hover-color: white">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="nav-link" role="button" :href="route('logout')"
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

                </li>

            </ul>
        </div>
    </div>


    {{-- <script>
        // Add active class to the current button (highlight it)
        var header = document.getElementById("myDIV");
        var navitem = header.getElementsByClassName("nav-item");
        for (var i = 0; i < navitem.length; i++) {
            navitem[i].addEventListener("click", function() {
                var current = document.getElementsByClassName("active");
                if (current.length > 0) {
                    current[0].className = current[0].className.replace(" active", "");
                }
                this.className += " active";
            });
        }
    </script> --}}
</nav>
