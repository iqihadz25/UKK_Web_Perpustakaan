<nav class="navbar navbar-expand-lg navbar-dark bg-dark ">
    <div class="container">
        <a class="navbar-brand" href="#page-top"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars ms-1"></i>
      </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
              <li class="nav-item">
                <a class="nav-link {{ (   'Home') ? 'active' : '' }} " aria-current="page" href="/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ (   'About') ? 'active' : '' }}" aria-current="page" href="/about">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ( 'Gallery') ? 'active' : '' }}" aria-current="page" href="/gallery">Gallery</a>
               
              </li>
              <li class="nav-item">
                <a class="nav-link {{ ( 'Gallery') ? 'active' : '' }}" aria-current="page" href="#">Contact Us</a>
               
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link" href="{{route ('login')}}">Login</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{route ('register')}}">Register</a>
              </li>
            </ul>
        </div>
    </div>
  </nav>