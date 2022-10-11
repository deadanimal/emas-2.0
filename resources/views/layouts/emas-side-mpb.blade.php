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
                            <img src="/img/logo.png" alt="logo">
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




                    <a class="nav-link btn1" href="/MPB/dahsboardMPB" role="button">

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

                    <a class="nav-link" href="/" role="button">

                        <div class="d-flex align-items-center">
                            <div class="col-2">
                                <span class="nav-link-icon">
                                    <span class="far fa-folder"></span>
                                </span>
                            </div>
                            <div class="col text-center">
                                <span class="nav-link-text ps-1">
                                    Data Entry
                                </span>
                            </div>
                            <div class="col-2">

                            </div>
                        </div>
                    </a><br>


                    {{-- @if (in_array(url()->current(), [url('thrust'), url('national'), url('key'), url('sub'), url('kpi2'), url('milestone')])) --}}

                    <a class="nav-link dropdown-indicator" href="#mpb" role="button" data-bs-toggle="collapse"
                        aria-expanded="true" aria-controls="mpb" style="background-color: #C4D4ED">
                        <div class="d-flex justify-content-center" style="color: #047FC3">
                            <span class="nav-link-text1 ps-1">Information</span>
                        </div>
                    </a>

                    <div class="card">
                        <ul class="nav collapse show" id="mpb" style="background-color: #E7EFFD">
                            <li class="nav-item">
                                <a class="nav-link btn1 {{ Request::is('MPB/thrust', 'MPB/thrust/*') ? 'active' : '' }}"
                                    href="/MPB/thrust">
                                    <div class="d-flex align-items-center"><span class="nav-link-text1 ps-1">List of
                                            Thrust
                                        </span>
                                    </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn1 {{ Request::is('MPB/national', 'MPB/national/*') ? 'active' : '' }}"
                                    href="/MPB/national">
                                    <div class="d-flex align-items-center"><span class="nav-link-text1 ps-1">National
                                            Initiative
                                        </span>
                                    </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn1 {{ Request::is('MPB/key', 'MPB/key/*') ? 'active' : '' }}"
                                    href="/MPB/key">
                                    <div class="d-flex align-items-center"><span class="nav-link-text1 ps-1">Key
                                            Activity
                                        </span>
                                    </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn1 {{ Request::is('MPB/sub', 'MPB/sub/*') ? 'active' : '' }}"
                                    href="/MPB/sub">
                                    <div class="d-flex align-items-center"><span class="nav-link-text1 ps-1">Sub
                                            Activity</span>
                                    </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn1 {{ Request::is('MPB/kpi2', 'MPB/kpi2/*') ? 'active' : '' }}"
                                    href="/MPB/kpi2">
                                    <div class="d-flex align-items-center"><span class="nav-link-text1 ps-1">KPI
                                            Information
                                        </span>
                                    </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn1 {{ Request::is('MPB/milestone', 'MPB/milestone/*') ? 'active' : '' }}"
                                    href="/MPB/milestone">
                                    <div class="d-flex align-items-center"><span class="nav-link-text1 ps-1">Milestone
                                        </span>
                                    </div>
                                </a>
                                <!-- more inner pages-->
                            </li>


                        </ul>
                    </div>

                </li>
                <br>

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


                    <a class="nav-link btn1" href="/MPB/Tableau" role="button">

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
