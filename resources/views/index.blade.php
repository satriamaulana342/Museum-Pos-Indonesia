<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- preload -->
    <link rel="preload" as="image" href="{{ url('asset/logo.webp') }}" />

    <meta charset="utf-8" />
    <title>Selamat datang di Museum Pos Indonesia</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Free HTML Templates" name="keywords" />
    <meta content="Free HTML Templates" name="description" />
    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet" />
    <!-- Font Custom -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet" />
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" />
    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet" />
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
<!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet" />

  </head>

  <body>
    <!-- Navbar Start -->
    <div class="container-fluid fixed-top bg-light shadow-sm px-5 pe-lg-0">
      <nav class="navbar navbar-expand-lg bg-light navbar-dark navbar-light py-3 py-lg-0">
        <a href="/index" class="navbar-brand">
          <h1 class="m-2 display-6" style="font-weight: 300">
            <img src="{{ url('asset/logo.webp') }}" alt="logo pos indonesia" />
          </h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ms-auto py-0">
            <a href="/" class="nav-item nav-link active">Beranda</a>
            <a href="/profil" class="nav-item nav-link">Profil</a>
            <a href="/sejarah" class="nav-item nav-link">Sejarah</a>
            <a href="/ruangan" class="nav-item nav-link">Ruangan</a>
            <a href="/contact" class="nav-item nav-link">Kontak</a>
            <a href="/reservasi" class="nav-item nav-link bg-primary text-white px-5 ms-3 d-none d-lg-block">Reservasi<i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </nav>
    </div>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0">
      <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="w-100 object-fit" height="510" src="{{ url('asset/gate.webp') }}" alt="Image" />
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
              <div class="p-3" style="max-width: 900px">
                <h1 class="display-2 text-uppercase text-white mb-md-4">Museum Pos Indonesia</h1>
                <a href="#dashboard" class="btn btn-primary py-md-3 px-md-5 mt-2">Pelajari Selengkapnya</a>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="w-100 object-fit" height="510" src="{{ url('asset/gedung1.webp') }}" alt="Image" />
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
              <div class="p-3" style="max-width: 900px">
                <h1 class="display-2 text-uppercase text-white mb-md-4">Museum pos indonesia</h1>
                <a href="#dashboard" class="btn btn-primary py-md-3 px-md-5 mt-2">Pelajari Selengkapnya</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-fluid py-6 px-5">
      <div class="row g-5">
        <div class="col-lg-7 my-auto">
          <h1 class="display-3 text-uppercase mb-4">
            Selamat datang di Website
            <span class="text-primary">Museum Pos Indonesia</span>
          </h1>
          <h4 class="mb-3 text-body">Museum Pos Indonesia sebagai salah satu tujuan wisata yang menarik dan mampu memberikan kontribusi positif bagi peningkatan citra Perusahaan.</h4>
          <p class="text-body p-big">Misi kami adalah untuk :</p>
          <div class="row gx-5 py-2">
            <div class="col-sm-6 mb-2">
              <p class="text-body mb-2 p-big">
                <i class="fa fa-circle text-primary me-3"></i><span class="text-primary">Mewujudkan</span> Museum Pos Indonesia yang mampu berperan sebagai pusat informasi edukasi, rekreasi, dan mampu mendukung pengembangan sosio-kultur Perusahaan.
              </p>
              <p class="mb-2 text-body p-big">
                <i class="fa fa-circle text-primary me-3"></i>
                <span class="text-primary">Menciptakan</span>
                kerjasama yang harmonis dengan senantiasa mengikuti dinamika perkembangan masyarakat guna memberikan nilai-nilai yang positif bagi masyarakat luas.
              </p>
            </div>
            <div class="col-sm-6 mb-2">
              <p class="mb-2 text-body p-big"><i class="fa fa-circle text-primary me-3"></i><span class="text-primary">Mengelola</span> Museum secara profesional, didukung sistem tata kelola yang baik dan teknologi informasi yang memadai.</p>
            </div>
          </div>
          <p class="mb-4 text-body p-big">
            Museum Pos Indonesia telah hadir sejak masa Hindia Belanda dengan nama Museum PTT (Pos Telegrap dan Telepon) ,tepatnya pada tahun 1931 terletak dibagian sayap kanan bawah Gedung Kantor Pusat PTT Jalan Cilaki No.73 Bandung 40115.
          </p>
        </div>
        <div class="col-lg-5 pb-5 mb-5" style="min-height: 400px">
          <img class="w-100 mt-5 object-fit" height="650" src="{{ url('asset/museum-gate.webp') }}" alt="Foto Museum pintu depan" />
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- dashboard Start -->
    <div id="dashboard" class="container-fluid bg-light py-6 px-5">
      <div class="row g-5">
        <h1 class="display-5 text-uppercase mb-4 text-center">Highlight Kunjungan Museum</h1>
        <!-- 1 -->
        @foreach($data->take(4) as $item)
        <div class="col-lg-3 col-md-6">
          <div class="service-item h-card bg-white d-flex flex-column align-items-center text-center">
            <img class="w-100 object-fit" src="{{asset('/storage/photos/1/Thumbnails/'. $item->thumbnail)}}" alt="foto kerajaan" loading="lazy" height="150" alt="" />
           
            <div class="p-4 pb-4">
              <h4 class="text-uppercase mb-3">{{$item->heading}}</h4>
              {!! "<p>" . substr(strip_tags($item->content), 0, 100). "</p>" !!}
              <a class="btn text-primary" href="artikel/{{$item->slug}}">Baca Lebih Lanjut<i class="bi bi-arrow-right"></i></a>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
    <!-- dashboard End -->

    <!-- Reservasi Start -->
    <div class="container-fluid py-6 px-5">
      <div class="row gx-5">
        <div class="col-lg-4 mb-5 mb-lg-0">
          <div class="mb-4">
            <h1 class="display-5 text-uppercase mb-4">Reservasi <span class="text-primary">Kunjungan</span></h1>
          </div>
          <p class="mb-5">Sekarang anda dapat reservasi kunjungan / rombongan langsung melalui web, cukup pilih jenis rombongan yang ada</p>
          <a class="btn btn-primary py-3 px-5" href="/reservasi">Reservasi</a>
        </div>
      </div>
    </div>
    <!-- Reservasi End -->

    <!-- Footer Start -->
    <div class="container-fluid position-relative bg-dark bg-light-radial text-white-50 py-3 pt-5 px-5">
      <div class="row g-5">
        <div class="col-lg-6 pe-lg-5">
          <a href="/" class="navbar-brand"><img src="{{ url('asset/footer-logo.webp') }}" class="mb-4 footer-logo mx-auto" alt="logo footer" /></a>
          <p class="text-justify p-big">
            Sejalan dengan perkembangan perusahaan pos dimana terhitung tanggal 20 juni 1995 nama dan status perusahaan berubah dari Perusahaan Umum Pos dan Giro menjadi PT. Pos Indonesia (persero). maka terjadi pula perubahan nama museum ini dari
            Museum Pos dan Giro menjadi MUSEUM POS INDONESIA sampai sekarang.
          </p>
          <p class="p-big"><i class="fa fa-map-marker-alt me-2"></i>Jalan Cilaki No.73 Bandung 40115.</p>
          <p class="p-big"><i class="fa fa-phone-alt me-2"></i>0892383488</p>
          <p class="p-big"><i class="fa fa-envelope me-2"></i>museumposindonesia@gmail.com</p>
        </div>
        <div class="col-lg-6 ps-lg-5 my-auto">
          <div class="row g-5">
            <div class="col-sm-6">
              <h3 class="text-white text-uppercase mb-4">Quick Links</h3>
              <div class="d-flex flex-column justify-content-start p-big">
                <a class="text-white-50 mb-2" href="/profil"><i class="fa fa-angle-right me-2"></i>Profil</a>
                <a class="text-white-50 mb-2" href="/sejarah"><i class="fa fa-angle-right me-2"></i>Sejarah</a>
                <a class="text-white-50 mb-2" href="/ruangan"><i class="fa fa-angle-right me-2"></i>Ruangan</a>
                <a class="text-white-50" href="/contact"><i class="fa fa-angle-right me-2"></i>Kontak</a>
              </div>
              <div class="d-flex justify-content-start mt-4">
                <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="https://twitter.com/posindonesia"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="https://www.facebook.com/posindonesia/"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="https://www.linkedin.com/company/pt-pos-indonesia-persero/"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-lg btn-primary btn-lg-square rounded-0" href="https://www.instagram.com/posindonesia.ig//posindonesia.ig/"><i class="fab fa-instagram"></i></a>
              </div>
            </div>
          </div>
        </div>
        <div class="container-fluid bg-dark bg-light-radial text-white px-0">
          <div class="d-flex flex-column flex-md-row justify-content-between bg-primary">
            <div class="py-4 px-5 text-center text-md-start">
              <p class="mb-0">
                &copy;
                <a class="text-primary text-white" href="https://www.posindonesia.co.id/id/content/museum-pos-indonesia">Pos indonesia.co.id</a>
                All Rights Reserved.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <section>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
      <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
      <script src="lib/easing/easing.min.js"></script>
      <script src="lib/waypoints/waypoints.min.js"></script>
      <script src="lib/owlcarousel/owl.carousel.min.js"></script>
      <script src="lib/tempusdominus/js/moment.min.js"></script>
      <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
      <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
      <script src="lib/isotope/isotope.pkgd.min.js"></script>
      <script src="lib/lightbox/js/lightbox.min.js"></script>
      <!-- Template Javascript -->
      <script src="js/main.js"></script>
    </section>
  </body>
</html>
