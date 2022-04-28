<style>
    .emas-side {
        /* margin-top: 225px; */
        /* padding: 20px; */
        /* width: 350px; */
        /* position: fixed; */
        /* overflow-y: auto;
        top: 0;
        bottom: 0; */
        background-color: #f9faf9;
        color: white;
    }

    /* .nav-link-text {
        color: white;
    }

    .nav-link-text.active {
        color: white;
        background-color: #009640;
    } */

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
                <span class="navbar-toggle-icon">
                    <span class="toggle-line"></span>
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
                <li class="nav-item">

                    <a class="navbar-brand" href="/dashboard">
                        <div class="d-flex justify-content-center">
                            <img src="/img/logo.png" alt="logo">
                        </div>
                    </a>
                    <br>

                    <a class="nav-link " href="/dashboard" role="button">
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

                    <a class="nav-link" href="" role="button">
                        <div class="d-flex align-items-center">
                            <div class="col-2">
                                <span class="nav-link-icon">
                                    <span class="fas fa-tasks"></span>
                                </span>
                            </div>
                            <div class="col text-center">
                                <span class="nav-link-text ps-1">Pelan Pelaksanaan Dasar</span>
                            </div>
                            <div class="col-2">

                            </div>
                        </div>
                    </a>

                    <br>

                    <!-- parent pages-->
                    <a class="nav-link dropdown-indicator" href="#dashboard" role="button" data-bs-toggle="collapse"
                        aria-expanded="true" aria-controls="dashboard">
                        <div class="d-flex justify-content-center">
                            <span class="nav-link-text ps-1">Data</span>
                        </div>
                    </a>
                    <div class="card">
                        <ul class="nav collapse show" id="dashboard">
                            <li class="nav-item"><a class="nav-link" href="/fokusutama">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-2">Fokus
                                            Utama</span>
                                    </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="/perkarautama">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Perkara
                                            Utama</span>
                                    </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="/pemangkin">
                                    <div class="d-flex align-items-center"><span
                                            class="nav-link-text ps-1">Tema/Pemangkin
                                            Dasar</span>
                                    </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="/bab">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bab</span>
                                    </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="/pemacu">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Pemacu
                                            Perubahan</span>
                                    </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="/bidang">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Bidang
                                            Keutamaan</span>
                                    </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="/outcome">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">Outcome
                                            Nasional</span>
                                    </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="/kpi">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">KPI
                                            Nasional</span>
                                    </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="/strategi">
                                    <div class="d-flex align-items-center"><span
                                            class="nav-link-text ps-1">Strategi</span>
                                    </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="/inisiatif">
                                    <div class="d-flex align-items-center"><span
                                            class="nav-link-text ps-1">Inisiatif</span>
                                    </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="/tindakan">
                                    <div class="d-flex align-items-center"><span
                                            class="nav-link-text ps-1">Tindakan</span>
                                    </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item"><a class="nav-link" href="/sdg">
                                    <div class="d-flex align-items-center"><span class="nav-link-text ps-1">SDG</span>
                                    </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                        </ul>
                    </div>

                </li>
                <br>
                <li class="nav-item mx-3 mx-md-0">
                    <!-- label-->
                    <a class="nav-link" href="/markah/create" role="button">

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
                    </a>
                    <a class="nav-link" href="/markah/create" role="button">

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

                <li class="nav-item">
                    <a class="nav-link" href="/markah/create" role="button">


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


                <li class="btn btn-falcon-default btn-sm">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="nav-link" role="button" :href="route('logout')" onclick="event.preventDefault();
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
</nav>
