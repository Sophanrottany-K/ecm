      <head>

          <!-- Google Font: Source Sans Pro -->
          <link rel="stylesheet"
              href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
          <!-- Font Awesome Icons -->
          <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
          <!-- overlayScrollbars -->
          <link rel="stylesheet" href="{{ asset('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
          <!-- Theme style -->
          <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
          <link rel="icon" href="{{ asset('assets/dist/img/hotel/genshinlogo.png') }}">
          <link rel="stylesheet" href="{{ asset('node_modules/bootstrap-icons/font/bootstrap-icons.css') }}">
      </head>
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
          <!-- Brand Logo -->
          <a href="#" class="brand-link">

              <span class="brand-text font-weight-light"> E-Commerce</span>
          </a>

          <!-- Sidebar -->
          <div class="sidebar">
              <!-- Sidebar user panel (optional) -->
              <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                  <div class="image">
                      <img src="{{ asset('assets/dist/img/Yae-Miko.png') }}" class="img-circle elevation-2"
                          alt="User Image">
                  </div>
                  <div class="info">
                      <a href="#" class="d-block">Admin</a>
                  </div>
              </div>

              <!-- SidebarSearch Form -->
              <div class="form-inline">
                  <div class="input-group" data-widget="sidebar-search">
                      <input class="form-control form-control-sidebar" type="search" placeholder="Search"
                          aria-label="Search">
                      <div class="input-group-append">
                          <button class="btn btn-sidebar">
                              <i class="fas fa-search fa-fw"></i>
                          </button>
                      </div>
                  </div>
              </div>

              <!-- Sidebar Menu -->
              <nav class="mt-2">
                  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                      data-accordion="false">
                      <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                      <li class="nav-item menu-open">
                          <a href="" class="nav-link active">
                              <i class="bi bi-gear-fill"></i>
                              <p>
                                  Admin Dashboard
                                  <i class="right fas fa-angle-left"></i>
                              </p>
                          </a>
                      </li>

                      <li class="nav-item">
                          <a href="{{ route('product.create') }}" class="nav-link">
                              <i class="bi bi-align-start"></i>
                              <p>
                                  create Product
                                  <i class="fas fa-angle-left right"></i>
                              </p>
                          </a>
                      </li>

                      <li class="nav-item">
                          <a href="{{ route('category.create') }}" class="nav-link">
                              <i class="bi bi-person-gear"></i>
                              <p>
                                  create Category 
                                  <i class="fas fa-angle-left right"></i>
                              </p>
                          </a>
                      </li>
                  </ul>
              </nav>
              <!-- /.sidebar-menu -->
          </div>
          <!-- /.sidebar -->
      </aside>
