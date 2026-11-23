<?php
// [label, path route, pola untuk menandai menu aktif]
$menus = [
    ['Home',    '/',       ''],
    ['Tentang', 'tentang', 'tentang*'],
    ['Menu',    'menu',    'menu*'],
    ['Berita',  'berita',  'berita*'],
    ['Toko',    'toko',    'toko*'],
    ['Karir',   'karir',   'karir*'],
    ['Kontak',  'kontak',  'kontak*'],
];
?>
<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-nexora fixed-top">
  <div class="container">
    <img
      src="<?= base_url('assets/img/rotio1.png') ?>"
      alt="Logo Roti'O"
      class="logo-roti-o"
    />
    <span class="navbar-brand navbar-brand-custom">Roti'O</span>
    <button
      class="navbar-toggler navbar-toggler-custom"
      type="button"
      data-bs-toggle="collapse"
      data-bs-target="#mainNav"
      aria-controls="mainNav"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <span class="bar"></span><span class="bar"></span><span class="bar"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNav">
      <ul class="navbar-nav ms-auto align-items-lg-center gap-1 mt-3 mt-lg-0">
        <?php foreach ($menus as [$label, $path, $pattern]): ?>
          <?php $isActive = ($path === '/') ? (uri_string() === '') : url_is($pattern); ?>
          <li class="nav-item">
            <a class="nav-link nav2 <?= $isActive ? 'active' : '' ?>"
               href="<?= base_url($path === '/' ? '' : $path) ?>"><?= $label ?></a>
          </li>
        <?php endforeach; ?>
        <li class="nav-item ms-lg-2 mt-2 mt-lg-0">
          <a href="<?= base_url('kontak') ?>" class="btn btn-primary btn-sm-custom w-100">Get Started</a>
        </li>
      </ul>
    </div>
  </div>
</nav>