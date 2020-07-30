<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>

    <header>
      <div class="logo">
        <img src="{{url('img/logo.png')}}" alt="Logo">
      </div>

      <nav>
        <ul>
          <li>
            <a href="{{route('home')}}">Home</a>
          </li>
          <li>
            <a href="{{route('privacy')}}">Privacy</a>
          </li>
          <li>
            <a href="{{route('faq')}}">FAQ</a>
          </li>
        </ul>
      </nav>
    </header>

    <main>
      @yield('main')
    </main>

    <footer>
      <div class="up-footer">
        <div class="contatti">
          <img src="{{url('img/logo.png')}}" alt="Logo">
          <span>Sede operativa</span><br>
          <span>Via Carducci 12 - 20123 Milano</span><br>
          <span>Tel: 02-40031288</span>
        </div>

        <div class="footer-menu">
          <ul>
            <li>
              <a href="{{route('privacy')}}">Privacy</a>
            </li>
            <li>
              <a href="{{route('faq')}}">FAQs</a>
            </li>
          </ul>
        </div>
      </div>

      <hr>

      <div class="down-footer">
        <div class="social-menu"></div>

        <div class="info"></div>
      </div>
    </footer>

  </body>
</html>
