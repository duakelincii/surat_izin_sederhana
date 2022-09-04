
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Blank Page &mdash; Stisla</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{URL::asset('assets/modules/bootstrap/css/bootstrap.min.css')}}">
  <link rel="stylesheet" href="{{URL::asset('assets/modules/fontawesome/css/all.min.css')}}">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{URL::asset('assets/modules/prism/prism.css')}}">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{URL::asset('assets/css/style.css')}}">
  <link rel="stylesheet" href="{{URL::asset('assets/css/components.css')}}">
<!-- Start GA -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-94034622-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-94034622-3');
</script>
<!-- /END GA --></head>

<body>
  <div id="app">
    <div class="main-wrapper main-wrapper-1">
      <div class="navbar-bg"></div>
      <nav class="navbar navbar-expand-lg main-navbar">
        <form class="form-inline mr-auto">
          <ul class="navbar-nav mr-3">
            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
          </ul>
          <div class="search-element">
            <div class="search-backdrop"></div>
          </div>
        </form>
        <ul class="navbar-nav navbar-right">
        </ul>
      </nav>
      <div class="main-sidebar sidebar-style-2">
        <aside id="sidebar-wrapper">
          <div class="sidebar-brand">
            <a href="index.html">Stisla</a>
          </div>
          <div class="sidebar-brand sidebar-brand-sm">
            <a href="index.html">St</a>
          </div>
          <ul class="sidebar-menu">
            <li class="menu-header">Dashboard</li>
            <li class="dropdown">
              <a href="{{route('home')}}"><i class="fas fa-home"></i><span>Dashboard</span></a>
            </li>
            <li class="dropdown">
              <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i><span>Menu</span></a>
              <ul class="dropdown-menu">
                <li><a class="nav-link" href="{{route('course')}}">Course</a></li>
                <li><a class="nav-link" href="{{route('assignment')}}">Assignment</a></li>
                <li><a class="nav-link" href="{{route('report')}}">Report</a></li>
              </ul>
            </li>
          </ul>
          </div>
        </aside>
      </div>

<!-- Main Content -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="page" class="p-2"></div>
                </div>
            </div>
        </div>
    </div>

      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
            @yield('content')
        </section>
      </div>
      <footer class="main-footer">
        <div class="footer-left">
          Copyright &copy; 2022 <div class="bullet"></div> Design By
        </div>
        <div class="footer-right">

        </div>
      </footer>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="{{URL::asset('assets/modules/jquery.min.js')}}"></script>
  <script src="{{URL::asset('assets/modules/popper.js')}}"></script>
  <script src="{{URL::asset('assets/modules/tooltip.js')}}"></script>
  <script src="{{URL::asset('assets/modules/bootstrap/js/bootstrap.min.js')}}"></script>
  <script src="{{URL::asset('assets/modules/nicescroll/jquery.nicescroll.min.js')}}"></script>
  <script src="{{URL::asset('assets/modules/moment.min.js')}}"></script>
  <script src="{{URL::asset('assets/js/stisla.js')}}"></script>

  <!-- JS Libraies -->
  <script src="{{URL::asset('assets/modules/prism/prism.js')}}"></script>


  <!-- Page Specific JS File -->
  <script src="{{URL::asset('assets/js/page/bootstrap-modal.js')}}"></script>

  <!-- Template JS File -->
  <script src="{{URL::asset('assets/js/scripts.js')}}"></script>
  <script src="{{URL::asset('assets/js/custom.js')}}"></script>
  @yield('script')
</body>
</html>
