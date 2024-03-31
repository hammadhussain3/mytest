
<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="{{url('/admin/dashboard')}}" class="logo logo1 d-flex align-items-center">
        <img src="{{asset('Backend/img/test_logo.jpg')}}" alt="" class="img-fluid">
      
        <!--<span class="d-none d-lg-block">Rotalum</span>-->
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <!-- <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div> -->
    <!-- End Search Bar -->

    <nav class="header-nav ms-auto">
    <ul class="d-flex align-items-center">

<li class="nav-item d-block d-lg-none">
  <a class="nav-link nav-icon search-bar-toggle " href="#">
    <i class="bi bi-search"></i>
  </a>
</li><!-- End Search Icon-->

<li class="nav-item dropdown pe-3">
      <a class="dropdown-item d-flex align-items-center" href="{{route('logout')}}">
        <i class="bi bi-box-arrow-right"></i>
        <span>Sign Out</span>
      </a>
    </li>

  </ul><!-- End Profile Dropdown Items -->
</li><!-- End Profile Nav -->

</ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->