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


                    <a class="nav-link btn1" href="" role="button">

                        <div class="d-flex align-items-center">
                            <div class="col-2">
                                <span class="nav-link-icon">
                                    <span class="fas fa-tasks"></span>
                                </span>
                            </div>
                            <div class="col text-center" style="color: #047FC3">
                                <span class="nav-link-text ps-1">Pelaksanaan Program
                                    Pembasmian Kemiskinan
                                    Tegar Keluarga Malaysia
                                    (BMTKM)</span>
                            </div>

                            <div class="col-2">

                            </div>

                        </div>
                    </a>

                    <br>


                    <a class="nav-link dropdown-indicator" href="#bmtkm" role="button" data-bs-toggle="collapse"
                        aria-expanded="true" aria-controls="bmtkm" style="background-color: #C4D4ED">
                        <div class="d-flex justify-content-center" style="color: #047FC3">
                            <span class="nav-link-text1 ps-1">Senarai Maklumat</span>
                        </div>
                    </a>

                    <div class="card">
                        <ul class="nav collapse show" id="bmtkm" style="background-color: #E7EFFD">
                            <li class="nav-item">
                                <a class="nav-link btn1 dropdown-indicator  {{ Request::is('KT/lokaliti', 'KT/lokaliti/*', 'KT/lokaliti1', 'KT/lokaliti1/*') ? 'active' : '' }}"
                                    href="#lokaliti" role="button" data-bs-toggle="collapse" aria-expanded="false"
                                    aria-controls="lokaliti">
                                    <div class="d-flex align-items-center">
                                        <span class="nav-link-text1 ps-1">Lokaliti</span>
                                    </div>
                                </a>
                                <!-- more inner pages-->

                                <ul class="nav collapse" id="lokaliti">
                                    <li class="nav-item"><a class="nav-link btn1" href="/KT/lokaliti/index">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text1 btn1 ps-1">Lokaliti Mengikut
                                                    Negeri</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                </ul>
                                <ul class="nav collapse" id="lokaliti">
                                    <li class="nav-item"><a class="nav-link btn1" href="/KT/lokaliti1/index1">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text1 btn1 ps-1">Lokaliti Mengikut Daerah
                                                </span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                </ul>
                            </li>

                            <!-- parent pages-->
                            <a class="nav-link btn1 dropdown-indicator {{ Request::is('KT/senarai_kir_air', 'KT/senarai_kir_air/*', 'KT/senarai_kir_air1', 'KT/senarai_kir_air1/*') ? 'active' : '' }}"
                                href="#email" role="button" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="email">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"></span><span
                                        class="nav-link-text1 ps-1">Senarai
                                        KIR & AIR</span>
                                </div>
                            </a>
                            <ul class="nav collapse false" id="email">
                                <li class="nav-item"><a class="nav-link btn1" href="/KT/senarai_kir_air">
                                        <div class="d-flex align-items-center"><span class="nav-link-text1 ps-1">Senarai
                                                Mengikut Negeri</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link btn1" href="/KT/senarai_kir_air1/index1">
                                        <div class="d-flex align-items-center"><span class="nav-link-text1 ps-1">Senarai
                                                Mengikut Negeri dan
                                                Daerah</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link btn1" href="/KT/senarai_kir_air1/index2">
                                        <div class="d-flex align-items-center"><span class="nav-link-text1 ps-1">Senarai
                                                Mengikut Negeri,
                                                Daerah Dan Kampung</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                            </ul>


                            <!-- parent pages-->
                            <a class="nav-link btn1 dropdown-indicator {{ Request::is('KT/bantuan', 'KT/bantuan/*', 'KT/bantuan1', 'KT/bantuan1/*', 'KT/ketuaKampung/*', 'KT/kampung/*') ? 'active' : '' }}"
                                href="#bantuan" role="button" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="bantuan">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"></span><span
                                        class="nav-link-text1 ps-1">Jenis Bantuan</span>
                                </div>
                            </a>
                            <ul class="nav collapse false" id="bantuan">
                                <li class="nav-item"><a class="nav-link btn1" href="/KT/bantuan">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Senarai Jenis Bantuan</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link btn1" href="/KT/bantuan1/berdasarkan_negeri">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Senarai Jenis Bantuan Berdasarkan
                                                Negeri</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link btn1"
                                        href="/KT/bantuan1/senarai_ketua_kampung">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Senarai Nama Ketua Kampung</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link btn1"
                                        href="/KT/bantuan1/senarai_kampung_menerima">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Senarai Kampung Yang Menerima
                                                Bantuan</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                            </ul>

                            <!-- parent pages-->
                            <a class="nav-link btn1 dropdown-indicator {{ Request::is('KT/senarai_informasi', 'KT/senarai_informasi/*', 'KT/senarai_informasi1', 'KT/senarai_informasi1/*') ? 'active' : '' }}"
                                href="#senarai" role="button" data-bs-toggle="collapse" aria-expanded="false"
                                aria-controls="senarai">
                                <div class="d-flex align-items-center"><span class="nav-link-icon"></span><span
                                        class="nav-link-text1 ps-1">Senarai
                                        Informasi Berdasarkan KIR & AIR</span>
                                </div>
                            </a>
                            <ul class="nav collapse false" id="senarai">
                                <li class="nav-item"><a class="nav-link btn1" href="/KT/senarai_informasi">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Senarai KIR & AIR
                                                Berdasarkan Negeri,
                                                Daerah Dan Kampung</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a class="nav-link btn1" href="/KT/senarai_informasi1/index1">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Senarai KIR & AIR
                                                Berdasarkan Program
                                                Mengikut Negeri,
                                                Daerah Dan Kampung</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>

                            </ul>



                        </ul>
                    </div>

                </li>
                <br>

                <li class="nav-item1 mx-3 mx-md-0">
                    <!-- label-->

                    <a class="nav-link {{ Request::is('KT/maklumat/indikator') ? 'active' : '' }}"
                        href="/KT/maklumat/indikator" role="button">

                        <div class="d-flex align-items-center">
                            <div class="col-2">
                                <span class="nav-link-icon">
                                    <span class="fas fa-info-circle"></span>
                                </span>
                            </div>
                            <div class="col text-center">
                                <span class="nav-link-text ps-1">Maklumat Indikator
                                </span>
                            </div>
                            <div class="col-2">

                            </div>
                        </div>
                    </a>

                    <a class="nav-link {{ Request::is('KT/kemasukanData/index', 'KT/kemasukanData/index/*') ? 'active' : '' }}"
                        href="/KT/kemasukanData/index" role="button">

                        <div class="d-flex align-items-center">
                            <div class="col-2">
                                <span class="nav-link-icon">
                                    <span class="far fa-folder"></span>
                                </span>
                            </div>
                            <div class="col text-center">
                                <span class="nav-link-text ps-1">Senarai Data
                                </span>
                            </div>
                            <div class="col-2">

                            </div>
                        </div>
                    </a>
                    <a class="nav-link {{ Request::is('KT/kemasukanData/bahagian', 'KT/kemasukanData/bahagian/*') ? 'active' : '' }}"
                        href="/KT/kemasukanData/bahagian" role="button">

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

                    <a class="nav-link {{ Request::is('KT/kemasukanData/bahagian-excel', 'KT/kemasukanData/bahagian-excel/*') ? 'active' : '' }}"
                        href="/KT/kemasukanData/bahagian-excel" role="button">

                        <div class="d-flex align-items-center">
                            <div class="col-2">
                                <span class="nav-link-icon">
                                    <span class="fas fa-upload"></span>
                                </span>
                            </div>
                            <div class="col text-center">
                                <span class="nav-link-text ps-1">Muat Naik Data
                                </span>
                            </div>
                            <div class="col-2">

                            </div>
                        </div>
                    </a>



                    <a class="nav-link btn1" href="/KT/Tableau" role="button">

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

                    <br>

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
