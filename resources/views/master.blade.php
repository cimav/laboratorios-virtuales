<!DOCTYPE html>
<html lang="es_MX">
<head>
    <title>Laboratorios Virtuales</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}" />
    <link rel="stylesheet" href="{{ mix('js/app.js') }}" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;200;400;600;800&display=swap" rel="stylesheet" />
</head>
<body class="{{ $body_class }}">
<nav id="navbar" class="bd-navbar navbar is-expanded">
  <div class="navbar-brand">
    <a class="" href="/">
      <img src="{{URL('/img/logo-cimav-rlv.png')}}">
    </a>
  </div>

  <div class="navbar-end">
      <div class="navbar-item">
        <div class="buttons">
          <a class="button is-danger" href="/entrar">
            <strong>Entrar</strong>
          </a>
          <a class="button" href="/solicitar-cuenta">
            Solicitar acceso
          </a>
        </div>
      </div>
    </div>
</nav>

<div class="container is-fullscreen is-transparent">
@yield('content')      
</div>
<script src="https://kit.fontawesome.com/ee5f7d7304.js" crossorigin="anonymous"></script>
</body>
</html>