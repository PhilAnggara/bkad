<div id="sidebar" class='active'>
  <div class="sidebar-wrapper active">
    <div class="sidebar-header">
      <img src="{{ url('frontend/assets/images/logo.svg') }}" alt="" srcset="">
    </div>
    <div class="sidebar-menu">
      <ul class="menu">

        <li class='sidebar-title'>Menu</li>

        <li class="sidebar-item {{ Request::is('/') ? 'active' : '' }}">
          <a href="{{ route('home') }}" class='sidebar-link'>
            <i class="far fa-home"></i>
            <span>Beranda</span>
          </a>
        </li>
        <li class="sidebar-item {{ Request::is('kendaraan') ? 'active' : '' }}">
          <a href="{{ route('home') }}" class='sidebar-link'>
            <i class="far fa-car"></i>
            <span>Kendaraan</span>
          </a>
        </li>
        <li class="sidebar-item {{ Request::is('elektronik') ? 'active' : '' }}">
          <a href="{{ route('home') }}" class='sidebar-link'>
            <i class="far fa-desktop"></i>
            <span>Alat Elektronik</span>
          </a>
        </li>
        <li class="sidebar-item {{ Request::is('furnitur') ? 'active' : '' }}">
          <a href="{{ route('home') }}" class='sidebar-link'>
            <i class="far fa-couch"></i>
            <span>Furnitur</span>
          </a>
        </li>
        <li class="sidebar-item {{ Request::is('pindai') ? 'active' : '' }}">
          <a href="{{ route('home') }}" class='sidebar-link'>
            <i class="far fa-qrcode"></i>
            <span>Pindai</span>
          </a>
        </li>
        <li class="sidebar-item {{ Request::is('laporan') ? 'active' : '' }}">
          <a href="{{ route('home') }}" class='sidebar-link'>
            <i class="far fa-file-alt"></i>
            <span>Laporan</span>
          </a>
        </li>

      </ul>
    </div>
    <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
  </div>
</div>