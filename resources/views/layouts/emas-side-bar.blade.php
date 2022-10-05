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
                        'PPD/ucapan',
                        'PPD/executive',
                        'PPD/executiveSummary'))
                        <a class="nav-link btn1" href="/fokusutama" role="button">
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

                    @if (Request::is(
                        'MPB/thrust',
                        'MPB/thrust/*',
                        'MPB/national',
                        'MPB/national/*',
                        'MPB/key',
                        'MPB/key/*',
                        'MPB/sub',
                        'MPB/sub/*',
                        'MPB/kpi2',
                        'MPB/kpi2/*',
                        'MPB/milestone',
                        'MPB/milestone/*',
                        'mpb',
                        'MPB/displayThrust'))
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
                        </a>
                    @endif

                    @if (Request::is(
                        'KT/lokaliti',
                        'KT/lokaliti/*',
                        'KT/lokaliti1',
                        'KT/lokaliti1/*',
                        'KT/senarai_kir_air',
                        'KT/senarai_kir_air/*',
                        'KT/senarai_kir_air1',
                        'KT/senarai_kir_air1/*',
                        'KT/bantuan',
                        'KT/bantuan/*',
                        'KT/bantuan1',
                        'KT/bantuan1/*',
                        'KT/senarai_informasi',
                        'KT/senarai_informasi/*',
                        'KT/senarai_informasi1',
                        'KT/senarai_informasi1/*',
                        'KT/kemasukanData',
                        'KT/kemasukanData/*',
                        'KT/kampung/*'))
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
                    @endif


                    @if (Request::is('audit', 'audit/*', 'user', 'user/*', 'userRole', 'userRole/*', 'user1', 'user1/*'))
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
                        'PPD/sdg/*'))
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
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Pemacu
                                                Perubahan</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a
                                        class="nav-link btn1 {{ Request::is('PPD/bidang', 'PPD/bidang/*') ? 'active' : '' }}"
                                        href="/PPD/bidang">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Bidang
                                                Keutamaan</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a
                                        class="nav-link btn1 {{ Request::is('PPD/outcome', 'PPD/outcome/*') ? 'active' : '' }}"
                                        href="/PPD/outcome">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Outcome
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


                    {{-- @if (in_array(url()->current(), [url('thrust'), url('national'), url('key'), url('sub'), url('kpi2'), url('milestone')])) --}}
                    @if (Request::is(
                        'MPB/thrust',
                        'MPB/thrust/*',
                        'MPB/national',
                        'MPB/national/*',
                        'MPB/key',
                        'MPB/key/*',
                        'MPB/sub',
                        'MPB/sub/*',
                        'MPB/kpi2',
                        'MPB/kpi2/*',
                        'MPB/milestone',
                        'MPB/milestone/*',
                        'mpb',
                        'MPB/displayThrust'))
                        <a class="nav-link dropdown-indicator" href="#mpb" role="button"
                            data-bs-toggle="collapse" aria-expanded="true" aria-controls="mpb"
                            style="background-color: #C4D4ED">
                            <div class="d-flex justify-content-center" style="color: #047FC3">
                                <span class="nav-link-text1 ps-1">Information</span>
                            </div>
                        </a>

                        <div class="card">
                            <ul class="nav collapse show" id="mpb" style="background-color: #E7EFFD">

                                <li class="nav-item">
                                    <a class="nav-link btn1 {{ Request::is('MPB/national', 'MPB/national/*') ? 'active' : '' }}"
                                        href="/MPB/national">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">National
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
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Milestone
                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>


                            </ul>
                        </div>
                    @endif

                    {{-- <br> --}}
                    @if (Request::is(
                        'KT/lokaliti',
                        'KT/lokaliti/*',
                        'KT/lokaliti1',
                        'KT/lokaliti1/*',
                        'KT/senarai_kir_air',
                        'KT/senarai_kir_air/*',
                        'KT/senarai_kir_air1',
                        'KT/senarai_kir_air1/*',
                        'KT/bantuan',
                        'KT/bantuan/*',
                        'KT/bantuan1',
                        'KT/bantuan1/*',
                        'KT/senarai_informasi',
                        'KT/senarai_informasi/*',
                        'KT/senarai_informasi1',
                        'KT/senarai_informasi1/*',
                        'KT/kemasukanData',
                        'KT/kemasukanData/*',
                        'KT/kampung/*'))
                        <a class="nav-link dropdown-indicator" href="#bmtkm" role="button"
                            data-bs-toggle="collapse" aria-expanded="true" aria-controls="bmtkm"
                            style="background-color: #C4D4ED">
                            <div class="d-flex justify-content-center" style="color: #047FC3">
                                <span class="nav-link-text1 ps-1">Senarai Maklumat</span>
                            </div>
                        </a>

                        <div class="card">
                            <ul class="nav collapse show" id="bmtkm" style="background-color: #E7EFFD">
                                <li class="nav-item">
                                    <a class="nav-link btn1 dropdown-indicator  {{ Request::is('KT/lokaliti', 'KT/lokaliti/*', 'KT/lokaliti1', 'KT/lokaliti1/*') ? 'active' : '' }}"
                                        href="#lokaliti" role="button" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="lokaliti">
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
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text1 ps-1">Senarai Mengikut Negeri</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link btn1" href="/KT/senarai_kir_air1/index1">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text1 ps-1">Senarai Mengikut Negeri dan
                                                    Daerah</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link btn1" href="/KT/senarai_kir_air1/index2">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text1 ps-1">Senarai Mengikut Negeri,
                                                    Daerah Dan Kampung</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                </ul>


                                <!-- parent pages-->
                                <a class="nav-link btn1 dropdown-indicator {{ Request::is('KT/bantuan', 'KT/bantuan/*', 'KT/bantuan1', 'KT/bantuan1/*') ? 'active' : '' }}"
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
                                    <li class="nav-item"><a class="nav-link btn1"
                                            href="/KT/bantuan1/berdasarkan_negeri">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text1 ps-1">Senarai Jenis Bantuan Berdasarkan
                                                    Negeri</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link btn1"
                                            href="/KTbantuan1/senarai_ketua_kampung">
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
                                    <li class="nav-item"><a class="nav-link btn1"
                                            href="/KT/senarai_informasi1/index1">
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
                    @endif



                    @if (Request::is('audit', 'audit/*', 'user', 'user/*', 'userRole', 'userRole/*', 'user1', 'user1/*'))
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
                                    <a class="nav-link btn1 dropdown-indicator  {{ Request::is('user/*') ? 'active' : '' }}"
                                        href="#daftar" role="button" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="daftar">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text1 ps-1">Pendaftaran Masuk</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->

                                    <ul class="nav collapse" id="daftar">
                                        <li class="nav-item"><a class="nav-link btn1" href="/user/create">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text1 btn1 ps-1">Daftar Individu</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                    </ul>
                                    <ul class="nav collapse" id="daftar">
                                        <li class="nav-item"><a class="nav-link btn1" href="/user1/create1">
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
                                    <a class="nav-link btn1 {{ Request::is('audit', 'audit/*') ? 'active' : '' }}"
                                        href="/audit">
                                        <div class="d-flex align-items-center"><span class="nav-link-text1 ps-1">
                                                Log Audit

                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn1 {{ Request::is('user') ? 'active' : '' }}"
                                        href="/user">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Senarai Pengguna
                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->

                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn1 {{ Request::is('user1/index1', 'user1/index1/*') ? 'active' : '' }}"
                                        href="/user1/index1">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Senarai Status Pengguna
                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->

                                </li>

                            </ul>
                        </div>
                    @endif

                </li>
                <br>

                <li class="nav-item1 mx-3 mx-md-0">
                    <!-- label-->
                    @if (Request::is(
                        'KT/lokaliti',
                        'KT/lokaliti/*',
                        'KT/lokaliti1',
                        'KT/lokaliti1/*',
                        'KT/senarai_kir_air',
                        'KT/senarai_kir_air/*',
                        'KT/senarai_kir_air1',
                        'KT/senarai_kir_air1/*',
                        'KT/bantuan',
                        'KT/bantuan/*',
                        'KT/bantuan1',
                        'KT/bantuan1/*',
                        'KT/senarai_informasi',
                        'KT/senarai_informasi/*',
                        'KT/senarai_informasi1',
                        'KT/senarai_informasi1/*',
                        'KT/kemasukanData',
                        'KT/kemasukanData/*',
                        'KT/kampung/*'))
                        <a class="nav-link {{ Request::is('kemasukanData/index', 'kemasukanData/index/*') ? 'active' : '' }}
