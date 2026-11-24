<?= $this->extend('website/layout/main') ?>

<?= $this->section('title') ?>Hai Roti'O Lovers<?= $this->endSection() ?>

<?= $this->section('content') ?>

<!-- HERO -->
<header class="hero">
  <div id="carouselExampleControls" class="carousel slide hero-carousel" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?= base_url('assets/img/rotio.jpg') ?>" class="d-block w-100" alt="Roti'O Coffee" />
      </div>
      <div class="carousel-item">
        <img src="<?= base_url('assets/img/pastry.jpg') ?>" class="d-block w-100" alt="Pastry" />
      </div>
      <div class="carousel-item">
        <img src="<?= base_url('assets/img/minuman.jpg') ?>" class="d-block w-100" alt="Minuman" />
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
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
        <div id="promoCarousel" class="carousel slide promo-carousel" data-bs-ride="carousel">
          <div class="carousel-inner">
            <?php for ($i = 1; $i <= 6; $i++): ?>
              <div class="carousel-item <?= $i === 1 ? 'active' : '' ?>">
                <img src="<?= base_url("assets/img/promo{$i}.png") ?>" class="rounded-img w-100" alt="Promo Belanja <?= $i ?>" />
              </div>
            <?php endfor; ?>
          </div>
        </div>
      </div>

      <!-- Kolom deskripsi -->
      <div class="col-md-5 reveal">
        <h3 class="section-title">Promo yang Sedang Berlangsung</h3>
        <p class="section-subtitle mb-4">
          Berbagai penawaran spesial hadir untuk membuat pengalaman belanja Anda semakin menyenangkan
        </p>
        <ul class="list-check mb-4">
          <li>
            <i class="bi bi-check"></i>
            <div><strong class="text-navy">Halal</strong> — Bersertifikat Halal Indonesia.</div>
          </li>
          <li>
            <i class="bi bi-check"></i>
            <div><strong class="text-navy">Price</strong> — Harga mengikuti masing-masing outlet.</div>
          </li>
          <li>
            <i class="bi bi-check"></i>
            <div><strong class="text-navy">Applicable</strong> — Berlaku di semua outlet kecuali Bandara &amp; Rest Area.</div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- STATS STRIP -->
<!-- TODO: angka dan label masih bawaan template, ganti dengan data Roti'O -->
<section class="stats-strip py-5 bg-white">
  <div class="container">
    <div class="row text-center g-4">
      <div class="col-6 col-md-3 stat-item reveal">
        <div class="stat-number">900+</div>
        <div class="stat-label">Outlet di Seluruh Indonesia</div>
      </div>
      <div class="col-6 col-md-3 stat-item reveal">
        <div class="stat-number">14 years</div>
        <div class="stat-label">Menemani Pelanggan</div>
      </div>
      <div class="col-6 col-md-3 stat-item reveal">
        <div class="stat-number">100%</div>
        <div class="stat-label">Halal & Freshly Baked</div>
      </div>
      <div class="col-6 col-md-3 stat-item reveal">
        <div class="stat-number">100+</div>
        <div class="stat-label">Kota & Kabupaten Terjangkau</div>
      </div>
    </div>
  </div>
</section>

<!-- MENU OVERVIEW -->
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
        <a href="<?= base_url('menu') ?>" class="card-link-arrow">Lihat semua menu <i class="bi bi-arrow-right"></i></a>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-4 reveal" data-category="design">
        <a href="<?= base_url('menu') ?>" class="portfolio-card d-block">
          <img src="<?= base_url('assets/img/rotio.jpg') ?>" alt="rotio" />
          <div class="portfolio-overlay">
            <h5>Roti'O</h5>
            <span>Roti’O menyediakan Roti dengan topping cream coffee dan butter di dalamnya</span>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-lg-4 reveal" data-category="design">
        <a href="<?= base_url('menu') ?>" class="portfolio-card d-block">
          <img src="<?= base_url('assets/img/pastry.jpg') ?>" alt="pastry" />
          <div class="portfolio-overlay">
            <h5>Pastry</h5>
            <span>Nikmati varian menu Pastry-nya Roti'O yang manis dan gurih</span>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-lg-4 reveal" data-category="design">
        <a href="<?= base_url('menu') ?>" class="portfolio-card d-block">
          <img src="<?= base_url('assets/img/minuman.jpg') ?>" alt="minuman" />
          <div class="portfolio-overlay">
            <h5>Coffee</h5>
            <span>Nikmati varian menu Minuman-nya Roti'O yang lezat dan menyegarkan</span>
          </div>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- KEGIATAN KAMI -->
