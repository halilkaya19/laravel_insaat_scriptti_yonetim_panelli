
<ul class="navbar-nav sidebar sidebar-light accordion" id="accordionSidebar">
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route("admin") }}">
        <div class="sidebar-brand-icon">
            <img src="{{ asset('backend/img/logo/logo2.png') }}">
        </div>
        <div class="sidebar-brand-text mx-3">Yönetim Paneli</div>
    </a>
    <hr class="sidebar-divider">
    <li class="nav-item">
        <a class="nav-link" href="{{ route("admin") }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Anasayfa</span></a>
    </li>

    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Genel Site Ayarları
    </div>
    <li class="nav-item @if(Route::is("admin.iletisim")) {{ "active" }} : '' @endif">
        <a class="nav-link" href="{{ route("admin.iletisim") }}">
            <i class="fas fa-fw fa-palette"></i>
            <span>İletişim Bölümü</span></a>
    </li>
    <li class="nav-item  @if(Route::is("admin.ayarlar")) {{ "active" }} : '' @endif">
        <a class="nav-link" href="{{ route("admin.ayarlar") }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Site Ayarları Bölümü</span></a>
    </li>
    <li class="nav-item @if(Route::is("admin.arch")) {{ "active" }} : '' @endif">
        <a class="nav-link" href="{{ route("admin.arch") }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Archiments</span></a>
    </li>
    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Site Bölümleri
    </div>
    <li class="nav-item @if(Route::is("admin.hizmet") ||  Route::is("admin.hizmet.hizmetekleget")) {{ "active" }} : '' @endif">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBootstrap"
           aria-expanded="true" aria-controls="collapseBootstrap">
            <i class="far fa-fw fa-window-maximize"></i>
            <span>Hizmetlerimiz</span>
        </a>
        <div id="collapseBootstrap" class="collapse @if(Route::is("admin.hizmet") ||  Route::is("admin.hizmet.hizmetekleget")) {{ "show" }} : '' @endif" aria-labelledby="headingBootstrap" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">İçerik</h6>
                <a class="collapse-item" href="{{ route('admin.hizmet.hizmetekleget') }}">Yeni Ekle</a>
                <a class="collapse-item" href="{{ route("admin.hizmet") }}">Listesi</a>
            </div>
        </div>
    </li>
    <li class="nav-item @if(Route::is("admin.slider") ||  Route::is("admin.slider.sliderEkleget")) {{ "active" }} : '' @endif">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseForm" aria-expanded="true"
           aria-controls="collapseForm">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>Slider Bölümü</span>
        </a>
        <div id="collapseForm" class="collapse @if(Route::is("admin.slider") ||  Route::is("admin.slider.sliderEkleget")) {{ "show" }} : '' @endif" aria-labelledby="headingForm" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">İçerik</h6>
                <a class="collapse-item" href="{{ route("admin.slider.sliderEkleget") }}">Yeni Ekle</a>
                <a class="collapse-item" href="{{ route("admin.slider") }}">Listesi</a>
            </div>
        </div>
    </li>
    <li class="nav-item @if(Route::is("admin.ne") ||  Route::is("admin.ne.nededilerekleget")) {{ "active" }} : '' @endif">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTable" aria-expanded="true"
           aria-controls="collapseTable">
            <i class="fas fa-fw fa-table"></i>
            <span>Nedediler Bölümü</span>
        </a>
        <div id="collapseTable" class="collapse @if(Route::is("admin.ne") ||  Route::is("admin.ne.nededilerekleget")) {{ "show" }} : '' @endif" aria-labelledby="headingTable" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">İçerik</h6>
                <a class="collapse-item" href="{{ route("admin.ne.nededilerekleget") }}">Yeni Ekle</a>
                <a class="collapse-item" href="{{ route('admin.ne') }}">Listesi</a>
            </div>
        </div>
    </li>
    <li class="nav-item @if(Route::is("admin.ref") ||  Route::is("admin.ref.referansekleget")) {{ "active" }} : '' @endif">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePage" aria-expanded="true"
           aria-controls="collapsePage">
            <i class="far fa-fw fa-window-maximize"></i>
            <span>Referanslar</span>
        </a>
        <div id="collapsePage" class="collapse @if(Route::is("admin.ref") ||  Route::is("admin.ref.referansekleget")) {{ "show" }} : '' @endif" aria-labelledby="headingPage" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">İçerik</h6>
                <a class="collapse-item" href="{{ route("admin.ref.referansekleget") }}">Yeni Ekle</a>
                <a class="collapse-item" href="{{ route("admin.ref") }}">Listesi</a>
            </div>
        </div>
    </li>

    <li class="nav-item @if(Route::is("admin.blog") ||  Route::is("admin.blog.referansekleget")) {{ "active" }} : '' @endif">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseBlog" aria-expanded="true"
           aria-controls="collapsePage">
            <i class="fab fa-fw fa-wpforms"></i>
            <span>Blog Konuları</span>
        </a>
        <div id="collapseBlog" class="collapse @if(Route::is("admin.blog") ||  Route::is("admin.blog.blogekleget")) {{ "show" }} : '' @endif" aria-labelledby="headingPage" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">İçerik</h6>
                <a class="collapse-item" href="{{ route("admin.blog.blogekleget") }}">Yeni Ekle</a>
                <a class="collapse-item" href="{{ route("admin.blog") }}">Listesi</a>
            </div>
        </div>
    </li>

    <li class="nav-item @if(Route::is("admin.proje") ||  Route::is("admin.proje.projeekleget") ||  Route::is("admin.proje.projekategorilistesi")) {{ "active" }} : '' @endif ">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseProje" aria-expanded="true"
           aria-controls="collapsePage">
            <i class="fas fa-fw fa-columns"></i>
            <span>Projeler Bölümü</span>
        </a>
        <div id="collapseProje" class="collapse @if(Route::is("admin.proje") ||  Route::is("admin.proje.projeekleget") || Route::is("admin.proje.projekategorilistesi") ) {{ "show" }} : '' @endif" aria-labelledby="headingPage" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">İçerik</h6>
                <a class="collapse-item" href="{{ route("admin.proje.projekategoriekleget") }}">Yeni Proje Kategorisi Ekle</a>
                <a class="collapse-item" href="{{ route("admin.proje.projekategorilistesi") }}">Proje Kategori Listesi</a>
                <a class="collapse-item" href="{{ route("admin.proje.projeekleget") }}">Yeni Proje Ekle</a>
                <a class="collapse-item" href="{{ route("admin.proje") }}">Proje Listesi</a>
            </div>
        </div>
    </li>

    <hr class="sidebar-divider">
    <div class="sidebar-heading">
        Oturumu İşlemleri
    </div>

    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Oturumu Kapat</span>
        </a>
    </li>
    <hr class="sidebar-divider">
    <div class="version" id="version-ruangadmin"></div>
</ul>