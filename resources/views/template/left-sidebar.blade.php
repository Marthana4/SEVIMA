<div class="main-sidebar">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
          <img src="{{asset('images/logo.png')}}" width="50px" >
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
          <img src="{{asset('images/logo.png')}}" width="40px">
          </div>
          <ul class="sidebar-menu">
              <li class="menu-header">Dashboard</li>
              <li><a class="nav-link" href="/beranda"><i class="far fa-square"></i> <span>Dashboard</span></a></li>
              <li class="menu-header">Starter</li>

          <!-- Left side menu ADMIN -->
          <li class="nav-item">
            <a href="/users" class="nav-link">
            <i class="fas fa-user"></i>
                <span>
                Users
                </span>
            </a>
          </li>
          <li class="nav-item">
            <a href="/courses" class="nav-link">
            <i class="fas fa-home"></i>
                <span>
                Courses
                </span>
            </a>
          </li>
          <li class="nav-item">
            <a href="/categories" class="nav-link">
            <i class="fas fa-columns"></i> 
                <span>
                List User & Course
                </span>
            </a>
          </li>
          </ul>
        </aside>
        <!-- /.sidebar-menu -->
      </div>