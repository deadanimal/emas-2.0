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

                    @if (Request::is(
                        'PPD/fokusutama',
                        'PPD/fokusutama/*',
                        'PPD/perkarautama',
                        'PPD/perkarautama/*',
                        'PPD/pemangkin',
                        'PPD/pemangkin/*',
                        'PPD/bab',
                        'PPD/bab/*',
                        'PPD/pemacu',
                        'PPD/pemacu/*',
                        'PPD/bidang',
                        'PPD/bidang/*',
                        'PPD/outcome',
                        'PPD/outcome/*',
                        'PPD/kpi',
                        'PPD/kpi/*',
                        'PPD/kpi1',
                        'PPD/kpi1/*',
                        'PPD/prestasi',
                        'PPD/prestasi/*',
                        'PPD/prestasi_kpi',
                        'PPD/prestasi_kpi/*',
                        'PPD/strategi',
                        'PPD/strategi/*',
                        'PPD/inisiatif',
                        'PPD/inisiatif/*',
                        'PPD/tindakan',
                        'PPD/tindakan/*',
                        'PPD/tindakan1',
                        'PPD/tindakan1/*',
                        'PPD/sdg',
                        'PPD/sdg/*',
                        'PPD/penilaian/kpi',
                        'PPD/paparan/kpi'))
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

                    <br>


                    @if (Request::is(
                        'ED/audit',
                        'ED/audit/*',
                        'ED/user',
                        'ED/user/*',
                        'ED/userRole',
                        'ED/userRole/*',
                        'ED/user1',
                        'ED/user1/*',
                        'ED/bahagian/senarai',
                        'ED/bahagian/senarai/*'))
                        <a class="nav-link btn1" href="" role="button">

                            <div class="d-flex align-items-center">
                                <div class="col-2">
                                    <span class="nav-link-icon">
                                        <span class="fas fa-tasks"></span>
                                    </span>
                                </div>
                                <div class="col text-center" style="color: #047FC3">
                                    <span class="nav-link-text ps-1">Executive Dashboard</span>
                                </div>

                                <div class="col-2">

                                </div>

                            </div>
                        </a>
                    @endif

                    {{-- @if (in_array(url()->current(), [url('fokusutama'), url('perkarautama'), url('pemangkin'), url('bab'), url('pemacu'), url('bidang'), url('outcome'), url('kpi'), url('strategi'), url('inisiatif'), url('tindakan'), url('sdg')])) --}}
                    @if (Request::is(
                        'PPD/fokusutama',
                        'PPD/fokusutama/*',
                        'PPD/perkarautama',
                        'PPD/perkarautama/*',
                        'PPD/pemangkin',
                        'PPD/pemangkin/*',
                        'PPD/bab',
                        'PPD/bab/*',
                        'PPD/pemacu',
                        'PPD/pemacu/*',
                        'PPD/bidang',
                        'PPD/bidang/*',
                        'PPD/outcome',
                        'PPD/outcome/*',
                        'PPD/kpi',
                        'PPD/kpi/*',
                        'PPD/kpi1',
                        'PPD/kpi1/*',
                        'PPD/prestasi',
                        'PPD/prestasi/*',
                        'PPD/prestasi_kpi',
                        'PPD/prestasi_kpi/*',
                        'PPD/strategi',
                        'PPD/strategi/*',
                        'PPD/inisiatif',
                        'PPD/inisiatif/*',
                        'PPD/tindakan',
                        'PPD/tindakan/*',
                        'PPD/tindakan1',
                        'PPD/tindakan1/*',
                        'PPD/sdg',
                        'PPD/sdg/*',
                        'PPD/penilaian/kpi',
                        'PPD/paparan/kpi'))
                        <!-- parent pages-->
                        <a class="nav-link dropdown-indicator" href="#ppd" role="button" data-bs-toggle="collapse"
                            aria-expanded="true" aria-controls="ppd" style="background-color: #C4D4ED">
                            <div class="d-flex justify-content-center" style="color: #047FC3">
                                <span class="nav-link-text ps-1">Senarai Maklumat</span>
                            </div>
                        </a>

                        <div class="card">
                            <ul class="nav collapse show" id="ppd" style="background-color: #E7EFFD">
                                <li class="nav-item"><a
                                        class="nav-link btn1 {{ Request::is('PPD/fokusutama', 'PPD/fokusutama/*') ? 'active' : '' }}"
                                        href="/PPD/fokusutama">
                                        <div class="d-flex align-items-center"><span class="nav-link-text1 ps-1">Fokus
                                                Utama</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a
                                        class="nav-link btn1 {{ Request::is('PPD/perkarautama', 'PPD/perkarautama/*') ? 'active' : '' }}"
                                        href="/PPD/perkarautama">
                                        <div class="d-flex align-items-center"><span class="nav-link-text1 ps-1">Perkara
                                                Utama</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a
                                        class="nav-link btn1 {{ Request::is('PPD/pemangkin', 'PPD/pemangkin/*') ? 'active' : '' }}"
                                        href="/PPD/pemangkin">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Tema/Pemangkin
                                                Dasar</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a
                                        class="nav-link btn1 {{ Request::is('PPD/bab', 'PPD/bab/*') ? 'active' : '' }}"
                                        href="/PPD/bab">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Bab</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a
                                        class="nav-link btn1 {{ Request::is('PPD/pemacu', 'PPD/pemacu/*') ? 'active' : '' }}"
                                        href="/PPD/pemacu">
                                        <div class="d-flex align-items-center"><span class="nav-link-text1 ps-1">Pemacu
                                                Perubahan</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a
                                        class="nav-link btn1 {{ Request::is('PPD/bidang', 'PPD/bidang/*') ? 'active' : '' }}"
                                        href="/PPD/bidang">
                                        <div class="d-flex align-items-center"><span class="nav-link-text1 ps-1">Bidang
                                                Keutamaan</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a
                                        class="nav-link btn1 {{ Request::is('PPD/outcome', 'PPD/outcome/*') ? 'active' : '' }}"
                                        href="/PPD/outcome">
                                        <div class="d-flex align-items-center"><span class="nav-link-text1 ps-1">Outcome
                                                Nasional</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a
                                        class="nav-link btn1 {{ Request::is('PPD/kpi', 'PPD/kpi/*') ? 'active' : '' }}"
                                        href="/PPD/kpi">
                                        <div class="d-flex align-items-center"><span class="nav-link-text1 ps-1">KPI
                                                Nasional
                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>




                                <li class="nav-item"><a
                                        class="nav-link btn1 {{ Request::is('PPD/strategi', 'PPD/strategi/*') ? 'active' : '' }}"
                                        href="/PPD/strategi">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Strategi</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a
                                        class="nav-link btn1 {{ Request::is('PPD/inisiatif', 'PPD/inisiatif/*') ? 'active' : '' }}"
                                        href="/PPD/inisiatif">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Inisiatif</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a
                                        class="nav-link btn1 {{ Request::is('PPD/tindakan', 'PPD/tindakan/*') ? 'active' : '' }}"
                                        href="/PPD/tindakan">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Tindakan</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>


                                <li class="nav-item"><a
                                        class="nav-link btn1 {{ Request::is('PPD/sdg', 'PPD/sdg/*') ? 'active' : '' }}"
                                        href="/PPD/sdg">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">SDG</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>

                            </ul>
                        </div>

                        <br>

                        <a class="nav-link dropdown-indicator" href="#abc" role="button"
                            data-bs-toggle="collapse" aria-expanded="true" aria-controls="abc"
                            style="background-color: #C4D4ED">
                            <div class="d-flex justify-content-center" style="color: #047FC3">
                                <span class="nav-link-text ps-1">Prestasi Pelaporan</span>
                            </div>
                        </a>

                        <div class="card">
                            <ul class="nav collapse show" id="abc" style="background-color: #E7EFFD">

                                <li class="nav-item">
                                    <a class="nav-link btn1 dropdown-indicator  {{ Request::is('PPD/prestasi/pelaporan_prestasi_kpi', 'PPD/prestasi/pelaporan_prestasi_kpi/*', 'PPD/kpi1', 'PPD/kpi1/*') ? 'active' : '' }}"
                                        href="#kpi1" role="button" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="kpi1">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text1 ps-1">KPI
                                                Nasional</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->

                                    <ul class="nav collapse" id="kpi1">
                                        <li class="nav-item"><a class="nav-link btn1"
                                                href="/PPD/prestasi/pelaporan_prestasi_kpi">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text1 btn1 ps-1">Prestasi KPI Nasional</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                    </ul>
                                    <ul class="nav collapse" id="kpi1">
                                        <li class="nav-item"><a class="nav-link btn1" href="/PPD/kpi1/index1">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text1 btn1 ps-1">Status Pengesahan KPI</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                    </ul>

                                </li>


                                <li class="nav-item">
                                    <a class="nav-link btn1 dropdown-indicator  {{ Request::is('PPD/prestasi/pelaporan_prestasi_tindakan', 'PPD/prestasi/pelaporan_prestasi_tindakan/*', 'PPD/tindakan1', 'PPD/tindakan1/*') ? 'active' : '' }}"
                                        href="#kpi2" role="button" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="kpi2">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text1 ps-1">Tindakan
                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->

                                    <ul class="nav collapse" id="kpi2">
                                        <li class="nav-item"><a class="nav-link btn1"
                                                href="/PPD/prestasi/pelaporan_prestasi_tindakan">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text1 btn1 ps-1">Prestasi Tindakan</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                    </ul>
                                    <ul class="nav collapse" id="kpi2">
                                        <li class="nav-item"><a class="nav-link btn1" href="/PPD/tindakan1/index1">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text1 btn1 ps-1">Status Pengesahan
                                                        Tindakan</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                    </ul>

                                </li>
                            </ul>
                        </div>
                    @endif

                    <br>





                    @if (Request::is(
                        'ED/audit',
                        'ED/audit/*',
                        'ED/user',
                        'ED/user/*',
                        'ED/userRole',
                        'ED/userRole/*',
                        'ED/user1',
                        'ED/user1/*',
                        'ED/bahagian/senarai',
                        'ED/bahagian/senarai/*'))
                        <a class="nav-link dropdown-indicator" href="#ED" role="button"
                            data-bs-toggle="collapse" aria-expanded="true" aria-controls="ED"
                            style="background-color: #C4D4ED">
                            <div class="d-flex justify-content-center" style="color: #047FC3">
                                <span class="nav-link-text1 ps-1">Senarai Maklumat</span>
                            </div>
                        </a>

                        <div class="card">
                            <ul class="nav collapse show" id="ED" style="background-color: #E7EFFD">
                                <li class="nav-item">
                                    <a class="nav-link btn1 dropdown-indicator  {{ Request::is('ED/user/*') ? 'active' : '' }}"
                                        href="#daftar" role="button" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="daftar">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text1 ps-1">Pendaftaran Masuk</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->

                                    <ul class="nav collapse" id="daftar">
                                        <li class="nav-item"><a class="nav-link btn1" href="/ED/user/create">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text1 btn1 ps-1">Daftar Individu</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                    </ul>
                                    <ul class="nav collapse" id="daftar">
                                        <li class="nav-item"><a class="nav-link btn1" href="/ED/user1/create1">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text1 btn1 ps-1">Daftar Secara Pukal
                                                    </span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                    </ul>
                                </li>


                                <li class="nav-item">
                                    <a class="nav-link btn1 {{ Request::is('ED/audit', 'ED/audit/*') ? 'active' : '' }}"
                                        href="/ED/audit">
                                        <div class="d-flex align-items-center"><span class="nav-link-text1 ps-1">
                                                Log Audit

                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn1 {{ Request::is('ED/user') ? 'active' : '' }}"
                                        href="/ED/user">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Senarai Pengguna
                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn1 {{ Request::is('ED/user1/index1', 'ED/user1/index1/*') ? 'active' : '' }}"
                                        href="/ED/user1/index1">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Senarai Status Pengguna
                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->

                                </li>

                            </ul>
                        </div>

                        <br>
                        <a class="nav-link dropdown-indicator" href="#ED" role="button"
                            data-bs-toggle="collapse" aria-expanded="true" aria-controls="ED"
                            style="background-color: #C4D4ED">
                            <div class="d-flex justify-content-center" style="color: #047FC3">
                                <span class="nav-link-text1 ps-1">Senarai</span>
                            </div>
                        </a>

                        <div class="card">
                            <ul class="nav collapse show" id="ED" style="background-color: #E7EFFD">
                                <li class="nav-item">
                                    <a class="nav-link btn1 {{ Request::is('ED/userRole', 'ED/userRole/*') ? 'active' : '' }}"
                                        href="/ED/userRole">
                                        <div class="d-flex align-items-center"><span class="nav-link-text1 ps-1">
                                                Senarai Peranan

                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn1 {{ Request::is('ED/bahagian/senarai', 'ED/bahagian/senarai/*') ? 'active' : '' }}"
                                        href="/ED/bahagian/senarai">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Senarai Bahagian/Agensi/Kementerian
                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->

                                </li>

                            </ul>
                        </div>
                    @endif
                    <br>

                    @if (Request::is(
                        'ED/audit',
                        'ED/audit/*',
                        'ED/user',
                        'ED/user/*',
                        'ED/userRole',
                        'ED/userRole/*',
                        'ED/user1',
                        'ED/user1/*',
                        'ED/bahagian/senarai',
                        'ED/bahagian/senarai/*'))
                        <a class="nav-link dropdown-indicator" href="#TD" role="button"
                            data-bs-toggle="collapse" aria-expanded="true" aria-controls="TD"
                            style="background-color: #C4D4ED">
                            <div class="d-flex justify-content-center" style="color: #047FC3">
                                <span class="nav-link-text1 ps-1">Tableau Dashboard</span>
                            </div>
                        </a>

                        <div class="card">
                            <ul class="nav collapse show" id="TD" style="background-color: #E7EFFD">
                                <li class="nav-item">
                                    <a class="nav-link btn1 " href="/PPD/dashboard">
                                        <div class="d-flex align-items-center"><span class="nav-link-text1 ps-1">
                                                Pelan Pelaksanaan Dasar

                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn1 " href="/MPB/dashboard">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Malaysia
                                                Blueprint Productivity
                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->

                                </li>

                                <li class="nav-item">
                                    <a class="nav-link btn1" href="/KT/Tableau">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Pelaksanaan Program Pembasmian Kemiskinan
                                                Tegar
                                                Keluarga Malaysia
                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->

                                </li>

                                <li class="nav-item">
                                    <a class="nav-link btn1" href="/MD/Tableau/main_page">
                                        <div class="d-flex align-items-center"><span class="nav-link-text1 ps-1">
                                                MyDigital
                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->

                                </li>

                            </ul>
                        </div>
                    @endif

                </li>


                <li class="nav-item1 mx-3 mx-md-0">
                    @if (Request::is(
                        'PPD/fokusutama',
                        'PPD/fokusutama/*',
                        'PPD/perkarautama',
                        'PPD/perkarautama/*',
                        'PPD/pemangkin',
                        'PPD/pemangkin/*',
                        'PPD/bab',
                        'PPD/bab/*',
                        'PPD/pemacu',
                        'PPD/pemacu/*',
                        'PPD/bidang',
                        'PPD/bidang/*',
                        'PPD/outcome',
                        'PPD/outcome/*',
                        'PPD/kpi',
                        'PPD/kpi/*',
                        'PPD/prestasi',
                        'PPD/prestasi/*',
                        'PPD/prestasi_kpi',
                        'PPD/prestasi_kpi/*',
                        'PPD/strategi',
                        'PPD/strategi/*',
                        'PPD/inisiatif',
                        'PPD/inisiatif/*',
                        'PPD/tindakan',
                        'PPD/tindakan/*',
                        'PPD/tindakan1',
                        'PPD/tindakan1/*',
                        'PPD/sdg',
                        'sdg/*',
                        'PPD/ucapan',
                        'PPD/ucapan/*',
                        'PPD/rumusanPPD',
                        'PPD/rumusanPPD/*',
                        'PPD/rumusanTindakan',
                        'PPD/rumusanTindakan/*',
                        'PPD/executive',
                        'PPD/executive/*',
                        'PPD/executiveSummary',
                        'PPD/executiveSummary/*',
                        'PPD/penilaian/kpi',
                        'PPD/paparan/kpi'))
                        <a class="nav-link btn1" href="/PPD/dashboard" role="button">
                            
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
                    @endif
                    @if (Request::is(
                        'PPD/ucapan',
                        'PPD/ucapan/*',
                        'PPD/rumusanPPD',
                        'PPD/rumusanPPD/*',
                        'PPD/rumusanTindakan',
                        'PPD/rumusanTindakan/*',
                        'PPD/executive',
                        'PPD/executive/*',
                        'PPD/executiveSummary',
                        'PPD/executiveSummary/*'))
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
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Ucapan
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
                                        href="#kpi1" role="button" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="kpi1">
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
                    @endif
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
