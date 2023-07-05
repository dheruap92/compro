<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title><?= $title??"Default Page" ?></title>
    <!-- CSS files -->
    <link href="<?= base_url('tabler/dist/css/tabler.min.css?1684106062') ?>" rel="stylesheet"/>
    <link href="<?= base_url('tabler/dist/css/tabler-flags.min.css?1684106062') ?>" rel="stylesheet"/>
    <link href="<?= base_url('tabler/dist/css/tabler-payments.min.css?1684106062') ?>" rel="stylesheet"/>
    <link href="<?= base_url('tabler/dist/css/tabler-vendors.min.css?1684106062') ?>" rel="stylesheet"/>
    <link href="<?= base_url('tabler/dist/css/demo.min.css?1684106062') ?>" rel="stylesheet"/>
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
      <?= $this->renderSection("css") ?>
    </style>
  </head>
  <body >
    <script src="<?= base_url() ?>tabler/dist/js/demo-theme.min.js?1684106062"></script>
    <div class="page">
      <!-- Sidebar -->
      <?= $this->include('admin/layout/sidebar') ?>
      <!-- Navbar -->
      <?= $this->include('admin/layout/navbar') ?>
      <div class="page-wrapper">
        <?= $this->renderSection("content") ?>
        <?= $this->include("admin/layout/footer") ?>
      </div>
    </div>
    <!-- Libs JS -->
    <script src="<?= base_url() ?>tabler/dist/libs/apexcharts/dist/apexcharts.min.js?1684106062" defer></script>
    <script src="<?= base_url() ?>tabler/dist/libs/jsvectormap/dist/js/jsvectormap.min.js?1684106062" defer></script>
    <script src="<?= base_url() ?>tabler/dist/libs/jsvectormap/dist/maps/world.js?1684106062" defer></script>
    <script src="<?= base_url() ?>tabler/dist/libs/jsvectormap/dist/maps/world-merc.js?1684106062" defer></script>
    <!-- Tabler Core -->
    <script src="<?= base_url() ?>tabler/dist/js/tabler.min.js?1684106062" defer></script>
    <script src="<?= base_url() ?>tabler/dist/js/demo.min.js?1684106062" defer></script>
      <?= $this->renderSection("js") ?>
  </body>
</html>