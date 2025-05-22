<!doctype html>
<html lang="en">
<!--begin::Head-->

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>AdminLTE v4 | Dashboard</title>
  <!--begin::Primary Meta Tags-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="title" content="AdminLTE v4 | Dashboard" />
  <meta name="author" content="ColorlibHQ" />
  <meta name="description"
    content="AdminLTE is a Free Bootstrap 5 Admin Dashboard, 30 example pages using Vanilla JS." />
  <meta name="keywords"
    content="bootstrap 5, bootstrap, bootstrap 5 admin dashboard, bootstrap 5 dashboard, bootstrap 5 charts, bootstrap 5 calendar, bootstrap 5 datepicker, bootstrap 5 tables, bootstrap 5 datatable, vanilla js datatable, colorlibhq, colorlibhq dashboard, colorlibhq admin dashboard" />
  <!--end::Primary Meta Tags-->
  <!--begin::Fonts-->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
    integrity="sha256-9kPW/n5nn53j4WMRYAxe9c1rCY96Oogo/MKSVdKzPmI=" crossorigin="anonymous" />
  <!--end::Third Party Plugin(Bootstrap Icons)-->
  <!--begin::Required Plugin(AdminLTE)-->
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="{{ asset('dist/datepicker/flatpickr.min.css') }}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/plugins/monthSelect/style.css">

  <link rel="stylesheet" href="{{ asset('dist/css/adminlte.css') }}" />
  <!--end::Required Plugin(AdminLTE)-->
  @livewireStyles
</head>
<!--end::Head-->
<!--begin::Body-->

