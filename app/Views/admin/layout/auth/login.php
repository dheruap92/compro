<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta19
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Sign in with illustration</title>
    <!-- CSS files -->
    <link href="<?= base_url() ?>tabler/dist/css/tabler.min.css?1684106062" rel="stylesheet"/>
    <link href="<?= base_url() ?>tabler/dist/css/tabler-flags.min.css?1684106062" rel="stylesheet"/>
    <link href="<?= base_url() ?>tabler/dist/css/tabler-payments.min.css?1684106062" rel="stylesheet"/>
    <link href="<?= base_url() ?>tabler/dist/css/tabler-vendors.min.css?1684106062" rel="stylesheet"/>
    <link href="<?= base_url() ?>tabler/dist/css/demo.min.css?1684106062" rel="stylesheet"/>
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>
  </head>
  <body  class=" d-flex flex-column">
    <script src="<?= base_url() ?>tabler/dist/js/demo-theme.min.js?1684106062"></script>
    <div class="page page-center">
      <div class="container container-normal py-4">
        <div class="row align-items-center g-4">
          <div class="col-lg">
            <div class="container-tight">
              <div class="text-center mb-4">
                <a href="." class="navbar-brand navbar-brand-autodark"><img src="<?= base_url() ?>tabler/static/logo.svg" height="36" alt=""></a>
              </div>
              <div class="card card-md">
                <div class="card-body">
                  <?= view('Myth\Auth\Views\_message_block') ?>
                  <h2 class="h2 text-center mb-4">><?=lang('Auth.loginTitle')?></h2>
                  <form action="<?= url_to('login') ?>" method="post">
                    <?= csrf_field() ?>
                    <?php if ($config->validFields === ['email']): ?>
                    <div class="mb-3">
                      <label class="form-label"><?=lang('Auth.email')?></label>
                      <input type="email"  name="login" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.email')?>" autocomplete="off">
                        <div class="invalid-feedback">
                          <?= session('errors.login') ?>
                        </div>
                    </div>
                    <?php else: ?>
                    <div class="mb-3">
                      <label class="form-label"><?=lang('Auth.emailOrUsername')?></label>
                      <input type="text" name="login" class="form-control <?php if (session('errors.login')) : ?>is-invalid<?php endif ?>" placeholder="<?=lang('Auth.emailOrUsername')?>" autocomplete="off">
                    </div>
                    <?php endif; ?>
                    <div class="mb-2">
                      <label class="form-label"><?=lang('Auth.password')?></label>
                      <div class="input-group input-group-flat">
                        <input type="password" name="password" id="password" class="form-control <?php if (session('errors.password')) : ?>is-invalid<?php endif ?>"  placeholder="Your password"  autocomplete="off">
                        <span class="input-group-text">
                          <a href="javascript:void(0)" onclick="showHidePass()" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" /><path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" /></svg>
                          </a>
                        </span>
                      </div>
                    </div>
                    <?php if ($config->allowRemembering): ?>
                    <div class="mb-2">
                      <label class="form-check">
                        <input type="checkbox" name="remember" class="form-check-input" <?php if (old('remember')) : ?> checked <?php endif ?>/>
                        <span class="form-check-label">Remember me on this device</span>
                      </label>
                    </div>
                    <?php endif ?>
                    <div class="form-footer">
                      <button type="submit" class="btn btn-primary w-100"><?=lang('Auth.loginAction')?></button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="text-center text-muted mt-3">
                Don't have account yet? <a href="<?= url_to('register') ?>" tabindex="-1"><?=lang('Auth.needAnAccount')?></a>
              </div>
            </div>
          </div>
          <div class="col-lg d-none d-lg-block">
            <img src="<?= base_url() ?>tabler/static/illustrations/undraw_secure_login_pdn4.svg" height="300" class="d-block mx-auto" alt="">
          </div>
        </div>
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="<?= base_url() ?>tabler/dist/js/tabler.min.js?1684106062" defer></script>
    <script src="<?= base_url() ?>tabler/dist/js/demo.min.js?1684106062" defer></script>
    <script>
      function showHidePass() {
        var x = document.getElementById("password")
        if (x.type==="password") {
          x.type = "text"
        } else {
          x.type = "password"
        }
      }
    </script>
  </body>
</html>