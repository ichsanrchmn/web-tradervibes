<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center">
    <a href="/" class="logo me-auto"><img src="/img/tv-white.png" alt="" class="img-fluid" /></a>
      <nav id="navbar" class="navbar">
          <ul>
            <li><a class="nav-link {{ Request::is('/') ? 'active' : '' }}" href="/">Home</a></li>
            <li class="dropdown">
              <a class="nav-link {{ Request::is('edukasi', 'tools', 'ea', 'indikator', 'signal', 'livetrade', 'analisis') ? 'active' : '' }}"><span>Layanan Kami</span> <i class="ri-arrow-down-s-line"></i></a>
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="/edukasi">Edukasi</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/mt4-tools">MT4 Tools</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/expert-advisor">Expert Advisor</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/indikator">Indikator</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/signal">Signal Trading</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/livetrade">Live Trade</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/analisis-harian">Analisis Harian</a>
                </li>
              </ul>
            </li>
            <li><a class="nav-link {{ Request::is('vibesroom') ? 'active' : '' }}" href="/vibesroom">#VibesRoom</a></li>
            <li><a class="nav-link {{ Request::is('blog') ? 'active' : '' }}" href="/blog">Blog</a></li>
          </ul>

          <ul>
            @auth
            <li class="dropdown">
              <a class="nav-link"><span>Welcome Back, {{ auth()->user()->name }}</span><i class="ri-arrow-down-s-line"></i></a>
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="nav-link" href="/dashboard">Dashboard</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/account">My Account</a>
                </li>
                <li class="nav-item"><hr class="dropdown-divider"></hr></li>
                <li class="nav-item">
                  <form action="/logout" method="post">
                    @csrf
                    <a class="nav-link">
                      <button type="submit"><i class="bi bi-power"></i> Logout</button>
                    </a>
                  </form>
                </li>
              </ul>
            </li>
            @else
            <li class="nav-item">
              <a href="/login" class="nav-link signIn {{ ($active === "login") ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> &nbspMasuk</a>
            </li>
            <li class="nav-item">
              <a href="/register" class="nav-link signUp {{ ($active === "login") ? 'active' : '' }}">Daftar</a>
            </li>
            @endauth
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>