<section class="section">
  <div class="container">
    <div class="row section-header justify-content-center text-center">
      <div class="col-lg-7 reveal">
        <h2 class="section-title">Wujud Nyata Kepedulian untuk Sesama</h2>
        <span>Kami percaya bahwa setiap langkah kecil penuh kepedulian mampu memberikan dampak besar.
          Kegiatan ini diselenggarakan sebagai wadah untuk menyebarkan kebaikan dan mempererat tali persaudaraan</span>
      </div>
    </div>
    <div class="row g-4">
      <div class="col-md-6 col-lg-4 reveal">
        <a href="<?= base_url('berita') ?>" class="portfolio-card portfolio-portrait d-block">
          <img src="<?= base_url('assets/img/sekolah.png') ?>" alt="Kegiatan Roti'O Berbagi dengan Anak Bangsa" />
          <div class="portfolio-overlay">
            <h6>Roti'O Berbagi dengan Anak Bangsa</h6>
            <span>Spesial dalam rangka Hari Anak,
              Roti’O hadir menyebar kebahagiaan dengan membagikan roti gratis untuk anak-anak sekolah!</span>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-lg-4 reveal">
        <a href="<?= base_url('berita') ?>" class="portfolio-card portfolio-portrait d-block">
          <img src="<?= base_url('assets/img/hospital.png') ?>" alt="Apresiasi Roti'O untuk Garda Terdepan Kesehatan" />
          <div class="portfolio-overlay">
            <h6>Apresiasi Roti'O untuk Garda Terdepan Kesehatan</h6>
            <span>Dalam rangka memperingati Hari Dokter Nasional,
              Roti’O menyelenggarakan aksi kepedulian sosial berupa pembagian roti gratis kepada para dokter dan tenaga kesehatan di RS PMI Bogor</span>
          </div>
        </a>
      </div>
      <div class="col-md-6 col-lg-4 reveal">
        <a href="<?= base_url('berita') ?>" class="portfolio-card portfolio-portrait d-block">
          <img src="<?= base_url('assets/img/dude.png') ?>" alt="Pengalaman Belanja Eksklusif Bersama Dude Harlino di Roti'O" />
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
    <div class="instagram-grid">
      <div class="instagram-post" data-ig-url="https://www.instagram.com/p/DfLZPxUkoa3/"></div>
      <div class="instagram-post" data-ig-url="https://www.instagram.com/p/Dcxsb_nSu4s/"></div>
      <div class="instagram-post" data-ig-url="https://www.instagram.com/p/DgHTlmQyGsE/"></div>
    </div>
  </div>
</section>

<!-- CTA -->
<!-- TODO: teks CTA masih bawaan template -->
<section class="section">
  <div class="container">
    <div class="cta-section reveal">
      <div class="row align-items-center">
        <div class="col-lg-8">
          <h2 class="mb-2">Ready to build something great?</h2>
          <p class="mb-0 fs-5">Book a free 30-minute strategy call — no pressure, no sales script.</p>
        </div>
        <div class="col-lg-4 text-lg-end mt-4 mt-lg-0">
          <a href="<?= base_url('kontak') ?>" class="btn btn-primary btn-lg-custom">Book a Call <i class="bi bi-arrow-right ms-1"></i></a>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection() ?>