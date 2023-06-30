<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- preload -->
    <link rel="preload" as="image" href="{{ url('asset/logo.webp') }}" />

    <meta charset="utf-8" />
    <title>Museum Pos Indonesia</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

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
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
  </head>
  <body>
    <!-- Navbar Start -->
    <div class="container-fluid fixed-top bg-light shadow-sm px-5 pe-lg-0">
      <nav class="navbar navbar-expand-lg bg-light navbar-dark navbar-light py-3 py-lg-0">
        <a href="/" class="navbar-brand">
          <h1 class="m-2 display-6" style="font-weight: 300">
            <img src="{{ url('asset/logo.webp') }}" alt="image" />
          </h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ms-auto py-0">
            <a href="/" class="nav-item nav-link">Beranda</a>
            <a href="/profil" class="nav-item nav-link active">Profil</a>
            <a href="/sejarah" class="nav-item nav-link">Sejarah</a>
            <a href="/ruangan" class="nav-item nav-link">Ruangan</a>
            <a href="/contact" class="nav-item nav-link">Kontak</a>
            <a href="/reservasi" class="nav-item nav-link bg-primary text-white px-5 ms-3 d-none d-lg-block">Reservasi <i class="bi bi-arrow-right"></i></a>
          </div>
        </div>
      </nav>
    </div>
    <!-- Navbar End -->

    <!-- Page Header Start -->
    <div class="container-fluid page-header">
      <h1 class="display-3 text-uppercase text-white mb-3">Profil</h1>
      <div class="d-inline-flex text-white">
        <h6 class="text-uppercase m-0"><a href="/">Beranda</a></h6>
        <h6 class="text-white m-0 px-3">/</h6>
        <h6 class="text-uppercase text-white m-0">Profil</h6>
      </div>
    </div>
    <!-- Page Header Start -->

    <!-- About Start -->
    <div class="container-fluid py-6 px-5">
      <div class="row g-5">
        <div class="col-lg-5 pb-5" style="min-height: 400px">
          <div class="position-relative bg-dark-radial h-50 ms-5">
            <img class="position-absolute w-100 h-100 mt-5 ms-n5" src="img/gedung2.webp" style="object-fit: cover" />
          </div>
        </div>
        <div class="col-lg-7">
          <h1 class="display-5 text-uppercase mb-4">Profil <span class="text-primary">Museum Pos Indonesia</span></h1>
          <p class="text-reg">
            Museum Pos Indonesia telah hadir sejak masa Hindia Belanda dengan nama Museum PTT (Pos Telegram dan Telepon) ,tepatnya pada tahun 1931 terletak dibagian sayap kanan bawah Gedung Kantor Pusat PTT Jalan Cilaki No.73 Bandung 40115.
          </p>
          <p class="mb-4 text-reg">
            Museum ini dibuka untuk umum dan koleksinya terdiri dari prangko-prangko baik dalam maupun luar negeri namun terjadinya peristiwa Perang Dunia ke II menyebabkan Museum ini kurang terurus sebagaimana mestinya, bahkan nyaris terlupakan.
            Timbulah gagasan untuk mendirikan Museum Pos dan Giro yang koleksinya tidak hanya terdiri dari prangko-prangko tetapi juga benda-benda lainnya berupa foto-foto, peralatan pos dan lain sebagainya yang bernilai sejarah. Untuk mewujudkan
            gagasan yang sudah lama ada ini maka pada tanggal 18 Desember 1980 oleh Direksi Perum Pos dan Giro telah dibentuk sebuah panitia dengan nama Panitia Persiapan Pendirian Museum Pos dan Giro dengan tugas utama melakukan inventarisasi dan
            mengumpulkan benda-benda bersejarah yang layak dijadikan isi Museum
          </p>
          <p class="mb-4 text-reg">
            Setelah bekerja beberapa bulan lamanya, Panitia telah berhasil mengumpulkan beberapa benda yang kemudian telah pula diusahakan untuk dipamerkan kepada umum dalam bentuk suatu Pameran Pos dan Giro yang diselenggarakan pada tanggal 27
            September 1982 bersamaan pula dengan peresmian penerapan Sistem Kode Pos Indonesia untuk keperluan intern Perum Pos dan Giro oleh Direktur Utama Perum Pos dan Giro bertempat di ruangan lantai bawah gedung Kantor Pusat Perum Pos dan Giro.
            Dan setahun kemudian pada tanggal 27 September 1983 bertepatan dengan Hari Bakti Postel ke 38 ruangan lantai bawah tersebut oleh Menteri Pariwisata, Pos dan Telekomunikasi, Achmad Tahir telah diresmikan sebagai museum dengan nama MUSEUM
            POS DAN GIRO.
          </p>
          <p class="mb-4 text-reg">
            Sejalan dengan perkembangan perusahaan pos dimana terhitung tanggal 20 juni 1995 nama dan status perusahaan berubah dari Perusahaan Umum Pos dan Giro menjadi PT. Pos Indonesia (persero). maka terjadi pula perubahan nama museum ini dari
            Museum Pos dan Giro menjadi Museum Pos Indonesia sampai sekarang.
          </p>
        </div>
      </div>
    </div>
    <!-- About End -->

    <!-- Footer Start -->
    <div class="container-fluid position-relative bg-dark bg-light-radial text-white-50 py-3 pt-5 px-5">
      <div class="row g-5">
        <div class="col-lg-6 pe-lg-5">
          <div class="d-flex justify-content-center">
            <a href="/" class="navbar-brand"><img src="img/footer-logo.webp" class="mb-4" style="width: 400px" alt="" /></a>
          </div>
          <p class="text-justify p-big">
            Sejalan dengan perkembangan perusahaan pos dimana terhitung tanggal 20 juni 1995 nama dan status perusahaan berubah dari Perusahaan Umum Pos dan Giro menjadi PT. Pos Indonesia (persero). maka terjadi pula perubahan nama museum ini dari
            Museum Pos dan Giro menjadi MUSEUM POS INDONESIA sampai sekarang.
          </p>
          <p class="p-big"><i class="fa fa-map-marker-alt me-2"></i>Jalan Cilaki No.73 Bandung 40115.</p>
          <p class="p-big"><i class="fa fa-phone-alt me-2"></i>0892383488</p>
          <p class="p-big"><i class="fa fa-envelope me-2"></i>Museum pos indonesia.co.id</p>
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
                <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="https://twitter.com/i/flow/login"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="https://www.facebook.com/login/"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-lg btn-primary btn-lg-square rounded-0 me-2" href="https://www.linkedin.com/login/in"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-lg btn-primary btn-lg-square rounded-0" href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a>
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

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
  </body>
</html>
