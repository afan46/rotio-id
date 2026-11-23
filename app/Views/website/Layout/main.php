<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $this->renderSection('title') ?></title>
    <meta
      name="description"
      content="Roti'O Indonesia - roti hangat dengan topping cream coffee dan butter, pastry, dan minuman favorit."
    />
    <meta property="og:title" content="Roti'O Indonesia" />
    <meta
      property="og:description"
      content="Nikmat di setiap gigitan, dari yang pertama hingga yang terakhir."
    />
    <meta property="og:type" content="website" />
    <link
      rel="icon"
      type="image/png"
      href="<?= base_url('assets/img/rotio1.png') ?>"
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
    <link href="<?= base_url('css/custom.css') ?>" rel="stylesheet" />
  </head>
  <body>

    <?= $this->include('website/layout/navbar') ?>

    <?= $this->renderSection('content') ?>

    <?= $this->include('website/layout/footer') ?>

    <button class="back-to-top" aria-label="Back to top">
      <i class="bi bi-arrow-up"></i>
    </button>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url('js/main.js') ?>"></script>
  </body>
</html>