<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Hai Roti'O Lovers</title>
    <meta
      name="description"
      content="Roti'O is a premium Bootstrap 5 theme for SaaS startups, digital agencies, IT companies and consulting firms. Build a high-converting marketing website fast."
    />
    <meta
      name="keywords"
      content="SaaS theme, agency template, bootstrap 5 business theme, IT company website"
    />
    <meta
      property="og:title"
      content="Nexora — Premium SaaS & Agency Bootstrap Theme"
    />
    <meta
      property="og:description"
      content="A fully responsive, multi-page business and marketing theme built with Bootstrap 5."
    />
    <meta property="og:type" content="website" />
    <link
      rel="icon"
      type="image/svg+xml"
      href="<?= base_url('assets/website/css/custom.css') ?>"
    />

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Sora:wght@400;600;700;800&display=swap"
      rel="stylesheet"
    />

    <!-- Bootstrap 5.3 -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <!-- Bootstrap Icons -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <!-- Custom CSS -->
    <link href="<?= base_url('assets/website/css/custom.css') ?>" rel="stylesheet" />
  </head>
  <body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-nexora fixed-top">
      <div class="container">
        <img
          src="<?= base_url('assets/img/rotio1.png') ?>"
          alt="Logo Roti'O"
          class="logo-roti-o"
        />
        <span class="navbar-brand navbar-brand-custom">Roti'O</span>
        <!-- <a class="navbar-brand navbar-brand-custom" href="index.html">Roti'O</a> -->
        <button
          class="navbar-toggler navbar-toggler-custom"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#mainNav"
          aria-controls="mainNav"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <span class="bar"></span><span class="bar"></span
          ><span class="bar"></span>
        </button>
        <div class="collapse navbar-collapse" id="mainNav">
          <ul
            class="navbar-nav ms-auto align-items-lg-center gap-1 mt-3 mt-lg-0"
          >
            <li class="nav-item">
              <a class="nav-link nav2 active" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav2" href="about.html">Tentang</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav2" href="menu.html">Menu</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav2" href="news.html">Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav2" href="store.html">Toko</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav2" href="career.html">Karir</a>
            </li>
            <li class="nav-item">
              <a class="nav-link nav2" href="contact.html">Kontak</a>
            </li>
            <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
              <a href="contact.html" class="btn btn-primary btn-sm-custom w-100"
                >Get Started</a
              >
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- HERO -->
    <header class="hero">
      <div
        id="carouselExampleControls"
        class="carousel slide hero-carousel"
        data-bs-ride="carousel"
      >
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img
              src="<?= base_url('assets/img/rotio.jpg') ?>"
              class="d-block w-100"
              alt="Roti'O Coffee"
            />
          </div>
          <div class="carousel-item">
            <img
              src="<?= base_url('assets/img/pastry.jpg') ?>"
              class="d-block w-100"
              alt="Pastry"
            />
          </div>
          <div class="carousel-item">
            <img
              src="<?= base_url('assets/img/minuman.jpg') ?>"
              class="d-block w-100"
              alt="Minuman"
            />
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#carouselExampleControls"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#carouselExampleControls"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </header>

    <!-- PROMO BERLANGSUNG -->
    <section class="section">
      <div class="container">
        <div class="row align-items-center g-5">
          <!-- Kolom gambar -->
          <div class="col-md-7 reveal">
            <div
              id="promoCarousel"
              class="carousel slide promo-carousel"
              data-bs-ride="carousel"
            >
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img
                    src="<?= base_url('assets/img/promo1.png') ?>"
                    class="rounded-img w-100"
                    alt="Promo Belanja 1"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="<?= base_url('assets/img/promo2.png') ?>"
                    class="rounded-img w-100"
                    alt="Promo Belanja 2"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="<?= base_url('assets/img/promo3.png') ?>"
                    class="rounded-img w-100"
                    alt="Promo Belanja 3"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="<?= base_url('assets/img/promo4.png') ?>"
                    class="rounded-img w-100"
                    alt="Promo Belanja 4"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="<?= base_url('assets/img/promo5.png') ?>"
                    class="rounded-img w-100"
                    alt="Promo Belanja 5"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="<?= base_url('assets/img/promo6.png') ?>"
                    class="rounded-img w-100"
                    alt="Promo Belanja 6"
                  />
                </div>
              </div>
            </div>
          </div>

          <!-- Kolom deskripsi -->
          <div class="col-md-5 reveal">
            <h3 class="section-title">Promo yang Sedang Berlangsung</h3>
            <p class="section-subtitle mb-4">
              Berbagai penawaran spesial hadir untuk membuat pengalaman belanja
              Anda semakin menyenangkan
            </p>
            <ul class="list-check mb-4">
              <li>
                <i class="bi bi-check"></i>
                <div>
                  <strong class="text-navy">Halal</strong> — Bersertifikat Halal
                  Indonesia.
                </div>
              </li>
              <li>
                <i class="bi bi-check"></i>
                <div>
                  <strong class="text-navy">Price</strong> — Harga mengikuti
                  masing-masing otlet.
                </div>
              </li>
              <li>
                <i class="bi bi-check"></i>
                <div>
                  <strong class="text-navy">Applicable</strong> — Berlaku di
                  semua otlet kecuali Bandara & Rest Area.
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- STATS STRIP -->
    <section class="stats-strip py-5 bg-white">
      <div class="container">
        <div class="row text-center g-4">
          <div class="col-6 col-md-3 stat-item reveal">
            <div class="stat-number">480+</div>
            <div class="stat-label">Projects delivered</div>
          </div>
          <div class="col-6 col-md-3 stat-item reveal">
            <div class="stat-number">12 yrs</div>
            <div class="stat-label">Industry experience</div>
          </div>
          <div class="col-6 col-md-3 stat-item reveal">
            <div class="stat-number">96%</div>
            <div class="stat-label">Client retention</div>
          </div>
          <div class="col-6 col-md-3 stat-item reveal">
            <div class="stat-number">34</div>
            <div class="stat-label">Countries served</div>
          </div>
        </div>
      </div>
    </section>

    <!-- MENU OVERVIEW  -->
    <section class="section bg-soft">
      <div class="container">
        <div class="row section-header align-items-end">
          <div class="col-lg-7 reveal">
            <h2 class="section-title">Temukan Favoritmu di Sini</h2>
            <p class="section-subtitle">
              Jelajahi kelezatan roti hangat dan kesegaran minuman favorit yang siap menyempurnakan setiap momen berhargamu
            </p>
          </div>
          <div class="col-lg-5 text-lg-end mt-3 mt-lg-0 reveal">
            <a href="services.html" class="card-link-arrow"
              >View all services <i class="bi bi-arrow-right"></i
            ></a>
          </div>
        </div>
        <div class="row g-4">
          <div class="col-md-6 col-lg-4 reveal" data-category="design">
            <a href="portfolio-single.html" class="portfolio-card d-block">
              <img src="<?= base_url('assets/img/rotio.jpg') ?>" alt="rotio" />
              <div class="portfolio-overlay">
                <h5>Roti'O</h5>
                <span>Roti’O menyediakan Roti dengan topping cream coffee dan
                  butter di dalamnya</span>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 reveal" data-category="design">
            <a href="portfolio-single.html" class="portfolio-card d-block">
              <img
                src="<?= base_url('assets/img/pastry.jpg') ?>"
                alt="pastry"
              />
              <div class="portfolio-overlay">
                <h5>Pastry</h5>
                <span>Nikmati varian menu Pastry-nya Roti'O yang manis dan gurih</span>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 reveal" data-category="design">
            <a href="portfolio-single.html" class="portfolio-card d-block">
              <img
                src="assets/img/minuman.jpg"
                alt="minuman"
              />
              <div class="portfolio-overlay">
                <h5>Coffee</h5>
                <span>Nikmati varian menu Minuman-nya Roti'O yang lezat dan menyegarkan</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- KEGIATAN KAMI-->
    <section class="section">
      <div class="container">
        <div class="row section-header justify-content-center text-center">
          <div class="col-lg-7 reveal">
            <h2 class="section-title">Wujud Nyata Kepedulian untuk Sesama</h2>
            <span>Kami percaya bahwa setiap langkah kecil penuh kepedulian mampu memberikan dampak besar. 
              Kegiatan ini diselenggarakan sebagai wadah untuk menyebarkan kebaikan dan memperat tali persaudaraan</span>
          </div>
          
        </div>
        <div class="row g-4">
          <div class="col-md-6 col-lg-4 reveal">
            <a href="portfolio-single.html" class="portfolio-card portfolio-portrait d-block">
              <img
                src="assets/img/sekolah.png"
                alt="Kegiatan Roti'O Berbagi dengan Anak Bangsa"
              />
              <div class="portfolio-overlay">
                <h6>Roti'O Berbagi dengan Anak Bangsa</h6>
                <span>Spesial dalam rangka Hari Anak, 
                  Roti’O hadir menyebar kebahagiaan dengan membagikan roti gratis untuk anak-anak sekolah!</span>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 reveal">
            <a href="portfolio-single.html" class="portfolio-card portfolio-portrait d-block">
              <img
                src="assets/img/hospital.png"
                alt="Apresiasi Roti'O untuk Garda Terdepan Kesehatan"
              />
              <div class="portfolio-overlay">
                <h6>Apresiasi Roti'O untuk Garda Terdepan Kesehatan</h6>
                <span>Dalam rangka memperingati Hari Dokter Nasional, 
                  Roti’O menyelenggarakan aksi kepedulian sosial berupa pembagian roti gratis kepada para dokter dan tenaga kesehatan di RS PMI Bogor</span>
              </div>
            </a>
          </div>
          <div class="col-md-6 col-lg-4 reveal">
            <a href="portfolio-single.html" class="portfolio-card portfolio-portrait d-block">
              <img
                src="assets/img/dude.png"
                alt="Pengalaman Belanja Eksklusif Bersama Dude Harlino di Roti'O"
              />
              <div class="portfolio-overlay">
                <h6>Pengalaman Belanja Eksklusif Bersama Dude Harlino di Roti'O</h6>
                <span>Komitmen Roti'O dalam memberikan pelayanan terbaik diwujudkan melalui program eksklusif kehadiran figur publik Dude Harlino
                   yang menyapa dan melayani pelanggan secara langsung di outlet pilihan</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- INSTAGRAM -->
    <section class="section bg-soft">
      <div class="container">
        <div class="row section-header justify-content-center text-center">
          <div class="col-lg-7 reveal">
            <a href="https://www.instagram.com/rotio.indonesia/" target="_blank">
              <span class="eyebrow">Instagram</span>
            </a>
            <h2 class="section-title">Dapatkan informasi terkini dan ikuti perjalanan kehangatan kami di <span style="color: #e67e22;">@rotio.indonesia</span></h2>
          </div>
        </div> 
        <div class="row g-3 instagram-grid">
          <div class="col-md-6 col-lg-4 reveal">
            <div class="card">
              Click me
            </div>
          </div>
          <div class="col-md-6 col-lg-4 reveal">
            <div class="card">
              Click me
            </div>
          </div>
          <div class="col-md-6 col-lg-4 reveal">
            <div class="card">
              Click me
            </div>
          </div>
          <div class="col-md-6 col-lg-4 reveal">
            <div class="card">
              Click me
            </div>
          </div>
          <div class="col-md-6 col-lg-4 reveal">
            <div class="card">
              Click me
            </div>
        </div>
        <div class="col-md-6 col-lg-4 reveal">
            <div class="card">
              Click me
            </div>
        </div>
        <div class="col-md-6 col-lg-4 reveal">
            <div class="card">
              Click me
            </div>
        </div>
        <div class="col-md-6 col-lg-4 reveal">
            <div class="card">
              Click me
            </div>
        </div>
      </div>
    </section>

    <!-- CTA -->
    <section class="section">
      <div class="container">
        <div class="cta-section reveal">
          <div class="row align-items-center">
            <div class="col-lg-8">
              <h2 class="mb-2">Ready to build something great?</h2>
              <p class="mb-0 fs-5">
                Book a free 30-minute strategy call — no pressure, no sales
                script.
              </p>
            </div>
            <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
              <a href="contact.html" class="btn btn-primary btn-lg-custom"
                >Book a Call <i class="bi bi-arrow-right ms-1"></i
              ></a>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- FOOTER -->
    <footer class="footer-nexora">
    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-4 col-md-6">
          <a class="navbar-brand-custom d-inline-block mb-3" href="index.html" style="color:#fff !important;">Roti'O Indonesia<span style="color:var(--n-primary)">.</span></a>
          <p class="text-white-50 mb-4" style="max-width:320px;">
            Nikmat di setiap gigitan, dari yang pertama hingga yang terakhir.<br>
            Kelezatan hangat, dari gigitan pertama hingga terakhir
          </p>
          <div class="d-flex gap-2">
            <a href="#" class="social-icon"><i class="bi bi-twitter-x"></i></a>
            <a href="#" class="social-icon"><i class="bi bi-linkedin"></i></a>
            <a href="#" class="social-icon"><i class="bi bi-dribbble"></i></a>                                      
            <a href="#" class="social-icon"><i class="bi bi-instagram"></i></a>                         
          </div>
        </div>
        <div class="col-lg-2 col-md-6 col-6">
          <h6>Company</h6>
          <a href="about.html"> Tentang Kami</a>
          <a href="menu.html">Menu</a>
          <a href="news.html">Berita</a>
          <a href="store.html">Lokasi Toko</a>
          <a href="career.html">Karier</a>
          <a href="contact.html">Hubungi Kami </a>
        </div>
        <div class="col-lg-2 col-md-6 col-6">
          <h6>Services</h6>
          <a href="service-details.html">Product Strategy</a>
          <a href="service-details.html">UI/UX Design</a>
          <a href="service-details.html">Web Development</a>
          <a href="service-details.html">Cloud &amp; DevOps</a>
          <a href="service-details.html">Growth Marketing</a> 
        </div>
        <div class="col-lg-4 col-md-6">
          <h6>Ada Keluhan? Ceritakan ke kami</h6>
          <p class="text-white-50 mb-3">Setiap masukan membantu kami jadi lebih baik. Tim kami akan membalas secepatnya ya</p>
          <form class="d-flex gap-2 needs-validation" novalidate>
            <input type="email" class="form-control" placeholder="Kirim masukan" required style="color:#fff;">
            <button class="btn btn-primary flex-shrink-0" type="submit"><i class="bi bi-send"></i></button>
          </form>
        </div>
      </div>
      <div class="footer-bottom d-flex flex-column flex-md-row justify-content-between align-items-center gap-2 text-center text-md-start">
        <p class="mb-0" style="display: flex;">&copy; 2026 Roti'O Indonesia.Hak Cipta Dilindungi </p>
        <div class="d-flex gap-4">
          <a href="#" class="mb-0">Kebijakan Privasi</a>
          <a href="#" class="mb-0">Syarat & Ketentuan</a>
        </div>
      </div>
    </div>
  </footer>

    <button class="back-to-top" aria-label="Back to top">
      <i class="bi bi-arrow-up"></i>
    </button>

    <!-- Bootstrap Bundle JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>
