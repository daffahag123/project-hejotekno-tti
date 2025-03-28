<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    @yield('title')
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="../assets/demo/demo.css" rel="stylesheet" />
  <style>
    .sidebar-hidden {
      width: 0;
      transition: width 0.3s;
      overflow: hidden;
    }

    .sidebar-hidden .sidebar-wrapper {
      display: none;
    }

    .main-panel-expanded {
      width: 100%;
      margin-left: 0;
      transition: margin-left 0.3s;
    }
  </style>
</head>

<body class="">
  <div class="wrapper">
    <div class="sidebar" data-color="orange">
      <div class="logo">
        <a href="" class="simple-text logo-mini">
            <i class="now-ui-icons users_single-02"></i>
        </a>
        <a href="" class="simple-text logo-normal">
        @if(Session::has('admin'))
            {{ Session::get('admin')->name }}
        @endif
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
        <li class="nav-item">
            <a class="nav-link" href="">
                <i class="now-ui-icons design_app"></i>
                <p>Dashboard</p>
            </a>
        </li>
          
          <li class="nav-item">
            <a class="nav-link" href="{{route('admin')}}">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Table Product</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('table.user')}}">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Table User</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('table.transaction')}}">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Table Transaction</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('table.messages')}}">
              <i class="now-ui-icons design_bullet-list-67"></i>
              <p>Messages</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent bg-primary navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo">Table List</a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="#pablo" id="toggleSidebar">
                  <i class="now-ui-icons media-2_sound-wave"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Stats</span>
                  </p>
                </a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="now-ui-icons location_world"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Some Actions</span>
                  </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Something else here</a>
                </div>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pablo">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="#" onclick="confirmLogout()">
                      <i class="now-ui-icons ui-1_simple-remove"></i>
                      <p>
                          <span class="d-lg-none d-md-block">Logout</span>
                      </p>
                  </a>
              </li>

            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->

      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
      @yield('content')
      </div>

      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
              <li>
                <a href="https://www.creative-tim.com">
                  Creative Tim
                </a>
              </li>
              <li>
                <a href="http://presentation.creative-tim.com">
                  About Us
                </a>
              </li>
              <li>
                <a href="http://blog.creative-tim.com">
                  Blog
                </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
  <script>
    function confirmLogout() {
        if (confirm("Are you sure you want to logout?")) {
            window.location.href = "{{ route('logout') }}";
        }
    }

    document.addEventListener("DOMContentLoaded", function () {
      var currentUrl = window.location.href;

      var links = document.querySelectorAll('.nav-item a');
      links.forEach(function(link) {
        if (link.getAttribute('href') === currentUrl) {
          link.parentElement.classList.add('active');
        }
      });

      var toggleButton = document.getElementById("toggleSidebar");
      var sidebar = document.querySelector(".sidebar");
      var mainPanel = document.getElementById("main-panel");

      toggleButton.addEventListener("click", function () {
        sidebar.classList.toggle("sidebar-hidden");
        mainPanel.classList.toggle("main-panel-expanded");
      });
    });
  </script>

  @yield('scripts')
</body>

</html>

