
<!doctype html>
<!--
* Tabler - Premium and Open Source dashboard template with responsive and high quality UI.
* @version 1.0.0-beta17
* @link https://tabler.io
* Copyright 2018-2023 The Tabler Authors
* Copyright 2018-2023 codecalm.net Paweł Kuna
* Licensed under MIT (https://github.com/tabler/tabler/blob/master/LICENSE)
-->
<html lang="fr">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Iconedev</title>
    <link rel="icon" type="image/x-icon" href="/assets/custom/images/favicon.png">
    <!-- CSS files -->
    <link href="/backend_file/dist/css/tabler.min.css?1674944402" rel="stylesheet"/>
    <link href="/backend_file/dist/css/tabler-flags.min.css?1674944402" rel="stylesheet"/>
    <link href="/backend_file/dist/css/tabler-payments.min.css?1674944402" rel="stylesheet"/>
    <link href="/backend_file/dist/css/tabler-vendors.min.css?1674944402" rel="stylesheet"/>
    <link href="/backend_file/dist/css/demo.min.css?1674944402" rel="stylesheet"/>
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
  <body  class=" d-flex flex-column bg-white">
    <script src="/backend_file/dist/js/demo-theme.min.js?1674944402"></script>
    @include('notification')
    <div class="row g-0 flex-fill">
      <div class="col-12 col-lg-6 col-xl-4 border-top-wide border-primary d-flex flex-column justify-content-center">
        <div class="container container-tight my-5 px-lg-5">
          <div class="text-center mb-4">
            <a href="." class="navbar-brand navbar-brand-autodark"><img src="/backend_file/static/logo.svg" height="36" alt=""></a>
          </div>
          <h2 class="h3 text-center mb-3">
            Connectez-vous à votre compte
          </h2>
          <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="mb-3">
              <label class="form-label">Adresse e-mail</label>
              <input type="email" name="email" required class="form-control" placeholder="votre adresse e-mail" autocomplete="off">
            </div>
            <div class="mb-2">
              <label class="form-label">
                Mot de passe
                <span class="form-label-description">
                  <a href="./forgot-password.html">J'ai oublié mon mot de passe</a>
                </span>
              </label>
              <div class="input-group input-group-flat">
                <input type="password" name="password" class="form-control" required  placeholder="Votre mot de passe"  autocomplete="off">
                <span class="input-group-text">
                  <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"><!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M12 12m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" /><path d="M22 12c-2.667 4.667 -6 7 -10 7s-7.333 -2.333 -10 -7c2.667 -4.667 6 -7 10 -7s7.333 2.333 10 7" /></svg>
                  </a>
                </span>
              </div>
            </div>
            <div class="mb-2">
              <label class="form-check">
                <input type="checkbox" name="remember" class="form-check-input"/>
                <span class="form-check-label">Se souvenir de moi sur cet appareil</span>
              </label>
            </div>
            <div class="form-footer">
              <button type="submit" class="btn btn-primary w-100">Se connecter</button>
            </div>
          </form>
          <div class="text-center text-muted mt-3">
            Vous n'avez pas encore de compte ? <a href="{{ route('accueil') }}" tabindex="-1">Retourner à la page d'accueil</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 col-xl-8 d-none d-lg-block">
        <!-- Photo -->
        <div class="bg-cover h-100 min-vh-100" style="background-image: url('backend_file/static/photos/finances-us-dollars-and-bitcoins-currency-money-2.jpg')"></div>
      </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="/backend_file/dist/js/tabler.min.js?1674944402" defer></script>
    <script src="/backend_file/dist/js/demo.min.js?1674944402" defer></script>
  </body>
</html>