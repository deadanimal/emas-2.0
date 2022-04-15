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
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar" id="checklim">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <div class="row mt-4">
                    <a class="navbar-brand" href="/home">
                        <img src="/img/logo.png" alt="logo">
                    </a>
                </div>
                <br>

                <div class="row">
                    <div class="col">
                        <a class="nav-link" href="/dashboard" role="button">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                        class="fas fa-home"></span></span><span class="nav-link-text ps-1">Laman
                                    Utama</span>
                            </div>
                        </a>

                        <a class="nav-link" href="" role="button">
                            <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                        class="fas fa-tasks"></span></span><span class="nav-link-text ps-1">Pelan
                                    Pelaksanaan Dasar</span>
                            </div>
                        </a>

                        <div class="card emas-bg-dg mx-4 mx-lg-0">

                            <div class="card-body">
                                <div class="row">
                                    <a class="text-center">Senarai Maklumat</a>

                                </div>

                                <a class="nav-link" href="/fokusutama">
                                    <i class="ni ni-circle-08 text-pink"></i>
                                    <span class="nav-link-text">Fokus Utama</span>
                                </a>
                                <a class="nav-link" href="/perkarautama">
                                    <i class="ni ni-circle-08 text-pink"></i>
                                    <span class="nav-link-text">Perkara Utama</span>
                                </a>

                                <a class="nav-link" href="/pemangkindasar">
                                    <i class="ni ni-circle-08 text-pink"></i>
                                    <span class="nav-link-text">Tema/Pemangkin Dasar</span>
                                </a>
                                <a class="nav-link" href="/bab">
                                    <i class="ni ni-circle-08 text-pink"></i>
                                    <span class="nav-link-text">Bab</span>
                                </a>
                                <a class="nav-link" href="/pemacu">
                                    <i class="ni ni-circle-08 text-pink"></i>
                                    <span class="nav-link-text">Pemacu Perubahan</span>
                                </a>
                                <a class="nav-link" href="/bidang">
                                    <i class="ni ni-circle-08 text-pink"></i>
                                    <span class="nav-link-text">Bidang Keutamaan</span>
                                </a>
                                <a class="nav-link" href="/outcome">
                                    <i class="ni ni-circle-08 text-pink"></i>
                                    <span class="nav-link-text">Outcome Nasional</span>
                                </a>
                                <a class="nav-link" href="">
                                    <i class="ni ni-circle-08 text-pink"></i>
                                    <span class="nav-link-text">KPI Nasional</span>
                                </a>
                                <a class="nav-link" href="">
                                    <i class="ni ni-circle-08 text-pink"></i>
                                    <span class="nav-link-text">Strategi</span>
                                </a>
                                <a class="nav-link" href="">
                                    <i class="ni ni-circle-08 text-pink"></i>
                                    <span class="nav-link-text">Inisiatif</span>
                                </a>
                                <a class="nav-link" href="">
                                    <i class="ni ni-circle-08 text-pink"></i>
                                    <span class="nav-link-text">Tindakan</span>
                                </a>
                                <a class="nav-link" href="">
                                    <i class="ni ni-circle-08 text-pink"></i>
                                    <span class="nav-link-text">SDG</span>
                                </a>



                            </div>
                        </div>
                    </div>
                </div>
                <br>

                <li class="nav-item mx-3 mx-md-0">
                    <!-- label-->
                    <a class="nav-link" href="" role="button">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="far fa-folder"></span></span><span class="nav-link-text ps-1">Kemasukan
                                / Kemas Kini Data</span>
                        </div>
                    </a>

                    <a class="nav-link" href="" role="button">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                    class="fas fa-th"></span></span><span
                                class="nav-link-text ps-1">Dashboard</span>
                        </div>
                    </a>

                    <hr style="width:70%;text-align:center;">

                <li class="nav-item">
                    <a class="nav-link" href="">
                        <i class="far fa-user-circle"></i>
                        <span class="nav-link-text">{{ auth()->user()->name }}</span>
                    </a>
                </li>

                <div class="card emas-bg-dg mx-4 mx-lg-0">
                    <div class="card-body">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <a :href="route('logout')" onclick="event.preventDefault();
                                    this.closest('form').submit();"><span class="nav-link-icon"><span
                                        class="fas fa-arrow-alt-circle-left"></span>
                                    {{ __('Log Keluar') }}
                            </a>
                        </form>
                    </div>
                </div>


                </li>
            </ul>
        </div>
    </div>
</nav>

<script>
    // (function($) {
    //     var $window = $(window),
    //         $html = $('#checklim');

    //     $window.resize(function resize() {
    //         if ($window.width() < 601) {
    //             return $html.addClass('scrollbar');
    //         }

    //         $html.removeClass('scrollbar');
    //     }).trigger('resize');
    // })(jQuery);
</script>
