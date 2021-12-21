<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : ''}}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/accident') ? 'active' : ''}}" href="/dashboard/accident">
            <span data-feather="briefcase"></span>
            Pelaporan Insiden Kecelakaan Kerja
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/disease') ? 'active' : ''}}" href="/dashboard/disease">
            <span data-feather="plus-circle"></span>
            Pelaporan Penyakit Akibat Kerja
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/b3') ? 'active' : ''}}" href="/dashboard/b3">
            <span data-feather="users"></span>
            Pelaporan Kejadian Paparan B3
          </a>
        </li>
        {{--  <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="clock"></span>
            Riwayat Laporan
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="bell"></span>
            Notifikasi
          </a>
        </li>
      </ul>

      
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Saved reports</span>
        <a class="link-secondary" href="#" aria-label="Add a new report">
          <span data-feather="plus-circle"></span>
        </a>
      </h6>
      <ul class="nav flex-column mb-2">
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file-text"></span>
            Current month
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file-text"></span>
            Last quarter
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file-text"></span>
            Social engagement
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <span data-feather="file-text"></span>
            Year-end sale
          </a>
        </li>  --}}
      </ul>
      <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
        <span>Profile</span>
      </h6>
      <ul class="nav flex-column mb-2">
        <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/editprofile') ? 'active' : ''}}" href="/dashboard/editprofile">
              <span data-feather="user"></span>
              Edit Profile
            </a>
          </li>
      </ul>
    </div>
  </nav>