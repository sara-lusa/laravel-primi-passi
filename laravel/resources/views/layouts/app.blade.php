<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
  </head>
  <body>

    <header>
      {{-- <div class="logo">
        <img src="{{url('img/logo.png')}}" alt="Logo">
      </div> --}}

      {{-- <nav>
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
      </nav> --}}

      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="logo-bool">
          <img src="{{url('img/logo.png')}}" alt="Logo">
        </div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="{{route('home')}}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('privacy')}}">Privacy</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{route('faq')}}">FAQ</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <main>
      @yield('main')
    </main>

    <footer>
      <div class="ms-up-footer container-fluid">
        <div class="row">
          <div class="ms-contacts col">
            <img src="{{url('img/logo-white.png')}}" alt="Logo">
            <span>Sede operativa</span><br>
            <span>Via Carducci 12 - 20123 Milano</span><br>
            <span>Tel: 02-40031288</span>
          </div>

          <div class="ms-footer-menu col">
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
      </div>

      <hr>

      <div class="down-footer">
        <div class="social-menu"></div>

        <div class="info"></div>
      </div>
    </footer>

    <script type="text/javascript" src="{{asset('js/app.js')}}">

    </script>

  </body>
</html>
