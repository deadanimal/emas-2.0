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
    <div class="collapse navbar-collapse mt-3" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar ">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <li class="nav-item1">

                    <a class="navbar-brand" href="/dashboard">
                        <div class="d-flex justify-content-center">
                            <img src="/img/MyDigital.png" alt="logo">
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






                    <a class="nav-link btn1" href="" role="button">

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
                    </a><br>


                    <a class="nav-link dropdown-indicator" href="#md" role="button" data-bs-toggle="collapse"
                        aria-expanded="true" aria-controls="md" style="background-color: #C4D4ED">
                        <div class="d-flex justify-content-center" style="color: #047FC3">
                            <span class="nav-link-text1 ps-1">Information</span>
                        </div>
                    </a>

                    <div class="card">
                        <ul class="nav collapse show" id="md" style="background-color: #E7EFFD">
                            <li class="nav-item">
                                <a class="nav-link btn1 {{ Request::is('MD/cluster', 'MD/cluster/*') ? 'active' : '' }}"
                                    href="/MD/cluster">
                                    <div class="d-flex align-items-center"><span class="nav-link-text1 ps-1">List
                                            of Cluster
                                        </span>
                                    </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn1 dropdown-indicator  {{ Request::is('MD/initiative', 'MD/initiative/*', 'MD/thrus', 'MD/thrus/*', 'MD/strategy', 'MD/strategy/*', 'MD/sectoral', 'MD/sectoral/*') ? 'active' : '' }}"
                                    href="#thrust" role="button" data-bs-toggle="collapse" aria-expanded="false"
                                    aria-controls="thrust">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-text1 ps-1">List of Main Element</span>
                                    </div>
                                </a>
                                <!-- more inner pages-->

                                <ul class="nav collapse" id="thrust">
                                    <li class="nav-item"><a class="nav-link btn1" href="/MD/thrus">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text1 btn1 ps-1">List
                                                    of Thrust</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                </ul>
                                <ul class="nav collapse" id="thrust">
                                    <li class="nav-item"><a class="nav-link btn1" href="/MD/strategy">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text1 btn1 ps-1">List
                                                    of Strategy
                                                </span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                </ul>
                                <ul class="nav collapse" id="thrust">
                                    <li class="nav-item"><a class="nav-link btn1" href="/MD/sectoral">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text1 btn1 ps-1">List
                                                    of Sectoral
                                                </span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                </ul>
                                <ul class="nav collapse" id="thrust">
                                    <li class="nav-item"><a class="nav-link btn1" href="/MD/initiative">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text1 btn1 ps-1">List
                                                    of Initiative
                                                </span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                </ul>


                            </li>
                            {{-- <li class="nav-item">
                                <a class="nav-link btn1 {{ Request::is('initiative', 'initiative/*') ? 'active' : '' }}"
                                    href="/initiative">
                                    <div class="d-flex align-items-center"><span class="nav-link-text1 ps-1">List
                                            of Initiative</span>
                                    </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn1 {{ Request::is('thrus', 'thrus/*') ? 'active' : '' }}"
                                    href="/thrus">
                                    <div class="d-flex align-items-center"><span class="nav-link-text1 ps-1"> List
                                            of Thrust
                                        </span>
                                    </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn1 {{ Request::is('strategy', 'strategy/*') ? 'active' : '' }}"
                                    href="/strategy">
                                    <div class="d-flex align-items-center"><span class="nav-link-text1 ps-1">List
                                            of Strategy
                                        </span>
                                    </div>
                                </a>
                                <!-- more inner pages-->
                            </li> --}}


                            <li class="nav-item">
                                <a class="nav-link btn1 {{ Request::is('MD/program', 'MD/program/*') ? 'active' : '' }}"
                                    href="/MD/program">
                                    <div class="d-flex align-items-center"><span class="nav-link-text1 ps-1">List
                                            of Program
                                        </span>
                                    </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn1 {{ Request::is('MD/plan', 'MD/plan/*') ? 'active' : '' }}"
                                    href="/MD/plan">
                                    <div class="d-flex align-items-center"><span class="nav-link-text1 ps-1">List
                                            of Plan
                                        </span>
                                    </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn1 {{ Request::is('MD/activity', 'MD/activity/*') ? 'active' : '' }}"
                                    href="/MD/activity">
                                    <div class="d-flex align-items-center"><span class="nav-link-text1 ps-1">List
                                            of Activities
                                        </span>
                                    </div>
                                </a>
                                <!-- more inner pages-->
                            </li>
                            @can('MD - Admin')
                                <li class="nav-item">
                                    <a class="nav-link btn1 dropdown-indicator  {{ Request::is('MD/approval', 'MD/approval/*', 'MD/display', 'MD/display/*') ? 'active' : '' }}"
                                        href="#cluster" role="button" data-bs-toggle="collapse" aria-expanded="false"
                                        aria-controls="cluster">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text1 ps-1">Status of Cluster</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->

                                    <ul class="nav collapse" id="cluster">
                                        <li class="nav-item"><a class="nav-link btn1" href="/MD/display/cluster1">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text1 btn1 ps-1">List of Program Based
                                                        Status</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                    </ul>
                                    <ul class="nav collapse" id="cluster">
                                        <li class="nav-item"><a class="nav-link btn1" href="/MD/display/cluster1">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text1 btn1 ps-1">List of Cluster Based on
                                                        Program
                                                    </span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                    </ul>
                                    @can('Epu MD')
                                        <ul class="nav collapse" id="cluster">
                                            <li class="nav-item"><a class="nav-link btn1" href="/MD/approval/cluster">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text1 btn1 ps-1">List for Approval
                                                        </span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                        </ul>
                                    @endcan

                                </li>
                            @endcan


                        </ul>
                    </div>


                </li>
                <br>
                {{-- @can('Urusetia')
                    <a class="nav-link btn1" href="/MD/user/list" role="button">

                        <div class="d-flex align-items-center">
                            <div class="col-2">
                                <span class="nav-link-icon">
                                    <span class="far fa-user"></span>
                                </span>
                            </div>
                            <div class="col text-center">
                                <span class="nav-link-text ps-1">User Profile

                                </span>
                            </div>
                            <div class="col-2">

                            </div>
                        </div>
                    </a>
                @endcan --}}


                <a class="nav-link btn1" href="/MD/Tableau/main_page" role="button">

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

                                <span class="nav-link-text ps-1"><i>{{ Auth()->User()->name }}</i></span>
                                <br>
                                <span class="nav-link-text ps-1"><i>{{ Auth()->User()->email }}</i></span>

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
