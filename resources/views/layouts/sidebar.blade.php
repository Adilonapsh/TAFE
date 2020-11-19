<aside class="main-sidebar sidebar-no-expand sidebar-light-primary">
  <!-- Brand Logo -->
  <a href="/" class="brand-link navbar-primary">
    <img src="../../dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <b class="brand-text text-white">Adilonapsh</b>
  </a>

  <!-- Sidebar -->
  <div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-scrollbar-horizontal-hidden os-host-transition"><div class="os-resize-observer-host"><div class="os-resize-observer observed" style="left: 0px; right: auto;"></div></div><div class="os-size-auto-observer" style="height: calc(100% + 1px); float: left;"><div class="os-resize-observer observed"></div></div><div class="os-content-glue" style="margin: 0px -8px; width: 73px; height: 302px;"></div><div class="os-padding"><div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;"><div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="../../dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="{{ route('logout') }}" id="Users" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
          {{ Auth::user()->name }}
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column nav-flat" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link {{ Request::is('dashboard*')? 'active': '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="#" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Dashboard v1</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item has-treeview">
          <a href="#" class="nav-link {{ Request::is('cctv*')? 'active': ''}}">
            <i class="nav-icon fad fa-cctv"></i>
            <p>
              CCTV
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="/cctv" class="nav-link {{ Request::is('cctv*')? 'active': ''}}">
                <i class="fas fa-video nav-icon"></i>
                <p>Camera</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="/video" class="nav-link {{ Request::is('cctv*')? 'active': ''}}">
                <i class="fas fa-film nav-icon"></i>
                <p>Video</p>
              </a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
</div>
</div>
<div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
<div class="os-scrollbar-track">
    <div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div>
</div>
</div>
<div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden">
<div class="os-scrollbar-track">
    <div class="os-scrollbar-handle" style="height: 36.8613%; transform: translate(0px, 0px);"></div>
</div>
</div>
<div class="os-scrollbar-corner"></div></div>
  <!-- /.sidebar -->
</aside>