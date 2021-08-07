<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Zeed</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('template/assets/img/favicone.png') }}" rel="icon">
  <link href="{{ asset('template/assets/img/favicone.png') }}" rel="icon">

  

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('template/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('template/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('template/assets/css/style.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Bootslander - v4.3.0
  * Template URL: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center header-transparent">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1><a href="index.html"><span>ZEEDUNIVERSE</span></a></h1>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#details">Tentang Kami</a></li>
          <li><a class="nav-link scrollto" href="#portofolio">Portofolio</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
          <li>
            

            <a class="nav-link scrollto" href="{{ url('login') }}">Login</a>
            
            
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Header Main ======= -->
  <section id="hero">

    <div class="container">
      <div class="row justify-content-between">
        @foreach($header as $hd)
        <div class="col-lg-7 pt-5 pt-lg-0 order-2 order-lg-1 d-flex align-items-center">
          <div data-aos="zoom-out">
            <h1>Bangun Project Anda Dengan <span>ZeedUniverse</span></h1>
            <h2>{{$hd->keterangan}}</h2>
            <div class="text-center text-lg-start">
              <a href="#about" class="btn-get-started scrollto">Mulai</a>
            </div>
          </div>
        </div>
        <div class="col-lg-4 order-1 order-lg-2 hero-img" data-aos="zoom-out" data-aos-delay="300">
          <img src="{{ URL::to('/') }}/foto/{{ $hd->gambar }}" class="img-fluid animated" alt="">
        </div>
        @endforeach
      </div>
    </div>

    <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
      <defs>
        <path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z">
      </defs>
      <g class="wave1">
        <use xlink:href="#wave-path" x="50" y="3" fill="rgba(255,255,255, .1)">
      </g>
      <g class="wave2">
        <use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)">
      </g>
      <g class="wave3">
        <use xlink:href="#wave-path" x="50" y="9" fill="#fff">
      </g>
    </svg>

  </section><!-- End Header Main -->

  <main id="main">

    <!-- ======= Layanan  "Video" ======= -->
    <section id="about" class="about">
      <div class="container-fluid">
        <div class="row">
          @foreach($video as $vd)
          <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch" data-aos="fade-right">
            <iframe width="1200" height="500" src="{{ $vd->link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>

          <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5" data-aos="fade-left">
            <h3>Software House and IT Consultant no #2 di Indonesia</h3>
            <p>Zeed Universe adalah software house yang bergerak di bidang pengembangan perangkat lunak dan konsultan IT, yang berlokasi di Sidoarjo, Jawa Timur. 
            Kami memberikan solusi IT satu atap untuk membantu melakukan transformasi digital dan mengembangkan usaha anda.
            </p>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Excellent Services</a></h4>
              <p class="description">Zeed Universe menyediakan layanan terbaik untuk mengembangkan aplikasi berbasis web, mobile, dan layanan sistem integrasi.</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Professional</a></h4>
              <p class="description">kami bekerja dan berkolaborasi bersama tim praktisi profesional untuk menciptakan software yang optimal, nyaman, dan mudah digunakan.</p>
            </div>

            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <div class="icon"><i class="bx bx-atom"></i></div>
              <h4 class="title"><a href="">Up To Date</a></h4>
              <p class="description">Kami membangun sistem aplikasi dengan mengikuti kebutuhan bisnis customer, serta mengembangkan teknologi tepat guna sesuai dengan perkembangan tren terkini.</p>
            </div>

          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Layanan -->

    <!-- ======= Layanan2 ======= -->
    <section id="features" class="features">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2>Layanan</h2>
          <p>Apa yang bisa kami kerjakan</p>
        </div>

        <div class="row" data-aos="fade-right">
          <div class="col-lg-3 col-md-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="50">
              <i class="ri-store-line" style="color: #ffbb2c;"></i>
              <h3><a>PHP</a></h3>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="100">
              <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
              <h3><a>Java</a></h3>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="150">
              <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
              <h3><a>Laravel</a></h3>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="200">
              <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
              <h3><a>Android</a></h3>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="250">
              <i class="ri-database-2-line" style="color: #47aeff;"></i>
              <h3><a>MySQL</a></h3>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="300">
              <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
              <h3><a>Javascript</a></h3>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="350">
              <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
              <h3><a>HTML</a></h3>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="400">
              <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
              <h3><a>Flutter</a></h3>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="450">
              <i class="ri-anchor-line" style="color: #b2904f;"></i>
              <h3><a>Python</a></h3>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="500">
              <i class="ri-disc-line" style="color: #b20969;"></i>
              <h3><a>Codeigniter</a></h3>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="550">
              <i class="ri-base-station-line" style="color: #ff5828;"></i>
              <h3><a>Vuejs</a></h3>
            </div>
          </div>

          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box" data-aos="zoom-in" data-aos-delay="600">
              <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
              <h3><a>Nodejs</a></h3>
            </div>
          </div>
          
        </div>

      </div>
    </section><!-- End Layanan2 -->

    <!-- ======= Layanan3 ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row" data-aos="fade-up">
          @foreach($layanan as $ly)
          <div class="col-lg-3 col-md-6">
            <div class="count-box">
              <i class="bi bi-emoji-smile"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{ $ly->client }}" data-purecounter-duration="1" class="purecounter"></span>
              <p>Happy Clients</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-md-0">
            <div class="count-box">
              <i class="bi bi-journal-richtext"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{ $ly->project }}" data-purecounter-duration="1" class="purecounter"></span>
              <p>Projects</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-headset"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{ $ly->support }}" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hours Of Support</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-5 mt-lg-0">
            <div class="count-box">
              <i class="bi bi-people"></i>
              <span data-purecounter-start="0" data-purecounter-end="{{ $ly->worker }}" data-purecounter-duration="1" class="purecounter"></span>
              <p>Hard Workers</p>
            </div>
          </div>
          @endforeach
        </div>

      </div>
    </section><!-- End Layanan3 -->

    <!-- ======= Tentang Kami ======= -->
    <section id="details" class="details">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Tentang Kami</h2>
          <p>Apa Yang Sudah Kami Lakukan ?</p>
        </div>

        <div class="row content">
          <div class="col-md-4" data-aos="fade-right">
            <img src="template/assets/img/IT.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-4" data-aos="fade-up">
            <h3>Teknologi untuk Membangun Negeri,
              dari Zeed Universe untuk Indonesia</h3>
            <p>
              Kami adalah perusahaan startup digital yang bergerak di bidang jasa pembuatan aplikasi, software, website, mobile dan konsultan IT yang berpusat di Kota Sidoarjo. Kami memiliki tujuan untuk terus berkembang dan menjadi salah satu software house dan system integrator terbaik di Indonesia.
            </p>
            <p>
              Saat ini kami telah melayani hampir seluruh pelosok negeri. Kami terus berkembang hingga saat ini kami telah melayani lebih dari 5 negara di asia tenggara.
            </p>
            
            <ul>
              <li><i class="bi bi-check"></i> Kami telah menyelesaikan lebih dari 50+ proyek aplikasi pada berbagai perusahaan dan instansi terkait </li>
              <li><i class="bi bi-check"></i> Menciptakan produk perangkat lunak dengan kualitas terbaik. </li>
              <li><i class="bi bi-check"></i> Mengembangan produk yang optimal, hingga pembelajaran dan inovasi yang terus berkelanjutan.</li>
              <li><i class="bi bi-check"></i> Kami memusatkan tim programmer kami di seluruh pusat keunggulan secara fungsional. </li>
            </ul>

            <p class="fst-italic">
              Kami memiliki tujuan untuk terus berkembang dan menjadi salah satu software house dan system integrator terbaik di Indonesia.
            </p>
          </div>
        </div>

        <div class="row content">
          <div class="col-md-4 order-1 order-md-2" data-aos="fade-left">
            <img src="template/assets/img/work.jpg" class="img-fluid" alt="">
          </div>
          <div class="col-md-8 pt-5 order-2 order-md-1" data-aos="fade-up">
            <h3>Pendekatan yang kami lakukan terhadap aplikasi perangkat lunak</h3>
               {!! $about->keterangan !!} 
          </div>
        </div>

      </div>
    </section><!-- End Tentang Kami -->

    <!-- ======= portofolio ======= -->
    <section id="portofolio" class="team">
        <div class="container">
  
          <div class="section-title" data-aos="fade-up">
            <h2>Portofolio</h2>
            <p>Check Portofolio Kami</p>
          </div>
          
          <div class="row" data-aos="fade-left">
            @foreach($portofolio as $dt)
            <div class="col-lg-3 col-md-6">
              <div class="member" data-aos="zoom-in" data-aos-delay="100">
                <div class="pic"><img src="{{ URL::to('/') }}/foto/{{ $dt->foto }}" class="img-fluid" alt=""></div>
                <div class="member-info">
                <h4>{{$dt->nama}}</h4>
                  <span>{{$dt->jenis}}</span>
                </div>
              </div>
            </div>
          
            @endforeach
          </div>
          
          </div>
        </div>
    </section><!-- End Team Section -->

    <!-- ======= Kontak ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Kontak</h2>
          <p>Hubungi Kami Sekarang</p>
        </div>

        <div class="row">

          <div class="col-lg-4" data-aos="fade-right" data-aos-delay="100">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi:</h4>
                <p>Jalan Borobudur No 25, Kabupaten Sidoarjo, Indonesia | Kodepos 61273</p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>zeeduniverse@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Call:</h4>
                <p>+628890886627</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left" data-aos-delay="200">

            <form action="{{ url('contact_us') }}" method="post" role="form" class="php-email-form">
              {{csrf_field()}}
              <div class="row">

                <div class="col-md-6 form-group">
                  <input type="text" name="nama" class="form-control" id="name" placeholder="Nama" required="">
                </div>

                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="">
                </div>

              </div>

              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
              </div>

              <div class="form-group mt-3">
                <textarea class="form-control" name="keterangan" rows="5" placeholder="Pesan" required=""></textarea>
              </div>

              <div class="my-3">
                <div class="text-center"><button type="submit">Send Message</button></div>
              </div>
              
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Kontak -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="footer-info">
              <h3>ZeedUniverse</h3>
              <p class="pb-3"><em>We are team of talented designers making Responsive Websites, Mobile Aplication, and UI/UX</em></p>
              <p>
                Jalan Borobudur No 25 <br>
                Kabupaten Sidoarjo, Indonesia | Kodepos 61273<br><br>
                <strong>Phone:</strong> +628890886627<br>
                <strong>Email:</strong> zeeduniverse@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                @foreach($sosmed as $sd)
                <a href="{{ $sd->instagram }}" class="bx bxl-instagram"></a>
                <a href="{{ $sd->wa }}" class="bx bxl-whatsapp"></a>
                @endforeach
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Beranda</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang Kami</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Portofolio</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Kontak</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Services Kami</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">iOS</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">UI/UX</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Android</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Berita Tenatang Kami</h4>
            <p>Subscribe berita tentang kami dengan memasukkan email anda</p>
            <form action="{{ url('subs') }}" method="post" role="form" class="php-email-form">
              {{csrf_field()}}
              <input type="email" name="email" id="email"><input type="submit" value="Subscribe">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>ZeedUninerse</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/bootslander-free-bootstrap-landing-page-template/ -->
        Designed by <a href="https://bootstrapmade.com/">ZeedUninerse</a>
      </div>
    </div>
  </footer><!-- End Footer -->
  {{ asset('template/') }}
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('template/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('template/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('template/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('template/assets/vendor/php-email-form/validate.js') }}"></script>
  <script src="{{ asset('template/assets/vendor/purecounter/purecounter.js') }}"></script>
  <script src="{{ asset('template/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="template/assets/js/main.js"></script>

</body>

</html>

