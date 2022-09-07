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
                        'fokusutama',
                        'fokusutama/*',
                        'perkarautama',
                        'perkarautama/*',
                        'pemangkin',
                        'pemangkin/*',
                        'bab',
                        'bab/*',
                        'pemacu',
                        'pemacu/*',
                        'bidang',
                        'bidang/*',
                        'outcome',
                        'outcome/*',
                        'kpi',
                        'kpi/*',
                        'kpi1',
                        'kpi1/*',
                        'strategi',
                        'strategi/*',
                        'inisiatif',
                        'inisiatif/*',
                        'tindakan',
                        'tindakan/*',
                        'tindakan1',
                        'tindakan1/*',
                        'sdg',
                        'sdg/*',
                        'ucapan',
                        'executive',
                        'executiveSummary'))
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
                        'thrust',
                        'thrust/*',
                        'national',
                        'national/*',
                        'key',
                        'key/*',
                        'sub',
                        'sub/*',
                        'kpi2',
                        'kpi2/*',
                        'milestone',
                        'milestone/*',
                        'mpb'))
                        <a class="nav-link btn1" href="/mpb" role="button">

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
                        'lokaliti',
                        'lokaliti/*',
                        'lokaliti1',
                        'lokaliti1/*',
                        'senarai_kir_air',
                        'senarai_kir_air/*',
                        'senarai_kir_air1',
                        'senarai_kir_air1/*',
                        'bantuan',
                        'bantuan/*',
                        'bantuan1',
                        'bantuan1/*',
                        'senarai_informasi',
                        'senarai_informasi/*',
                        'senarai_informasi1',
                        'senarai_informasi1/*',
                        'kemasukanData',
                        'kemasukanData/*',
                        'kampung/*'))
                        <a class="nav-link btn1" href="" role="button">

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
                        </a>
                    @endif

                    @if (Request::is(
                        'thrus',
                        'thrus/*',
                        'strategy',
                        'strategy/*',
                        'cluster',
                        'cluster/*',
                        'initiative',
                        'initiative/*',
                        'program',
                        'program/*',
                        'plan',
                        'plan/*',
                        'activity',
                        'activity/*',
                        'approval',
                        'approval/*',
                        'display',
                        'display/*'))
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
                        'fokusutama',
                        'fokusutama/*',
                        'perkarautama',
                        'perkarautama/*',
                        'pemangkin',
                        'pemangkin/*',
                        'bab',
                        'bab/*',
                        'pemacu',
                        'pemacu/*',
                        'bidang',
                        'bidang/*',
                        'outcome',
                        'outcome/*',
                        'kpi',
                        'kpi/*',
                        'kpi1',
                        'kpi1/*',
                        'strategi',
                        'strategi/*',
                        'inisiatif',
                        'inisiatif/*',
                        'tindakan',
                        'tindakan/*',
                        'tindakan1',
                        'tindakan1/*',
                        'sdg',
                        'sdg/*'))
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
                                        class="nav-link btn1 {{ Request::is('fokusutama', 'fokusutama/*') ? 'active' : '' }}"
                                        href="/fokusutama">
                                        <div class="d-flex align-items-center"><span class="nav-link-text1 ps-1">Fokus
                                                Utama</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a
                                        class="nav-link btn1 {{ Request::is('perkarautama', 'perkarautama/*') ? 'active' : '' }}"
                                        href="/perkarautama">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Perkara
                                                Utama</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a
                                        class="nav-link btn1 {{ Request::is('pemangkin', 'pemangkin/*') ? 'active' : '' }}"
                                        href="/pemangkin">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Tema/Pemangkin
                                                Dasar</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a
                                        class="nav-link btn1 {{ Request::is('bab', 'bab/*') ? 'active' : '' }}"
                                        href="/bab">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Bab</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a
                                        class="nav-link btn1 {{ Request::is('pemacu', 'pemacu/*') ? 'active' : '' }}"
                                        href="/pemacu">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Pemacu
                                                Perubahan</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a
                                        class="nav-link btn1 {{ Request::is('bidang', 'bidang/*') ? 'active' : '' }}"
                                        href="/bidang">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Bidang
                                                Keutamaan</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a
                                        class="nav-link btn1 {{ Request::is('outcome', 'outcome/*') ? 'active' : '' }}"
                                        href="/outcome">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Outcome
                                                Nasional</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>


                                <li class="nav-item">
                                    <a class="nav-link btn1 dropdown-indicator  {{ Request::is('kpi', 'kpi/*', 'kpi1', 'kpi1/*') ? 'active' : '' }}"
                                        href="#kpi" role="button" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="kpi">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text1 ps-1">KPI
                                                Nasional</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->

                                    <ul class="nav collapse" id="kpi">
                                        <li class="nav-item"><a class="nav-link btn1" href="/kpi">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text1 btn1 ps-1">KPI Nasional</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                    </ul>
                                    <ul class="nav collapse" id="kpi">
                                        <li class="nav-item"><a class="nav-link" href="/kpi1/index1">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text1 btn1 ps-1">Senarai Markah Berdasarkan
                                                        Status</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a
                                        class="nav-link btn1 {{ Request::is('strategi', 'strategi/*') ? 'active' : '' }}"
                                        href="/strategi">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Strategi</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item"><a
                                        class="nav-link btn1 {{ Request::is('inisiatif', 'inisiatif/*') ? 'active' : '' }}"
                                        href="/inisiatif">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Inisiatif</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                {{-- <li class="nav-item"><a
                                        class="nav-link btn1 {{ Request::is('tindakan', 'tindakan/*', 'tindakan1', 'tindakan1/*') ? 'active' : '' }}"
                                        href="/tindakan">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Tindakan</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li> --}}
                                <li class="nav-item">
                                    <a class="nav-link btn1 dropdown-indicator  {{ Request::is('tindakan', 'tindakan/*', 'tindakan1', 'tindakan1/*') ? 'active' : '' }}"
                                        href="#tindakan" role="button" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="tindakan">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text1 ps-1">Tindakan
                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->

                                    <ul class="nav collapse" id="tindakan">
                                        <li class="nav-item"><a class="nav-link btn1" href="/tindakan">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text1 btn1 ps-1">Tindakan</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                    </ul>
                                    <ul class="nav collapse" id="tindakan">
                                        <li class="nav-item"><a class="nav-link" href="/tindakan1/index1">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text1 btn1 ps-1">Senarai Markah Berdasarkan
                                                        Status</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a
                                        class="nav-link btn1 {{ Request::is('sdg', 'sdg/*') ? 'active' : '' }}"
                                        href="/sdg">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">SDG</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                            </ul>
                        </div>
                    @endif

                    <br>


                    {{-- @if (in_array(url()->current(), [url('thrust'), url('national'), url('key'), url('sub'), url('kpi2'), url('milestone')])) --}}
                    @if (Request::is(
                        'thrust',
                        'thrust/*',
                        'national',
                        'national/*',
                        'key',
                        'key/*',
                        'sub',
                        'sub/*',
                        'kpi2',
                        'kpi2/*',
                        'milestone',
                        'milestone/*',
                        'mpb'))
                        <a class="nav-link dropdown-indicator" href="#mpb" role="button"
                            data-bs-toggle="collapse" aria-expanded="true" aria-controls="mpb"
                            style="background-color: #C4D4ED">
                            <div class="d-flex justify-content-center" style="color: #047FC3">
                                <span class="nav-link-text1 ps-1">Information</span>
                            </div>
                        </a>

                        <div class="card">
                            <ul class="nav collapse show" id="mpb" style="background-color: #E7EFFD">
                                {{-- <li class="nav-item">
                                    <a class="nav-link btn1 {{ Request::is('thrust', 'thrust/*') ? 'active' : '' }}"
                                        href="/thrust">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Thrust
                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li> --}}
                                <li class="nav-item">
                                    <a class="nav-link btn1 {{ Request::is('national', 'national/*') ? 'active' : '' }}"
                                        href="/national">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">National
                                                Initiative
                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn1 {{ Request::is('key', 'key/*') ? 'active' : '' }}"
                                        href="/key">
                                        <div class="d-flex align-items-center"><span class="nav-link-text1 ps-1">Key
                                                Activity
                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn1 {{ Request::is('sub', 'sub/*') ? 'active' : '' }}"
                                        href="/sub">
                                        <div class="d-flex align-items-center"><span class="nav-link-text1 ps-1">Sub
                                                Activity</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn1 {{ Request::is('kpi2', 'kpi2/*') ? 'active' : '' }}"
                                        href="/kpi2">
                                        <div class="d-flex align-items-center"><span class="nav-link-text1 ps-1">KPI
                                                Information
                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn1 {{ Request::is('milestone', 'milestone/*') ? 'active' : '' }}"
                                        href="/milestone">
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
                        'lokaliti',
                        'lokaliti/*',
                        'lokaliti1',
                        'lokaliti1/*',
                        'senarai_kir_air',
                        'senarai_kir_air/*',
                        'senarai_kir_air1',
                        'senarai_kir_air1/*',
                        'bantuan',
                        'bantuan/*',
                        'bantuan1',
                        'bantuan1/*',
                        'senarai_informasi',
                        'senarai_informasi/*',
                        'senarai_informasi1',
                        'senarai_informasi1/*',
                        'kemasukanData',
                        'kemasukanData/*',
                        'kampung/*'))
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
                                    <a class="nav-link btn1 dropdown-indicator  {{ Request::is('lokaliti', 'lokaliti/*', 'lokaliti1', 'lokaliti1/*') ? 'active' : '' }}"
                                        href="#lokaliti" role="button" data-bs-toggle="collapse"
                                        aria-expanded="false" aria-controls="lokaliti">
                                        <div class="d-flex align-items-center">
                                            <span class="nav-link-text1 ps-1">Lokaliti</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->

                                    <ul class="nav collapse" id="lokaliti">
                                        <li class="nav-item"><a class="nav-link btn1" href="/lokaliti/index">
                                                <div class="d-flex align-items-center"><span
                                                        class="nav-link-text1 btn1 ps-1">Lokaliti Mengikut
                                                        Negeri</span>
                                                </div>
                                            </a>
                                            <!-- more inner pages-->
                                        </li>
                                    </ul>
                                    <ul class="nav collapse" id="lokaliti">
                                        <li class="nav-item"><a class="nav-link btn1" href="/lokaliti1/index1">
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
                                <a class="nav-link btn1 dropdown-indicator {{ Request::is('senarai_kir_air', 'senarai_kir_air/*', 'senarai_kir_air1', 'senarai_kir_air1/*') ? 'active' : '' }}"
                                    href="#email" role="button" data-bs-toggle="collapse" aria-expanded="false"
                                    aria-controls="email">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"></span><span
                                            class="nav-link-text1 ps-1">Senarai
                                            KIR & AIR</span>
                                    </div>
                                </a>
                                <ul class="nav collapse false" id="email">
                                    <li class="nav-item"><a class="nav-link btn1" href="/senarai_kir_air">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text1 ps-1">Senarai Mengikut Negeri</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link btn1" href="/senarai_kir_air1/index1">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text1 ps-1">Senarai Mengikut Negeri dan
                                                    Daerah</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link btn1" href="/senarai_kir_air1/index2">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text1 ps-1">Senarai Mengikut Negeri,
                                                    Daerah Dan Kampung</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                </ul>


                                <!-- parent pages-->
                                <a class="nav-link btn1 dropdown-indicator {{ Request::is('bantuan', 'bantuan/*', 'bantuan1', 'bantuan1/*') ? 'active' : '' }}"
                                    href="#bantuan" role="button" data-bs-toggle="collapse" aria-expanded="false"
                                    aria-controls="bantuan">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"></span><span
                                            class="nav-link-text1 ps-1">Jenis Bantuan</span>
                                    </div>
                                </a>
                                <ul class="nav collapse false" id="bantuan">
                                    <li class="nav-item"><a class="nav-link btn1" href="/bantuan">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text1 ps-1">Senarai Jenis Bantuan</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link btn1"
                                            href="/bantuan1/berdasarkan_negeri">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text1 ps-1">Senarai Jenis Bantuan Berdasarkan
                                                    Negeri</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link btn1"
                                            href="/bantuan1/senarai_ketua_kampung">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text1 ps-1">Senarai Nama Ketua Kampung</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link btn1"
                                            href="/bantuan1/senarai_kampung_menerima">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text1 ps-1">Senarai Kampung Yang Menerima
                                                    Bantuan</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                </ul>

                                <!-- parent pages-->
                                <a class="nav-link btn1 dropdown-indicator {{ Request::is('senarai_informasi', 'senarai_informasi/*', 'senarai_informasi1', 'senarai_informasi1/*') ? 'active' : '' }}"
                                    href="#senarai" role="button" data-bs-toggle="collapse" aria-expanded="false"
                                    aria-controls="senarai">
                                    <div class="d-flex align-items-center"><span class="nav-link-icon"></span><span
                                            class="nav-link-text1 ps-1">Senarai
                                            Informasi Berdasarkan KIR & AIR</span>
                                    </div>
                                </a>
                                <ul class="nav collapse false" id="senarai">
                                    <li class="nav-item"><a class="nav-link btn1" href="/senarai_informasi">
                                            <div class="d-flex align-items-center"><span
                                                    class="nav-link-text1 ps-1">Senarai KIR & AIR
                                                    Berdasarkan Negeri,
                                                    Daerah Dan Kampung</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->
                                    </li>
                                    <li class="nav-item"><a class="nav-link btn1" href="/senarai_informasi1/index1">
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

                    {{-- <br> --}}

                    @if (Request::is(
                        'thrus',
                        'thrus/*',
                        'strategy',
                        'strategy/*',
                        'cluster',
                        'cluster/*',
                        'initiative',
                        'initiative/*',
                        'program',
                        'program/*',
                        'plan',
                        'plan/*',
                        'activity',
                        'activity/*',
                        'approval',
                        'approval/*',
                        'display',
                        'display/*'))
                        <a class="nav-link dropdown-indicator" href="#md" role="button"
                            data-bs-toggle="collapse" aria-expanded="true" aria-controls="md"
                            style="background-color: #C4D4ED">
                            <div class="d-flex justify-content-center" style="color: #047FC3">
                                <span class="nav-link-text1 ps-1">Information</span>
                            </div>
                        </a>

                        <div class="card">
                            <ul class="nav collapse show" id="md" style="background-color: #E7EFFD">
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
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn1 {{ Request::is('cluster', 'cluster/*') ? 'active' : '' }}"
                                        href="/cluster">
                                        <div class="d-flex align-items-center"><span class="nav-link-text1 ps-1">List
                                                of Cluster
                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn1 {{ Request::is('initiative', 'initiative/*') ? 'active' : '' }}"
                                        href="/initiative">
                                        <div class="d-flex align-items-center"><span class="nav-link-text1 ps-1">List
                                                of Initiative</span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn1 {{ Request::is('program', 'program/*') ? 'active' : '' }}"
                                        href="/program">
                                        <div class="d-flex align-items-center"><span class="nav-link-text1 ps-1">List
                                                of Program
                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn1 {{ Request::is('plan', 'plan/*') ? 'active' : '' }}"
                                        href="/plan">
                                        <div class="d-flex align-items-center"><span class="nav-link-text1 ps-1">List
                                                of Plan
                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn1 {{ Request::is('activity', 'activity/*') ? 'active' : '' }}"
                                        href="/activity">
                                        <div class="d-flex align-items-center"><span class="nav-link-text1 ps-1">List
                                                of Activities
                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                @can('Kementerian MD')
                                    <li class="nav-item">
                                        <a class="nav-link btn1 dropdown-indicator  {{ Request::is('approval', 'approval/*', 'display', 'display/*') ? 'active' : '' }}"
                                            href="#cluster" role="button" data-bs-toggle="collapse"
                                            aria-expanded="false" aria-controls="cluster">
                                            <div class="d-flex align-items-center">
                                                <span class="nav-link-text1 ps-1">Status of Cluster</span>
                                            </div>
                                        </a>
                                        <!-- more inner pages-->

                                        <ul class="nav collapse" id="cluster">
                                            <li class="nav-item"><a class="nav-link btn1" href="/display/cluster1">
                                                    <div class="d-flex align-items-center"><span
                                                            class="nav-link-text1 btn1 ps-1">List of Program Based
                                                            Status</span>
                                                    </div>
                                                </a>
                                                <!-- more inner pages-->
                                            </li>
                                        </ul>
                                        <ul class="nav collapse" id="cluster">
                                            <li class="nav-item"><a class="nav-link btn1" href="/">
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
                                                <li class="nav-item"><a class="nav-link btn1" href="/approval/cluster">
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
                        'lokaliti',
                        'lokaliti/*',
                        'lokaliti1',
                        'lokaliti1/*',
                        'senarai_kir_air',
                        'senarai_kir_air/*',
                        'senarai_kir_air1',
                        'senarai_kir_air1/*',
                        'bantuan',
                        'bantuan/*',
                        'bantuan1',
                        'bantuan1/*',
                        'senarai_informasi',
                        'senarai_informasi/*',
                        'senarai_informasi1',
                        'senarai_informasi1/*',
                        'kemasukanData',
                        'kemasukanData/*',
                        'kampung/*'))
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
                                    <span class="nav-link-text ps-1">Senarai Kemasukan Data
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
                    {{-- <a class="nav-link" href="/markah/" role="button">

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

                    @if (Request::is(
                        'thrust',
                        'thrust/*',
                        'national',
                        'national/*',
                        'key',
                        'key/*',
                        'sub',
                        'sub/*',
                        'kpi2',
                        'kpi2/*',
                        'milestone',
                        'milestone/*',
                        'mpb'))
                        <a class="nav-link" href="/" role="button">

                            <div class="d-flex align-items-center">
                                <div class="col-2">
                                    <span class="nav-link-icon">
                                        <span class="far fa-folder"></span>
                                    </span>
                                </div>
                                <div class="col text-center">
                                    <span class="nav-link-text ps-1">
                                        Data Update
                                    </span>
                                </div>
                                <div class="col-2">

                                </div>
                            </div>
                        </a>
                    @endif

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
                    </a><br>
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
                                                class="nav-link-text1 ps-1">Ucapan PM

                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn1 {{ Request::is('rumusanPPD', 'rumusanPPD/*') ? 'active' : '' }}"
                                        href="/rumusanPPD">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Butiran
                                                Rumusan PPD

                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn1 {{ Request::is('rumusanTindakan', 'rumusanTindakan/*') ? 'active' : '' }}"
                                        href="/rumusanTindakan">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Rumusan
                                                Tindakan
                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn1 {{ Request::is('executive', 'executive/*') ? 'active' : '' }}"
                                        href="/executive">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Executive
                                                Dashboard

                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link btn1 {{ Request::is('executiveSummary', 'executiveSummary/*') ? 'active' : '' }}"
                                        href="/executiveSummary">
                                        <div class="d-flex align-items-center"><span
                                                class="nav-link-text1 ps-1">Executive
                                                Summary
                                            </span>
                                        </div>
                                    </a>
                                    <!-- more inner pages-->
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
                {{-- <a class="nav-link btn1" href="/dashboard" role="button">
                    <div class="row d-flex align-items-center ">
                        <div class="col-2">
                            <span class="nav-link-icon">
                                <span class="fas fa-home">
                                </span>
                            </span>
                        </div>
                        <div class="col text-center">
                            {{ auth()->user()->role }}
                            <br>
                            {{ auth()->user()->getPermissionNames() }}


                        </div>

                        <div class="col-2">

                        </div>

                    </div>


                </a> --}}
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