<body class="layout-fixed sidebar-expand-lg bg-body-tertiary">
  <!--begin::App Wrapper-->
  <div class="app-wrapper">
    <!--begin::Header-->
    <nav class="app-header navbar navbar-expand bg-body">
      <!--begin::Container-->
      <div class="container-fluid">
        <!--begin::Start Navbar Links-->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" data-lte-toggle="sidebar" href="#" role="button">
              <i class="bi bi-list"></i>
            </a>
          </li>
          <li class="nav-item d-none d-md-block"><a wire:navigate href="{{ url('/') }}" class="nav-link">Home</a></li>
        </ul>
        <!--end::Start Navbar Links-->
        <!--begin::End Navbar Links-->
        <ul class="navbar-nav ms-auto">
          <!--begin::Navbar Search-->
          <!--end::Navbar Search-->
          <!--begin::Messages Dropdown Menu-->
          <li class="nav-item dropdown">
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
              <a href="#" class="dropdown-item">
                <!--begin::Message-->
                <div class="d-flex">
                  <div class="flex-shrink-0">
                    <img src="{{ asset('dist/assets/img/user1-128x128.jpg') }}" alt="User Avatar"
                      class="img-size-50 rounded-circle me-3" />
                  </div>
                  <div class="flex-grow-1">
                    <h3 class="dropdown-item-title">
                      Brad Diesel
                      <span class="float-end fs-7 text-danger"><i class="bi bi-star-fill"></i></span>
                    </h3>
                    <p class="fs-7">Call me whenever you can...</p>
                    <p class="fs-7 text-secondary">
                      <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                    </p>
                  </div>
                </div>
                <!--end::Message-->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!--begin::Message-->
                <div class="d-flex">
                  <div class="flex-shrink-0">
                    <img src="{{ asset('dist/assets/img/user1-128x128.jpg') }}" alt="User Avatar"
                      class="img-size-50 rounded-circle me-3" />
                  </div>
                  <div class="flex-grow-1">
                    <h3 class="dropdown-item-title">
                      John Pierce
                      <span class="float-end fs-7 text-secondary">
                        <i class="bi bi-star-fill"></i>
                      </span>
                    </h3>
                    <p class="fs-7">I got your message bro</p>
                    <p class="fs-7 text-secondary">
                      <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                    </p>
                  </div>
                </div>
                <!--end::Message-->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item">
                <!--begin::Message-->
                <div class="d-flex">
                  <div class="flex-shrink-0">
                    <img src="{{ asset('dist/assets/img/user3-128x128.jpg') }}" alt="User Avatar"
                      class="img-size-50 rounded-circle me-3" />
                  </div>
                  <div class="flex-grow-1">
                    <h3 class="dropdown-item-title">
                      Nora Silvester
                      <span class="float-end fs-7 text-warning">
                        <i class="bi bi-star-fill"></i>
                      </span>
                    </h3>
                    <p class="fs-7">The subject goes here</p>
                    <p class="fs-7 text-secondary">
                      <i class="bi bi-clock-fill me-1"></i> 4 Hours Ago
                    </p>
                  </div>
                </div>
                <!--end::Message-->
              </a>
              <div class="dropdown-divider"></div>
              <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
            </div>
          </li>
          <!--end::Messages Dropdown Menu-->
          <!--begin::Notifications Dropdown Menu-->
          <!--end::Notifications Dropdown Menu-->
          <!--begin::Fullscreen Toggle-->
          <!--end::Fullscreen Toggle-->
          <!--begin::User Menu Dropdown-->
          <li class="nav-item dropdown user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
              <img src="{{ asset('dist/assets/img/user2-160x160.jpg') }}" class="user-image rounded-circle shadow"
                alt="User Image" />
              <span class="d-none d-md-inline">Alexander Pierce</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-end">
              <!--begin::User Image-->
              <li class="user-header text-bg-primary">
                <img src="{{ asset('dist/assets/img/user2-160x160.jpg') }}" class="rounded-circle shadow"
                  alt="User Image" />
                <p>
                  Alexander Pierce - Web Developer
                  <small>Member since Nov. 2023</small>
                </p>
              </li>
              <!--end::User Image-->
              <!--begin::Menu Body-->
              <!--end::Menu Body-->
              <!--begin::Menu Footer-->
              <li class="user-footer">
                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                  @csrf
                  <button type="submit" class="btn btn-default btn-flat float-end">
                    <i class="fas fa-sign-out-alt me-2"></i>{{ __('Déconnexion') }}
                  </button>
                </form>

                {{-- <a href="#" class="btn btn-default btn-flat float-end">Sign out</a> --}}
              </li>
              <!--end::Menu Footer-->
            </ul>
          </li>
          <!--end::User Menu Dropdown-->
        </ul>
        <!--end::End Navbar Links-->
      </div>
      <!--end::Container-->
    </nav>
    <!--end::Header-->
    <!--begin::Sidebar-->
    <aside class="app-sidebar bg-body-secondary shadow" data-bs-theme="dark">
      <!--begin::Sidebar Brand-->
      <div class="sidebar-brand">
        <!--begin::Brand Link-->
        <a href="#" class="brand-link">
          <!--begin::Brand Image-->
          <img src="{{ asset('dist/assets/img/AdminLTELogo.png') }}" alt="AdminLTE Logo"
            class="brand-image opacity-75 shadow" />
          <!--end::Brand Image-->
          <!--begin::Brand Text-->
          <span class="brand-text fw-light">jouali</span>
          <!--end::Brand Text-->
        </a>
        <!--end::Brand Link-->
      </div>
      <!--end::Sidebar Brand-->
      <!--begin::Sidebar Wrapper-->
      <div class="sidebar-wrapper">
        <nav class="mt-2">
          <!--begin::Sidebar Menu-->
          <ul class="nav sidebar-menu flex-column" data-lte-toggle="treeview" role="menu" data-accordion="false">
            <li class="nav-item {{ request()->routeIs('personnes.*') ? 'menu-open' : '' }}">
              <a href="#" class="nav-link {{ request()->routeIs('personnes.*') ? 'active' : '' }}">
                <i class="nav-icon bi bi-speedometer"></i>
                <p>
                  Employes
                  <i class="nav-arrow bi bi-chevron-right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a wire:navigate href="{{ route('personnes.create') }}"
                    class="nav-link {{ request()->routeIs('personnes.create') ? 'active' : '' }}">
                    <i class="nav-icon bi bi-circle"></i>
                    <p>Ajouter Employé</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a wire:navigate href="{{ route('personnes.index') }}"
                    class="nav-link {{ request()->routeIs('personnes.index') ? 'active' : '' }}">
                    <i class="nav-icon bi bi-circle"></i>
                    <p>Liste Employés</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a wire:navigate href="{{ route('personnes.pdf') }}"
                    class="nav-link {{ request()->routeIs('personnes.pdf') ? 'active' : '' }}">
                    <i class="nav-icon bi bi-circle"></i>
                    <p>Liste Employés(Pdf)</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item {{ request()->routeIs('primes.*') ? 'menu-open' : '' }}">
              <a href="#" class="nav-link {{ request()->routeIs('primes.*') ? 'active' : '' }}">
                <i class="nav-icon bi bi-box-seam-fill"></i>
                <p>
                  Primes
                  <i class="nav-arrow bi bi-chevron-right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a wire:navigate href="{{ route('primes.create') }}"
                    class="nav-link {{ request()->routeIs('primes.create') ? 'active' : '' }}">
                    <i class="nav-icon bi bi-circle"></i>
                    <p>Ajouter Prime</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a wire:navigate href="{{ route('primes.index') }}"
                    class="nav-link {{ request()->routeIs('primes.index') ? 'active' : '' }}">
                    <i class="nav-icon bi bi-circle"></i>
                    <p>Liste Primes</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item {{ request()->routeIs('sanctions.*') ? 'menu-open' : '' }}">
              <a href="#" class="nav-link {{ request()->routeIs('sanctions.*') ? 'active' : '' }}">
                <i class="nav-icon bi bi-question-circle-fill"></i>
                <p>
                  Sanctions
                  <i class="nav-arrow bi bi-chevron-right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a wire:navigate href="{{ route('sanctions.create') }}"
                    class="nav-link {{ request()->routeIs('sanctions.create') ? 'active' : '' }}">
                    <i class="nav-icon bi bi-circle"></i>
                    <p>Ajouter Sanction</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a wire:navigate href="{{ route('sanctions.index') }}"
                    class="nav-link {{ request()->routeIs('sanctions.index') ? 'active' : '' }}">
                    <i class="nav-icon bi bi-circle"></i>
                    <p>Liste Sanctions</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item {{ request()->routeIs('salaires.*') ? 'menu-open' : '' }}">
              <a href="#" class="nav-link {{ request()->routeIs('salaires.*') ? 'active' : '' }}">
                <i class="nav-icon bi bi-browser-edge"></i>
                <p>
                  Gestions Salaires
                  <i class="nav-arrow bi bi-chevron-right"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a wire:navigate href="{{ route('salaires.gestion') }}"
                    class="nav-link {{ request()->routeIs('salaires.gestion') ? 'active' : '' }}">
                    <i class="nav-icon bi bi-circle"></i>
                    <p>Salaires</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a wire:navigate href="{{ route('salaires.impression') }}"
                    class="nav-link {{ request()->routeIs('salaires.impression') ? 'active' : '' }}">
                    <i class="nav-icon bi bi-circle"></i>
                    <p>Impression salaires</p>
                  </a>
                </li>
              </ul>
            </li>
            <li class="nav-item">
              <a href="{{ route('enfants.create') }}" class="nav-link {{ request()->routeIs('enfants.create') ? 'active' : '' }}">
                <i class="nav-icon bi bi-ui-checks-grid"></i>
                <p>Gestion des Enfants</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('cnss.create') }}" class="nav-link {{ request()->routeIs('cnss.create') ? 'active' : '' }}">
                <i class="nav-icon bi bi-star-half"></i>
                <p>Gestion Cnss</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{ route('declarations.create') }}" class="nav-link {{ request()->routeIs('declarations.create') ? 'active' : '' }}">
                <i class="nav-icon bi bi-grip-horizontal"></i>
                <p>Montants Declarés</p>
              </a>
            </li>

          </ul>
          <!--end::Sidebar Menu-->
        </nav>
      </div>
      <!--end::Sidebar Wrapper-->
    </aside>
    <!--end::Sidebar-->
    <!--begin::App Main-->
    <main class="app-main">
      <div class="app-content">
        {{ $slot }}
      </div>
      <!--end::App Content-->
    </main>
    <!--end::App Main-->
    <!--begin::Footer-->
    <footer class="app-footer">
      <!--begin::To the end-->
      <div class="float-end d-none d-sm-inline">Anything you want</div>
      <!--end::To the end-->
      <!--begin::Copyright-->
      <strong>
        Copyright &copy; 2025-2026&nbsp;
        <a href="#" class="text-decoration-none">Gestions Des Employés</a>.
      </strong>
      All rights reserved.
      <!--end::Copyright-->
    </footer>
    <!--end::Footer-->
  </div>
  <!--end::App Wrapper-->
  <!--begin::Script-->
  <!--begin::Third Party Plugin(OverlayScrollbars)-->
  <script src="{{ asset('dist/js/jquery.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
  <script src="{{ asset('dist/datepicker/flatpickr.min.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/flatpickr/dist/plugins/monthSelect/index.js"></script>
  <script src="{{ asset('dist/js/adminlte.js') }}"></script>

  @livewireScripts {{-- Laissez Livewire Scripts en dernier --}}
</body>

</html>

</body>

</html>