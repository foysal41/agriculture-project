<header id="header" class="header d-flex align-items-center position-relative">
  <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

    <a href="index.html" class="logo d-flex align-items-center">
      <!-- Uncomment the line below if you also wish to use an image logo -->
      <img src="{{ asset('assets/img/logo.png')}}" alt="AgriCulture">
      <!-- <h1 class="sitename">AgriCulture Project</h1>  -->
    </a>

    <nav id="navmenu" class="navmenu">
      <ul>
        <li><a href="index.html" class="active">Home</a></li>
        <li><a href="about.html">About Us</a></li>
        <li><a href="services.html">Our Services</a></li>
        <li><a href="testimonials.html">Testimonials</a></li>
        <li><a href="blog.html">Blog</a></li>
        <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="#">Dropdown 1</a></li>
            <li class="dropdown"><a href="#"><span>Dropdown 2</span> <i class=" toggle-dropdown"></i></a>
            </li>
          </ul>
        </li>
        <li><a href="contact.html">Contact</a></li>
      </ul>
      <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
    </nav>

  </div>
</header>