"
                            href="/kemasukanData/index" role="button">

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
                        <a class="nav-link {{ Request::is('kemasukanData/bahagian', 'kemasukanData/bahagian/*') ? 'active' : '' }}
"
                            href="/kemasukanData/bahagian" role="button">

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

                        <a class="nav-link {{ Request::is('kemasukanData/bahagian-excel', 'kemasukanData/bahagian-excel/*') ? 'active' : '' }}
"
                            href="/kemasukanData/bahagian-excel" role="button">

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
                    @endif


                    @if (Request::is(
                        'MPB/thrust',
                        'MPB/thrust/*',
                        'MPB/national',
                        'MPB/national/*',
                        'MPB/key',
                        'MPB/key/*',
                        'MPB/sub',
                        'MPB/sub/*',
                        'MPB/kpi2',
                        'MPB/kpi2/*',
                        'MPB/milestone',
                        'MPB/milestone/*',
                        'mpb',
                        'MPB/displayThrust'))
                        <a class="nav-link" href="/MPB/displayThrust" role="button">

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
                    @endif

                    @if (Request::is(
                        'MPB/thrust',
                        'MPB/thrust/*',
                        'MPB/national',
                        'MPB/national/*',
                        'MPB/key',
                        'MPB/key/*',
                        'MPB/sub',
                        'MPB/sub/*',
                        'MPB/kpi2',
                        'MPB/kpi2/*',
                        'MPB/milestone',
                        'MPB/milestone/*',
                        'mpb',
                        'MPB/displayThrust'))
                        <a class="nav-link btn1" href="/" role="button">

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
                        'KT/lokaliti',
                        'KT/lokaliti/*',
                        'KT/lokaliti1',
                        'KT/lokaliti1/*',
                        'KT/senarai_kir_air',
                        'KT/senarai_kir_air/*',
                        'KT/senarai_kir_air1',
                        'KT/senarai_kir_air1/*',
                        'KT/bantuan',
                        'KT/bantuan/*',
                        'KT/bantuan1',
                        'KT/bantuan1/*',
                        'KT/senarai_informasi',
                        'KT/senarai_informasi/*',
                        'KT/senarai_informasi1',
                        'KT/senarai_informasi1/*',
                        'KT/kemasukanData',
                        'KT/kemasukanData/*',
                        'KT/kampung/*'))
                        <a class="nav-link btn1" href="/" role="button">

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
                        'ucapan',
                        'ucapan/*',
                        'rumusanPPD',
                        'rumusanPPD/*',
                        'rumusanTindakan',
                        'rumusanTindakan/*',
                        'executive',
                        'executive/*',
                        'executiveSummary',
                        'executiveSummary/*'))
                        <a class="nav-link btn1" href="/ucapan" role="button">

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
                    <br>
                    @if (Request::is(
                        'ucapan',
                        'ucapan/*',
                        'rumusanPPD',
                        'rumusanPPD/*',
                        'rumusanTindakan',
                        'rumusanTindakan/*',
                        'executive',
                        'executive/*',
                        'executiveSummary',
                        'executiveSummary/*'))
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
                                    <a class="nav-link btn1 {{ Request::is('ucapan', 'ucapan/*') ? 'active' : '' }}"
                                        href="/ucapan">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Ucapan RMke -12 YAB PM

                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn1 {{ Request::is('executiveSummary', 'executiveSummary/*') ? 'active' : '' }}"
                                        href="/executiveSummary">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Ringkasan Eksekutif


                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn1 {{ Request::is('executive', 'executive/*') ? 'active' : '' }}"
                                        href="/executive">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Dashboard Eksekutif

                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link btn1 dropdown-indicator  {{ Request::is('rumusanPPD', 'rumusanPPD/*', 'rumusanTindakan', 'rumusanTindakan/*', 'KPISummary', 'KPISummary/*') ? 'active' : '' }}"
                                        href="#kpi1" role="button" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="kpi1">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text1 ps-1">Ringkasan</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->

                                    <ul class="nav collapse" id="kpi1">
                                        <li class="nav-item"><a class="nav-link btn1" href="/KPISummary">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text1 btn1 ps-1">Ringkasan Prestasi KPI
                                                        Nasional</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                    </ul>
                                    <ul class="nav collapse" id="kpi1">
                                        <li class="nav-item"><a class="nav-link btn1" href="/rumusanTindakan">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text1 btn1 ps-1">Ringkasan Kemajuan
                                                        Tindakan</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                    </ul>
                                    <ul class="nav collapse" id="kpi1">
                                        <li class="nav-item"><a class="nav-link btn1" href="/rumusanPPD">
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
