<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- PWA  -->
    <meta name="theme-color" content="#6777ef"/>
    <link rel="apple-touch-icon" href="{{ asset('logo.PNG') }}">
    <link rel="manifest" href="{{ asset('/manifest.json') }}">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet"/>

    <!-- ICON -->
    <link rel="stylesheet" href="/icomoon/style.css" /> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <link rel="stylesheet" href="/css/owl.carousel.min.css" />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    {{-- <link rel="stylesheet" href="/css/bootstrap.min.css" /> --}}

    <!-- Style -->
    <link rel="stylesheet" href="/css/style.css" />

    <link rel="icon" type="image/png" href="/img/unjanilite.png">
    <title>Berita Unjani - Universitas Jendral Achmad Yani | {{$title}}</title>
</head>
<body>
    
    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="fas fa-times js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>
  
      <header class="site-navbar js-sticky-header site-navbar-target" role="banner">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-6 col-xl-2">
              <h1 class="mb-3 site-logo">
                <a href="/" class="navbar-brand">
                  <img src="/img/unjani3.png" alt="Desktop Logo" class="desktop-logo">
                  <img src="/img/unjanilite.png" alt="Mobile Logo" class="mobile-logo">
                </a>
              </h1>            
            </div>            
  
            <div class="col-12 col-md-10 d-none d-xl-block">
              <nav class="site-navigation position-relative text-right" role="navigation">
                <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block" >
                  <li><a href="/" class="nav-link">Home</a></li>

                  <li class="has-children">
                    <a href="#tentang-section" class="nav-link">Tentang</a>
                    <ul class="dropdown">
                        <li class="has-children">
                            <a href="#">ORGANISASI</a>
                            <ul class="dropdown">
                                <li><a href="#">STRUK ORGANISASI SENAT AKADEMIK</a></li>
                                <li><a href="#">PIMPINAN DAN PEJABAT UNIVERSITAS</a></li>
                            </ul>
                        </li> <!-- Close the nested li tag -->
                        <li><!-- Open a new li tag -->
                            <a href="#AKREDITASI-section" class="nav-link">AKREDITASI</a>
                        </li>
                        <li>
                            <a href="#SENAT-section" class="nav-link">SENAT</a>
                        </li>
                        <li>
                            <a href="#VISI DAN MISI-section" class="nav-link">VISI DAN MISI</a>
                        </li>
                        <li>
                            <a href="#MAKNA LAMBANG-section" class="nav-link">MAKNA LAMBANG</a>
                        </li>
                        <li>
                            <a href="#SEJARAH-section" class="nav-link">SEJARAH</a>
                        </li>
                    </ul>
                </li>                

                <li class="has-children">
                  <a href="#akademik-section" class="nav-link">Akademik</a>
                  <ul class="dropdown">
                      <li class="has-children">
                          <a href="#">FAKULTAS</a>
                          <ul class="dropdown">
                              <li><a href="#">TEKNIK</a></li>
                              <li><a href="#">SAINS DAN INFORMATIKA</a></li>
                              <li><a href="#">FARMASI</a></li>
                              <li><a href="#">KEDOKTERAN</a></li>
                              <li><a href="#">EKONOMI DAN BISNIS</a></li>
                              <li><a href="#">PSIKOLOGI</a></li>
                              <li><a href="#">ILMU SOSIAL DAN ILMU POLITIK</a></li>
                              <li><a href="#">TEKNOLOGI MANUFAKTUR</a></li>
                              <li><a href="#">KEDOKTERAN GIGI</a></li>
                              <li><a href="#">ILMU DAN TEKNOLOGI KESEHATAN</a></li>
                          </ul>
                      </li> <!-- Close the nested li tag -->
                      <li class="has-children">
                        <a href="#">PROGRAM PROFESI</a>
                        <ul class="dropdown">
                            <li><a href="#">PROFESI APOTEKER</a></li>
                            <li><a href="#">PROFESI DOKTER</a></li>
                            <li><a href="#">PROFESI DOKTER GIGI</a></li>
                            <li><a href="#">PROFESI NERS</a></li>
                            <li><a href="#">PROFESI BIDAN</a></li>
                        </ul>
                    </li> <!-- Close the nested li tag -->
                    <li class="has-children">
                      <a href="#">PROGRAM PASCA SARJANA</a>
                      <ul class="dropdown">
                          <li><a href="#">MAGISTER TEKNIK SIPIL</a></li>
                          <li><a href="#">MAGISTER MANAJEMEN TEKNOLOGI</a></li>
                          <li><a href="#">MAGISTER MANAJEMEN</a></li>
                          <li><a href="#">MAGISTER KIMIA</a></li>
                          <li><a href="#">MAGISTER ILMU PERTAHANAN</a></li>
                          <li><a href="#">MAGISTER HUBUNGAN INTERNASIONAL</a></li>
                          <li><a href="#">MAGISTER KEPERAWATAN</a></li>
                          <li><a href="#">MAGISTER KESEHATAN MASYARAKAT</a></li>
                          <li><a href="#">MAGISTER FARMASI</a></li>
                          <li><a href="#">MAGISTER PENUAAN KULIT DAN ESTETIKA</a></li>
                      </ul>
                  </li> <!-- Close the nested li tag -->
                      <li><!-- Open a new li tag -->
                          <a href="#SITERPADU-section" class="nav-link">SISTEM INFORMASI AKADEMIK TERPADU</a>
                      </li>
                      <li>
                          <a href="#LPPM-section" class="nav-link">LEMBAGA PENELITIAN DAN PENGABDIAN MASYARAKAT (LPPM)</a>
                      </li>
                      <li>
                          <a href="#EJOURNAL-section" class="nav-link">UNJANI E-JOURNAL</a>
                      </li>
                      <li>
                          <a href="#PERPUSTAKAAN-section" class="nav-link">PERPUSTAKAAN</a>
                      </li>
                  </ul>
              </li>
              
  
              <li class="has-children">
                <a href="#maba-section" class="nav-link">Mahasiswa Baru</a>
                <ul class="dropdown">
                    <li><!-- Open a new li tag -->
                        <a href="#DAFTARMABA-section" class="nav-link">INFO PENDAFTARAN MAHASISWA BARU</a>
                    </li>
                    <li>
                        <a href="#DAFTARONLINE-section" class="nav-link">PENDAFTARAN ONLINE</a>
                    </li>
                </ul>
              </li>
  
              <li class="has-children">
                <a href="#media-section" class="nav-link">Media</a>
                <ul class="dropdown">
                    <li class="has-children">
                        <a class="nav-link {{ ($active === "posts" || $active === "categories" || $active === "about") ? 'active' : '' }}">BERITA UNJANI</a>
                        <ul class="dropdown">
                            <li><a href="/posts" class="nav-link {{ ($active === "posts") ? 'active' : '' }}">ALL POSTS</a></li>
                            <li><a href="/categories" class="nav-link {{ ($active === "categories") ? 'active' : '' }}">KATEGORI</a></li>
                            <li><a href="/about" class="nav-link {{ ($active === "about") ? 'active' : '' }}">ABOUT US</a></li>
                            @if(Auth::check())
                            <li class="has-children">
                                <a class="nav-link">HALO, {{ Auth::user()->name }}</a>
                                <ul class="dropdown">
                                    <li>
                                        {{-- Ganti form dengan langsung menggunakan tautan atau elemen lain --}}
                                        <a href="/logout" class="dropdown-item" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">LOGOUT</a>
                                        <form id="logout-form" action="/logout" method="post" style="display: none;">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li><a href="/login" class="nav-link {{ ($active === "login") ? 'active' : '' }}">LOGIN PENULIS</a></li>
                        @endif
                        </ul>
                    </li>
                    <li>
                        <a href="#DAFTARONLINE-section" class="nav-link">GALLERY UNJANI</a>
                    </li>
                    <li>
                        <a href="#DAFTARONLINE-section" class="nav-link">YOUTUBE</a>
                    </li>
                </ul>
              </li>
            
              <li class="has-children">
                <a href="#kemahasiswaan-section" class="nav-link">Kemahasiswaan</a>
                <ul class="dropdown">
                    <li><!-- Open a new li tag -->
                        <a href="#ATURAN-section" class="nav-link">PERATURAN AKADEMIK</a>
                    </li>
                    <li>
                        <a href="#ORGANISASI-section" class="nav-link">ORGANISASI MAHASISWA DAN UKM</a>
                    </li>
                    <li>
                      <a href="#BEASISWA-section" class="nav-link">INFO BEASISWA</a>
                  </li>
                  <li>
                    <a href="#PRESTASI-section" class="nav-link">PRESTASI MAHASISWA</a>
                </li>
                </ul>
              </li>
  
                  <li><a href="#kerjasama-section" class="nav-link">Kerjasama</a></li>
  
                  <li class="social">
                    <a href="#contact-section" class="nav-link"
                      ><span class="fab fa-facebook"></span
                    ></a>
                  </li>
                  <li class="social">
                    <a href="#contact-section" class="nav-link"
                      ><span class="fab fa-instagram"></span
                    ></a>
                  </li>
                  <li class="social">
                    <a href="#contact-section" class="nav-link"
                      ><span class="fab fa-youtube"></span
                    ></a>
                  </li>
                </ul>
              </nav>
            </div>
  
            <div
              class="col-6 d-inline-block d-xl-none ml-md-0 py-3"
              style="position: relative; top: 3px"
            >
              <a href="#" class="site-menu-toggle js-menu-toggle float-right"
                ><span class="fas fa-bars fa-lg"></span>
              </a>
            </div>
          </div>
        </div>
      </header>

      <div class="container-fluid" style="padding: 0;">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="/img/unjanismart.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="/img/unjanismart.png" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
              <img src="/img/unjanismart.png" class="d-block w-100" alt="...">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only"></span>
          </a>
        </div>
      </div>

    <div class="container mt-5 mb-2">
        @yield('container')
    </div>

    <!-- SCROLL TOP -->
    <button onclick="topFunction()" id="scrollToTopBtn" title="Go to top">
      <span class="fas fa-arrow-up"></span>
    </button>
  
    <footer>
      <div class="container">
          <div class="row">
              <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                  <h5 class="text-uppercase">KAMPUS CIMAHI UNJANI</h5>
                  <p>Jl. Terusan Jend. Sudirman, Cibeber, Kec. Cimahi Sel., Kota Cimahi, Jawa Barat</p>
              </div>
              <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">KAMPUS BANDUNG UNJANI</h5>
                <p>Jl. Terusan Jenderal Gatot Subroto PO Box 807 Bandung, Jawa Barat</p>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
              <h5 class="text-uppercase">HUBUNGI KAMI</h5>
              <ul class="list-unstyled">
                  <li><span class="fab fa-whatsapp"></span> 022-6656190 (Call)</li>
                  <li><span class="fab fa-facebook"></span> PMB 0811 249 7890 (WA only)</li>
                  <li><span class="fab fa-facebook"></span> PMB 0811 429 7899 (WA only)</li>
                  <li><span class="fab fa-envelope"></span> humas@unjani.ac.id</li>
              </ul>
          </div>          
              <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
                <h5 class="text-uppercase">MORE</h5>
                <ul class="list-inline" style="padding-left: 0;">
                    <li class="list-inline-item" style="font-size: large"><a href="#"><span class="fab fa-facebook"></span></a></li>
                    <li class="list-inline-item" style="font-size: large"><a href="#"><span class="fab fa-instagram"></span></a></li>
                    <li class="list-inline-item" style="font-size: large"><a href="#"><span class="fab fa-twitter"></span></a></li>
                </ul>
            </div>
          </div>
      </div>
      <div class="copyright d-flex flex-column align-items-center justify-content-center py-2">
        <p class="text-muted my-auto" style="font-size: x-small">PUSSISFO © Copyright 2020 - UNJANI - All Rights Reserved</p>
    </div>
  </footer>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    {{-- <script src="/js/jquery-3.3.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script> --}}
    <script src="/js/jquery.sticky.js"></script>
    <script src="/js/main.js"></script>

    <script src="{{ asset('/sw.js') }}"></script>
    
    <script>
      if ("serviceWorker" in navigator) {
          // Register a service worker hosted at the root of the
          // site using the default scope.
          navigator.serviceWorker.register("/sw.js").then(
          (registration) => {
            console.log("Service worker registration succeeded:", registration);
          },
          (error) => {
            console.error(`Service worker registration failed: ${error}`);
          },
        );
      } else {
        console.error("Service workers are not supported.");
      }
    </script>
</body>
</html>